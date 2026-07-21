<?php

namespace App\Http\Controllers\Berkas;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\NewMenu;
use App\Models\NewAksesMenu;
use App\Models\NewPeriode;
use App\Models\NewUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

// use App\Http\Controllers\NewMenuController;

class SetNomorTransaksiController extends Controller
{

  public function index(Request $req) {

    // $user = DB::connection("SML")->select('select * from DBGUDANG where KODEGDG <> :id', ['id' => 'GTC']);
    $users = DB::connection("SML")->select('select * from DBFLPASS');

    $periode = NewPeriode::where('user_id' , \Auth::User()->username)->first();

    $menul0 = app('App\Http\Controllers\NewMenuController')->getMenuL0(1);

    return view('berkas.setnomortransaksi' , [
      "menul0" => $menul0,
      "periode" => $periode,
      "users"=> $users
    ]);

  }

  public function loadAll () {
    $users = DB::connection("SML")->select('select * from DBFLPASS');
    return $users;

  }

  public function spDetail (Request $req) {
    $detail = DB::connection('SML')->select("SELECT
    KODEUSAHA,
    NAMA,
    ALAMAT1,
    ALAMAT2,
    KOTA,
    Telpon,
    Fax,
    NAMAPKP,
    ALAMATPKP1,
    ALAMATPKP2,
    KOTAPKP,
    NPWP,
    TGLPENGUKUHAN,
    NAMAPKP1,
    ALAMATPKP21,
    ALAMATPKP22,
    KOTAPKP1,
    NPWP1,
    TGLPENGUKUHAN1,
    Direksi,
    Jabatan,
    email,
    L_Update
        FROM DBPERUSAHAAN");
    return $detail;
  }

    public function submitEdit(Request $req) {
    DB::connection('SML')->update(
        "UPDATE DBPERUSAHAAN SET
            NAMA = :nama,
            ALAMAT1 = :alamat1,
            ALAMAT2 = :alamat2,
            KOTA = :kota,
            Telpon = :telpon,
            Fax = :fax,
            email = :email,
            NAMAPKP = :namapkp,
            ALAMATPKP1 = :alamatpkp1,
            ALAMATPKP2 = :alamatpkp2,
            KOTAPKP = :kotapkp,
            NPWP = :npwp,
            TGLPENGUKUHAN = :tglpengukuhan,
            NAMAPKP1 = :namapkp1,
            ALAMATPKP21 = :alamatpkp21,
            ALAMATPKP22 = :alamatpkp22,
            KOTAPKP1 = :kotapkp1,
            NPWP1 = :npwp1,
            TGLPENGUKUHAN1 = :tglpengukuhan1,
            Direksi = :direksi,
            Jabatan = :jabatan,
            L_Update = GETDATE()
        ",
        [
            "nama"           => $req->nama,
            "alamat1"        => $req->alamat1,
            "alamat2"        => $req->alamat2,
            "kota"           => $req->kota,
            "telpon"         => $req->telpon,
            "fax"            => $req->fax,
            "email"          => $req->email,
            "namapkp"        => $req->namapkp,
            "alamatpkp1"     => $req->alamatpkp1,
            "alamatpkp2"     => $req->alamatpkp2,
            "kotapkp"        => $req->kotapkp,
            "npwp"           => $req->npwp,
            "tglpengukuhan"  => $req->tglpengukuhan,
            "namapkp1"       => $req->namapkp1,
            "alamatpkp21"    => $req->alamatpkp21,
            "alamatpkp22"    => $req->alamatpkp22,
            "kotapkp1"       => $req->kotapkp1,
            "npwp1"          => $req->npwp1,
            "tglpengukuhan1" => $req->tglpengukuhan1,
            "direksi"        => $req->direksi,
            "jabatan"        => $req->jabatan,
        ]
    );

    return 1;
    }

}
