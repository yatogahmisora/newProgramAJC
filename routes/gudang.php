<?php


Route::namespace('Gudang')->group(function () {
// PENYERAHAN GUDANG
Route::get('/pemakaianbarang' , 'PemakaianBarangController@index')->middleware('auth');

// Route::get('/getnobuktipenyerahangudang', 'PemakaianBarangController@getNoBukti')->middleware('auth');
Route::post('/pemakaianbarangdetailoutstanding', 'PemakaianBarangController@getDetailOutstanding')->middleware('auth');
Route::post('/pemakaianbarangdetailadd', 'PemakaianBarangController@getDetailAdd')->middleware('auth');
Route::post('/pemakaianbarangspadd' ,'PemakaianBarangController@addPenyerahanGudang')->middleware('auth');
Route::post('/pemakaianbarangdetailpenerimaan' , 'PemakaianBarangController@getDetailPenerimaan')->middleware('auth');
Route::get('/pemakaianbarangloadall', 'PemakaianBarangController@loadAll')->middleware('auth');
Route::post('/pemakaianbarangkoreksiaddlist' , 'PemakaianBarangController@getKoreksiAddList')->middleware('auth');
Route::post('/pemakaianbarangspkoreksi', 'PemakaianBarangController@spKoreksi')->middleware('auth');
Route::post('/pemakaianbarangdetailCetak', 'PemakaianBarangController@getDetailCetak')->middleware('auth');

// PEMBEBANAN PEMAKAIAN
Route::get('/pembebananpemakaian' , 'PembebananPemakaianController@index')->middleware('auth');
Route::post('/pembebananpemakaiangetdetailpenerimaan' , 'PembebananPemakaianController@getDetailPenerimaan')->middleware('auth');
Route::get('/pembebananpemakaianlistperkiraan', 'PembebananPemakaianController@Perkiraan')->middleware('auth');
Route::get('/pembebananpemakaianlistcosting', 'PembebananPemakaianController@Costing')->middleware('auth');
Route::get('/pembebananpemakaianlistsubcosting', 'PembebananPemakaianController@SubCosting')->middleware('auth');
Route::get('/pembebananpemakaianloadall' ,'PembebananPemakaianController@loadAll')->middleware('auth');
Route::post('/pembebananpemakaianspkoreksi' , 'PembebananPemakaianController@spKoreksi')->middleware('auth');
Route::post('/pembebananpemakaianspotorisasi' , 'PembebananPemakaianController@spOtorisasi')->middleware('auth');
Route::post('/pembebananpemakaianspbatalotorisasi' , 'PembebananPemakaianController@spBatalOtorisasi')->middleware('auth');
Route::post('/pembebananpemakaiandetailCetak', 'PembebananPemakaianController@getDetailCetak')->middleware('auth');

// CLOSING TRANSFER
Route::get('/closingtransfer' ,'ClosingTransferController@index')->middleware('auth');
Route::get('/closingtransferloadall' ,'ClosingTransferController@loadAll')->middleware('auth');
Route::post('/closingtransferlock' ,'ClosingTransferController@lock')->middleware('auth');
Route::post('/closingtransferunlock' ,'ClosingTransferController@unlock')->middleware('auth');

// TERIMA TRANSFER BARANG
Route::get('/terimatransferbarang' ,'TerimaTransferBarangController@index')->middleware('auth');
Route::get('/terimatransferbarangspnobukti' , 'TerimaTransferBarangController@getNoBukti')->middleware('auth');
Route::post('/terimatransferbaranggetdetail' , 'TerimaTransferBarangController@getDetail')->middleware('auth');
Route::post('/terimatransferbarangspadd' , 'TerimaTransferBarangController@spAdd')->middleware('auth');
Route::post('/terimatransferbaranggetdetailtransferbarang' , 'TerimaTransferBarangController@getDetail')->middleware('auth');
Route::post('/terimatransferbaranggetdetailpenerimaan' , 'TerimaTransferBarangController@getDetailPenerimaan')->middleware('auth');
Route::post('/terimatransferbarangspkoreksi' , 'TerimaTransferBarangController@spKoreksi')->middleware('auth');
Route::post('/terimatransferbarangonchangeheader' , 'TerimaTransferBarangController@onChangeHeader')->middleware('auth');
Route::get('/terimatransferbarangloadall' ,'TerimaTransferBarangController@loadAll')->middleware('auth');
Route::post('/terimatransferbarangspotorisasi' , 'TerimaTransferBarangController@spOtorisasi')->middleware('auth');
Route::post('/terimatransferbarangspbatalotorisasi' , 'TerimaTransferBarangController@spBatalOtorisasi')->middleware('auth');
Route::post('/trfbrgCekQntStock', 'TransferBarangController@cekQntStock')->middleware('auth');
Route::post('/trfbrgsimpandetail', 'TransferBarangController@simpanDetail')->middleware('auth');

// PERMINTAAN PENYERAHAN GUDANG

Route::get('/permintaanpemakaian' , 'PermintaanPemakaianController@index')->middleware('auth');
// Route::get('/getnobuktipermintaanpenyerahangudang' , 'PermintaanPemakaianController@getNoBukti')->middleware('auth');
Route::post('/permintaanpemakaianbatalotorisasi' , 'PermintaanPemakaianController@updateBatalOtorisasi')->middleware('auth');
Route::post('/permintaanpemakaianotorisasi' , 'PermintaanPemakaianController@updateOtorisasi')->middleware('auth');
Route::get('/permintaanpemakaianlistbarang' , 'PermintaanPemakaianController@listBarang')->middleware('auth');
Route::get('/permintaanpemakaianlistgudang' , 'PermintaanPemakaianController@listGudang')->middleware('auth');
Route::post('/permintaanpemakaiandetailpenerimaan' , 'PermintaanPemakaianController@detailPenerimaan')->middleware('auth');
Route::get('/permintaanpemakaianloadall' , 'PermintaanPemakaianController@loadAll')->middleware('auth');
Route::post('/permintaanpemakaianspadd' , 'PermintaanPemakaianController@spAdd')->middleware('auth');
Route::post('/permintaanpemakaiandetailCetak', 'PermintaanPemakaianController@getDetailCetak')->middleware('auth');


// GUDANG PERMINTAAN SAMPLE
Route::get('/gudangpermintaansample', 'GudangPermintaanSampleController@index')->middleware('auth');
Route::get('/permintaansamplespnobukti' , 'GudangPermintaanSampleController@getNoBukti')->middleware('auth');
Route::get('/permintaansamplelistcustomer' , 'GudangPermintaanSampleController@Customer')->middleware('auth');
Route::get('/permintaansamplecekrefpr', 'GudangPermintaanSampleController@cekRefPR')->middleware('auth');
Route::get('/permintaansamplelistsales' , 'GudangPermintaanSampleController@Sales')->middleware('auth');
Route::get('/permintaansamplelistgudang' , 'GudangPermintaanSampleController@Gudang')->middleware('auth');
Route::get('/permintaansamplelistbarang' , 'GudangPermintaanSampleController@listBarang')->middleware('auth');
Route::post('/permintaansamplespadd', 'GudangPermintaanSampleController@spAdd')->middleware('auth');
Route::get('/permintaansamplespdetail' , 'GudangPermintaanSampleController@spDetail')->middleware('auth');
Route::get('/permintaansampleloadall' , 'GudangPermintaanSampleController@loadAll')->middleware('auth');
Route::post('/permintaansamplespdelete' , 'GudangPermintaanSampleController@spDelete')->middleware('auth');
Route::post('/permintaansampleonchangeheader' , 'GudangPermintaanSampleController@onChangeHeader')->middleware('auth');
Route::post('/permintaansampleupdateotorisasi' , 'GudangPermintaanSampleController@updateOtorisasi')->middleware('auth');
Route::post('/permintaansampleupdatebatalotorisasi' , 'GudangPermintaanSampleController@updateBatalOtorisasi')->middleware('auth');
Route::post('/permintaansampledetailCetak', 'GudangPermintaanSampleController@getDetailCetak')->middleware('auth');


// Penyerahan Sample Gudang
Route::get('/gudangpenyerahansample' ,'GudangPenyerahanSampleController@index')->middleware('auth');
Route::get('/penyerahansamplespnobukti' , 'GudangPenyerahanSampleController@getNoBukti')->middleware('auth');
Route::post('/penyerahansamplegetdetail' , 'GudangPenyerahanSampleController@getDetail')->middleware('auth');
Route::post('/penyerahansamplespadd' , 'GudangPenyerahanSampleController@spAdd')->middleware('auth');
Route::post('/penyerahansamplegetdetailpenerimaan' , 'GudangPenyerahanSampleController@getDetailPenerimaan')->middleware('auth');
Route::post('/penyerahansamplespkoreksi' , 'GudangPenyerahanSampleController@spKoreksi')->middleware('auth');
Route::post('/penyerahansamplegetdetailpenerimaanadd' , 'GudangPenyerahanSampleController@getDetail')->middleware('auth');
Route::post('/penyerahansampleonchangeheader' , 'GudangPenyerahanSampleController@onChangeHeader')->middleware('auth');
Route::get('/penyerahansampleloadall' ,'GudangPenyerahanSampleController@loadAll')->middleware('auth');
Route::post('/penyerahansamplespotorisasi' , 'GudangPenyerahanSampleController@spOtorisasi')->middleware('auth');
Route::post('/penyerahansamplespbatalotorisasi' , 'GudangPenyerahanSampleController@spBatalOtorisasi')->middleware('auth');
Route::post('/penyerahansampledetailCetak', 'GudangPenyerahanSampleController@getDetailCetak')->middleware('auth');

// RETUR PENYERAHAN SAMPLE
Route::get('/gudangreturpenyerahansample', 'GudangReturPenyerahanSampleController@index')->middleware('auth');
Route::get('/returpenyerahansamplespnobukti' , 'GudangReturPenyerahanSampleController@getNoBukti')->middleware('auth');
Route::get('/returpenyerahansamplenosample' , 'GudangReturPenyerahanSampleController@SerahSample')->middleware('auth');
Route::get('/returpenyerahansamplelistsales' , 'GudangReturPenyerahanSampleController@Sales')->middleware('auth');
Route::get('/returpenyerahansamplelistbarang' , 'GudangReturPenyerahanSampleController@listBarang')->middleware('auth');
Route::post('/returpenyerahansamplespadd', 'GudangReturPenyerahanSampleController@spAdd')->middleware('auth');
Route::get('/returpenyerahansamplespdetail' , 'GudangReturPenyerahanSampleController@spDetail')->middleware('auth');
Route::get('/returpenyerahansampleloadall' , 'GudangReturPenyerahanSampleController@loadAll')->middleware('auth');
Route::post('/returpenyerahansamplespdelete' , 'GudangReturPenyerahanSampleController@spDelete')->middleware('auth');
Route::post('/returpenyerahansampleupdateotorisasi' , 'GudangReturPenyerahanSampleController@updateOtorisasi')->middleware('auth');
Route::post('/returpenyerahansampleupdatebatalotorisasi' , 'GudangReturPenyerahanSampleController@updateBatalOtorisasi')->middleware('auth');
Route::post('/returpenyerahansampledetailCetak', 'GudangReturPenyerahanSampleController@getDetailCetak')->middleware('auth');


// Gudang Closing Penyerahan Sample
Route::get('/gudangclosingpenyerahansample' ,'GudangClosingPenyerahanSampleController@index')->middleware('auth');
Route::get('/closingpenyerahansampleloadall' ,'GudangClosingPenyerahanSampleController@loadAll')->middleware('auth');
Route::post('/closingpenyerahansamplelock' ,'GudangClosingPenyerahanSampleController@lock')->middleware('auth');
Route::post('/closingpenyerahansampleunlock' ,'GudangClosingPenyerahanSampleController@unlock')->middleware('auth');


// GUDANG PERMINTAAN KONSINYASI
Route::get('/gudangpermintaankonsinyasi', 'GudangPermintaanKonsinyasiController@index')->middleware('auth');
Route::get('/permintaankonsinyasispnobukti' , 'GudangPermintaanKonsinyasiController@getNoBukti')->middleware('auth');
Route::get('/permintaankonsinyasilistcustomer' , 'GudangPermintaanKonsinyasiController@Customer')->middleware('auth');
Route::get('/permintaankonsinyasicekrefpr', 'GudangPermintaanKonsinyasiController@cekRefPR')->middleware('auth');
Route::get('/permintaankonsinyasilistsales' , 'GudangPermintaanKonsinyasiController@Sales')->middleware('auth');
Route::get('/permintaankonsinyasilistgudang' , 'GudangPermintaanKonsinyasiController@Gudang')->middleware('auth');
Route::get('/permintaankonsinyasilistbarang' , 'GudangPermintaanKonsinyasiController@listBarang')->middleware('auth');
Route::post('/permintaankonsinyasispadd', 'GudangPermintaanKonsinyasiController@spAdd')->middleware('auth');
Route::get('/permintaankonsinyasispdetail' , 'GudangPermintaanKonsinyasiController@spDetail')->middleware('auth');
Route::get('/permintaankonsinyasiloadall' , 'GudangPermintaanKonsinyasiController@loadAll')->middleware('auth');
Route::post('/permintaankonsinyasispdelete' , 'GudangPermintaanKonsinyasiController@spDelete')->middleware('auth');
Route::post('/permintaankonsinyasionchangeheader' , 'GudangPermintaanKonsinyasiController@onChangeHeader')->middleware('auth');
Route::post('/permintaankonsinyasiupdateotorisasi' , 'GudangPermintaanKonsinyasiController@updateOtorisasi')->middleware('auth');
Route::post('/permintaankonsinyasiupdatebatalotorisasi' , 'GudangPermintaanKonsinyasiController@updateBatalOtorisasi')->middleware('auth');
Route::post('/permintaankonsinyasidetailCetak', 'GudangPermintaanKonsinyasiController@getDetailCetak')->middleware('auth');
Route::get('/permintaankonsinyasilistlokasi', 'GudangPermintaanKonsinyasiController@listLokasi')->middleware('auth');

// Penyerahan Konsinyasi Gudang
Route::get('/gudangpenyerahankonsinyasi' ,'GudangPenyerahanKonsinyasiController@index')->middleware('auth');
Route::get('/penyerahankonsinyasispnobukti' , 'GudangPenyerahanKonsinyasiController@getNoBukti')->middleware('auth');
Route::post('/penyerahankonsinyasigetdetail' , 'GudangPenyerahanKonsinyasiController@getDetail')->middleware('auth');
Route::post('/penyerahankonsinyasispadd' , 'GudangPenyerahanKonsinyasiController@spAdd')->middleware('auth');
Route::post('/penyerahankonsinyasigetdetailpenerimaan' , 'GudangPenyerahanKonsinyasiController@getDetailPenerimaan')->middleware('auth');
Route::post('/penyerahankonsinyasispkoreksi' , 'GudangPenyerahanKonsinyasiController@spKoreksi')->middleware('auth');
Route::post('/penyerahankonsinyasionchangeheader' , 'GudangPenyerahanKonsinyasiController@onChangeHeader')->middleware('auth');
Route::get('/penyerahankonsinyasiloadall' ,'GudangPenyerahanKonsinyasiController@loadAll')->middleware('auth');
Route::post('/penyerahankonsinyasispotorisasi' , 'GudangPenyerahanKonsinyasiController@spOtorisasi')->middleware('auth');
Route::post('/penyerahankonsinyasispbatalotorisasi' , 'GudangPenyerahanKonsinyasiController@spBatalOtorisasi')->middleware('auth');
Route::post('/penyerahankonsinyasigetdetailpenerimaanadd' , 'GudangPenyerahanKonsinyasiController@getDetail')->middleware('auth');
Route::post('/penyerahankonsinyasidetailCetak', 'GudangPenyerahanKonsinyasiController@getDetailCetak')->middleware('auth');

// RETUR PENYERAHAN KONSINYASI
Route::get('/gudangreturpenyerahankonsinyasi', 'GudangReturPenyerahanKonsinyasiController@index')->middleware('auth');
Route::get('/returpenyerahankonsinyasispnobukti' , 'GudangReturPenyerahanKonsinyasiController@getNoBukti')->middleware('auth');
Route::get('/returpenyerahankonsinyasinokonsinyasi' , 'GudangReturPenyerahanKonsinyasiController@SerahKonsinyasi')->middleware('auth');
Route::get('/returpenyerahankonsinyasilistsales' , 'GudangReturPenyerahanKonsinyasiController@Sales')->middleware('auth');
Route::get('/returpenyerahankonsinyasilistbarang' , 'GudangReturPenyerahanKonsinyasiController@listBarang')->middleware('auth');
Route::post('/returpenyerahankonsinyasispadd', 'GudangReturPenyerahanKonsinyasiController@spAdd')->middleware('auth');
Route::get('/returpenyerahankonsinyasispdetail' , 'GudangReturPenyerahanKonsinyasiController@spDetail')->middleware('auth');
Route::get('/returpenyerahankonsinyasiloadall' , 'GudangReturPenyerahanKonsinyasiController@loadAll')->middleware('auth');
Route::post('/returpenyerahankonsinyasispdelete' , 'GudangReturPenyerahanKonsinyasiController@spDelete')->middleware('auth');
Route::post('/returpenyerahankonsinyasiupdateotorisasi' , 'GudangReturPenyerahankonsinyasiController@updateOtorisasi')->middleware('auth');
Route::post('/returpenyerahankonsinyasiupdatebatalotorisasi' , 'GudangReturPenyerahanKonsinyasiController@updateBatalOtorisasi')->middleware('auth');
Route::post('/returpenyerahankonsinyasidetailCetak', 'GudangReturPenyerahanKonsinyasiController@getDetailCetak')->middleware('auth');

// PERINTAH OPNAME
Route::get('/perintahopname' , 'PerintahOpnameController@index')->middleware('auth');
Route::post('/perintahopnamespdetail' , 'PerintahOpnameController@getDetail')->middleware('auth');
Route::get('/perintahopnamelistgudang' , 'PerintahOpnameController@listGudang')->middleware('auth');
Route::get('/perintahopnamelistmerk' , 'PerintahOpnameController@listMerk')->middleware('auth');
Route::get('/perintahopnamelistheadgroup' , 'PerintahOpnameController@listHeadGroup')->middleware('auth');
Route::post('/perintahopnamelistkategori' , 'PerintahOpnameController@listKategori')->middleware('auth');
Route::post('/perintahopnamelistsubkategori' , 'PerintahOpnameController@listSubKategori')->middleware('auth');
Route::post('/perintahopnamelistbarang' , 'PerintahOpnameController@listBarang')->middleware('auth');
Route::post('/perintahopnamespadd' , 'PerintahOpnameController@spAdd')->middleware('auth');
Route::get('/perintahopnameloadall' , 'PerintahOpnameController@loadAll')->middleware('auth');
Route::post('/perintahopnamespkoreksi' , 'PerintahOpnameController@spKoreksi')->middleware('auth');
Route::post('/perintahopnamespotorisasi' , 'PerintahOpnameController@spOtorisasi')->middleware('auth');
Route::post('/perintahopnamespbatalotorisasi' , 'PerintahOpnameController@spBatalOtorisasi')->middleware('auth');
Route::post('/perintahopnamedetailCetak', 'PerintahOpnameController@getDetailCetak')->middleware('auth');
 
// BERITA ACARA OPNAME
Route::get('/beritaacaraopname', 'BeritaAcaraOpnameController@index')->middleware('auth');
Route::post('/beritaacaraopnamedetailkoreksi', 'BeritaAcaraOpnameController@getDetailKoreksi')->middleware('auth');
Route::post('/beritaacaraopnamelistadd', 'BeritaAcaraOpnameController@listAdd')->middleware('auth');
Route::post('/beritaacaraopnamelistdetailadd', 'BeritaAcaraOpnameController@listAdd')->middleware('auth');
Route::post('/beritaacaraopnamespdelete', 'BeritaAcaraOpnameController@spDelete')->middleware('auth');
Route::get('/beritaacaraopnameloadall', 'BeritaAcaraOpnameController@loadAll')->middleware('auth');
Route::post('/beritaacaraopnamespadd', 'BeritaAcaraOpnameController@spAdd')->middleware('auth');
Route::post('/beritaacaraopnamespkoreksi', 'BeritaAcaraOpnameController@spKoreksi')->middleware('auth');
Route::post('/beritaacaraopnamespotorisasi' , 'BeritaAcaraOpnameController@spOtorisasi')->middleware('auth');
Route::post('/beritaacaraopnamespbatalotorisasi' , 'BeritaAcaraOpnameController@spBatalOtorisasi')->middleware('auth');
Route::post('/beritaacaraopnamespupdateheader' , 'BeritaAcaraOpnameController@spUpdateHeader')->middleware('auth');
Route::post('/beritaacaraopnamedetailCetak', 'BeritaAcaraOpnameController@getDetailCetak')->middleware('auth');

// OPNAME BARANG
Route::get('/opnamebarang', 'OpnameBarangController@index')->middleware('auth');
Route::post('/opnamebarangdetailkoreksi', 'OpnameBarangController@getDetailKoreksi')->middleware('auth');
Route::post('/opnamebaranglistadd', 'OpnameBarangController@listAdd')->middleware('auth');
Route::post('/opnamebarangspdelete', 'OpnameBarangController@spDelete')->middleware('auth');
Route::get('/opnamebarangloadall', 'OpnameBarangController@loadAll')->middleware('auth');
Route::post('/opnamebarangspadd', 'OpnameBarangController@spAdd')->middleware('auth');
Route::post('/opnamebarangspkoreksi', 'OpnameBarangController@spKoreksi')->middleware('auth');
Route::post('/opnamebarangspotorisasi' , 'OpnameBarangController@spOtorisasi')->middleware('auth');
Route::post('/opnamebarangspbatalotorisasi' , 'OpnameBarangController@spBatalOtorisasi')->middleware('auth');
Route::post('/opnamebarangspupdateheader' , 'OpnameBarangController@spUpdateHeader')->middleware('auth');
Route::get('/opnamebaranglistpropname', 'OpnameBarangController@listPROpname')->middleware('auth');
Route::post('/opnamebarangspaddpropname', 'OpnameBarangController@spAddPROpname')->middleware('auth');
Route::post('/opnamebarangspkoreksinonbap', 'OpnameBarangController@spKoreksiNonBap')->middleware('auth');
Route::post('/opnamebarangdetailCetak', 'OpnameBarangController@getDetailCetak')->middleware('auth');


// KOREKSI STOCK
Route::get('/koreksistock' , 'KoreksiStockController@index')->middleware('auth');
Route::post('/koreksistockspdetail' , 'KoreksiStockController@getDetail')->middleware('auth');
Route::get('/koreksistocklistgudang' , 'KoreksiStockController@listGudang')->middleware('auth');
Route::post('/koreksistocklistbarang' , 'KoreksiStockController@listBarang')->middleware('auth');
Route::post('/koreksistockspadd', 'KoreksiStockController@spAdd')->middleware('auth');
Route::get('/koreksistockloadall', 'KoreksiStockController@loadAll')->middleware('auth');
Route::post('/koreksistockspotorisasi' , 'KoreksiStockController@spOtorisasi')->middleware('auth');
Route::post('/koreksistockspbatalotorisasi' , 'KoreksiStockController@spBatalOtorisasi')->middleware('auth');
Route::post('/koreksistockspupdateheader' , 'KoreksiStockController@spUpdateHeader')->middleware('auth');
Route::post('/koreksistockdetailCetak', 'KoreksiStockController@getDetailCetak')->middleware('auth');

// UBAH KEMASAN BARANG
Route::get('/ubahkemasanbarang', 'UbahKemasanBarangController@index')->middleware('auth');
Route::get('/kmbjloadall', 'UbahKemasanBarangController@loadAll')->middleware('auth');
Route::get('/kmbjlistgudang' , 'UbahKemasanBarangController@listGudang')->middleware('auth');
Route::get('/kmbjlistbarang' , 'UbahKemasanBarangController@listBarang')->middleware('auth');
Route::post('/kmbjspadd' , 'UbahKemasanBarangController@spAdd')->middleware('auth');
Route::post('/kmbjonchangeheader' , 'UbahKemasanBarangController@onChangeHeader')->middleware('auth');
Route::post('/kmbjgetdetail' , 'UbahKemasanBarangController@getDetail')->middleware('auth');
Route::post('/kmbjcekotorisasi', 'UbahKemasanBarangController@cekOtorisasi')->middleware('auth');
Route::post('/kmbjupdateotorisasi', 'UbahKemasanBarangController@updateOtorisasi')->middleware('auth');
Route::post('/kmbjupdatebatalotorisasi', 'UbahKemasanBarangController@updateBatalOtorisasi')->middleware('auth');
Route::post('/kmbjdetailCetak', 'UbahKemasanBarangController@getDetailCetak')->middleware('auth');

// PERMINTAAN TRANSFER BARANG
Route::get('/gudangpermintaantrfbrg' , 'PermintaanTransferBarangController@index')->middleware('auth');
Route::get('/prtlistgudangasal' , 'PermintaanTransferBarangController@listGudangAsal')->middleware('auth');
Route::get('/prtlistgudangtujuan' , 'PermintaanTransferBarangController@listGudangTujuan')->middleware('auth');
Route::get('/prtlistbarang' , 'PermintaanTransferBarangController@listBarang')->middleware('auth');
Route::get('/prtloadall' , 'PermintaanTransferBarangController@loadAll')->middleware('auth');
Route::post('/ceksatuanbarang' , 'PermintaanTransferBarangController@cekSatuanBarang')->middleware('auth');
Route::post('/prtspadd' , 'PermintaanTransferBarangController@spAdd')->middleware('auth');
Route::post('/prtgetdetail' , 'PermintaanTransferBarangController@getDetail')->middleware('auth');
Route::post('/prtcekotorisasi' , 'PermintaanTransferBarangController@cekOtorisasi')->middleware('auth');
Route::post('/prtupdateotorisasi' , 'PermintaanTransferBarangController@updateOtorisasi')->middleware('auth');
Route::post('/prtupdatebatalotorisasi' , 'PermintaanTransferBarangController@updateBatalOtorisasi')->middleware('auth');
Route::post('/prtonchangeheader' , 'PermintaanTransferBarangController@onChangeHeader')->middleware('auth');
Route::post('/prtdetailCetak', 'PermintaanTransferBarangController@getDetailCetak')->middleware('auth');

//TRANSFER BARANG
Route::get('/gudangtrfbrg' , 'TransferBarangController@index')->middleware('auth');
Route::get('/trfbrgcekotorisasi' , 'TransferBarangController@cekOtorisasi')->middleware('auth');
Route::get('/trfbrgloadall' , 'TransferBarangController@loadAll')->middleware('auth');
Route::post('/trfbrggetdetail' , 'TransferBarangController@getDetail')->middleware('auth');
Route::post('/trfbrggetdetailedit' , 'TransferBarangController@getDetailEdit')->middleware('auth');
Route::post('/trfbrgspadd' , 'TransferBarangController@spAdd')->middleware('auth');
Route::post('/trfbrgdeletetransfer' , 'TransferBarangController@deleteTransfer')->middleware('auth');
Route::post('/trfbrgonchangeqnt' , 'TransferBarangController@onChangeQnt')->middleware('auth');
Route::post('/trfbrgupdateotorisasi' , 'TransferBarangController@updateOtorisasi')->middleware('auth');
Route::post('/trfbrgupdatebatalotorisasi' , 'TransferBarangController@updateBatalOtorisasi')->middleware('auth');
Route::post('/trfbrggetdetaileditAdd' , 'TransferBarangController@getDetail')->middleware('auth');

Route::post('/trfbrgCekQntStock' , 'TransferBarangController@cekQntStock')->middleware('auth');
Route::post('/trfbrgdetailCetak', 'TransferBarangController@getDetailCetak')->middleware('auth');

// PEMBEBANAN SAMPLE
Route::get('/pembebanansample', 'PembebananSampleController@index')->middleware('auth');
Route::get('/bbsloadall', 'PembebananSampleController@loadAll')->middleware('auth');
Route::get('/bbslistnoserahsample' , 'PembebananSampleController@listNoSerahSample')->middleware('auth');
Route::get('/bbslistsales' , 'PembebananSampleController@listSales')->middleware('auth');
Route::get('/bbslistcustomer' , 'PembebananSampleController@listCustomer')->middleware('auth');
Route::get('/bbslistbarang' , 'PembebananSampleController@listBarang')->middleware('auth');
Route::get('/bbslistgudang' , 'PembebananSampleController@listGudang')->middleware('auth');
Route::get('/bbsgetstockserahsample', 'PembebananSampleController@getStockSerahSample')->middleware('auth');
Route::post('/bbsspadd' , 'PembebananSampleController@spAdd')->middleware('auth');
Route::post('/bbsgetdetail' , 'PembebananSampleController@getDetail')->middleware('auth');
Route::post('/bbscekotorisasi', 'PembebananSampleController@cekOtorisasi')->middleware('auth');
Route::post('/bbsupdateotorisasi', 'PembebananSampleController@updateOtorisasi')->middleware('auth');
Route::post('/bbsupdatebatalotorisasi', 'PembebananSampleController@updateBatalOtorisasi')->middleware('auth');
Route::post('/bbsdetailCetak', 'PembebananSampleController@getDetailCetak')->middleware('auth');

});
