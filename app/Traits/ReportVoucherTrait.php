<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Shared report endpoints used by the accounting "styled table" reports
 * (Neraca Lajur, Trial Balance, Buku Besar, â€¦): the drill-down ledger and the
 * bottom voucher panels (Bukti Kas/Bank, Invoice, Faktur Pembelian), plus the
 * legacy filter/division helpers.
 *
 * Each report controller pulls these in with `use ReportVoucherTrait;` so the
 * identical bodies live in one place. `doReport` stays per-controller because
 * each report calls a different stored procedure. Routes are unchanged â€” they
 * resolve to these methods on whichever controller `use`s the trait.
 */
trait ReportVoucherTrait {

  /**
   * Per-account ledger detail for the styled table's drill-down panel, from
   * Sp_ReportBukuTambahan for the report month, scoped to one account.
   *   - date1/date2 are the first/last day of the period month.
   *   - awal/akhir bound the account-code range; one account = same code twice
   *     (the proc also returns rows where the account is the contra/lawan entry,
   *     so a post-filter on Perkiraan would wrongly drop those).
   *   - '-' (or empty) division means "all"; the proc filters with LIKE, so
   *     translate that to the '%' wildcard.
   */
  public function doLedger(Request $req) {
    $tahun  = (int) $req->inputTahun;
    $bulan  = (int) $req->inputBulan;
    $date1  = sprintf('%04d-%02d-01', $tahun, $bulan);
    $date2  = date('Y-m-t', strtotime($date1));
    $perkiraan = trim($req->perkiraan);
    $divisi = ($req->divisi === null || $req->divisi === '' || $req->divisi === '-') ? '%' : $req->divisi;

    $rows = DB::connection('MGL')->select("exec Sp_ReportBukuTambahan :awal, :akhir, :date1, :date2, :divisi, 'sa', 'y', 0",
      ['awal' => $perkiraan, 'akhir' => $perkiraan, 'date1' => $date1, 'date2' => $date2, 'divisi' => $divisi]);

    // The proc emits a synthetic 'SALDO AWAL' opening row; the drill panel builds
    // its own opening-balance row, so drop it to avoid duplication.
    return array_values(array_filter($rows, function ($r) {
      return !(isset($r->Nobukti) && trim($r->Nobukti) === 'SALDO AWAL');
    }));
  }

  /**
   * Bukti Kas/Bank/Memorial/Jurnal voucher detail for the bottom panel (clicked
   * from a ledger row). All B* Jenis (BBK/BBM/BKK/BKM/BMM/BJK) share this proc;
   * only the voucher title differs (set on the client per Jenis). SET NOCOUNT ON
   * so the print proc's internal counts don't become the first PDO result set.
   */
  public function doKasharian(Request $req) {
    $res = DB::connection('MGL')->select("SET NOCOUNT ON; EXEC dbo.CetakKasharian :nobukti",
      ['nobukti' => trim($req->nobukti)]);
    return $res;
  }

  /**
   * Sales-invoice voucher detail, used when the clicked row's Jenis is INVC
   * (different proc + layout from the B* vouchers).
   */
  public function doInvoice(Request $req) {
    $res = DB::connection('MGL')->select("SET NOCOUNT ON; EXEC dbo.CetakInvoicePenjualan :nobukti",
      ['nobukti' => trim($req->nobukti)]);
    return $res;
  }

  /**
   * Faktur Pembelian (purchase receipt) voucher detail, used when the clicked
   * row's Jenis is BPL.
   */
  public function doLpb(Request $req) {
    $res = DB::connection('MGL')->select("SET NOCOUNT ON; EXEC dbo.CetakPenerimaanACC :nobukti",
      ['nobukti' => trim($req->nobukti)]);
    return $res;
  }

  public function doFilter(Request $req) {
    $kolom = ($req->get('inputOrd') == "N") ? 'nobukti, Tanggal' : 'KODEBRG, NAMABRG';
    $listData = DB::connection('MGL')->select('select ' . $kolom . ' from VwreporttransferPR where tanggal between :tgl1 and :tgl2 group by ' . $kolom , ['tgl1' => $req->date1, 'tgl2' => $req->date2]);
    return $listData;
  }

  public function doReportFilter(Request $req) {
    $kolom = ($req->get('inputOrd') == "N") ? 'nobukti' : 'KODEBRG';
    $res = [];

    for ($i=0; $i < count($req->listdata); $i++) {
      $row = DB::connection('MGL')->select('select * from VwreporttransferPR where ' . $kolom . ' = :list' , ['list' => $req->listdata[$i]]);

      for ($j=0; $j < count($row); $j++) {
        $res = array_add($res, $i+$j, $row[$j]);
      }
    }

    return $res;
  }

  public function loadDivisi () {
    $listData = DB::connection('SML')->select('select Devisi, NamaDevisi from DBDEVISI');
    return $listData;
  }
}
