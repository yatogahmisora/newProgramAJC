<?php

Route::namespace('Report')->group(function () {

// REPORT
Route::get('/reportTes', 'ReportTesController@index')->middleware('auth');
Route::get('/reportTesTable', 'ReportTesController@spReport')->middleware('auth');
Route::get('/takeDataFormCustomize', 'ReportTesController@takeDataFormCustomizeTable')->middleware('auth');

// ========== GLOBAL FUNCTIONS ========== //
Route::get('/globalfunctions_doLoadHeader', 'GlobalFunctionsController@doLoadHeader');
Route::get('/globalfunctions_doSimpanHeader', 'GlobalFunctionsController@doSimpanHeader');

// BERKAS
Route::get('/functionglobal_doUpdateDBMENUREPORT', 'FunctionGlobalController@doUpdateDBMENUREPORT');

// REPORT
Route::get('/functionglobal_doLoadHeader', 'FunctionGlobalController@doLoadHeader');
Route::get('/functionglobal_doSimpanHeader', 'FunctionGlobalController@doSimpanHeader');

// BROWSE MASTER
Route::get('/functionbrowse_doBrowseGudang', 'FunctionBrowseController@doBrowseGudang');
Route::get('/functionbrowse_doBrowseHdGroup', 'FunctionBrowseController@doBrowseHdGroup');
Route::get('/functionbrowse_doBrowseSubGroup', 'FunctionBrowseController@doBrowseSubGroup');
Route::get('/functionbrowse_doBrowseSubGroupJnsTambah', 'FunctionBrowseController@doBrowseSubGroupJnsTambah');
Route::get('/functionbrowse_doBrowseMerk', 'FunctionBrowseController@doBrowseMerk');
Route::get('/functionbrowse_doBrowseBarang', 'FunctionBrowseController@doBrowseBarang');

// LOAD MASTER
Route::get('/functionbrowse_doLoadGudang', 'FunctionBrowseController@doLoadGudang');
Route::get('/functionbrowse_doLoadBarang', 'FunctionBrowseController@doLoadBarang');
Route::get('/functionbrowse_doLoadMLokasi', 'FunctionBrowseController@doLoadMLokasi');


// =========================    PENGADAAN    ============================ //

// CLOSING PR
Route::get('/laporanpengadaanclosingpr', 'LaporanPengadaanClosingPRController@index');
Route::get('/laporanpengadaanclosingpr_doReport', 'LaporanPengadaanClosingPRController@doReport');
Route::get('/laporanpengadaanclosingpr_doFilter', 'LaporanPengadaanClosingPRController@doFilter');
Route::get('/laporanpengadaanclosingpr_doReportFilter', 'LaporanPengadaanClosingPRController@doReportFilter');

// ========== GLOBAL FUNCTIONS ========== //
Route::get('/globalfunctions_doLoadHeader', 'GlobalFunctionsController@doLoadHeader');
Route::get('/globalfunctions_doSimpanHeader', 'GlobalFunctionsController@doSimpanHeader');

// PR
Route::get('/laporanpengadaanpr', 'LaporanPengadaanPRController@index');
Route::get('/laporanpengadaanpr_doReport', 'LaporanPengadaanPRController@doReport');
Route::get('/laporanpengadaanpr_doFilter', 'LaporanPengadaanPRController@doFilter');
Route::get('/laporanpengadaanpr_doReportFilter', 'LaporanPengadaanPRController@doReportFilter');

// Purchase Order OSP
Route::get('/laporanpurchaseorderosp', 'LaporanPurchaseOrderOSPController@index');
Route::get('/laporanpurchaseorderosp_doReport', 'LaporanPurchaseOrderOSPController@doReport');
Route::get('/laporanpurchaseorderosp_doFilter', 'LaporanPurchaseOrderOSPController@doFilter');
Route::get('/laporanpurchaseorderosp_doReportFilter', 'LaporanPurchaseOrderOSPController@doReportFilter');

// Purchase Order PO
Route::get('/laporanpurchaseorderpo', 'LaporanPurchaseOrderPOController@index');
Route::get('/laporanpurchaseorderpo_doReport', 'LaporanPurchaseOrderPOController@doReport');
Route::get('/laporanpurchaseorderpo_doFilter', 'LaporanPurchaseOrderPOController@doFilter');
Route::get('/laporanpurchaseorderpo_doReportFilter', 'LaporanPurchaseOrderPOController@doReportFilter');

// Purchase Order Close PO
Route::get('/laporanpurchaseorderclosepo', 'LaporanPurchaseOrderClosePOController@index');
Route::get('/laporanpurchaseorderclosepo_doReport', 'LaporanPurchaseOrderClosePOController@doReport');
Route::get('/laporanpurchaseorderclosepo_doFilter', 'LaporanPurchaseOrderClosePOController@doFilter');
Route::get('/laporanpurchaseorderclosepo_doReportFilter', 'LaporanPurchaseOrderClosePOController@doReportFilter');

// Penerimaan Gudang Out Standing PO
Route::get('/laporanpenerimaangudangospo', 'LaporanPenerimaanGudangOSPOController@index');
Route::get('/laporanpenerimaangudangospo_doReport', 'LaporanPenerimaanGudangOSPOController@doReport');
Route::get('/laporanpenerimaangudangospo_doFilter', 'LaporanPenerimaanGudangOSPOController@doFilter');
Route::get('/laporanpenerimaangudangospo_doReportFilter', 'LaporanPenerimaanGudangOSPOController@doReportFilter');

// Penerimaan Gudang 
Route::get('/laporanpenerimaangudang', 'LaporanPenerimaanGudangController@index');
Route::get('/laporanpenerimaangudang_doReport', 'LaporanPenerimaanGudangController@doReport');
Route::get('/laporanpenerimaangudang_doFilter', 'LaporanPenerimaanGudangController@doFilter');
Route::get('/laporanpenerimaangudang_doReportFilter', 'LaporanPenerimaanGudangController@doReportFilter');

// Register Pembelian
Route::get('/laporanregisterpembelian', 'LaporanRegisterPembelianController@index');
Route::get('/laporanregisterpembelian_doReport', 'LaporanRegisterPembelianController@doReport');
Route::get('/laporanregisterpembelian_doFilter', 'LaporanRegisterPembelianController@doFilter');
Route::get('/laporanregisterpembelian_doReportFilter', 'LaporanRegisterPembelianController@doReportFilter');

// Retur Pembelian ACC
Route::get('/laporanreturpembelianacc', 'LaporanReturPembelianACCController@index');
Route::get('/laporanreturpembelianacc_doReport', 'LaporanReturPembelianACCController@doReport');
Route::get('/laporanreturpembelianacc_doFilter', 'LaporanReturPembelianACCController@doFilter');
Route::get('/laporanreturpembelianacc_doReportFilter', 'LaporanReturPembelianACCController@doReportFilter');

// Retur Pembelian GDG
Route::get('/laporanreturpembeliangdg', 'LaporanReturPembelianGDGController@index');
Route::get('/laporanreturpembeliangdg_doReport', 'LaporanReturPembelianGDGController@doReport');
Route::get('/laporanreturpembeliangdg_doFilter', 'LaporanReturPembelianGDGController@doFilter');
Route::get('/laporanreturpembeliangdg_doReportFilter', 'LaporanReturPembelianGDGController@doReportFilter');

// Oustanding UM BELI
Route::get('/laporanpengadaanoutstandingumbeli', 'LaporanPengadaanOutStandingUMBeliController@index');
Route::get('/laporanpengadaanoutstandingumbeli_doReport', 'LaporanPengadaanOutStandingUMBeliController@doReport');
Route::get('/laporanpengadaanoutstandingumbeli_doFilter', 'LaporanPengadaanOutStandingUMBeliController@doFilter');
Route::get('/laporanpengadaanoutstandingumbeli_doReportFilter', 'LaporanPengadaanOutStandingUMBeliController@doReportFilter');

// Oustanding UM BELI 2
Route::get('/laporanpengadaanoutstandingum2', 'LaporanPengadaanOutStandingUM2Controller@index');
Route::get('/laporanpengadaanoutstandingum2_doReport', 'LaporanPengadaanOutStandingUM2Controller@doReport');
Route::get('/laporanpengadaanoutstandingum2_doFilter', 'LaporanPengadaanOutStandingUM2Controller@doFilter');
Route::get('/laporanpengadaanoutstandingum2_doReportFilter', 'LaporanPengadaanOutStandingUM2Controller@doReportFilter');

// HIS PO
Route::get('/laporanhispo', 'LaporanHisPoController@index');
Route::get('/laporanhispo_loadcustomer', 'LaporanHisPoController@loadCustomer');
Route::get('/laporanhispo_loadlokasi', 'LaporanHisPoController@loadLokasi');
Route::get('/laporanhispo_doReport', 'LaporanHisPoController@doReport');
Route::get('/laporanhispo_doFilter', 'LaporanHisPoController@doFilter');
Route::get('/laporanhispo_doReportFilter', 'LaporanHisPoController@doReportFilter');

// Invoice Pembelian
Route::get('/laporanpengadaaninvoicepembelian', 'LaporanPengadaanInvoicePembelianController@index');
Route::get('/laporanpengadaaninvoicepembelian_doReport', 'LaporanPengadaanInvoicePembelianController@doReport');
Route::get('/laporanpengadaaninvoicepembelian_doFilter', 'LaporanPengadaanInvoicePembelianController@doFilter');
Route::get('/laporanpengadaaninvoicepembelian_doReportFilter', 'LaporanPengadaanInvoicePembelianController@doReportFilter');

// Debet Note
Route::get('/laporanpengadaandebetnote', 'LaporanPengadaanDebetNoteController@index');
Route::get('/laporanpengadaandebetnote_doReport', 'LaporanPengadaanDebetNoteController@doReport');
Route::get('/laporanpengadaandebetnote_doFilter', 'LaporanPengadaanDebetNoteController@doFilter');
Route::get('/laporanpengadaandebetnote_doReportFilter', 'LaporanPengadaanDebetNoteController@doReportFilter');

// Rekap Invoice Pembelian
Route::get('/laporanpengadaanrekapinvoicepembelian', 'LaporanPengadaanRekapInvoicePembelianController@index');
Route::get('/laporanpengadaanrekapinvoicepembelian_doReport', 'LaporanPengadaanRekapInvoicePembelianController@doReport');
Route::get('/laporanpengadaanrekapinvoicepembelian_doFilter', 'LaporanPengadaanRekapInvoicePembelianController@doFilter');
Route::get('/laporanpengadaanrekapinvoicepembelian_doReportFilter', 'LaporanPengadaanRekapInvoicePembelianController@doReportFilter');

// Register Rekap Oustanding Invoice
Route::get('/laporanpengadaanregisteroutstandinginvoice', 'LaporanPengadaanRegisterRekapOSInvoiceController@index');
Route::get('/laporanpengadaanregisteroutstandinginvoice_doReport', 'LaporanPengadaanRegisterRekapOSInvoiceController@doReport');
Route::get('/laporanpengadaanregisteroutstandinginvoice_doFilter', 'LaporanPengadaanRegisterRekapOSInvoiceController@doFilter');
Route::get('/laporanpengadaanregisteroutstandinginvoice_doReportFilter', 'LaporanPengadaanRegisterRekapOSInvoiceController@doReportFilter');

// ======================= MARKETING =================== //

//LAPORAN SO LAPORAN SO
Route::get('/laporanmarketingso', 'LaporanMarketingSOController@index');
Route::get('/laporanmarketingso_doReport', 'LaporanMarketingSOController@doReport');
Route::get('/laporanmarketingso_doFilter', 'LaporanMarketingSOController@doFilter');
Route::get('/laporanmarketingso_doReportFilter', 'LaporanMarketingSOController@doReportFilter');
Route::get('/laporanmarketingso_loadcustomer', 'LaporanMarketingSOController@loadCustomer');
Route::get('/laporanmarketingso_loadgroup', 'LaporanMarketingSOController@loadGroup');
Route::get('/laporanmarketingso_loadpic', 'LaporanMarketingSOController@loadPIC');
Route::get('/laporanmarketingso_loadkategori', 'LaporanMarketingSOController@loadKategori');
Route::get('/laporanmarketingso_loadsubkategori', 'LaporanMarketingSOController@loadSubKategori');
Route::get('/laporanmarketingso_loadmerk', 'LaporanMarketingSOController@loadMerk');

// LAPORAN HISTORY SO
// SP_REPORTHISSO
Route::get('/laporanmarketinghistoryso', 'LaporanMarketingHistorySOController@index');
Route::get('/laporanmarketinghistoryso_doReport', 'LaporanMarketingHistorySOController@doReport');
Route::get('/laporanmarketinghistoryso_doFilter', 'LaporanMarketingHistorySOController@doFilter');
Route::get('/laporanmarketinghistoryso_doReportFilter', 'LaporanMarketingHistorySOController@doReportFilter');
Route::get('/laporanmarketinghistoryso_loadlokasi', 'LaporanMarketingHistorySOController@loadLokasi');
Route::get('/laporanmarketinghistoryso_loadcustsupp', 'LaporanMarketingHistorySOController@loadCustSupp');

//LAPORAN HISTORY OUSTANDING SO
//SP_REPORTHISSOOUT
Route::get('/laporanmarketinghistoryoutso', 'LaporanMarketingHistoryOutSOController@index');
Route::get('/laporanmarketinghistoryoutso_doReport', 'LaporanMarketingHistoryOutSOController@doReport');
Route::get('/laporanmarketinghistoryoutso_doFilter', 'LaporanMarketingHistoryOutSOController@doFilter');
Route::get('/laporanmarketinghistoryoutso_doReportFilter', 'LaporanMarketingHistoryOutSOController@doReportFilter');
Route::get('/laporanmarketinghistoryoutso_loadlokasi', 'LaporanMarketingHistoryOutSOController@loadLokasi');
Route::get('/laporanmarketinghistoryoutso_loadcustsupp', 'LaporanMarketingHistoryOutSOController@loadCustSupp');

//LAPORAN EVALUASI SO LUNAS
//REPOSRTEVALUASISOLUNAS
Route::get('/laporanmarketingevalsolunas', 'LaporanMarketingEvalSoLunasController@index');
Route::get('/laporanmarketingevalsolunas_doReport', 'LaporanMarketingEvalSoLunasController@doReport');
Route::get('/laporanmarketingevalsolunas_doFilter', 'LaporanMarketingEvalSoLunasController@doFilter');
Route::get('/laporanmarketingevalsolunas_doReportFilter', 'LaporanMarketingEvalSoLunasController@doReportFilter');

//LAPORAN SO OUTSTANDING SO
Route::get('/laporanmarketinglaporanoutso', 'LaporanMarketingLaporanOutSoController@index');
Route::get('/laporanmarketinglaporanoutso_doReport', 'LaporanMarketingLaporanOutSoController@doReport');
Route::get('/laporanmarketinglaporanoutso_doFilter', 'LaporanMarketingLaporanOutSoController@doFilter');
Route::get('/laporanmarketinglaporanoutso_doReportFilter', 'LaporanMarketingLaporanOutSoController@doReportFilter');

// Marketing Laporan SPB
Route::get('/laporanmarketingspb', 'LaporanMarketingSPBController@index');
Route::get('/laporanmarketingspb_doReport', 'LaporanMarketingSPBController@doReport');
Route::get('/laporanmarketingspb_doFilter', 'LaporanMarketingSPBController@doFilter');
Route::get('/laporanmarketingspb_doReportFilter','LaporanMarketingSPBController@doReportFilter');

// Marketing Laporan SPB LT
Route::get('/laporanmarketingspbLT', 'LaporanMarketingSPBLTController@index');
Route::get('/laporanmarketingspbLT_doReport', 'LaporanMarketingSPBLTController@doReport');
Route::get('/laporanmarketingspbLT_doFilter', 'LaporanMarketingSPBLTController@doFilter');
Route::get('/laporanmarketingspbLT_doReportFilter','LaporanMarketingSPBLTController@doReportFilter');

// Marketing Laporan SPB ACC
Route::get('/laporanmarketingspbacc', 'LaporanMarketingSPBACCController@index');
Route::get('/laporanmarketingspbacc_doReport', 'LaporanMarketingSPBACCController@doReport');
Route::get('/laporanmarketingspbacc_doFilter', 'LaporanMarketingSPBACCController@doFilter');
Route::get('/laporanmarketingspbacc_doReportFilter','LaporanMarketingSPBACCController@doReportFilter');

// Marketing Laporan SPB HRG SO
Route::get('/laporanmarketingspbhrgso', 'LaporanMarketingSPBHrgSOController@index');
Route::get('/laporanmarketingspbhrgso_doReport', 'LaporanMarketingSPBHrgSOController@doReport');
Route::get('/laporanmarketingspbhrgso_doFilter', 'LaporanMarketingSPBHrgSOController@doFilter');
Route::get('/laporanmarketingspbhrgso_doReportFilter','LaporanMarketingSPBHrgSOController@doReportFilter');

// Laporan Surat Jalan
Route::get('/laporansuratjalan', 'LaporanSuratJalanController@index');
Route::get('/laporansuratjalan_doReport', 'LaporanSuratJalanController@doReport');
Route::get('/laporansuratjalan_doFilter', 'LaporanSuratJalanController@doFilter');
Route::get('/laporansuratjalan_doReportFilter','LaporanSuratJalanController@doReportFilter');

// Laporan Marketing Invoice Retur Penjualan
Route::get('/laporanmarketingreturpenjualan', 'LaporanMarketingReturPenjualanController@index');
Route::get('/laporanmarketingreturpenjualan_doReport', 'LaporanMarketingReturPenjualanController@doReport');
Route::get('/laporanmarketingreturpenjualan_doFilter', 'LaporanMarketingReturPenjualanController@doFilter');
Route::get('/laporanmarketingreturpenjualan_doReportFilter','LaporanMarketingReturPenjualanController@doReportFilter');

// Laporan Marketing Sales Analisa
Route::get('/laporanmarketingsalesanalisa', 'LaporanMarketingSalesAnalisaController@index');
Route::get('/laporanmarketingsalesanalisa_doReport', 'LaporanMarketingSalesAnalisaController@doReport');
Route::get('/laporanmarketingsalesanalisa_doFilter', 'LaporanMarketingSalesAnalisaController@doFilter');
Route::get('/laporanmarketingsalesanalisa_doReportFilter','LaporanMarketingSalesAnalisaController@doReportFilter');

//Laporan Analisa Laba Kotor
Route::get('/laporanmarketinganalisakotor', 'LaporanMarketingAnalisaKotorController@index');
Route::get('/laporanmarketinganalisakotor_doReport', 'LaporanMarketingAnalisaKotorController@doReport');
Route::get('/laporanmarketinganalisakotor_doFilter', 'LaporanMarketingAnalisaKotorController@doFilter');
Route::get('/laporanmarketinganalisakotor_doReportFilter','LaporanMarketingAnalisaKotorController@doReportFilter');

// Laporan Marketing Oustanding Uang Muka
Route::get('/laporanmarketinguangmukaout', 'LaporanMarketingUangMukaOutController@index');
Route::get('/laporanmarketinguangmukaout_doReport', 'LaporanMarketingUangMukaOutController@doReport');
Route::get('/laporanmarketinguangmukaout_doFilter', 'LaporanMarketingUangMukaOutController@doFilter');
Route::get('/laporanmarketinguangmukaout_doReportFilter','LaporanMarketingUangMukaOutController@doReportFilter');
Route::get('/laporanmarketinguangmukaout_loadsales', 'LaporanMarketingUangMukaOutController@loadSales');

//Laporan Marketing Register Uang Muka
Route::get('/laporanmarketingreguangmuka', 'LaporanMarketingRegUangMukaController@index');
Route::get('/laporanmarketingreguangmuka_doReport', 'LaporanMarketingRegUangMukaController@doReport');
Route::get('/laporanmarketingreguangmuka_doFilter', 'LaporanMarketingRegUangMukaController@doFilter');
Route::get('/laporanmarketingreguangmuka_doReportFilter','LaporanMarketingRegUangMukaController@doReportFilter');

//Laporan Marketing Oustanding SPPB
Route::get('/laporanmarketingoutsppb', 'LaporanMarketingOutSPPBController@index');
Route::get('/laporanmarketingoutsppb_doReport', 'LaporanMarketingOutSPPBController@doReport');
Route::get('/laporanmarketingoutsppb_doFilter', 'LaporanMarketingOutSPPBController@doFilter');
Route::get('/laporanmarketingoutsppb_doReportFilter','LaporanMarketingOutSPPBController@doReportFilter');

//Laporan Marketing Oustanding harga SO
Route::get('/laporanmarketingoutspbhrgso', 'LaporanMarketingOutSPBHrgSoController@index');
Route::get('/laporanmarketingoutspbhrgso_doReport', 'LaporanMarketingOutSPBHrgSoController@doReport');
Route::get('/laporanmarketingoutspbhrgso_doFilter', 'LaporanMarketingOutSPBHrgSoController@doFilter');
Route::get('/laporanmarketingoutspbhrgso_doReportFilter','LaporanMarketingOutSPBHrgSoController@doReportFilter');

//Laporan Marketing Outstanding Gudang GTC
Route::get('/laporanmarketingoutgudanggtc', 'LaporanMarketingOutGudangGTCController@index');
Route::get('/laporanmarketingoutgudanggtc_doReport', 'LaporanMarketingOutGudangGTCController@doReport');
Route::get('/laporanmarketingoutgudanggtc_doFilter', 'LaporanMarketingOutGudangGTCController@doFilter');
Route::get('/laporanmarketingoutgudanggtc_doReportFilter','LaporanMarketingOutGudangGTCController@doReportFilter');

//Laporan Marketing Laporan Invoice
Route::get('/laporanmarketinginvoice', 'LaporanMarketingInvoiceController@index');
Route::get('/laporanmarketinginvoice_doReport', 'LaporanMarketingInvoiceController@doReport');
Route::get('/laporanmarketinginvoice_doFilter', 'LaporanMarketingInvoiceController@doFilter');
Route::get('/laporanmarketinginvoice_doReportFilter','LaporanMarketingInvoiceController@doReportFilter');
Route::get('/laporanmarketinginvoice_loadjenis', 'LaporanMarketingInvoiceController@loadJenis');
Route::get('/laporanmarketinginvoice_loadgroup', 'LaporanMarketingInvoiceController@loadGroup2');

//Laporan Marketing Laporan POS
Route::get('/laporanmarketingpos', 'LaporanMarketingPOSController@index');
Route::get('/laporanmarketingpos_doReport', 'LaporanMarketingPOSController@doReport');
Route::get('/laporanmarketingpos_doFilter', 'LaporanMarketingPOSController@doFilter');
Route::get('/laporanmarketingpos_doReportFilter','LaporanMarketingPOSController@doReportFilter');

//Laporan Marketing Register Sales Invoice
Route::get('/laporanmarketingregsaleinv', 'LaporanMarketingRegSaleInvController@index');
Route::get('/laporanmarketingregsaleinv_doReport', 'LaporanMarketingRegSaleInvController@doReport');
Route::get('/laporanmarketingregsaleinv_doFilter', 'LaporanMarketingRegSaleInvController@doFilter');
Route::get('/laporanmarketingregsaleinv_doReportFilter','LaporanMarketingRegSaleInvController@doReportFilter');


// ========== GUDANG ========== //

// PERMINTAAN PEMAKAIAN
Route::get('/laporanpermintaanpemakaian', 'LaporanPermintaanPemakaianController@index');
Route::get('/laporanpermintaanpemakaian_doReport', 'LaporanPermintaanPemakaianController@doReport');
Route::get('/laporanpermintaanpemakaian_doFilter', 'LaporanPermintaanPemakaianController@doFilter');
Route::get('/laporanpermintaanpemakaian_doReportFilter', 'LaporanPermintaanPemakaianController@doReportFilter');

// PEMAKAIAN
Route::get('/laporanpemakaianqty', 'LaporanPemakaianController@indexQty');
Route::get('/laporanpemakaianrp', 'LaporanPemakaianController@indexRp');
Route::get('/laporanpemakaian_doReport', 'LaporanPemakaianController@doReport');
Route::get('/laporanpemakaian_doFilter', 'LaporanPemakaianController@doFilter');
Route::get('/laporanpemakaian_doReportFilter', 'LaporanPemakaianController@doReportFilter');

// PERMINTAAN TRANSFER
Route::get('/laporanpermintaantransfer', 'LaporanPermintaanTransferController@index');
Route::get('/laporanpermintaantransfer_doReport', 'LaporanPermintaanTransferController@doReport');
// Route::get('/laporanpermintaantransfer_doFilter', 'LaporanPermintaanTransferController@doFilter');
// Route::get('/laporanpermintaantransfer_doReportFilter', 'LaporanPermintaanTransferController@doReportFilter');

// CLOSING PERMINTAAN TRANSFER
Route::get('/laporanclosingpermintaantransfer', 'LaporanClosingPermintaanTransferController@index');
Route::get('/laporanclosingpermintaantransfer_doReport', 'LaporanClosingPermintaanTransferController@doReport');
Route::get('/laporanclosingpermintaantransfer_doFilter', 'LaporanClosingPermintaanTransferController@doFilter');
Route::get('/laporanclosingpermintaantransfer_doReportFilter', 'LaporanClosingPermintaanTransferController@doReportFilter');

// TRANSFER
Route::get('/laporantransfer', 'LaporanTransferController@index');
Route::get('/laporantransfer_doReport', 'LaporanTransferController@doReport');
Route::get('/laporantransfer_doFilter', 'LaporanTransferController@doFilter');
Route::get('/laporantransfer_doReportFilter', 'LaporanTransferController@doReportFilter');

// PENERIMAAN TRANSFER
Route::get('/laporanpenerimaantransfer', 'LaporanPenerimaanTransferController@index');
Route::get('/laporanpenerimaantransfer_doReport', 'LaporanPenerimaanTransferController@doReport');
Route::get('/laporanpenerimaantransfer_doFilter', 'LaporanPenerimaanTransferController@doFilter');
Route::get('/laporanpenerimaantransfer_doReportFilter', 'LaporanPenerimaanTransferController@doReportFilter');

// OUTSTANDING TRANSFER
Route::get('/laporanoutstandingtransfer', 'LaporanOutstandingTransferController@index');
Route::get('/laporanoutstandingtransfer_doReport', 'LaporanOutstandingTransferController@doReport');
Route::get('/laporanoutstandingtransfer_doFilter', 'LaporanOutstandingTransferController@doFilter');
Route::get('/laporanoutstandingtransfer_doReportFilter', 'LaporanOutstandingTransferController@doReportFilter');

// PERINTAH OPNAME
Route::get('/laporanperintahopname', 'LaporanPerintahOpnameController@index');
Route::get('/laporanperintahopname_doReport', 'LaporanPerintahOpnameController@doReport');
Route::get('/laporanperintahopname_doFilter', 'LaporanPerintahOpnameController@doFilter');
Route::get('/laporanperintahopname_doReportFilter', 'LaporanPerintahOpnameController@doReportFilter');

// CLOSING PERINTAH OPNAME
Route::get('/laporanclosingperintahopname', 'LaporanClosingPerintahOpnameController@index');
Route::get('/laporanclosingperintahopname_doReport', 'LaporanClosingPerintahOpnameController@doReport');
Route::get('/laporanclosingperintahopname_doFilter', 'LaporanClosingPerintahOpnameController@doFilter');
Route::get('/laporanclosingperintahopname_doReportFilter', 'LaporanClosingPerintahOpnameController@doReportFilter');

// OPNAME
Route::get('/laporanopname', 'LaporanOpnameController@index');
Route::get('/laporanopname_doReport', 'LaporanOpnameController@doReport');
Route::get('/laporanopname_doFilter', 'LaporanOpnameController@doFilter');
Route::get('/laporanopname_doReportFilter', 'LaporanOpnameController@doReportFilter');

// CLOSING OPNAME
Route::get('/laporanclosingopname', 'LaporanClosingOpnameController@index');
Route::get('/laporanclosingopname_doReport', 'LaporanClosingOpnameController@doReport');
Route::get('/laporanclosingopname_doFilter', 'LaporanClosingOpnameController@doFilter');
Route::get('/laporanclosingopname_doReportFilter', 'LaporanClosingOpnameController@doReportFilter');


// SELISIH PERINTAH OPNAME
Route::get('/laporanselisihperintahopname', 'LaporanSelisihPerintahOpnameController@index');
Route::get('/laporanselisihperintahopname_doReport', 'LaporanSelisihPerintahOpnameController@doReport');
Route::get('/laporanselisihperintahopname_doFilter', 'LaporanSelisihPerintahOpnameController@doFilter');
Route::get('/laporanselisihperintahopname_doReportFilter', 'LaporanSelisihPerintahOpnameController@doReportFilter');

// UBAH KEMASAN
Route::get('/laporanubahkemasan', 'LaporanUbahKemasanController@index');
Route::get('/laporanubahkemasan_doReport', 'LaporanUbahKemasanController@doReport');
Route::get('/laporanubahkemasan_doFilter', 'LaporanUbahKemasanController@doFilter');
Route::get('/laporanubahkemasan_doReportFilter', 'LaporanUbahKemasanController@doReportFilter');

// PERMINTAAN SAMPLE
Route::get('/laporanpermintaansample', 'LaporanPermintaanSampleController@index');
Route::get('/laporanpermintaansample_doReport', 'LaporanPermintaanSampleController@doReport');
Route::get('/laporanpermintaansample_doFilter', 'LaporanPermintaanSampleController@doFilter');
Route::get('/laporanpermintaansample_doReportFilter', 'LaporanPermintaanSampleController@doReportFilter');

// OUTSTANDING PERMINTAAN SAMPLE
Route::get('/laporanoutstandingpermintaansample', 'LaporanOutstandingPermintaanSampleController@index');
Route::get('/laporanoutstandingpermintaansample_doReport', 'LaporanOutstandingPermintaanSampleController@doReport');
Route::get('/laporanoutstandingpermintaansample_doFilter', 'LaporanOutstandingPermintaanSampleController@doFilter');
Route::get('/laporanoutstandingpermintaansample_doReportFilter', 'LaporanOutstandingPermintaanSampleController@doReportFilter');

// PENYERAHAN SAMPLE
Route::get('/laporanpenyerahansample', 'LaporanPenyerahanSampleController@index');
Route::get('/laporanpenyerahansample_doReport', 'LaporanPenyerahanSampleController@doReport');
Route::get('/laporanpenyerahansample_doFilter', 'LaporanPenyerahanSampleController@doFilter');
Route::get('/laporanpenyerahansample_doReportFilter', 'LaporanPenyerahanSampleController@doReportFilter');

// PEMBEBANAN SAMPLE
Route::get('/laporangudangpembebanansample', 'LaporanGudangPembebananSampleController@index');
Route::get('/laporangudangpembebanansample_doReport', 'LaporanGudangPembebananSampleController@doReport');

// RETUR SAMPLE
Route::get('/laporangudangretursample', 'LaporanGudangReturSampleController@index');
Route::get('/laporangudangretursample_doReport', 'LaporanGudangReturSampleController@doReport');

// HISTORI PENEYERAHAN SAMPLE
Route::get('/laporanhistoripenyerahansample', 'LaporanHistoriPenyerahanSampleController@index');
Route::get('/laporanhistoripenyerahansample_doReport', 'LaporanHistoriPenyerahanSampleController@doReport');
Route::get('/laporanhistoripenyerahansample_doFilter', 'LaporanHistoriPenyerahanSampleController@doFilter');
Route::get('/laporanhistoripenyerahansample_doReportFilter', 'LaporanHistoriPenyerahanSampleController@doReportFilter');

// KOREKSI STOCK
Route::get('/laporankoreksistock', 'LaporanKoreksiStockController@index');
Route::get('/laporankoreksistock_doReport', 'LaporanKoreksiStockController@doReport');
Route::get('/laporankoreksistock_doFilter', 'LaporanKoreksiStockController@doFilter');
Route::get('/laporankoreksistock_doReportFilter', 'LaporanKoreksiStockController@doReportFilter');

// TRANSFER KE CABANG BELUM DITERIMA
Route::get('/laporantransferkecabangblmditerima', 'LaporanTransferKeCabangBlmDiterimaController@index');
Route::get('/laporantransferkecabangblmditerima_doReport', 'LaporanTransferKeCabangBlmDiterimaController@doReport');
Route::get('/laporantransferkecabangblmditerima_doFilter', 'LaporanTransferKeCabangBlmDiterimaController@doFilter');
Route::get('/laporantransferkecabangblmditerima_doReportFilter', 'LaporanTransferKeCabangBlmDiterimaController@doReportFilter');

// CLOSING TRANSFER CABANG
Route::get('/laporanclosingtransfercabang', 'LaporanClosingTransferCabangController@index');
Route::get('/laporanclosingtransfercabang_doReport', 'LaporanClosingTransferCabangController@doReport');
Route::get('/laporanclosingtransfercabang_doFilter', 'LaporanClosingTransferCabangController@doFilter');
Route::get('/laporanclosingtransfercabang_doReportFilter', 'LaporanClosingTransferCabangController@doReportFilter');

// OUTSTANDING SO PO
Route::get('/laporangudangoutstandingsopo', 'LaporanGudangOutstandingSoPoController@index');
Route::get('/laporangudangoutstandingsopo_doReport', 'LaporanGudangOutstandingSoPoController@doReport');
Route::get('/laporangudangoutstandingsopo_doFilter', 'LaporanGudangOutstandingSoPoController@doFilter');
Route::get('/laporangudangoutstandingsopo_doReportFilter','LaporanGudangOutstandingSoPoController@doReportFilter');

// GUDANG PERMINTAAN KONSINYASI
Route::get('/laporangudangpermintaankonsinyasi', 'LaporanGudangPermintaanKonsinyasiController@index');
Route::get('/laporangudangpermintaankonsinyasi_doReport', 'LaporanGudangPermintaanKonsinyasiController@doReport');
Route::get('/laporangudangpermintaankonsinyasi_doFilter', 'LaporanGudangPermintaanKonsinyasiController@doFilter');
Route::get('/laporangudangpermintaankonsinyasi_doReportFilter', 'LaporanGudangPermintaanKonsinyasiController@doReportFilter');

// GUDANG OUTSTANDING PR KONSINYASI
Route::get('/laporangudangoutprkonsin', 'LaporanGudangOutPRKonsinController@index');
Route::get('/laporangudangoutprkonsin_doReport', 'LaporanGudangOutPRKonsinController@doReport');
Route::get('/laporangudangoutprkonsin_doFilter', 'LaporanGudangOutPRKonsinController@doFilter');
Route::get('/laporangudangoutprkonsin_doReportFilter', 'LaporanGudangOutPRKonsinController@doReportFilter');

// GUDANG KONSINYASI
Route::get('/laporangudangkonsin', 'LaporanGudangKonsinController@index');
Route::get('/laporangudangkonsin_doReport', 'LaporanGudangKonsinController@doReport');
Route::get('/laporangudangkonsin_doFilter', 'LaporanGudangKonsinController@doFilter');
Route::get('/laporangudangkonsin_doReportFilter', 'LaporanGudangKonsinController@doReportFilter');

// GUDANG OUTSTANDING KONSINYASI
Route::get('/laporangudangoutkonsin', 'LaporanGudangOutKonsinsController@index');
Route::get('/laporangudangoutkonsin_doReport', 'LaporanGudangOutKonsinsController@doReport');
Route::get('/laporangudangoutkonsin_doFilter', 'LaporanGudangOutKonsinsController@doFilter');
Route::get('/laporangudangoutkonsin_doReportFilter', 'LaporanGudangOutKonsinsController@doReportFilter');

// ========== STOCK ========== //

// MUTASI STOCK
Route::get('/laporanstockmutasistockqty', 'LaporanStockMutasiStockController@indexqty');
Route::get('/laporanstockmutasistockrp', 'LaporanStockMutasiStockController@indexrp');
Route::get('/laporanstockmutasistockqtyrp', 'LaporanStockMutasiStockController@indexqtyrp');
Route::get('/laporanstockmutasistockperiode', 'LaporanStockMutasiStockController@indexperiode');
Route::get('/laporanstockmutasistock_doReport', 'LaporanStockMutasiStockController@doReport');

// MUTASI STOCK PER MERK
Route::get('/laporanstockmutasistockpermerk', 'LaporanStockMutasiStockPerMerkController@index');
Route::get('/laporanstockmutasistockpermerk_doReport', 'LaporanStockMutasiStockPerMerkController@doReport');

// MUTASI STOCK HARIAN
Route::get('/laporanstockmutasistockharian', 'LaporanStockMutasiStockHarianController@index');
Route::get('/laporanstockmutasistockharian_doReport', 'LaporanStockMutasiStockHarianController@doReport');

// SALDO STOCK
Route::get('/laporanstocksaldostock', 'LaporanStockSaldoStockController@index');
Route::get('/laporanstocksaldostock_doReport', 'LaporanStockSaldoStockController@doReport');

// STOCK FISIK GUDANG
Route::get('/laporanstockstockfisikgudang', 'LaporanStockStockFisikGudangController@index');
Route::get('/laporanstockstockfisikgudang_doReport', 'LaporanStockStockFisikGudangController@doReport');

// STOCK KARTU DAN OPNAME
Route::get('/laporanstockstockkartudanopname', 'LaporanStockStockKartuDanOpnameController@index');
Route::get('/laporanstockstockkartudanopname_doReport', 'LaporanStockStockKartuDanOpnameController@doReport');

// FAST SLOW DEAD MOVING
Route::get('/laporanstockfastslowdeadmoving', 'LaporanStockFastSlowDeadMovingController@index');
Route::get('/laporanstockfastslowdeadmoving_doReport', 'LaporanStockFastSlowDeadMovingController@doReport');

// KARTU STOCK
Route::get('/laporanstockkartustockqty', 'LaporanStockKartuStockController@indexqty');
Route::get('/laporanstockkartustockqtyrp', 'LaporanStockKartuStockController@indexqtyrp');
Route::get('/laporanstockkartustock_doReport', 'LaporanStockKartuStockController@doReport');

// ======================= ACCOUNTING =================== //
// Kas Harian
Route::get('/reportaccountingkasharian', 'LaporanAccountingKasHarianController@index');
Route::get('/reportaccountingkasharian_loadperkiraan', 'LaporanAccountingKasHarianController@loadPerkiraan');
Route::get('/reportaccountingkasharian_doReport', 'LaporanAccountingKasHarianController@doReport');
Route::get('/reportaccountingkasharian_doFilter', 'LaporanAccountingKasHarianController@doFilter');
Route::get('/reportaccountingkasharian_doReportFilter', 'LaporanAccountingKasHarianController@doReportFilter');
Route::get('/reportaccountingkasharian_saldoawal','LaporanAccountingKasHarianController@doReportSaldoAwal');

// Bank Harian
Route::get('/reportaccountingbankharian', 'LaporanAccountingBankHarianController@index');
Route::get('/reportaccountingbankharian_loadperkiraan', 'LaporanAccountingBankHarianController@loadPerkiraan');
Route::get('/reportaccountingbankharian_doReport', 'LaporanAccountingBankHarianController@doReport');
Route::get('/reportaccountingbankharian_doFilter', 'LaporanAccountingBankHarianController@doFilter');
Route::get('/reportaccountingbankharian_doReportFilter', 'LaporanAccountingBankHarianController@doReportFilter');
Route::get('/reportaccountingbankharian_saldoawal','LaporanAccountingBankHarianController@doReportSaldoAwal');
Route::get('/reportaccountingbankharian_saldoakhir','LaporanAccountingBankHarianController@doReportSaldoAkhir');

// Posisi Bank
Route::get('/reportaccountingposisibank', 'LaporanAccountingPosisiBankController@index');
Route::get('/reportaccountingposisibank_doReport', 'LaporanAccountingPosisiBankController@doReport');
Route::get('/reportaccountingposisibank_doFilter', 'LaporanAccountingPosisiBankController@doFilter');
Route::get('/reportaccountingposisibank_doReportFilter', 'LaporanAccountingPosisiBankController@doReportFilter');

// Bon Sementara
Route::get('/reportaccountingbonsementara', 'LaporanAccountingBonSementaraController@index');
Route::get('/reportaccountingbonsementara_doReport', 'LaporanAccountingBonSementaraController@doReport');
Route::get('/reportaccountingbonsementara_loadperkiraan', 'LaporanAccountingBonSementaraController@loadPerkiraan');
Route::get('/reportaccountingbonsementara_doFilter', 'LaporanAccountingBonSementaraController@doFilter');
Route::get('/reportaccountingbonsementara_doReportFilter', 'LaporanAccountingBonSementaraController@doReportFilter');

// Laporan Arus
Route::get('/reportaccountinglaporanarus', 'LaporanAccountingLaporanArusController@index');
Route::get('/reportaccountinglaporanarus_loadperkiraan', 'LaporanAccountingLaporanArusController@loadPerkiraan');
Route::get('/reportaccountinglaporanarus_doReport', 'LaporanAccountingLaporanArusController@doReport');
Route::get('/reportaccountinglaporanarus_doFilter', 'LaporanAccountingLaporanArusController@doFilter');
Route::get('/reportaccountinglaporanarus_doReportFilter', 'LaporanAccountingLaporanArusController@doReportFilter');
Route::get('/reportaccountinglaporanarus_saldoawal','LaporanAccountingLaporanArusController@doReportSaldoAwal');

// Costing
Route::get('/reportaccountingcosting', 'LaporanAccountingCostingController@index');
Route::get('/reportaccountingcosting_loadperkiraan', 'LaporanAccountingCostingController@loadPerkiraan');
Route::get('/reportaccountingcosting_loadsubcosting', 'LaporanAccountingCostingController@loadSubCosting');
Route::get('/reportaccountingcosting_doReport', 'LaporanAccountingCostingController@doReport');
Route::get('/reportaccountingcosting_doFilter', 'LaporanAccountingCostingController@doFilter');
Route::get('/reportaccountingcosting_doReportFilter', 'LaporanAccountingCostingController@doReportFilter');
Route::get('/reportaccountingcosting_saldoawal','LaporanAccountingCostingController@doReportSaldoAwal');

// His Bon
Route::get('/reportaccountinghisbon', 'LaporanAccountingHisBonController@index');
Route::get('/reportaccountinghisbon_loadperkiraan', 'LaporanAccountingHisBonController@loadPerkiraan');
Route::get('/reportaccountinghisbon_doReport', 'LaporanAccountingHisBonController@doReport');

// Hutang - Kartu
Route::get('/reportaccountinghutangkartu', 'LaporanAccountingHutangKartuController@index');
Route::get('/reportaccountinghutangkartu_loadvalas', 'LaporanAccountingHutangKartuController@loadValas');
Route::get('/reportaccountinghutangkartu_loadsuppawal', 'LaporanAccountingHutangKartuController@loadSuppAwal');
Route::get('/reportaccountinghutangkartu_loadperkiraan', 'LaporanAccountingHutangKartuController@loadPerkiraan');
Route::get('/reportaccountinghutangkartu_doReport', 'LaporanAccountingHutangKartuController@doReport');

// Hutang - Outstanding JT
Route::get('/reportaccountinghutangoutstandingJT', 'LaporanAccountingHutangOutstandingJTController@index');
Route::get('/reportaccountinghutangoutstandingJT_loadvalas', 'LaporanAccountingHutangOutstandingJTController@loadValas');
Route::get('/reportaccountinghutangoutstandingJT_loadsuppawal', 'LaporanAccountingHutangOutstandingJTController@loadSuppAwal');
Route::get('/reportaccountinghutangoutstandingJT_loadperkiraan', 'LaporanAccountingHutangOutstandingJTController@loadPerkiraan');
Route::get('/reportaccountinghutangoutstandingJT_doReport', 'LaporanAccountingHutangOutstandingJTController@doReport');

// Hutang - Pelunasan
Route::get('/reportaccountinghutangpelunasan', 'LaporanAccountingHutangPelunasanController@index');
Route::get('/reportaccountinghutangpelunasan_loadvalas', 'LaporanAccountingHutangPelunasanController@loadValas');
Route::get('/reportaccountinghutangpelunasan_loadsuppawal', 'LaporanAccountingHutangPelunasanController@loadSuppAwal');
Route::get('/reportaccountinghutangpelunasan_loadperkiraan', 'LaporanAccountingHutangPelunasanController@loadPerkiraan');
Route::get('/reportaccountinghutangpelunasan_doReport', 'LaporanAccountingHutangPelunasanController@doReport');

// Hutang - LPH
Route::get('/reportaccountinghutanglph', 'LaporanAccountingHutangLPHController@index');
Route::get('/reportaccountinghutanglph_loadvalas', 'LaporanAccountingHutangLPHController@loadValas');
Route::get('/reportaccountinghutanglph_loadsuppawal', 'LaporanAccountingHutangLPHController@loadSuppAwal');
Route::get('/reportaccountinghutanglph_loadperkiraan', 'LaporanAccountingHutangLPHController@loadPerkiraan');
Route::get('/reportaccountinghutanglph_doReport', 'LaporanAccountingHutangLPHController@doReport');


// Hutang - UMUR
Route::get('/reportaccountinghutangumur', 'LaporanAccountingHutangUmurController@index');
Route::get('/reportaccountinghutangumur_loadvalas', 'LaporanAccountingHutangUmurController@loadValas');
Route::get('/reportaccountinghutangumur_loadsuppawal', 'LaporanAccountingHutangUmurController@loadSuppAwal');
Route::get('/reportaccountinghutangumur_loadperkiraan', 'LaporanAccountingHutangUmurController@loadPerkiraan');
Route::get('/reportaccountinghutangumur_doReport', 'LaporanAccountingHutangUmurController@doReport');


// Hutang - Outstanding Nota
Route::get('/reportaccountinghutangoutstandingnota', 'LaporanAccountingHutangOutstandingNotaController@index');
Route::get('/reportaccountinghutangoutstandingnota_loadvalas', 'LaporanAccountingHutangOutstandingNotaController@loadValas');
Route::get('/reportaccountinghutangoutstandingnota_loadsuppawal', 'LaporanAccountingHutangOutstandingNotaController@loadSuppAwal');
Route::get('/reportaccountinghutangoutstandingnota_loadperkiraan', 'LaporanAccountingHutangOutstandingNotaController@loadPerkiraan');
Route::get('/reportaccountinghutangoutstandingnota_doReport', 'LaporanAccountingHutangOutstandingNotaController@doReport');


// Hutang - LHPJT
Route::get('/reportaccountinghutanglhpjt', 'LaporanAccountingHutangLHPJTController@index');
Route::get('/reportaccountinghutanglhpjt_loadvalas', 'LaporanAccountingHutangLHPJTController@loadValas');
Route::get('/reportaccountinghutanglhpjt_loadsuppawal', 'LaporanAccountingHutangLHPJTController@loadSuppAwal');
Route::get('/reportaccountinghutanglhpjt_loadperkiraan', 'LaporanAccountingHutangLHPJTController@loadPerkiraan');
Route::get('/reportaccountinghutanglhpjt_doReport', 'LaporanAccountingHutangLHPJTController@doReport');


// Hutang - LPH TO
Route::get('/reportaccountinghutanglphto', 'LaporanAccountingHutangLPHTOController@index');
Route::get('/reportaccountinghutanglphto_loadvalas', 'LaporanAccountingHutangLPHTOController@loadValas');
Route::get('/reportaccountinghutanglphto_loadsuppawal', 'LaporanAccountingHutangLPHTOController@loadSuppAwal');
Route::get('/reportaccountinghutanglphto_loadperkiraan', 'LaporanAccountingHutangLPHTOController@loadPerkiraan');
Route::get('/reportaccountinghutanglphto_doReport', 'LaporanAccountingHutangLPHTOController@doReport');

// Piutang - Kartu
Route::get('/reportaccountingpiutangkartu', 'LaporanAccountingPiutangKartuController@index');
Route::get('/reportaccountingpiutangkartu_loadvalas', 'LaporanAccountingPiutangKartuController@loadValas');
Route::get('/reportaccountingpiutangkartu_loadsuppawal', 'LaporanAccountingPiutangKartuController@loadSuppAwal');
Route::get('/reportaccountingpiutangkartu_loadperkiraan', 'LaporanAccountingPiutangKartuController@loadPerkiraan');
Route::get('/reportaccountingpiutangkartu_doReport', 'LaporanAccountingPiutangKartuController@doReport');

// Piutang - Outstanding JT
Route::get('/reportaccountingpiutangoutstandingJT', 'LaporanAccountingPiutangOutstandingJTController@index');
Route::get('/reportaccountingpiutangoutstandingJT_loadvalas', 'LaporanAccountingPiutangOutstandingJTController@loadValas');
Route::get('/reportaccountingpiutangoutstandingJT_loadsuppawal', 'LaporanAccountingPiutangOutstandingJTController@loadSuppAwal');
Route::get('/reportaccountingpiutangoutstandingJT_loadlokasi', 'LaporanAccountingPiutangOutstandingJTController@loadLokasi');
Route::get('/reportaccountingpiutangoutstandingJT_loadcustomer', 'LaporanAccountingPiutangOutstandingJTController@loadCustomer');
Route::get('/reportaccountingpiutangoutstandingJT_loadperkiraan', 'LaporanAccountingPiutangOutstandingJTController@loadPerkiraan');
Route::get('/reportaccountingpiutangoutstandingJT_doReport', 'LaporanAccountingPiutangOutstandingJTController@doReport');

// Piutang - Pelunasan
Route::get('/reportaccountingpiutangpelunasan', 'LaporanAccountingPiutangPelunasanController@index');
Route::get('/reportaccountingpiutangpelunasan_loadvalas', 'LaporanAccountingPiutangPelunasanController@loadValas');
Route::get('/reportaccountingpiutangpelunasan_loadsuppawal', 'LaporanAccountingPiutangPelunasanController@loadSuppAwal');
Route::get('/reportaccountingpiutangpelunasan_loadperkiraan', 'LaporanAccountingPiutangPelunasanController@loadPerkiraan');
Route::get('/reportaccountingpiutangpelunasan_doReport', 'LaporanAccountingPiutangPelunasanController@doReport');

// Piutang - LPP
Route::get('/reportaccountingpiutanglpp', 'LaporanAccountingPiutangLPPController@index');
Route::get('/reportaccountingpiutanglpp_loadvalas', 'LaporanAccountingPiutangLPPController@loadValas');
Route::get('/reportaccountingpiutanglpp_loadsuppawal', 'LaporanAccountingPiutangLPPController@loadSuppAwal');
Route::get('/reportaccountingpiutanglpp_loadperkiraan', 'LaporanAccountingPiutangLPPController@loadPerkiraan');
Route::get('/reportaccountingpiutanglpp_doReport', 'LaporanAccountingPiutangLPPController@doReport');


// Piutang - UMUR
Route::get('/reportaccountingpiutangumur', 'LaporanAccountingPiutangUmurController@index');
Route::get('/reportaccountingpiutangumur_loadvalas', 'LaporanAccountingPiutangUmurController@loadValas');
Route::get('/reportaccountingpiutangumur_loadsuppawal', 'LaporanAccountingPiutangUmurController@loadSuppAwal');
Route::get('/reportaccountingpiutangumur_loadperkiraan', 'LaporanAccountingPiutangUmurController@loadPerkiraan');
Route::get('/reportaccountingpiutangumur_doReport', 'LaporanAccountingPiutangUmurController@doReport');
Route::get('/reportaccountingpiutangumur_doFilter', 'LaporanAccountingPiutangUmurController@doFilter');

// Piutang - SPJT
Route::get('/reportaccountingpiutangspjt', 'LaporanAccountingPiutangSPJTController@index');
Route::get('/reportaccountingpiutangspjt_loadvalas', 'LaporanAccountingPiutangSPJTController@loadValas');
Route::get('/reportaccountingpiutangspjt_loadsuppawal', 'LaporanAccountingPiutangSPJTController@loadSuppAwal');
Route::get('/reportaccountingpiutangspjt_loadperkiraan', 'LaporanAccountingPiutangSPJTController@loadPerkiraan');
Route::get('/reportaccountingpiutangspjt_doReport', 'LaporanAccountingPiutangSPJTController@doReport');

// Piutang - LPP TO
Route::get('/reportaccountingpiutanglppto', 'LaporanAccountingPiutangLPPTOController@index');
Route::get('/reportaccountingpiutanglppto_loadvalas', 'LaporanAccountingPiutangLPPTOController@loadValas');
Route::get('/reportaccountingpiutanglppto_loadsuppawal', 'LaporanAccountingPiutangLPPTOController@loadSuppAwal');
Route::get('/reportaccountingpiutanglppto_loadperkiraan', 'LaporanAccountingPiutangLPPTOController@loadPerkiraan');
Route::get('/reportaccountingpiutanglppto_doReport', 'LaporanAccountingPiutangLPPTOController@doReport');


// DIVISI JURNAL DAN KAWAN KAWAN
Route::get('/laporanaccountingjurnal_loaddivisi','LaporanAccountingJurnalPenerimaanKasController@loadDivisi');
Route::get('/laporanaccounting_loadperkiraan1','LaporanAccountingJurnalPenerimaanKasController@loadPerkiraan1');

// JURNAL - PENERIMAAN KAS
Route::get('/laporanaccountingjurnalpenerimaankas', 'LaporanAccountingJurnalPenerimaanKasController@index');
Route::get('/laporanaccountingjurnalpenerimaankas_doReport', 'LaporanAccountingJurnalPenerimaanKasController@doReport');
Route::get('/laporanaccountingjurnalpenerimaankas_doFilter', 'LaporanAccountingJurnalPenerimaanKasController@doFilter');
Route::get('/laporanaccountingjurnalpenerimaankas_doReportFilter','LaporanAccountingJurnalPenerimaanKasController@doReportFilter');

// JURNAL - PENGELUARAN KAS
Route::get('/laporanaccountingjurnalpengeluarankas', 'LaporanAccountingJurnalPengeluaranKasController@index');
Route::get('/laporanaccountingjurnalpengeluarankas_doReport', 'LaporanAccountingJurnalPengeluaranKasController@doReport');
Route::get('/laporanaccountingjurnalpengeluarankas_doFilter', 'LaporanAccountingJurnalPengeluaranKasController@doFilter');
Route::get('/laporanaccountingjurnalpengeluarankas_doReportFilter','LaporanAccountingJurnalPengeluaranKasController@doReportFilter');

// JURNAL - PENERIMAAN BANK
Route::get('/laporanaccountingjurnalpenerimaanbank', 'LaporanAccountingJurnalPenerimaanBankController@index');
Route::get('/laporanaccountingjurnalpenerimaanbank_doReport', 'LaporanAccountingJurnalPenerimaanBankController@doReport');
Route::get('/laporanaccountingjurnalpenerimaanbank_doFilter', 'LaporanAccountingJurnalPenerimaanBankController@doFilter');
Route::get('/laporanaccountingjurnalpenerimaanbank_doReportFilter','LaporanAccountingJurnalPenerimaanBankController@doReportFilter');

// JURNAL - PENGELUARAN BANK
Route::get('/laporanaccountingjurnalpengeluaranbank', 'LaporanAccountingJurnalPengeluaranBankController@index');
Route::get('/laporanaccountingjurnalpengeluaranbank_doReport', 'LaporanAccountingJurnalPengeluaranBankController@doReport');
Route::get('/laporanaccountingjurnalpengeluaranbank_doFilter', 'LaporanAccountingJurnalPengeluaranBankController@doFilter');
Route::get('/laporanaccountingjurnalpengeluaranbank_doReportFilter','LaporanAccountingJurnalPengeluaranBankController@doReportFilter');

// JURNAL - MEMORIAL
Route::get('/laporanaccountingjurnalmemorial', 'LaporanAccountingJurnalMemorialController@index');
Route::get('/laporanaccountingjurnalmemorial_doReport', 'LaporanAccountingJurnalMemorialController@doReport');
Route::get('/laporanaccountingjurnalmemorial_doFilter', 'LaporanAccountingJurnalMemorialController@doFilter');
Route::get('/laporanaccountingjurnalmemorial_doReportFilter','LaporanAccountingJurnalMemorialController@doReportFilter');

// JURNAL - KOREKSI
Route::get('/laporanaccountingjurnalkoreksi', 'LaporanAccountingJurnalKoreksiController@index');
Route::get('/laporanaccountingjurnalkoreksi_doReport', 'LaporanAccountingJurnalKoreksiController@doReport');
Route::get('/laporanaccountingjurnalkoreksi_doFilter', 'LaporanAccountingJurnalKoreksiController@doFilter');
Route::get('/laporanaccountingjurnalkoreksi_doReportFilter','LaporanAccountingJurnalKoreksiController@doReportFilter');

// JURNAL - COMPUTER
Route::get('/laporanaccountingjurnalcomputer', 'LaporanAccountingJurnalComputerController@index');
Route::get('/laporanaccountingjurnalcomputer_doReport', 'LaporanAccountingJurnalComputerController@doReport');
Route::get('/laporanaccountingjurnalcomputer_doFilter', 'LaporanAccountingJurnalComputerController@doFilter');
Route::get('/laporanaccountingjurnalcomputer_doReportFilter','LaporanAccountingJurnalComputerController@doReportFilter');

// JURNAL - PENUTUP
Route::get('/laporanaccountingjurnalpenutup', 'LaporanAccountingJurnalPenutupController@index');
Route::get('/laporanaccountingjurnalpenutup_doReport', 'LaporanAccountingJurnalPenutupController@doReport');
Route::get('/laporanaccountingjurnalpenutup_doFilter', 'LaporanAccountingJurnalPenutupController@doFilter');
Route::get('/laporanaccountingjurnalpenutup_doReportFilter','LaporanAccountingJurnalPenutupController@doReportFilter');

// BUKU BESAR
Route::get('/laporanaccountingbukubesar', 'LaporanAccountingBukuBesarController@index');
Route::get('/laporanaccountingbukubesar_doReport', 'LaporanAccountingBukuBesarController@doReport');
Route::get('/laporanaccountingbukubesar_doFilter', 'LaporanAccountingBukuBesarController@doFilter');
Route::get('/laporanaccountingbukubesar_doReportFilter','LaporanAccountingBukuBesarController@doReportFilter');

// TRIAL BALANCE
Route::get('/laporanaccountingtrialbalance', 'LaporanAccountingTrialBalanceController@index');
Route::get('/laporanaccountingtrialbalance_doReport', 'LaporanAccountingTrialBalanceController@doReport');
Route::get('/laporanaccountingtrialbalance_doFilter', 'LaporanAccountingTrialBalanceController@doFilter');
Route::get('/laporanaccountingtrialbalance_doReportFilter','LaporanAccountingTrialBalanceController@doReportFilter');

// ACCOUNTING BIAYA
Route::get('/laporanaccountingbiaya', 'LaporanAccountingBiayaController@index');
Route::get('/laporanaccountingbiaya_doReport', 'LaporanAccountingBiayaController@doReport');
Route::get('/laporanaccountingbiaya_doFilter', 'LaporanAccountingBiayaController@doFilter');
Route::get('/laporanaccountingbiaya_doReportFilter','LaporanAccountingBiayaController@doReportFilter');

// ACCOUNTING AKTIVA
Route::get('/laporanaccountingaktiva', 'LaporanAccountingAktivaController@index');
Route::get('/laporanaccountingaktiva_doReport', 'LaporanAccountingAktivaController@doReport');
Route::get('/laporanaccountingaktiva_doFilter', 'LaporanAccountingAktivaController@doFilter');
Route::get('/laporanaccountingaktiva_doReportFilter','LaporanAccountingAktivaController@doReportFilter');

// BIAYA PENYUSUTAN
Route::get('/laporanaccountingbiayapenyusutan', 'LaporanAccountingBiayaPenyusutanController@index');
Route::get('/laporanaccountingbiayapenyusutan_doReport', 'LaporanAccountingBiayaPenyusutanController@doReport');
Route::get('/laporanaccountingbiayapenyusutan_doFilter', 'LaporanAccountingBiayaPenyusutanController@doFilter');
Route::get('/laporanaccountingbiayapenyusutan_doReportFilter','LaporanAccountingBiayaPenyusutanController@doReportFilter');

// SKB
Route::get('/laporanaccountingskb', 'LaporanAccountingSKBController@index');
Route::get('/laporanaccountingskb_doReport', 'LaporanAccountingSKBController@doReport');
Route::get('/laporanaccountingskb_doFilter', 'LaporanAccountingSKBController@doFilter');
Route::get('/laporanaccountingskb_doReportFilter','LaporanAccountingSKBController@doReportFilter');

// NERACA LAJUR
Route::get('/laporanaccountingneracalajur', 'LaporanAccountingNeracaLajurController@index');
Route::get('/laporanaccountingneracalajur_doReport', 'LaporanAccountingNeracaLajurController@doReport');
Route::get('/laporanaccountingneracalajur_doFilter', 'LaporanAccountingNeracaLajurController@doFilter');
Route::get('/laporanaccountingneracalajur_doReportFilter','LaporanAccountingNeracaLajurController@doReportFilter');

// LABA RUGI
Route::get('/laporanaccountinglabarugi', 'LaporanAccountingLabaRugiController@index');
Route::get('/laporanaccountinglabarugi_doReport', 'LaporanAccountingLabaRugiController@doReport');
Route::get('/laporanaccountinglabarugi_doFilter', 'LaporanAccountingLabaRugiController@doFilter');
Route::get('/laporanaccountinglabarugi_doReportFilter','LaporanAccountingLabaRugiController@doReportFilter');
Route::get('/laporanaccountinglabarugi_triggerSp','LaporanAccountingLabaRugiController@triggerSp');

// LABA RUGI TAHUNAN
Route::get('/laporanaccountinglabarugitahunan', 'LaporanAccountingLabaRugiTahunanController@index');
Route::get('/laporanaccountinglabarugitahunan_doReport', 'LaporanAccountingLabaRugiTahunanController@doReport');
Route::get('/laporanaccountinglabarugitahunan_doFilter', 'LaporanAccountingLabaRugiTahunanController@doFilter');
Route::get('/laporanaccountinglabarugitahunan_doReportFilter','LaporanAccountingLabaRugiTahunanController@doReportFilter');

// NERACA
Route::get('/laporanaccountingneraca', 'LaporanAccountingNeracaController@index');
Route::get('/laporanaccountingneraca_doReport', 'LaporanAccountingNeracaController@doReport');
Route::get('/laporanaccountingneraca_doFilter', 'LaporanAccountingNeracaController@doFilter');
Route::get('/laporanaccountingneraca_doReportFilter','LaporanAccountingNeracaController@doReportFilter');
Route::get('/laporanaccountingneraca_saldoawal','LaporanAccountingNeracaController@doReportSaldoAwal');

// NERACA PENUNJANG
Route::get('/laporanaccountingneracapenunjang', 'LaporanAccountingNeracaPenunjangController@index');
Route::get('/laporanaccountingneracapenunjang_doReport', 'LaporanAccountingNeracaPenunjangController@doReport');
Route::get('/laporanaccountingneracapenunjang_doFilter', 'LaporanAccountingNeracaPenunjangController@doFilter');
Route::get('/laporanaccountingneracapenunjang_doReportFilter','LaporanAccountingNeracaPenunjangController@doReportFilter');

// HPP
Route::get('/laporanaccountinghpp', 'LaporanAccountingHPPController@index');
Route::get('/laporanaccountinghpp_doReport', 'LaporanAccountingHPPController@doReport');
Route::get('/laporanaccountinghpp_doFilter', 'LaporanAccountingHPPController@doFilter');
Route::get('/laporanaccountinghpp_doReportFilter','LaporanAccountingHPPController@doReportFilter');


});
