<?php

// KAS
Route::namespace('Accounting')->group(function () {
Route::get('/kas', 'KasController@index')->middleware('auth');
Route::get('/kaslistkasheader', 'KasController@listKasHeader')->middleware('auth');
Route::post('/kaslistlawan', 'KasController@listLawan')->middleware('auth');
Route::post('/kaslistbon', 'KasController@listBon')->middleware('auth');
Route::post('/kaslistsubcosting', 'KasController@listSubCosting')->middleware('auth');
Route::post('/kaslistcosting', 'KasController@listCosting')->middleware('auth');
Route::post('/kaschangekembaliuang', 'KasController@changeKembaliUang')->middleware('auth');

Route::post('/kaslistakumulasi', 'KasController@listAkumulasi')->middleware('auth');

Route::get('/kaslistakumulasiinput', 'KasController@listAkumulasiInput')->middleware('auth');
Route::get('/kaslistbiayainput', 'KasController@listBiayaInput')->middleware('auth');

Route::post('/kasgetnourutaktiva' , 'KasController@getNoUrutAktiva')->middleware('auth');
Route::post('/kasspaddnewaktiva' , 'KasController@spAddNewAktiva')->middleware('auth');

Route::post('/kaslistaktiva', 'KasController@listAktiva')->middleware('auth');
Route::post('/kaslistdetailaktiva', 'KasController@listDetailAktiva')->middleware('auth');
Route::post('/kasupdatedbaktivadet', 'KasController@updateDBAktivaDet')->middleware('auth');
Route::post('/kasspaddaktiva', 'KasController@spAddAktiva')->middleware('auth');

Route::get('/kaslistdepartemen', 'KasController@listDepartemen')->middleware('auth');
Route::get('/kaslistdevisi', 'KasController@listDevisi')->middleware('auth');
Route::get('/kaslistvalas', 'KasController@listValas')->middleware('auth');
Route::post('/kasspadd', 'KasController@spAdd')->middleware('auth');
Route::post('/kasspdetail', 'KasController@getDetail')->middleware('auth');
Route::get('/kasloadall', 'KasController@loadAll')->middleware('auth');
Route::get('/kaslistdph', 'KasController@listDPH')->middleware('auth');
Route::get('/kaslistdphuht', 'KasController@listDPHUHT')->middleware('auth');
Route::get('/kaslistdpp', 'KasController@listDPP')->middleware('auth');
Route::get('/kaslistcustsupp', 'KasController@listCustsupp')->middleware('auth');
Route::get('/kaslistcustsuppx', 'KasController@listCustSuppX')->middleware('auth');
Route::post('/kaslisttunai', 'KasController@listTunai')->middleware('auth');
Route::get('/kaslisttunaix', 'KasController@listTunaiX')->middleware('auth');
Route::post('/kaslistcustsupptunai', 'KasController@listCustSuppTunai')->middleware('auth');


Route::post('/kassptemphutpiut', 'KasController@spTempHutPiut')->middleware('auth');

Route::get('/kaslistcustsuppumb', 'KasController@listCustsuppUMB')->middleware('auth');
Route::post('/kasprosesumb', 'KasController@prosesUMB')->middleware('auth');
Route::post('/kaslistumb', 'KasController@listUMB')->middleware('auth');
Route::post('/kasspadddppdph', 'KasController@spAddDPPDPH')->middleware('auth');
Route::post('/kasspaddtemprumjual', 'KasController@spAddTempRUMJUAL')->middleware('auth');
Route::post('/kasspdeletetemprumjual', 'KasController@spDeleteTempRUMJUAL')->middleware('auth');
Route::post('/kasspupdatetemprumjual', 'KasController@spUpdateTempRUMJUAL')->middleware('auth');
Route::post('/kasspotorisasi', 'KasController@spOtorisasi')->middleware('auth');
Route::post('/kasspbatalotorisasi', 'KasController@spBatalOtorisasi')->middleware('auth');
Route::post('/kasdetailCetak', 'KasController@getDetailCetak')->middleware('auth');



// Bank
Route::get('/bank', 'BankController@index')->middleware('auth');
Route::get('/banklistkasheader', 'BankController@listKasHeader')->middleware('auth');
Route::post('/banklistlawan', 'BankController@listLawan')->middleware('auth');
Route::post('/banklistsubcosting', 'BankController@listSubCosting')->middleware('auth');
Route::post('/banklistcosting', 'BankController@listCosting')->middleware('auth');

Route::post('/banklistakumulasi', 'BankController@listAkumulasi')->middleware('auth');

Route::get('/banklistakumulasiinput', 'KasController@listAkumulasiInput')->middleware('auth');
Route::get('/banklistbiayainput', 'KasController@listBiayaInput')->middleware('auth');

Route::post('/bankgetnourutaktiva' , 'KasController@getNoUrutAktiva')->middleware('auth');
Route::post('/bankspaddnewaktiva' , 'KasController@spAddNewAktiva')->middleware('auth');


Route::post('/banklistaktiva', 'BankController@listAktiva')->middleware('auth');
Route::post('/banklistdetailaktiva', 'BankController@listDetailAktiva')->middleware('auth');
Route::post('/bankupdatedbaktivadet', 'BankController@updateDBAktivaDet')->middleware('auth');
Route::post('/bankspaddaktiva', 'BankController@spAddAktiva')->middleware('auth');



Route::post('/bankspnobukti', 'BankController@getNoBukti')->middleware('auth');
Route::get('/banklistdepartemen', 'BankController@listDepartemen')->middleware('auth');
Route::get('/banklistdevisi', 'BankController@listDevisi')->middleware('auth');
Route::get('/banklistvalas', 'BankController@listValas')->middleware('auth');
Route::post('/bankspadd', 'BankController@spAdd')->middleware('auth');
Route::post('/bankspdetail', 'BankController@getDetail')->middleware('auth');
Route::get('/bankloadall', 'BankController@loadAll')->middleware('auth');
Route::get('/banklistdph', 'BankController@listDPH')->middleware('auth');
Route::get('/banklistdphuht', 'BankController@listDPHUHT')->middleware('auth');
Route::get('/banklistdpp', 'BankController@listDPP')->middleware('auth');
Route::get('/banklistcustsupp', 'BankController@listCustsupp')->middleware('auth');


Route::get('/banklistcustsuppx', 'BankController@listCustSuppX')->middleware('auth');
Route::post('/banklisttunai', 'BankController@listTunai')->middleware('auth');
Route::get('/banklisttunaix', 'BankController@listTunaiX')->middleware('auth');
Route::post('/banklistcustsupptunai', 'BankController@listCustSuppTunai')->middleware('auth');


Route::post('/banksptemphutpiut', 'BankController@spTempHutPiut')->middleware('auth');



Route::get('/banklistcustsuppumb', 'BankController@listCustsuppUMB')->middleware('auth');





Route::post('/bankprosesumb', 'BankController@prosesUMB')->middleware('auth');
Route::post('/banklistumb', 'BankController@listUMB')->middleware('auth');
Route::post('/bankspadddppdph', 'BankController@spAddDPPDPH')->middleware('auth');
Route::post('/bankspaddtemprumjual', 'BankController@spAddTempRUMJUAL')->middleware('auth');
Route::post('/bankspdeletetemprumjual', 'BankController@spDeleteTempRUMJUAL')->middleware('auth');
Route::post('/bankspupdatetemprumjual', 'BankController@spUpdateTempRUMJUAL')->middleware('auth');
Route::post('/bankspotorisasi', 'BankController@spOtorisasi')->middleware('auth');
Route::post('/bankspbatalotorisasi', 'BankController@spBatalOtorisasi')->middleware('auth');
Route::post('/bankdetailCetak', 'BankController@getDetailCetak')->middleware('auth');

// CETAK PENGAJUAN DPH
Route::post('/cetakpengajuandphspnobukti', 'BankController@getNoBukti')->middleware('auth');
Route::get('/cetakpengajuandph' , 'CetakPengajuanDphController@index')->middleware('auth');
Route::post('/cetakpengajuandphdetailkoreksi' , 'CetakPengajuanDphController@detailKoreksi')->middleware('auth');
Route::post('/cetakpengajuandphdetailoutstanding' , 'CetakPengajuanDphController@getDetailOutstanding')->middleware('auth');
Route::post('/cetakpengajuandphlistproses' , 'CetakPengajuanDphController@listProses')->middleware('auth');

Route::post('/cetakpengajuandphspadd' , 'CetakPengajuanDphController@spAdd')->middleware('auth');
Route::post('/cetakpengajuandphspkoreksi' , 'CetakPengajuanDphController@spKoreksi')->middleware('auth');
Route::post('/cetakpengajuandphspproses' , 'CetakPengajuanDphController@spProses')->middleware('auth');
Route::get('/cetakpengajuandphloadall' , 'CetakPengajuanDphController@loadAll' )->middleware('auth');
Route::post('/cetakpengajuandphdetailCetak', 'CetakPengajuanDphController@getDetailCetak')->middleware('auth');


// Giro Diterima
Route::get('/giroditerima', 'GiroDiterimaController@index')->middleware('auth');
Route::get('/giroditerimalistperkiraanheader', 'GiroDiterimaController@listPerkiraanHeader')->middleware('auth');
Route::post('/giroditerimalistlawan', 'GiroDiterimaController@listLawan')->middleware('auth');
Route::post('/giroditerimalistlawanbgc', 'GiroDiterimaController@listLawanBGC')->middleware('auth');
Route::post('/giroditerimalistgiro', 'GiroDiterimaController@listGiro')->middleware('auth');
Route::post('/giroditerimaspnobukti', 'GiroDiterimaController@getNoBukti')->middleware('auth');
Route::post('/giroditerimacekgiroexist', 'GiroDiterimaController@cekGiroExist')->middleware('auth');
Route::post('/giroditerimalistpencairangiro', 'GiroDiterimaController@listPencairanGiro')->middleware('auth');
Route::post('/giroditerimalistpencairangirokoreksi', 'GiroDiterimaController@listPencairanGiroKoreksi')->middleware('auth');
Route::post('/giroditerimalistpencairangirobgt', 'GiroDiterimaController@listPencairanGiroKoreksiBGT')->middleware('auth');

Route::post('/giroditerimaspaddgirobgt', 'GiroDiterimaController@spGiroBGT')->middleware('auth');
// Route::post('/giroditerimaspdeletegirobgt', 'GiroDiterimaController@spDeleteGiroBGT')->middleware('auth');




Route::get('/giroditerimalistdepartemen', 'GiroDiterimaController@listDepartemen')->middleware('auth');
Route::get('/giroditerimalistdevisi', 'GiroDiterimaController@listDevisi')->middleware('auth');
Route::get('/giroditerimalistvalas', 'GiroDiterimaController@listValas')->middleware('auth');
Route::post('/giroditerimaspadd', 'GiroDiterimaController@spAdd')->middleware('auth');
Route::post('/giroditerimaspaddbgc', 'GiroDiterimaController@spAddBGC')->middleware('auth');
Route::post('/giroditerimaspaddgirokoreksi', 'GiroDiterimaController@spAddGiroKoreksi')->middleware('auth');
Route::post('/giroditerimaspdeletegirokoreksi', 'GiroDiterimaController@spDeleteGiroKoreksi')->middleware('auth');
Route::post('/giroditerimaspdelete', 'GiroDiterimaController@spDelete')->middleware('auth');





Route::post('/giroditerimaspdetail', 'GiroDiterimaController@getDetail')->middleware('auth');
Route::get('/giroditerimaloadall', 'GiroDiterimaController@loadAll')->middleware('auth');
Route::get('/giroditerimalistdph', 'GiroDiterimaController@listDPH')->middleware('auth');
Route::get('/giroditerimalistdphuht', 'GiroDiterimaController@listDPHUHT')->middleware('auth');
Route::get('/giroditerimalistdpp', 'GiroDiterimaController@listDPP')->middleware('auth');
Route::get('/giroditerimalistcustsupp', 'GiroDiterimaController@listCustsupp')->middleware('auth');
Route::get('/giroditerimalistcustsuppumb', 'GiroDiterimaController@listCustsuppUMB')->middleware('auth');
Route::post('/giroditerimaprosesumb', 'GiroDiterimaController@prosesUMB')->middleware('auth');
Route::post('/giroditerimalistumb', 'GiroDiterimaController@listUMB')->middleware('auth');
Route::post('/giroditerimaspadddppdph', 'GiroDiterimaController@spAddDPPDPH')->middleware('auth');
Route::post('/giroditerimaspaddtemprumjual', 'GiroDiterimaController@spAddTempRUMJUAL')->middleware('auth');
Route::post('/giroditerimaspdeletetemprumjual', 'GiroDiterimaController@spDeleteTempRUMJUAL')->middleware('auth');
Route::post('/giroditerimaspupdatetemprumjual', 'GiroDiterimaController@spUpdateTempRUMJUAL')->middleware('auth');
Route::post('/giroditerimaspotorisasi', 'GiroDiterimaController@spOtorisasi')->middleware('auth');
Route::post('/giroditerimaspbatalotorisasi', 'GiroDiterimaController@spBatalOtorisasi')->middleware('auth');
Route::post('/giroditerimadetailCetak', 'GiroDiterimaController@getDetailCetak')->middleware('auth');




// Giro Dibuka
Route::get('/girodibuka', 'GiroDibukaController@index')->middleware('auth');
Route::get('/girodibukalistperkiraanheader', 'GiroDibukaController@listPerkiraanHeader')->middleware('auth');
Route::post('/girodibukalistlawan', 'GiroDibukaController@listLawan')->middleware('auth');
Route::post('/girodibukalistlawanbgc', 'GiroDibukaController@listLawanBGC')->middleware('auth');
Route::post('/girodibukalistgiro', 'GiroDibukaController@listGiro')->middleware('auth');
Route::post('/girodibukaspnobukti', 'GiroDibukaController@getNoBukti')->middleware('auth');
Route::post('/girodibukacekgiroexist', 'GiroDibukaController@cekGiroExist')->middleware('auth');
Route::post('/girodibukalistpencairangiro', 'GiroDibukaController@listPencairanGiro')->middleware('auth');
Route::post('/girodibukalistpencairangirokoreksi', 'GiroDibukaController@listPencairanGiroKoreksi')->middleware('auth');
Route::post('/girodibukalistpencairangirobgt', 'GiroDibukaController@listPencairanGiroKoreksiBGT')->middleware('auth');

Route::post('/girodibukaspaddgirobgt', 'GiroDibukaController@spGiroBGT')->middleware('auth');
// Route::post('/girodibukaspdeletegirobgt', 'GiroDibukaController@spDeleteGiroBGT')->middleware('auth');




Route::get('/girodibukalistdepartemen', 'GiroDibukaController@listDepartemen')->middleware('auth');
Route::get('/girodibukalistdevisi', 'GiroDibukaController@listDevisi')->middleware('auth');
Route::get('/girodibukalistvalas', 'GiroDibukaController@listValas')->middleware('auth');
Route::post('/girodibukaspadd', 'GiroDibukaController@spAdd')->middleware('auth');
Route::post('/girodibukaspaddbgc', 'GiroDibukaController@spAddBGC')->middleware('auth');
Route::post('/girodibukaspaddgirokoreksi', 'GiroDibukaController@spAddGiroKoreksi')->middleware('auth');
Route::post('/girodibukaspdeletegirokoreksi', 'GiroDibukaController@spDeleteGiroKoreksi')->middleware('auth');
Route::post('/girodibukaspdelete', 'GiroDibukaController@spDelete')->middleware('auth');





Route::post('/girodibukaspdetail', 'GiroDibukaController@getDetail')->middleware('auth');
Route::get('/girodibukaloadall', 'GiroDibukaController@loadAll')->middleware('auth');
Route::get('/girodibukalistdph', 'GiroDibukaController@listDPH')->middleware('auth');
Route::get('/girodibukalistdphbbg', 'GiroDibukaController@listDPHBBG')->middleware('auth');

Route::get('/girodibukalistdphuht', 'GiroDibukaController@listDPHUHT')->middleware('auth');
Route::get('/girodibukalistdpp', 'GiroDibukaController@listDPP')->middleware('auth');
Route::get('/girodibukalistcustsupp', 'GiroDibukaController@listCustsupp')->middleware('auth');
Route::get('/girodibukalistcustsuppumb', 'GiroDibukaController@listCustsuppUMB')->middleware('auth');
Route::post('/girodibukaprosesumb', 'GiroDibukaController@prosesUMB')->middleware('auth');
Route::post('/girodibukalistumb', 'GiroDibukaController@listUMB')->middleware('auth');
Route::post('/girodibukaspadddppdph', 'GiroDibukaController@spAddDPPDPH')->middleware('auth');
Route::post('/girodibukaspaddtemprumjual', 'GiroDibukaController@spAddTempRUMJUAL')->middleware('auth');
Route::post('/girodibukaspdeletetemprumjual', 'GiroDibukaController@spDeleteTempRUMJUAL')->middleware('auth');
Route::post('/girodibukaspupdatetemprumjual', 'GiroDibukaController@spUpdateTempRUMJUAL')->middleware('auth');
Route::post('/girodibukaspotorisasi', 'GiroDibukaController@spOtorisasi')->middleware('auth');
Route::post('/girodibukaspbatalotorisasi', 'GiroDibukaController@spBatalOtorisasi')->middleware('auth');
Route::post('/girodibukadetailCetak', 'GiroDibukaController@getDetailCetak')->middleware('auth');

 
// PENGAJUAN DPH
Route::get('/pengajuandph', 'PengajuanDPHController@index')->middleware('auth');
Route::post('/pengajuandphspdetail', 'PengajuanDPHController@getDetail')->middleware('auth');
Route::post('/pengajuandphspdetailkledit', 'PengajuanDPHController@getDetailKLEdit')->middleware('auth');

Route::post('/pengajuandphsplistpengajuan', 'PengajuanDPHController@getListPengajuan')->middleware('auth');
Route::post('/pengajuandphspaddkledit' , 'PengajuanDPHController@spAddKLEdit')->middleware('auth');
Route::post('/pengajuandphspdeletekledit' , 'PengajuanDPHController@spDeleteKLEdit')->middleware('auth');
Route::post('/pengajuandphspupdatedphdet' , 'PengajuanDPHController@spUpdateDPHDet')->middleware('auth');

Route::post('/pengajuandphspadd' , 'PengajuanDPHController@spAdd')->middleware('auth');
Route::post('/pengajuandphspkoreksi' , 'PengajuanDPHController@spKoreksi')->middleware('auth');
Route::get('/pengajuandphloadall' , 'PengajuanDPHController@loadAll')->middleware('auth');
Route::post('/pengajuandphspotorisasi' , 'PengajuanDPHController@spOtorisasi')->middleware('auth');
Route::post('/pengajuandphspbatalotorisasi' , 'PengajuanDPHController@spBatalOtorisasi')->middleware('auth');
Route::post('/pengajuandphdetailCetak', 'PengajuanDPHController@getDetailCetak')->middleware('auth');


// PENGAJUAN DPH
Route::get('/pengajuandphtunai', 'PengajuanDPHTunaiController@index')->middleware('auth');
Route::post('/pengajuandphtunaispdetail', 'PengajuanDPHTunaiController@getDetail')->middleware('auth');
// Route::post('/pengajuandphtunaispdetailkl', 'PengajuanDPHTunaiController@getDetailKL')->middleware('auth');
Route::post('/pengajuandphtunaispdetailkledit', 'PengajuanDPHTunaiController@getDetailKLEdit')->middleware('auth');
Route::post('/pengajuandphtunaisplistpengajuan', 'PengajuanDPHTunaiController@getListPengajuan')->middleware('auth');
Route::post('/pengajuandphtunaispaddkledit' , 'PengajuanDPHTunaiController@spAddKLEdit')->middleware('auth');
Route::post('/pengajuandphtunaispdeletekledit' , 'PengajuanDPHTunaiController@spDeleteKLEdit')->middleware('auth');
Route::post('/pengajuandphtunaispupdatedphdet' , 'PengajuanDPHTunaiController@spUpdateDPHDet')->middleware('auth');

Route::post('/pengajuandphtunaispadd' , 'PengajuanDPHTunaiController@spAdd')->middleware('auth');
Route::post('/pengajuandphtunaispkoreksi' , 'PengajuanDPHTunaiController@spKoreksi')->middleware('auth');
Route::get('/pengajuandphtunailoadall' , 'PengajuanDPHTunaiController@loadAll')->middleware('auth');
Route::post('/pengajuandphtunaispotorisasi' , 'PengajuanDPHTunaiController@spOtorisasi')->middleware('auth');
Route::post('/pengajuandphtunaispbatalotorisasi' , 'PengajuanDPHTunaiController@spBatalOtorisasi')->middleware('auth');
Route::post('/pengajuandphtunaidetailCetak', 'PengajuanDPHTunaiController@getDetailCetak')->middleware('auth');


// PENGAJUAN DPP
Route::get('/pengajuandpp', 'PengajuanDPPController@index')->middleware('auth');
Route::post('/pengajuandppspdetail', 'PengajuanDPPController@getDetail')->middleware('auth');
Route::post('/pengajuandppsplistpengajuan', 'PengajuanDPPController@getListPengajuan')->middleware('auth');
Route::post('/pengajuandppspadd' , 'PengajuanDPPController@spAdd')->middleware('auth');
Route::post('/pengajuandppspkoreksi' , 'PengajuanDPPController@spKoreksi')->middleware('auth');
Route::get('/pengajuandpploadall' , 'PengajuanDPPController@loadAll')->middleware('auth');
Route::post('/pengajuandppspotorisasi' , 'PengajuanDPPController@spOtorisasi')->middleware('auth');
Route::post('/pengajuandppspbatalotorisasi' , 'PengajuanDPPController@spBatalOtorisasi')->middleware('auth');
Route::post('/pengajuandppdetailCetak', 'PengajuanDPPController@getDetailCetak')->middleware('auth');



// PENERIMAAN DPP
Route::get('/penerimaandpp' , 'PenerimaanDPPController@index')->middleware('auth');
Route::get('/penerimaandpplistperkiraanadd' , 'PenerimaanDPPController@listPerkiraanAdd')->middleware('auth');
Route::get('/penerimaandpplistperkiraanlbkl' , 'PenerimaanDPPController@listPerkiraanLBKL')->middleware('auth');
Route::post('/penerimaandppdetailkoreksi' , 'PenerimaanDPPController@detailKoreksi')->middleware('auth');
Route::post('/penerimaandppdetailoutstanding' , 'PenerimaanDPPController@detailOutstanding')->middleware('auth');
Route::post('/penerimaandpplistproses' , 'PenerimaanDPPController@listProses')->middleware('auth');
Route::post('/penerimaandppcheckgiro' , 'PenerimaanDPPController@checkGiro')->middleware('auth');
Route::post('/penerimaandppspgiro' , 'PenerimaanDPPController@spGiro')->middleware('auth');
Route::post('/penerimaandppspadd' , 'PenerimaanDPPController@spAdd')->middleware('auth');
Route::post('/penerimaandppspkoreksi' , 'PenerimaanDPPController@spKoreksi')->middleware('auth');
Route::post('/penerimaandppspproses' , 'PenerimaanDPPController@spProses')->middleware('auth');
Route::get('/penerimaandpploadall' , 'PenerimaanDPPController@loadAll' )->middleware('auth');
Route::post('/penerimaandppdetailCetak', 'PenerimaanDPPController@getDetailCetak')->middleware('auth');


// PELUNASAN PIUTANG DPP
Route::get('/pelunasanpiutangdpp', 'PelunasanPiutangDPPController@index')->middleware('auth');
Route::post('/pelunasanpiutangdppspdetail', 'PelunasanPiutangDPPController@getDetail')->middleware('auth');
Route::post('/pelunasanpiutangdppspdetailoutstanding', 'PelunasanPiutangDPPController@getDetailOutstanding')->middleware('auth');
Route::post('/pelunasanpiutangdppgetlistterimadpp', 'PelunasanPiutangDPPController@getListTerimaDPP')->middleware('auth');
Route::post('/pelunasanpiutangdppspdetailpenerimaan' , 'PelunasanPiutangDPPController@getdetailPenerimaan' )->middleware('auth');
Route::post('/pelunasanpiutangdppspadd' , 'PelunasanPiutangDPPController@spAdd' )->middleware('auth');
Route::get('/pelunasanpiutangdpploadall' , 'PelunasanPiutangDPPController@loadAll' )->middleware('auth');
Route::post('/pelunasanpiutangdppspkoreksi' , 'PelunasanPiutangDPPController@spKoreksi' )->middleware('auth');
Route::post('/pelunasanpiutangdppspotorisasi' , 'PelunasanPiutangDPPController@spOtorisasi' )->middleware('auth');
Route::post('/pelunasanpiutangdppspbatalotorisasi' , 'PelunasanPiutangDPPController@spBatalOtorisasi' )->middleware('auth');
Route::post('/pelunasanpiutangdppdetailCetak', 'PelunasanPiutangDPPController@getDetailCetak')->middleware('auth');


// MEMORIAL KOREKSI
Route::get('/memorialkoreksi', 'MemorialKoreksiController@index')->middleware('auth');
Route::post('/memorialkoreksispdetail', 'MemorialKoreksiController@getDetail')->middleware('auth');
Route::post('/memorialkoreksilistperkiraan', 'MemorialKoreksiController@listPerkiraan')->middleware('auth');
Route::get('/memorialkoreksilistvalas', 'MemorialKoreksiController@listValas')->middleware('auth');
Route::post('/memorialkoreksispadd', 'MemorialKoreksiController@spAdd')->middleware('auth');
Route::get('/memorialkoreksiloadall', 'MemorialKoreksiController@loadAll')->middleware('auth');
Route::post('/memorialkoreksispotorisasi', 'MemorialKoreksiController@spOtorisasi')->middleware('auth');
Route::post('/memorialkoreksispbatalotorisasi', 'MemorialKoreksiController@spBatalOtorisasi')->middleware('auth');
Route::post('/memorialkoreksidetailCetak', 'MemorialKoreksiController@getDetailCetak')->middleware('auth');


// BON SEMENTARA
Route::get('/bonsementara' , 'BonSementaraController@index')->middleware('auth');
Route::post('/bonsementaraloadall' , 'BonSementaraController@loadAll')->middleware('auth');
Route::post('/bonsementaraspnobukti' , 'BonSementaraController@getNoBukti')->middleware('auth');
Route::post('/bonsementaraspdetail' , 'BonSementaraController@getDetailOutstanding')->middleware('auth');
Route::post('/bonsementaraspadd' , 'BonSementaraController@spAdd')->middleware('auth');


});
