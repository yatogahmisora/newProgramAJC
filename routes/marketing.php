<?php

// KAS
Route::namespace('Marketing')->group(function () {



  //PENAWARAN SO
Route::get('/penawaranso', 'PenawaranSOController@index')->middleware('auth');
Route::post('/penawaransocekhargaoto', 'PenawaranSOController@cekHargaOto')->middleware('auth');
Route::get('/penawaransoprint', 'PenawaranSOController@spCetak')->middleware('auth');
Route::get('/penawaransoloadall', 'PenawaranSOController@loadAll')->middleware('auth');

Route::get('/penawaransolistpelanggan' , 'PenawaranSOController@listPelanggan')->middleware('auth'); //
Route::get('/penawaransolistttd' , 'PenawaranSOController@listttd')->middleware('auth');  //

Route::get('/penawaransolistbarangfoc' , 'PenawaranSOController@listBarangFOC')->middleware('auth');
Route::post('/penawaransolistbarangnosominus' , 'PenawaranSOController@listBarangNonFOC1')->middleware('auth'); //
Route::get('/penawaransolistbarangnosoplus' , 'PenawaranSOController@listBarangNonFOC2')->middleware('auth');
Route::post('/penawaransolistpwo' , 'PenawaranSOController@listPWO')->middleware('auth');
Route::post('/penawaransolistgudang' , 'PenawaranSOController@listGudang')->middleware('auth');
Route::post('/penawaransolistnoso' , 'PenawaranSOController@listNoSo')->middleware('auth');
Route::post('/penawaransolistlokasipenerima' , 'PenawaranSOController@listLokasiPenerima')->middleware('auth');
Route::post('/penawaransospadd' , 'PenawaranSOController@spAdd')->middleware('auth');
Route::post('/penawaransocekharga' , 'PenawaranSOController@spCekHarga')->middleware('auth');
Route::post('/penawaransogetdetail' , 'PenawaranSOController@getDetail')->middleware('auth');
Route::post('/cekpenawaransoDet' , 'PenawaranSOController@cekPoDet')->middleware('auth');
Route::post('/penawaransoceksatuanbarang' , 'PenawaranSOController@cekSatuanBarang')->middleware('auth');
Route::post('/penawaransocekotorisasi', 'PenawaranSOController@cekOtorisasi')->middleware('auth');
Route::post('/penawaransoupdateotorisasi', 'PenawaranSOController@updateOtorisasi')->middleware('auth');
Route::post('/penawaransoupdatebatalotorisasi', 'PenawaranSOController@updateBatalOtorisasi')->middleware('auth');
Route::post('/penawaransospupdatepo' , 'PenawaranSOController@spUpdatePO')->middleware('auth');
Route::post('/penawaransoonchangeheader' , 'PenawaranSOController@onChangeHeader')->middleware('auth');
Route::post('/penawaransolistbarangnosominusallso' , 'PenawaranSOController@listBarangNonFOC1AllSO')->middleware('auth');
Route::get('/penawaransolistvalas' , 'PenawaranSOController@listValas')->middleware('auth');
Route::get('/penawaransocheckhargaddd' , 'PenawaranSOController@CheckHargaAdd')->middleware('auth');
// Route::get('/penawaransoprint' , 'PenawaranSOController@CheckHargaAdd')->middleware('auth');


  // VERIF PENAWARAN
  Route::get('/verifikasipenawaran', 'VerifikasiPenawaranController@index')->middleware('auth');
  Route::post('/verifikasipenawaranotorisasi', 'VerifikasiPenawaranController@spOtorisasi')->middleware('auth');
  Route::post('/verifikasipenawaranbatalotorisasi', 'VerifikasiPenawaranController@spBatalOtorisasi')->middleware('auth');
  Route::get('/verifikasipenawaranloadall', 'VerifikasiPenawaranController@loadAll')->middleware('auth');
  Route::get('/verifikasipenawaranloadallinfo', 'VerifikasiPenawaranController@loadAllInfo')->middleware('auth');
  Route::post('/verifikasipenawarandetailbarang', 'VerifikasiPenawaranController@detailBarang')->middleware('auth');
  Route::post('/get-barang', 'VerifikasiPenawaranController@getBarang')->middleware('auth');
  Route::post('/get-customer', 'VerifikasiPenawaranController@getCustomer')->middleware('auth');

  // VERIF BARANG
  Route::get('/verifikasibarang', 'VerifikasiBarangController@index')->middleware('auth');
  Route::post('/verifikasibarangotorisasi', 'VerifikasiBarangController@spOtorisasi')->middleware('auth');
  Route::post('/verifikasibarangbatalotorisasi', 'VerifikasiBarangController@spBatalOtorisasi')->middleware('auth');
  Route::get('/verifikasibarangloadall', 'VerifikasiBarangController@loadAll')->middleware('auth');
  Route::get('/verifikasibarangloadallinfo', 'VerifikasiBarangController@loadAllInfo')->middleware('auth');
  Route::post('/verifikasibarangdetailbarang', 'VerifikasiBarangController@detailBarang')->middleware('auth');
  Route::post('/verifikasibarangdetailbarangx', 'VerifikasiBarangController@detailBarangx')->middleware('auth');
  Route::get('/verifikasibaranglistbarang', 'VerifikasiBarangController@listBarang')->middleware('auth');
  Route::post('/verifikasibarangspadd', 'VerifikasiBarangController@spOtorisasi')->middleware('auth');

  // Terima PO Cust
  Route::get('/terimapocustomer', 'TerimaPoCustomerController@index')->middleware('auth');
  Route::post('/terimapocustomerspadd', 'TerimaPoCustomerController@spAdd')->middleware('auth');
  Route::get('/terimapocustomerloadall', 'TerimaPoCustomerController@loadAll')->middleware('auth');
  Route::get('/terimapocustomerpelanggan', 'TerimaPoCustomerController@getCustomer')->middleware('auth');
  Route::post('/terimapocustomerspclose', 'TerimaPoCustomerController@spClose')->middleware('auth');

  // Ubah PO Cust
  Route::get('/ubahpocust', 'UbahPOCustomerController@index')->middleware('auth');
  Route::get('/ubahPoCustomerListData', 'UbahPOCustomerController@listData')->middleware('auth');

  // SO
  Route::get('/so', 'SOController@index')->middleware('auth');
  Route::post('/soloadall', 'SOController@loadAll')->middleware('auth');
  Route::post('/socekhargaoto', 'SOController@cekHargaOto')->middleware('auth');
Route::get('/socheckhargaddd' , 'SOController@SOCheckHargaAdd')->middleware('auth');

  Route::get('/sospnobukti', 'SOController@getNoBukti')->middleware('auth');
  Route::get('/solistpelanggan' , 'SOController@listPelanggan')->middleware('auth');
  Route::get('/solistsales' , 'SOController@listSales')->middleware('auth');
  Route::get('/solistvalas' , 'SOController@listValas')->middleware('auth');
  Route::get('/solistbackoffice' , 'SOController@listBackOffice')->middleware('auth');
  Route::get('/solistbarang' , 'SOController@listBarang')->middleware('auth');
  Route::post('/solistnopo' , 'SOController@listNoPo')->middleware('auth');

  Route::post('/solistnopotambahso' , 'SOController@listNoPoTambahSO')->middleware('auth');


  Route::post('/solistalamatkirim' , 'SOController@listAlamatKirim')->middleware('auth');
  Route::post('/solistpic' , 'SOController@listPIC')->middleware('auth');
  Route::post('/solistrefpr' , 'SOController@listRefPR')->middleware('auth');
  Route::post('/solistnopenyerahan' , 'SOController@listNoPenyerahan')->middleware('auth');
  Route::post('/solistbarangrefpr' , 'SOController@listBarangRefPR')->middleware('auth');
Route::post('/sospaddtambahsoall' , 'SOController@spAddTambahSOAll')->middleware('auth');
  Route::post('/sogetdetailtambahsoall' , 'SOController@getDetailTambahSOAll')->middleware('auth');

  Route::post('/solistlokasipenerima' , 'SOController@listLokasiPenerima')->middleware('auth');
  Route::post('/socekkredithari' , 'SOController@cekKreditHari')->middleware('auth');
  Route::post('/sospadd' , 'SOController@spAdd')->middleware('auth');

  Route::post('/sospaddtambahso' , 'SOController@spAddTambahSO')->middleware('auth');


  Route::post('/socekharga' , 'SOController@spCekHarga')->middleware('auth');
  Route::get('/socheckhargaddd' , 'SOController@SOCheckHargaAdd')->middleware('auth');
  Route::post('/sogetdetail' , 'SOController@getDetail')->middleware('auth');

  Route::post('/sogetdetailtambahso' , 'SOController@getDetailTambahSO')->middleware('auth');


  Route::post('/sogetsatuanbarang' , 'SOController@getSatuanBarang')->middleware('auth');
  Route::post('/soonchangeheader' , 'SOController@onChangeHeader')->middleware('auth');
  Route::post('/sospupdateso' , 'SOController@spUpdateSO')->middleware('auth');
  Route::post('/soupdateotorisasi', 'SOController@updateOtorisasi')->middleware('auth');
  Route::post('/soupdatebatalotorisasi', 'SOController@updateBatalOtorisasi')->middleware('auth');
  Route::post('/socekotorisasi', 'SOController@cekOtorisasi')->middleware('auth');
  Route::post('/sodetailbarangall' , 'SOController@detailBarangAll')->middleware('auth');
  Route::post('/sodetailCetak', 'SOController@getDetailCetak')->middleware('auth');
  Route::post('/soupdatecbd', 'SOController@updateCBD')->middleware('auth');
Route::post('/soloadsofilter', 'SOController@loadSOFilter')->middleware('auth');





  // closing so
  Route::get('/closingso', 'ClosingSOController@index')->middleware('auth');
  Route::post('/closingsospclosingso', 'ClosingSOController@spClosingSO')->middleware('auth');
  Route::post('/closingsospopenso', 'ClosingSOController@spOpenSO')->middleware('auth');
  Route::get('/closingsoloadall', 'ClosingSOController@loadAll')->middleware('auth');

  // performance
  Route::get('/performance', 'PerformanceController@index')->middleware('auth');
  Route::post('/performancegetdetail', 'PerformanceController@getDetail')->middleware('auth');
  Route::get('/performanceloadall', 'PerformanceController@loadAll')->middleware('auth');
  Route::post('/performancespotoperf', 'PerformanceController@spOtoPerf')->middleware('auth');
  Route::post('/performancespbatalotoperf', 'PerformanceController@spBatalOtoPerf')->middleware('auth');
  Route::post('/performancedetailCetak', 'PerformanceController@getDetailCetak')->middleware('auth');



  // UANG MUKA JUAL
  Route::get('/uangmukajualprint', 'UangMukaJualController@spCetak')->middleware('auth');
  Route::get('/uangmukajual', 'UangMukaJualController@index')->middleware('auth');
  Route::post('/uangmukajualgetdetail', 'UangMukaJualController@getDetail')->middleware('auth');
  Route::post('/uangmukajualspnobukti', 'UangMukaJualController@getNoBukti')->middleware('auth');
  Route::post('/uangmukajualspadd' , 'UangMukaJualController@spAdd')->middleware('auth');
  Route::post('/uangmukajualgetdetailumj', 'UangMukaJualController@getDetailUMJ')->middleware('auth');
  Route::get('/uangmukajualloadall', 'UangMukaJualController@loadAll')->middleware('auth');
  Route::post('/uangmukajualspoto', 'UangMukaJualController@spOto')->middleware('auth');
  Route::post('/uangmukajualspbataloto', 'UangMukaJualController@spBatalOto')->middleware('auth');


  // suratjalan
  Route::get('/suratjalan', 'SuratJalanController@index')->middleware('auth');
  Route::post('/suratjalangetdetail', 'SuratJalanController@getDetail')->middleware('auth');
  Route::get('/suratjalanspnobukti', 'SuratJalanController@getNoBukti')->middleware('auth');
  Route::get('/suratjalanlistgudang' , 'SuratJalanController@listGudang')->middleware('auth');
  Route::get('/suratjalanlistekspedisi' , 'SuratJalanController@listEkspedisi')->middleware('auth');
  Route::post('/suratjalanspadd' , 'SuratJalanController@spAdd')->middleware('auth');
  Route::get('/suratjalanloadall', 'SuratJalanController@loadAll')->middleware('auth');
  Route::post('/suratjalanspotorisasi' , 'SuratJalanController@spOtorisasi')->middleware('auth');
  Route::post('/suratjalanspbatalotorisasi' , 'SuratJalanController@spBatalOtorisasi')->middleware('auth');
  Route::post('/suratjalangetdetailkoreksi', 'SuratJalanController@getDetailKoreksi')->middleware('auth');
  Route::post('/suratjalanspkoreksi' , 'SuratJalanController@spKoreksi')->middleware('auth');
  Route::post('/suratjalanlistbarang' , 'SuratJalanController@listBarang')->middleware('auth');
  Route::post('/suratJalanAddKirimTerima' , 'SuratJalanController@spAddKirimTerima')->middleware('auth');
  Route::post('/suratJalanAddKirimTerimaAcc' , 'SuratJalanController@spAddKirimTerimaAcc')->middleware('auth');



  // retursuratjalan
  Route::get('/retursuratjalan', 'ReturSuratJalanController@index')->middleware('auth');
  Route::get('/retursuratjalanspnobukti', 'ReturSuratJalanController@getNoBukti')->middleware('auth');
  Route::post('/retursuratjalanlistsj' , 'ReturSuratJalanController@listSJ')->middleware('auth');
  Route::get('/retursuratjalanlistcustsuppbaru' , 'ReturSuratJalanController@listCustSuppBaru')->middleware('auth');
  Route::post('/retursuratjalanlistbarang' , 'ReturSuratJalanController@listBarang')->middleware('auth');
  Route::post('/retursuratjalanspadd' , 'ReturSuratJalanController@spAdd')->middleware('auth');
  Route::post('/retursuratjalanspdetail' , 'ReturSuratJalanController@getDetail')->middleware('auth');
  Route::get('/retursuratjalanloadall', 'ReturSuratJalanController@loadAll')->middleware('auth');
  Route::post('/retursuratjalanspoto', 'ReturSuratJalanController@spOtorisasi')->middleware('auth');
  Route::post('/retursuratjalanspbataloto', 'ReturSuratJalanController@spBatalOtorisasi')->middleware('auth');


  // Invoice Penjualan
  Route::get('/invoicepenjualan', 'InvoicePenjualanController@index')->middleware('auth');
  Route::post('/invoicepenjualanlistso', 'InvoicePenjualanController@getListSO')->middleware('auth');
  Route::post('/invoicepenjualanspadd', 'InvoicePenjualanController@spAdd')->middleware('auth');
  Route::post('/invoicepenjualanspdetailkoreksi', 'InvoicePenjualanController@spDetailKoreksi')->middleware('auth');
  Route::post('/invoicepenjualanspdelete', 'InvoicePenjualanController@spDelete')->middleware('auth');
  Route::get('/invoicepenjualanloadall', 'InvoicePenjualanController@loadAll')->middleware('auth');
  Route::post('/invoicepenjualanspotorisasi', 'InvoicePenjualanController@spOtorisasi')->middleware('auth');
  Route::post('/invoicepenjualanspbatalotorisasi', 'InvoicePenjualanController@spBatalOtorisasi')->middleware('auth');
  Route::post('/invoicepenjualanonchangeheader' , 'InvoicePenjualanController@onChangeHeader')->middleware('auth');
  Route::post('/invoicepenjualanonchangedetail' , 'InvoicePenjualanController@onChangeDetail')->middleware('auth');
  Route::post('/invoicepenjualandetailCetak', 'InvoicePenjualanController@getDetailCetak')->middleware('auth');
  Route::post('/invoicepenjualandetailCetakJBG', 'InvoicePenjualanController@getDetailCetak')->middleware('auth');
  Route::post('/invoicepenjualandetailCetak3', 'InvoicePenjualanController@getDetailCetak')->middleware('auth');
  Route::post('/ambilNomorSPB', 'InvoicePenjualanController@getDetailCetakSPB')->middleware('auth');
  Route::post('/invoicePenjualanPrintSPB', 'InvoicePenjualanController@getDetailPenerimaancetak')->middleware('auth');
  Route::post('/invoicepenjualangetdetail', 'InvoicePenjualanController@spDetailKoreksi')->middleware('auth');
  Route::get('/invoicepenjualangetlistinvoicecetak', 'InvoicePenjualanController@getListInvoiceCetak')->middleware('auth');
  Route::post('/invoicepenjualandetailcetakall', 'InvoicePenjualanController@getDetailCetakAll')->middleware('auth');






  // Invoice Jasa
  Route::get('/invoicejasa' , 'InvoiceJasaController@index')->middleware('auth');
  Route::get('/invoicejasaspnobukti' , 'InvoiceJasaController@getNoBukti')->middleware('auth');
  Route::get('/invoicejasalistcustomer' , 'InvoiceJasaController@listCustomer')->middleware('auth');
  Route::get('/invoicejasalistsales' , 'InvoiceJasaController@listSales')->middleware('auth');
  Route::post('/invoicejasalistlokasipenerima' , 'InvoiceJasaController@listLokasiPenerima')->middleware('auth');
  Route::post('/invoicejasaspadd' , 'InvoiceJasaController@spAdd')->middleware('auth');
  Route::post('/invoicejasaspdetail' , 'InvoiceJasaController@spDetail')->middleware('auth');
  Route::post('/invoicejasaonchangeheader' , 'InvoiceJasaController@onChangeHeader')->middleware('auth');
  Route::post('/invoicejasaonchangedetail' , 'InvoiceJasaController@onChangeDetail')->middleware('auth');

  Route::get('/invoicejasaloadall', 'InvoiceJasaController@loadAll')->middleware('auth');



  // Faktur Pajak

  Route::get('/fakturpajak' , 'FakturPajakController@index')->middleware('auth');
  Route::post('/fakturpajakspadd' , 'FakturPajakController@spAdd')->middleware('auth');
  Route::post('/fakturpajakspdelete' , 'FakturPajakController@spDelete')->middleware('auth');
  Route::post('/fakturpajakloadall' , 'FakturPajakController@loadAll')->middleware('auth');
  Route::post('/fakturpajakimportexcel' , 'FakturPajakController@importExcel')->middleware('auth');
  Route::get('/fakturpajakexportexcel' , 'FakturPajakController@spExport')->middleware('auth');

  // Perintah Retur Jual
  Route::get('/perintahreturjualcetak', 'PerintahReturJualController@spCetak')->middleware('auth');
  Route::get('/perintahreturjual' ,'PerintahReturJualController@index')->middleware('auth');
  Route::get('/perintahreturjualspnobukti' , 'PerintahReturJualController@getNoBukti')->middleware('auth');
  // Route::post('/newsetupperiodekerjaupdate' ,'PerintahReturJualMinusController@updatePeriodeKerja')->middleware('auth');
  Route::get('/perintahreturjuallistcustomer' , 'PerintahReturJualController@listCustomer')->middleware('auth');
  Route::post('/perintahreturjuallistnoinvoice' , 'PerintahReturJualController@listNoInvoice')->middleware('auth');
  Route::post('/perintahreturjuallistbarang' , 'PerintahReturJualController@listBarang')->middleware('auth');
  Route::post('/perintahreturjuallistnobeli' , 'PerintahReturJualController@listNoBeli')->middleware('auth');
  Route::post('/perintahreturjualgetdetail' , 'PerintahReturJualController@getDetail')->middleware('auth');
  Route::post('/perintahreturjualspadd' , 'PerintahReturJualController@spAdd')->middleware('auth');
  Route::get('/perintahreturjualloadall' ,'PerintahReturJualController@loadAll')->middleware('auth');
  Route::post('/perintahreturjualspotorisasi', 'PerintahReturJualController@spOtorisasi')->middleware('auth');
  Route::post('/perintahreturjualspbatalotorisasi', 'PerintahReturJualController@spBatalOtorisasi')->middleware('auth');



  // Perintah Retur Jual
  Route::get('/perintahreturjualminus' ,'PerintahReturJualMinusController@index')->middleware('auth');
  Route::get('/perintahreturjualminusspnobukti' , 'PerintahReturJualMinusController@getNoBukti')->middleware('auth');
  // Route::post('/newsetupperiodekerjaupdate' ,'PerintahReturJualMinusController@updatePeriodeKerja')->middleware('auth');
  Route::get('/perintahreturjualminuslistcustomer' , 'PerintahReturJualMinusController@listCustomer')->middleware('auth');
  Route::get('/perintahreturjualminuslistgudang' , 'PerintahReturJualMinusController@listGudang')->middleware('auth');
  Route::post('/perintahreturjualminuslistnoinvoice' , 'PerintahReturJualMinusController@listNoInvoice')->middleware('auth');
  Route::get('/perintahreturjualminuslistbarang' , 'PerintahReturJualMinusController@listBarang')->middleware('auth');
  Route::post('/perintahreturjualminuslistnobeli' , 'PerintahReturJualMinusController@listNoBeli')->middleware('auth');
  Route::post('/perintahreturjualminusgetdetail' , 'PerintahReturJualMinusController@getDetail')->middleware('auth');
  Route::post('/perintahreturjualminusspadd' , 'PerintahReturJualMinusController@spAdd')->middleware('auth');
  Route::get('/perintahreturjualminusloadall' ,'PerintahReturJualMinusController@loadAll')->middleware('auth');
  Route::post('/perintahreturjualminusspotorisasi', 'PerintahReturJualMinusController@spOtorisasi')->middleware('auth');
  Route::post('/perintahreturjualminusspbatalotorisasi', 'PerintahReturJualMinusController@spBatalOtorisasi')->middleware('auth');

  // Retur Penjualan Gudang
  Route::get('/returpenjualangudang' ,'ReturPenjualanGudangController@index')->middleware('auth');
  Route::get('/returpenjualangudangspnobukti' , 'ReturPenjualanGudangController@getNoBukti')->middleware('auth');
  Route::post('/returpenjualangudanggetdetail' , 'ReturPenjualanGudangController@getDetail')->middleware('auth');
  Route::post('/returpenjualangudangspadd' , 'ReturPenjualanGudangController@spAdd')->middleware('auth');
  Route::post('/returpenjualangudanggetdetailpenerimaan' , 'ReturPenjualanGudangController@getDetailPenerimaan')->middleware('auth');
  Route::post('/returpenjualangudangspkoreksi' , 'ReturPenjualanGudangController@spKoreksi')->middleware('auth');
  Route::get('/returpenjualangudangloadall' ,'ReturPenjualanGudangController@loadAll')->middleware('auth');
  Route::post('/returpenjualangudangspotorisasi' , 'ReturPenjualanGudangController@spOtorisasi')->middleware('auth');
  Route::post('/returpenjualangudangspbatalotorisasi' , 'ReturPenjualanGudangController@spBatalOtorisasi')->middleware('auth');
  Route::post('/returpenjualangudangonchangeheader' , 'ReturPenjualanGudangController@onChangeHeader')->middleware('auth');


  // NOTA RETUR Penjualan
  Route::get('/notareturpenjualan', 'NotaReturPenjualanController@index')->middleware('auth');
  Route::post('/notareturpenjualangetdetail', 'NotaReturPenjualanController@getDetail')->middleware('auth');
  Route::post('/notareturpenjualangetdetailnew', 'NotaReturPenjualanController@getDetailNew')->middleware('auth');
  Route::get('/notareturpenjualanspnobukti', 'NotaReturPenjualanController@getNoBukti')->middleware('auth');
  Route::post('/notareturpenjualanlistbarang', 'NotaReturPenjualanController@listBarang')->middleware('auth');
  Route::get('/notareturpenjualanlistvalas', 'NotaReturPenjualanController@listValas')->middleware('auth');
  Route::post('/notareturpenjualanspadd', 'NotaReturPenjualanController@spAdd')->middleware('auth');
  Route::post('/notareturpenjualanspaddall', 'NotaReturPenjualanController@spAddAll')->middleware('auth');
  Route::post('/notareturpenjualanspaddallnew', 'NotaReturPenjualanController@spAddAllNew')->middleware('auth');
  Route::post('/notareturpenjualancekkredithari', 'NotaReturPenjualanController@cekKreditHari')->middleware('auth');
  Route::post('/notareturpenjualanspdeleteall', 'NotaReturPenjualanController@spDeleteAll')->middleware('auth');
  Route::post('/notareturpenjualangetdetailpenerimaan', 'NotaReturPenjualanController@getDetailPenerimaan')->middleware('auth');
  Route::get('/notareturpenjualanloadall', 'NotaReturPenjualanController@loadAll')->middleware('auth');
  Route::post('/notareturpenjualanspotorisasi', 'NotaReturPenjualanController@spOtorisasi')->middleware('auth');
  Route::post('/notareturpenjualanspbatalotorisasi', 'NotaReturPenjualanController@spBatalOtorisasi')->middleware('auth');

  // KREDITNOTE
  Route::get('/kreditnote', 'KreditNoteController@index')->middleware('auth');
  Route::get('/kreditnotespnobukti', 'KreditNoteController@getNoBukti')->middleware('auth');
  Route::get('/kreditnotelistcustomer' , 'KreditNoteController@listCustomer')->middleware('auth');
  Route::post('/kreditnotelistinvoice' , 'KreditNoteController@listInvoice')->middleware('auth');
  Route::post('/kreditnotespadd' , 'KreditNoteController@spAdd')->middleware('auth');
  Route::post('/kreditnotespdetail' , 'KreditNoteController@getDetail')->middleware('auth');
  Route::post('/kreditnotespkoreksi' , 'KreditNoteController@spKoreksi')->middleware('auth');
  Route::get('/kreditnoteloadall', 'KreditNoteController@loadAll')->middleware('auth');
  Route::post('/kreditnotespotorisasi', 'KreditNoteController@spOtorisasi')->middleware('auth');
  Route::post('/kreditnotespbatalotorisasi', 'KreditNoteController@spBatalOtorisasi')->middleware('auth');




  // // PEMBELIAN PERMINTAAN NON AGEN
  // Route::get('/pembelianpermintaannonagen', 'PembelianPermintaanNonAgenController@index')->middleware('auth');
  // Route::get('/pembelianpermintaannonagenspnobukti' , 'PembelianPermintaanNonAgenController@getNoBukti')->middleware('auth');
  // Route::get('/pembelianpermintaannonagenlistbarang' , 'PembelianPermintaanNonAgenController@listBarang')->middleware('auth');
  // Route::post('/pembelianpermintaannonagenspadd', 'PembelianPermintaanNonAgenController@spAdd')->middleware('auth');
  // Route::get('/pembelianpermintaannonagenspdetail' , 'PembelianPermintaanNonAgenController@spDetail')->middleware('auth');
  // Route::get('/pembelianpermintaannonagenloadall' , 'PembelianPermintaanNonAgenController@loadAll')->middleware('auth');
  // Route::post('/pembelianpermintaannonagenspdelete' , 'PembelianPermintaanNonAgenController@spDelete')->middleware('auth');
  // Route::get('/pembelianpermintaannonagenlistdepartemen' , 'PembelianPermintaanNonAgenController@listDepartemen')->middleware('auth');
  // Route::post('/pembelianpermintaannonagenupdateotorisasi' , 'PembelianPermintaanNonAgenController@updateOtorisasi')->middleware('auth');




// cetak tanda terima

// Route::post('/cetakpengajuandphspnobukti', 'BankController@getNoBukti')->middleware('auth');
Route::get('/cetaktandaterima' , 'CetakTandaTerimaController@index')->middleware('auth');
Route::post('/cetaktandaterimadetailkoreksi' , 'CetakTandaTerimaController@detailKoreksi')->middleware('auth');
Route::post('/cetaktandaterimadetailoutstanding' , 'CetakTandaTerimaController@getDetailOutstanding')->middleware('auth');
Route::post('/cetaktandaterimalistproses' , 'CetakTandaTerimaController@listProses')->middleware('auth');

Route::post('/cetaktandaterimaspadd' , 'CetakTandaTerimaController@spAdd')->middleware('auth');
Route::post('/cetaktandaterimaspkoreksi' , 'CetakTandaTerimaController@spKoreksi')->middleware('auth');
Route::post('/cetaktandaterimaspproses' , 'CetakTandaTerimaController@spProses')->middleware('auth');
Route::get('/cetaktandaterimaloadall' , 'CetakTandaTerimaController@loadAll' )->middleware('auth');
Route::post('/cetaktandaterimadetailCetak', 'CetakTandaTerimaController@getDetailCetak')->middleware('auth');


});
