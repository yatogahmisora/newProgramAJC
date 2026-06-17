<?php

// Master
Route::namespace('Master')->group(function () {

// ACCOUNTING ================================================================================================================================================
//============================================================================================================================================================

// MASTER SATUAN ==========================================================
Route::get('/mastersatuan', 'MasterSatuanController@index')->middleware('auth');
Route::get('/mastersatuanloadall', 'MasterSatuanController@loadAll')->middleware('auth');
Route::post('/mastersatuanspadd', 'MasterSatuanController@spAdd')->middleware('auth');
Route::post('/mastersatuanspedit', 'MasterSatuanController@spEdit')->middleware('auth');
Route::post('/mastersatuanspdelete', 'MasterSatuanController@spDelete')->middleware('auth');
Route::get('/mastersatuanspdetail', 'MasterSatuanController@spDetail')->middleware('auth');
Route::get('/masterSatuanAmbilSatTax', 'MasterSatuanController@AmbilSatTax')->middleware('auth');

// MASTER VALAS ==========================================================
Route::get('/mastervalas', 'MasterValasController@index')->middleware('auth');
Route::get('/mastervalasloadall', 'MasterValasController@loadAll')->middleware('auth');
Route::post('/mastervalasspadd', 'MasterValasController@spAdd')->middleware('auth');
Route::post('/mastervalasspedit', 'MasterValasController@spEdit')->middleware('auth');
Route::post('/mastervalasspdelete', 'MasterValasController@spDelete')->middleware('auth');
Route::get('/mastervalasspdetail', 'MasterValasController@spDetail')->middleware('auth');

// MASTER DAFTAR DEVISI ==========================================================
Route::get('/masterdaftardevisi', 'MasterDaftarDevisiController@index')->middleware('auth');
Route::get('/masterdaftardevisiloadall', 'MasterDaftarDevisiController@loadAll')->middleware('auth');
Route::post('/masterdaftardevisispadd', 'MasterDaftarDevisiController@spAdd')->middleware('auth');
Route::post('/masterdaftardevisispedit', 'MasterDaftarDevisiController@spEdit')->middleware('auth');
Route::post('/masterdaftardevisispdelete', 'MasterDaftarDevisiController@spDelete')->middleware('auth');
Route::get('/masterdaftardevisispdetail', 'MasterDaftarDevisiController@spDetail')->middleware('auth');

// MASTER PERKIRAAN ======================================================
Route::get('/newperkiraan', 'NewMasterPerkiraanController@index')->middleware('auth');
Route::post('/newaddperkiraan', 'NewMasterPerkiraanController@spAdd')->middleware('auth');
Route::post('/newdetailperkiraan' , 'NewMasterPerkiraanController@detail')->middleware('auth');
Route::get('/newperkiraanloadall' , 'NewMasterPerkiraanController@loadAll')->middleware('auth');
Route::get('/newperkiraanloadvalas' , 'NewMasterPerkiraanController@loadValas')->middleware('auth');
Route::get('/newperkiraangetallperkiraan' , 'NewMasterPerkiraanController@getAllPerkiraan')->middleware('auth');

// MASTER AKTIVA ==========================================================
Route::get('/masteraktiva', 'MasterAktivaController@index')->middleware('auth');
Route::get('/masteraktivaloadall', 'MasterAktivaController@loadAll')->middleware('auth');
Route::post('/masteraktivaspadd', 'MasterAktivaController@spAdd')->middleware('auth');
Route::post('/masteraktivaspdelete', 'MasterAktivaController@spDelete')->middleware('auth');
Route::get('/masteraktivaloadgroupaktiva', 'MasterAktivaController@loadGroupAktiva')->middleware('auth');
Route::get('/masteraktivaloadeditgroupaktiva', 'MasterAktivaController@loadEditGroupAktiva')->middleware('auth');
Route::get('/masteraktivaloaddevisi', 'MasterAktivaController@loadDevisi')->middleware('auth');
Route::get('/masteraktivaloadakumulasipenyusutan', 'MasterAktivaController@loadAkumulasiPenyusutan')->middleware('auth');
Route::get('/masteraktivaspdetail' , 'MasterAktivaController@spDetail')->middleware('auth');
Route::get('/masteraktivaloadvalas' , 'MasterAktivaController@loadValas')->middleware('auth');
Route::post('/masteraktivaspedit', 'MasterAktivaController@spEdit')->middleware('auth');

Route::post('spnoaktiva', 'MasterAktivaController@getNoAktiva')->middleware('auth');
Route::get('/masteraktivaloadbiayapenyusutan', 'MasterAktivaController@loadBiayaPenyusutan')->middleware('auth');
Route::post('/masteraktivaspaddsaldoawal', 'MasterAktivaController@spAddSaldoAwal')->middleware('auth');
Route::get('/masteraktivaspdetailsaldoawal' , 'MasterAktivaController@spDetailSaldoAwal')->middleware('auth');

// MASTER HUTANG ==========================================================
Route::get('/masterhutang', 'MasterHutangController@index')->middleware('auth');
Route::get('/masterhutangloadall', 'MasterHutangController@loadAll')->middleware('auth');
Route::post('/masterhutangspadd', 'MasterHutangController@spAdd')->middleware('auth');
Route::post('/masterhutangspedit', 'MasterHutangController@spEdit')->middleware('auth');
Route::post('/masterhutangspdelete', 'MasterHutangController@spDelete')->middleware('auth');
Route::get('/masterhutangspdetail', 'MasterHutangController@spDetail')->middleware('auth');
Route::get('/masterhutangloadvalas', 'MasterHutangController@loadValas')->middleware('auth');
Route::get('/masterhutangloadcustomer', 'MasterHutangController@loadCustomer')->middleware('auth');

// MASTER PIUTANG ==========================================================
Route::get('/masterpiutang', 'MasterPiutangController@index')->middleware('auth');
Route::get('/masterpiutangloadall', 'MasterPiutangController@loadAll')->middleware('auth');
Route::post('/masterpiutangspadd', 'MasterPiutangController@spAdd')->middleware('auth');
Route::post('/masterpiutangspedit', 'MasterPiutangController@spEdit')->middleware('auth');
Route::post('/masterpiutangspdelete', 'MasterPiutangController@spDelete')->middleware('auth');
Route::get('/masterpiutangspdetail', 'MasterPiutangController@spDetail')->middleware('auth');
Route::get('/masterpiutangloadvalas', 'MasterPiutangController@loadValas')->middleware('auth');
Route::get('/masterpiutangloadlokasipenerima', 'MasterPiutangController@loadLokasiPenerima')->middleware('auth');
Route::get('/masterpiutangspdetaillokasipenerima', 'MasterPiutangController@spLokPenerima')->middleware('auth');

// MASTER GIRO BUKA ==========================================================
Route::get('/mastergiro', 'MasterGiroController@index')->middleware('auth');
Route::get('/mastergiroloadallterima', 'MasterGiroController@loadAllTerima')->middleware('auth');
Route::get('/mastergiroloadallbuka', 'MasterGiroController@loadAllBuka')->middleware('auth');
Route::post('/mastergirospaddbuka', 'MasterGiroController@spAddBuka')->middleware('auth');
Route::post('/mastergirospaddterima', 'MasterGiroController@spAddTerima')->middleware('auth');
Route::post('/mastergirospeditbuka', 'MasterGiroController@spEditBuka')->middleware('auth');
Route::post('/mastergirospeditterima', 'MasterGiroController@spEditTerima')->middleware('auth');
Route::post('/mastergirospdeletebuka', 'MasterGiroController@spDeleteBuka')->middleware('auth');
Route::post('/mastergirospdeleteterima', 'MasterGiroController@spDeleteTerima')->middleware('auth');
Route::get('/mastergirospdetailbuka', 'MasterGiroController@spDetailBuka')->middleware('auth');
Route::get('/mastergirospdetailterima', 'MasterGiroController@spDetailTerima')->middleware('auth');
Route::get('/mastergiroloadkas', 'MasterGiroController@loadPostingKas')->middleware('auth');
Route::get('/mastergiroloadbank', 'MasterGiroController@loadPostingBank')->middleware('auth');

// MASTER LABA RUGI & HPP ==========================================================
Route::get('/masterlabarugi', 'MasterLabaRugiController@index')->middleware('auth');
Route::get('/masterlabarugiloadall', 'MasterLabaRugiController@loadAll')->middleware('auth');
Route::post('/masterLabaRugiSubmitAdd', 'MasterLabaRugiController@spAdd')->middleware('auth');
Route::post('/masterLabaRugiSubmitEdit', 'MasterLabaRugiController@spEdit')->middleware('auth');
Route::post('/masterLabaRugiSubmitDelete', 'MasterLabaRugiController@spDelete')->middleware('auth');
Route::post('/masterLabaRugiLoadEdit', 'MasterLabaRugiController@loadEdit')->middleware('auth');
Route::post('/masterlabarugispedit', 'MasterLabaRugiController@spEdit')->middleware('auth');
Route::post('/masterlabarugispdelete', 'MasterLabaRugiController@spDelete')->middleware('auth');
Route::get('/masterLabaRugiLoadPerkiraan', 'MasterLabaRugiController@loadPerkiraan')->middleware('auth');

// MASTER NERACA ==========================================================
Route::get('/masterneraca', 'MasterNeracaController@index')->middleware('auth');
Route::get('/masterneracaloadall', 'MasterNeracaController@loadAll')->middleware('auth');
Route::post('/masterneracaspedit', 'MasterNeracaController@spEdit')->middleware('auth');
Route::get('/masterneracaspdetail', 'MasterNeracaController@spDetail')->middleware('auth');
Route::get('/masterneracaonChangeNeraca', 'MasterNeracaController@onChangeNeraca')->middleware('auth');

// MASTER COSTING ==========================================================
Route::get('/mastercosting', 'MasterCostingController@index')->middleware('auth');
Route::get('/mastercostingloadall', 'MasterCostingController@loadAll')->middleware('auth');
Route::get('/mastercostingloadperkiraanakumulasi', 'MasterCostingController@loadPerkiraanAkumulasi')->middleware('auth');
Route::post('/mastercostingspadd', 'MasterCostingController@spAdd')->middleware('auth');
Route::post('/mastercostingspedit', 'MasterCostingController@spEdit')->middleware('auth');
Route::post('/mastercostingspdelete', 'MasterCostingController@spDelete')->middleware('auth');
Route::get('/mastercostingspdetail', 'MasterCostingController@spDetail')->middleware('auth');
Route::get('/mastercostinglistperkiraan', 'MasterCostingController@listPerkiraanSubCost')->middleware('auth');
Route::get('/mastercostinglistdetailakun', 'MasterCostingController@listDetailAkun')->middleware('auth');
Route::get('/mastercostinglistdetailakunedit', 'MasterCostingController@listDetailAkunEdit')->middleware('auth');
Route::get('/mastercostingspperkiraan', 'MasterCostingController@spPerkiraan')->middleware('auth');

// MASTER SET POSTING ==========================================================
Route::get('/mastersetposting', 'MasterSetPostingController@index')->middleware('auth');

Route::group([
    'namespace' => 'MasterSetPosting',
    'middleware' => 'auth'
], function () {

    // AKTIVA
    Route::get('/mastersetpostingaktiva', 'MasterSetPostingAktivaController@index');
    Route::post('/mastersetpostingaktivaspadd', 'MasterSetPostingAktivaController@spAdd');
    Route::get('/mastersetpostingaktivaloadall', 'MasterSetPostingAktivaController@loadAll');
    Route::post('/mastersetpostingaktivaspdelete', 'MasterSetPostingAktivaController@spDelete');
    Route::get('/mastersetpostingaktivaspdetail', 'MasterSetPostingAktivaController@spDetail');
    Route::get('/mastersetpostingaktivaloadperkiraan', 'MasterSetPostingAktivaController@loadPerkiraan');
    Route::get('/mastersetpostingaktivaloadperkiraanpenyusutan', 'MasterSetPostingAktivaController@loadPerkiraanPenyusutan');
    Route::get('/mastersetpostingaktivaloadakumulasi', 'MasterSetPostingAktivaController@loadAkumulasi');
    Route::post('/mastersetpostingaktivaspedit', 'MasterSetPostingAktivaController@spEdit');

    // AKUMULASI
    Route::get('/mastersetpostingakumulasi', 'MasterSetPostingAkumulasiController@index');
    Route::post('/mastersetpostingakumulasispadd', 'MasterSetPostingAkumulasiController@spAdd');
    Route::get('/mastersetpostingakumulasiloadall', 'MasterSetPostingAkumulasiController@loadAll');
    Route::post('/mastersetpostingakumulasispdelete', 'MasterSetPostingAkumulasiController@spDelete');
    Route::get('/mastersetpostingakumulasispdetail', 'MasterSetPostingAkumulasiController@spDetail');
    Route::get('/mastersetpostingakumulasiloadperkiraan', 'MasterSetPostingAkumulasiController@loadPerkiraan');
    Route::post('/mastersetpostingakumulasispedit', 'MasterSetPostingAkumulasiController@spEdit');

    // KAS
    Route::get('/mastersetpostingkas', 'MasterSetPostingKasController@index');
    Route::post('/mastersetpostingkasspadd', 'MasterSetPostingKasController@spAdd');
    Route::get('/mastersetpostingkasloadall', 'MasterSetPostingKasController@loadAll');
    Route::post('/mastersetpostingkasspdelete', 'MasterSetPostingKasController@spDelete');
    Route::get('/mastersetpostingkasspdetail', 'MasterSetPostingKasController@spDetail');
    Route::get('/mastersetpostingkasloadperkiraan', 'MasterSetPostingKasController@loadPerkiraan');
    Route::post('/mastersetpostingkasspedit', 'MasterSetPostingKasController@spEdit');

    // BANK
    Route::get('/mastersetpostingbank', 'MasterSetPostingBankController@index');
    Route::post('/mastersetpostingbankspadd', 'MasterSetPostingBankController@spAdd');
    Route::get('/mastersetpostingbankloadall', 'MasterSetPostingBankController@loadAll');
    Route::post('/mastersetpostingbankspdelete', 'MasterSetPostingBankController@spDelete');
    Route::get('/mastersetpostingbankspdetail', 'MasterSetPostingBankController@spDetail');
    Route::get('/mastersetpostingbankloadperkiraan', 'MasterSetPostingBankController@loadPerkiraan');
    Route::post('/mastersetpostingbankspedit', 'MasterSetPostingBankController@spEdit');

    // HUTANG
    Route::get('/mastersetpostinghutang', 'MasterSetPostingHutangController@index');
    Route::post('/mastersetpostinghutangspadd', 'MasterSetPostingHutangController@spAdd');
    Route::get('/mastersetpostinghutangloadall', 'MasterSetPostingHutangController@loadAll');
    Route::post('/mastersetpostinghutangspdelete', 'MasterSetPostingHutangController@spDelete');
    Route::get('/mastersetpostinghutangspdetail', 'MasterSetPostingHutangController@spDetail');
    Route::get('/mastersetpostinghutangloadperkiraan', 'MasterSetPostingHutangController@loadPerkiraan');
    Route::post('/mastersetpostinghutangspedit', 'MasterSetPostingHutangController@spEdit');

    // PIUTANG
    Route::get('/mastersetpostingpiutang', 'MasterSetPostingPiutangController@index');
    Route::post('/mastersetpostingpiutangspadd', 'MasterSetPostingPiutangController@spAdd');
    Route::get('/mastersetpostingpiutangloadall', 'MasterSetPostingPiutangController@loadAll');
    Route::post('/mastersetpostingpiutangspdelete', 'MasterSetPostingPiutangController@spDelete');
    Route::get('/mastersetpostingpiutangspdetail', 'MasterSetPostingPiutangController@spDetail');
    Route::get('/mastersetpostingpiutangloadperkiraan', 'MasterSetPostingPiutangController@loadPerkiraan');
    Route::post('/mastersetpostingpiutangspedit', 'MasterSetPostingPiutangController@spEdit');

    // HARGA POKOK
    Route::get('/mastersetpostinghargapokok', 'MasterSetPostingHargaPokokController@index');
    Route::post('/mastersetpostinghargapokokspadd', 'MasterSetPostingHargaPokokController@spAdd');
    Route::get('/mastersetpostinghargapokokloadall', 'MasterSetPostingHargaPokokController@loadAll');
    Route::post('/mastersetpostinghargapokokspdelete', 'MasterSetPostingHargaPokokController@spDelete');
    Route::get('/mastersetpostinghargapokokspdetail', 'MasterSetPostingHargaPokokController@spDetail');
    Route::get('/mastersetpostinghargapokokloadperkiraan', 'MasterSetPostingHargaPokokController@loadPerkiraan');
    Route::post('/mastersetpostinghargapokokspedit', 'MasterSetPostingHargaPokokController@spEdit');

    // DEPOSITO
    Route::get('/mastersetpostingdeposito', 'MasterSetPostingDepositoController@index');
    Route::post('/mastersetpostingdepositospadd', 'MasterSetPostingDepositoController@spAdd');
    Route::get('/mastersetpostingdepositoloadall', 'MasterSetPostingDepositoController@loadAll');
    Route::post('/mastersetpostingdepositospdelete', 'MasterSetPostingDepositoController@spDelete');
    Route::get('/mastersetpostingdepositospdetail', 'MasterSetPostingDepositoController@spDetail');
    Route::get('/mastersetpostingdepositoloadperkiraan', 'MasterSetPostingDepositoController@loadPerkiraan');
    Route::post('/mastersetpostingdepositospedit', 'MasterSetPostingDepositoController@spEdit');

    // UM HUTANG
    Route::get('/mastersetpostingumhutang', 'MasterSetPostingUMHutangController@index');
    Route::post('/mastersetpostingumhutangspadd', 'MasterSetPostingUMHutangController@spAdd');
    Route::get('/mastersetpostingumhutangloadall', 'MasterSetPostingUMHutangController@loadAll');
    Route::post('/mastersetpostingumhutangspdelete', 'MasterSetPostingUMHutangController@spDelete');
    Route::get('/mastersetpostingumhutangspdetail', 'MasterSetPostingUMHutangController@spDetail');
    Route::get('/mastersetpostingumhutangloadperkiraan', 'MasterSetPostingUMHutangController@loadPerkiraan');
    Route::post('/mastersetpostingumhutangspedit', 'MasterSetPostingUMHutangController@spEdit');

    // UM PIUTANG
    Route::get('/mastersetpostingumpiutang', 'MasterSetPostingUMPiutangController@index');
    Route::post('/mastersetpostingumpiutangspadd', 'MasterSetPostingUMPiutangController@spAdd');
    Route::get('/mastersetpostingumpiutangloadall', 'MasterSetPostingUMPiutangController@loadAll');
    Route::post('/mastersetpostingumpiutangspdelete', 'MasterSetPostingUMPiutangController@spDelete');
    Route::get('/mastersetpostingumpiutangspdetail', 'MasterSetPostingUMPiutangController@spDetail');
    Route::get('/mastersetpostingumpiutangloadperkiraan', 'MasterSetPostingUMPiutangController@loadPerkiraan');
    Route::post('/mastersetpostingumpiutangspedit', 'MasterSetPostingUMPiutangController@spEdit');

    // HUTANG SEMENTARA
    Route::get('/mastersetpostinghutangsementara', 'MasterSetPostingHutangSementaraController@index');
    Route::post('/mastersetpostinghutangsementaraspadd', 'MasterSetPostingHutangSementaraController@spAdd');
    Route::get('/mastersetpostinghutangsementaraloadall', 'MasterSetPostingHutangSementaraController@loadAll');
    Route::post('/mastersetpostinghutangsementaraspdelete', 'MasterSetPostingHutangSementaraController@spDelete');
    Route::get('/mastersetpostinghutangsementaraspdetail', 'MasterSetPostingHutangSementaraController@spDetail');
    Route::get('/mastersetpostinghutangsementaraloadperkiraan', 'MasterSetPostingHutangSementaraController@loadPerkiraan');
    Route::post('/mastersetpostinghutangsementaraspedit', 'MasterSetPostingHutangSementaraController@spEdit');

    // PIUTANG SEMENTARA
    Route::get('/mastersetpostingpiutangsementara', 'MasterSetPostingPiutangSementaraController@index');
    Route::post('/mastersetpostingpiutangsementaraspadd', 'MasterSetPostingPiutangSementaraController@spAdd');
    Route::get('/mastersetpostingpiutangsementaraloadall', 'MasterSetPostingPiutangSementaraController@loadAll');
    Route::post('/mastersetpostingpiutangsementaraspdelete', 'MasterSetPostingPiutangSementaraController@spDelete');
    Route::get('/mastersetpostingpiutangsementaraspdetail', 'MasterSetPostingPiutangSementaraController@spDetail');
    Route::get('/mastersetpostingpiutangsementaraloadperkiraan', 'MasterSetPostingPiutangSementaraController@loadPerkiraan');
    Route::post('/mastersetpostingpiutangsementaraspedit', 'MasterSetPostingPiutangSementaraController@spEdit');

    // GIRO TERIMA
    Route::get('/mastersetpostinggiroterima', 'MasterSetPostingGiroTerimaController@index');
    Route::post('/mastersetpostinggiroterimaspadd', 'MasterSetPostingGiroTerimaController@spAdd');
    Route::get('/mastersetpostinggiroterimaloadall', 'MasterSetPostingGiroTerimaController@loadAll');
    Route::post('/mastersetpostinggiroterimaspdelete', 'MasterSetPostingGiroTerimaController@spDelete');
    Route::get('/mastersetpostinggiroterimaspdetail', 'MasterSetPostingGiroTerimaController@spDetail');
    Route::get('/mastersetpostinggiroterimaloadperkiraan', 'MasterSetPostingGiroTerimaController@loadPerkiraan');
    Route::post('/mastersetpostinggiroterimaspedit', 'MasterSetPostingGiroTerimaController@spEdit');

    // GIRO BUKA
    Route::get('/mastersetpostinggirobuka', 'MasterSetPostingGiroBukaController@index');
    Route::post('/mastersetpostinggirobukaspadd', 'MasterSetPostingGiroBukaController@spAdd');
    Route::get('/mastersetpostinggirobukaloadall', 'MasterSetPostingGiroBukaController@loadAll');
    Route::post('/mastersetpostinggirobukaspdelete', 'MasterSetPostingGiroBukaController@spDelete');
    Route::get('/mastersetpostinggirobukaspdetail', 'MasterSetPostingGiroBukaController@spDetail');
    Route::get('/mastersetpostinggirobukaloadperkiraan', 'MasterSetPostingGiroBukaController@loadPerkiraan');
    Route::post('/mastersetpostinggirobukaspedit', 'MasterSetPostingGiroBukaController@spEdit');

    // RL TAHUN LALU
    Route::get('/mastersetpostingrltahunlalu', 'MasterSetPostingRLTahunLaluController@index');
    Route::post('/mastersetpostingrltahunlaluspadd', 'MasterSetPostingRLTahunLaluController@spAdd');
    Route::get('/mastersetpostingrltahunlaluloadall', 'MasterSetPostingRLTahunLaluController@loadAll');
    Route::post('/mastersetpostingrltahunlaluspdelete', 'MasterSetPostingRLTahunLaluController@spDelete');
    Route::get('/mastersetpostingrltahunlaluspdetail', 'MasterSetPostingRLTahunLaluController@spDetail');
    Route::get('/mastersetpostingrltahunlaluloadperkiraan', 'MasterSetPostingRLTahunLaluController@loadPerkiraan');
    Route::post('/mastersetpostingrltahunlaluspedit', 'MasterSetPostingRLTahunLaluController@spEdit');

    // RL TAHUN INI
    Route::get('/mastersetpostingrltahunini', 'MasterSetPostingRLTahunIniController@index');
    Route::post('/mastersetpostingrltahuninispadd', 'MasterSetPostingRLTahunIniController@spAdd');
    Route::get('/mastersetpostingrltahuniniloadall', 'MasterSetPostingRLTahunIniController@loadAll');
    Route::post('/mastersetpostingrltahuninispdelete', 'MasterSetPostingRLTahunIniController@spDelete');
    Route::get('/mastersetpostingrltahuninispdetail', 'MasterSetPostingRLTahunIniController@spDetail');
    Route::get('/mastersetpostingrltahuniniloadperkiraan', 'MasterSetPostingRLTahunIniController@loadPerkiraan');
    Route::post('/mastersetpostingrltahuninispedit', 'MasterSetPostingRLTahunIniController@spEdit');

    // RL BULAN LALU
    Route::get('/mastersetpostingrlbulanlalu', 'MasterSetPostingRLBulanLaluController@index');
    Route::post('/mastersetpostingrlbulanlaluspadd', 'MasterSetPostingRLBulanLaluController@spAdd');
    Route::get('/mastersetpostingrlbulanlaluloadall', 'MasterSetPostingRLBulanLaluController@loadAll');
    Route::post('/mastersetpostingrlbulanlaluspdelete', 'MasterSetPostingRLBulanLaluController@spDelete');
    Route::get('/mastersetpostingrlbulanlaluspdetail', 'MasterSetPostingRLBulanLaluController@spDetail');
    Route::get('/mastersetpostingrlbulanlaluloadperkiraan', 'MasterSetPostingRLBulanLaluController@loadPerkiraan');
    Route::post('/mastersetpostingrlbulanlaluspedit', 'MasterSetPostingRLBulanLaluController@spEdit');

    // SELISIH
    Route::get('/mastersetpostingselisih', 'MasterSetPostingSelisihController@index');
    Route::post('/mastersetpostingselisihspadd', 'MasterSetPostingSelisihController@spAdd');
    Route::get('/mastersetpostingselisihloadall', 'MasterSetPostingSelisihController@loadAll');
    Route::post('/mastersetpostingselisihspdelete', 'MasterSetPostingSelisihController@spDelete');
    Route::get('/mastersetpostingselisihspdetail', 'MasterSetPostingSelisihController@spDetail');
    Route::get('/mastersetpostingselisihloadperkiraan', 'MasterSetPostingSelisihController@loadPerkiraan');
    Route::post('/mastersetpostingselisihspedit', 'MasterSetPostingSelisihController@spEdit');

    // PPN MASUKAN
    Route::get('/mastersetpostingppnmasukan', 'MasterSetPostingPPNMasukanController@index');
    Route::post('/mastersetpostingppnmasukanspadd', 'MasterSetPostingPPNMasukanController@spAdd');
    Route::get('/mastersetpostingppnmasukanloadall', 'MasterSetPostingPPNMasukanController@loadAll');
    Route::post('/mastersetpostingppnmasukanspdelete', 'MasterSetPostingPPNMasukanController@spDelete');
    Route::get('/mastersetpostingppnmasukanspdetail', 'MasterSetPostingPPNMasukanController@spDetail');
    Route::get('/mastersetpostingppnmasukanloadperkiraan', 'MasterSetPostingPPNMasukanController@loadPerkiraan');
    Route::post('/mastersetpostingppnmasukanspedit', 'MasterSetPostingPPNMasukanController@spEdit');

    // PPN KELUARAN
    Route::get('/mastersetpostingppnkeluaran', 'MasterSetPostingPPNKeluaranController@index');
    Route::post('/mastersetpostingppnkeluaranspadd', 'MasterSetPostingPPNKeluaranController@spAdd');
    Route::get('/mastersetpostingppnkeluaranloadall', 'MasterSetPostingPPNKeluaranController@loadAll');
    Route::post('/mastersetpostingppnkeluaranspdelete', 'MasterSetPostingPPNKeluaranController@spDelete');
    Route::get('/mastersetpostingppnkeluaranspdetail', 'MasterSetPostingPPNKeluaranController@spDetail');
    Route::get('/mastersetpostingppnkeluaranloadperkiraan', 'MasterSetPostingPPNKeluaranController@loadPerkiraan');
    Route::post('/mastersetpostingppnkeluaranspedit', 'MasterSetPostingPPNKeluaranController@spEdit');

    // PPH MASUKAN
    Route::get('/mastersetpostingpphmasukan', 'MasterSetPostingPPHMasukanController@index');
    Route::post('/mastersetpostingpphmasukanspadd', 'MasterSetPostingPPHMasukanController@spAdd');
    Route::get('/mastersetpostingpphmasukanloadall', 'MasterSetPostingPPHMasukanController@loadAll');
    Route::post('/mastersetpostingpphmasukanspdelete', 'MasterSetPostingPPHMasukanController@spDelete');
    Route::get('/mastersetpostingpphmasukanspdetail', 'MasterSetPostingPPHMasukanController@spDetail');
    Route::get('/mastersetpostingpphmasukanloadperkiraan', 'MasterSetPostingPPHMasukanController@loadPerkiraan');
    Route::post('/mastersetpostingpphmasukanspedit', 'MasterSetPostingPPHMasukanController@spEdit');

    // PPH KELUARAN
    Route::get('/mastersetpostingpphkeluaran', 'MasterSetPostingPPHKeluaranController@index');
    Route::post('/mastersetpostingpphkeluaranspadd', 'MasterSetPostingPPHKeluaranController@spAdd');
    Route::get('/mastersetpostingpphkeluaranloadall', 'MasterSetPostingPPHKeluaranController@loadAll');
    Route::post('/mastersetpostingpphkeluaranspdelete', 'MasterSetPostingPPHKeluaranController@spDelete');
    Route::get('/mastersetpostingpphkeluaranspdetail', 'MasterSetPostingPPHKeluaranController@spDetail');
    Route::get('/mastersetpostingpphkeluaranloadperkiraan', 'MasterSetPostingPPHKeluaranController@loadPerkiraan');
    Route::post('/mastersetpostingpphkeluaranspedit', 'MasterSetPostingPPHKeluaranController@spEdit');

});

// SUPPLIER BANK ACCOUNT ==========================================================
Route::get('/mastersupplierbankacc', 'MasterSupplierBankController@index')->middleware('auth');
Route::get('/mastersupplierbankloadall', 'MasterSupplierBankController@loadAll')->middleware('auth');
Route::post('/mastersupplierbankspadd', 'MasterSupplierBankController@spAdd')->middleware('auth');
Route::post('/mastersupplierbankspedit', 'MasterSupplierBankController@spEdit')->middleware('auth');
Route::post('/mastersupplierbankspdelete', 'MasterSupplierBankController@spDelete')->middleware('auth');
Route::get('/mastersupplierbankspdetail', 'MasterSupplierBankController@spDetail')->middleware('auth');
Route::post('/mastersupplierbankspupdate', 'MasterSupplierBankController@spUpdate')->middleware('auth');

// END OF ACCOUNTING =====================================================================================================================
//=======================================================================================================================================  

// BAHAN / BARANG =======================================================================================================================
//=======================================================================================================================================

// MASTER GUDANG ===================================================================
Route::get('/mastergudang' , 'MasterGudangController@index')->middleware('auth');
Route::post('/mastergudangspadd' , 'MasterGudangController@spAdd')->middleware('auth');
Route::get('/mastergudangspdetail' ,'MasterGudangController@spDetail')->middleware('auth');
Route::post('/mastergudangspedit' , 'MasterGudangController@spEdit')->middleware('auth');
Route::post('/mastergudangspdelete' , 'MasterGudangController@spDelete')->middleware('auth');
Route::get('/mastergudangloadall' , 'MasterGudangController@loadAll')->middleware('auth');

// MASTER GROUP ==================================================
Route::get('/mastergroup' , 'MasterGroupController@index')->middleware('auth');
Route::post('/mastergroupspadd' ,'MasterGroupController@spAdd')->middleware('auth');
Route::get('/mastergroupspdetail' , 'MasterGroupController@spDetail')->middleware('auth');
Route::post('/mastergroupspdelete' , 'MasterGroupController@spDelete')->middleware('auth');
Route::get('/mastergrouploadall', 'MasterGroupController@loadall')->middleware('auth');
Route::post('/mastergroupspedit' , 'MasterGroupController@spEdit')->middleware('auth');

// MASTER HEAD GROUP =================================================
Route::get('/masterheadgroup' , 'MasterHeadGroupController@index')->middleware('auth');
Route::get('/masterheadgrouploadPerkiraan' , 'MasterHeadGroupController@loadPerkiraan')->middleware('auth');
Route::get('/masterheadgrouplistgroup' , 'MasterHeadGroupController@listGroup')->middleware('auth');
Route::get('/masterheadgrouplistperkiraan' , 'MasterHeadGroupController@listPerkiraan')->middleware('auth');
Route::post('/masterheadgroupspadd' , 'MasterHeadGroupController@spAdd')->middleware('auth');
Route::get('/masterheadgroupspdetail' , 'MasterHeadGroupController@spDetail')->middleware('auth');
Route::get('/masterheadgrouploadall' , 'MasterHeadGroupController@loadAll')->middleware('auth');
Route::post('/masterheadgroupspdelete' , 'MasterHeadGroupController@spDelete')->middleware('auth');
Route::post('/masterheadgroupspedit' , 'MasterHeadGroupController@spEdit')->middleware('auth');
Route::get('/masterheadgrouplistsubgroup' , 'MasterHeadGroupController@spListSubGroup')->middleware('auth');
Route::get('/masterheadgroupspdetailsubgroup' , 'MasterHeadGroupController@spDetailSubGroup')->middleware('auth');
Route::post('/masterheadgroupspaddsubgroup' , 'MasterHeadGroupController@spAddSubGroup')->middleware('auth');
Route::post('/masterheadgroupspdeletesubgroup' , 'MasterHeadGroupController@spDeleteSubGroup')->middleware('auth');
Route::post('/masterheadgroupspeditsubgroup' , 'MasterHeadGroupController@spEditSubGroup')->middleware('auth');
Route::get('/masterheadgrouplistsubkategori' , 'MasterHeadGroupController@spListSubKategori')->middleware('auth');
Route::get('/masterheadgroupspdetailsubkategori' , 'MasterHeadGroupController@spDetailSubKategori')->middleware('auth');
Route::post('/masterheadgroupspaddsubkategori' , 'MasterHeadGroupController@spAddSubKategori')->middleware('auth');
Route::post('/masterheadgroupspeditsubkategori' , 'MasterHeadGroupController@spEditSubKategori')->middleware('auth');
Route::post('/masterheadgroupspdeletesubkategori' , 'MasterHeadGroupController@spDeleteSubKategori')->middleware('auth');

// MASTER MERK ========================================================
Route::get('/mastermerk' , 'MasterMerkController@index')->middleware('auth');
Route::post('/mastermerkspadd' , 'MasterMerkController@spAdd')->middleware('auth');
Route::get('/mastermerkspdetail' , 'MasterMerkController@spDetail')->middleware('auth');
Route::post('/mastermerkspdelete' , 'MasterMerkController@spDelete')->middleware('auth');
Route::get('/mastermerkloadall', 'MasterMerkController@loadall')->middleware('auth');
Route::post('/mastermerkspedit' , 'MasterMerkController@spEdit')->middleware('auth');

// MASTER BARANG ====================================================================
Route::get('/masterbarang' ,'MasterBarangController@index')->middleware('auth');
Route::get('/masterbaranglistselect' , 'MasterBarangController@spListSelect')->middleware('auth');
Route::post('/masterbarangspcheckdbbarang' , 'MasterBarangController@spCheckDBBarang')->middleware('auth');
Route::post('/masterbarangspadd' ,'MasterBarangController@spAdd')->middleware('auth');
Route::get('/masterbarangspdetail' , 'MasterBarangController@spDetail')->middleware('auth');
Route::post('/masterbarangspedit' ,'MasterBarangController@spEdit')->middleware('auth');
Route::get('/masterbarangloadall' , 'MasterBarangController@loadAll')->middleware('auth');
Route::get('/masterbaranglistsupplier' , 'MasterBarangController@spListSupplier')->middleware('auth');
Route::get('/masterbarangspdetailharga' ,'MasterBarangController@spDetailHarga')->middleware('auth');
Route::post('/masterbarangspaddharga' ,'MasterBarangController@spAddHarga')->middleware('auth');
Route::get('/masterbarangspdetailhargadetail' ,'MasterBarangController@spDetailHargaDetail')->middleware('auth');
Route::post('/masterbarangspeditharga' ,'MasterBarangController@spEditHarga')->middleware('auth');
Route::post('/masterbarangspdelete' , 'MasterBarangController@spDelete')->middleware('auth');
Route::post('/masterbarangspdeleteharga' , 'MasterBarangController@spDeleteHarga')->middleware('auth');
Route::get('/masterbaranglistsatuan' , 'MasterBarangController@spListSatuan')->middleware('auth');

//MASTER BARANG JASA ====================================================================
Route::get('/masterbarangjasa' , 'MasterBarangJasaController@index')->middleware('auth');
Route::get('/masterbarangjasalistselect', 'MasterBarangJasaController@spListSelect')->middleware('auth');
Route::post('/masterbarangjasaspcheckdbbarang' , 'MasterBarangJasaController@spCheckDBBarang')->middleware('auth');
Route::post('/masterbarangjasaspadd' , 'MasterBarangJasaController@spAdd')->middleware('auth');
Route::get('/masterbarangjasaspdetail' , 'MasterBarangJasaController@spDetail')->middleware('auth');
Route::post('/masterbarangjasaspedit' , 'MasterBarangJasaController@spEdit')->middleware('auth');
Route::post('/masterbarangjasaspdelete' , 'MasterBarangJasaController@spDelete')->middleware('auth');
Route::get('/masterbarangjasaloadall', 'MasterBarangJasaController@loadAll')->middleware('auth');

// MASTER LOKASI BARANG ==========================================================
Route::get('/masterlokasibarang', 'MasterLokasiBarangController@index')->middleware('auth');
Route::get('/masterlokasibarangloadall', 'MasterLokasiBarangController@loadAll')->middleware('auth');
Route::post('/masterlokasibarangspadd', 'MasterLokasiBarangController@spAdd')->middleware('auth');
Route::post('/masterlokasibarangspedit', 'MasterLokasiBarangController@spEdit')->middleware('auth');
Route::post('/masterlokasibarangspdelete', 'MasterLokasiBarangController@spDelete')->middleware('auth');
Route::get('/masterlokasibarangspdetail', 'MasterLokasiBarangController@spDetail')->middleware('auth');

// MASTER SET LOKASI BARANG ==========================================================
Route::get('/mastersetlokasibarang', 'MasterSetLokasiBarangController@index')->middleware('auth');
Route::get('/mastersetlokasibarangloadall', 'MasterSetLokasiBarangController@loadAll')->middleware('auth');
Route::post('/mastersetlokasibarangspadd', 'MasterSetLokasiBarangController@spAdd')->middleware('auth');
Route::post('/mastersetlokasibarangspedit', 'MasterSetLokasiBarangController@spEdit')->middleware('auth');
Route::post('/mastersetlokasibarangspdelete', 'MasterSetLokasiBarangController@spDelete')->middleware('auth');
Route::get('/mastersetlokasibarangspdetail', 'MasterSetLokasiBarangController@spDetail')->middleware('auth');
Route::get('/masterSetLokasiBarangLoadHistory', 'MasterSetLokasiBarangController@loadHistory')->middleware('auth');
Route::get('/masterSetLokasiBarangLoadLokasiBarang', 'MasterSetLokasiBarangController@loadLokasiBarang')->middleware('auth');
Route::post('/masterSetLokasiBarangSubmitEdit', 'MasterSetLokasiBarangController@spEdit')->middleware('auth');

// END OF BAHAN / BARANG ===============================================================================================================
//======================================================================================================================================

// SUPPLIER / CUSTOMER =================================================================================================================
//======================================================================================================================================

// MASTER AREA ============================================================
Route::get('/masterarea', 'MasterAreaController@index')->middleware('auth');
Route::post('/masterareaspadd' ,'MasterAreaController@spAdd')->middleware('auth');
Route::post('/masterareaspdelete' , 'MasterAreaController@spDelete')->middleware('auth');
Route::post('/masterareaspdetail' , 'MasterAreaController@spDetail')->middleware('auth');
Route::post('/masterareaspedit' , 'MasterAreaController@spEdit')->middleware('auth');
Route::get('/masterarealoadall' , 'MasterAreaController@loadAll')->middleware('auth');

// MASTER KOTA ============================================================
Route::get('/masterkota' , 'MasterKotaController@index')->middleware('auth');
Route::get('/masterkotalistarea' , 'MasterKotaController@spListArea')->middleware('auth');
Route::post('/masterkotaspdetail' , 'MasterKotaController@spDetail')->middleware('auth');
Route::post('/masterkotaspedit' , 'MasterKotaController@spEdit')->middleware('auth');
Route::post('/masterkotaspdelete' , 'MasterKotaController@spDelete')->middleware('auth');
Route::post('/masterkotaspadd' , 'MasterKotaController@spAdd')->middleware('auth');
Route::get('/masterkotaloadall' , 'MasterKotaController@loadAll')->middleware('auth');

//MASTER SUPPLIER ========================================================
Route::get('/mastersupplier' , 'MasterSupplierController@index')->middleware('auth');
Route::get('/mastersupplierlistkota' , 'MasterSupplierController@spListKota')->middleware('auth');
Route::post('/mastersupplierspadd' , 'MasterSupplierController@spAdd')->middleware('auth');
Route::post('/mastersupplierspdetail' , 'MasterSupplierController@spDetail')->middleware('auth');
Route::post('/mastersupplierspdelete' , 'MasterSupplierController@spDelete')->middleware('auth');
Route::post('/mastersupplierspedit' , 'MasterSupplierController@spEdit')->middleware('auth');
Route::get('/mastersupplierloadall' , 'MasterSupplierController@loadAll')->middleware('auth');
Route::get('/mastersupplierloadalamat' , 'MasterSupplierController@loadAlamat')->middleware('auth');
Route::post('/mastersupplierspaddalamat' , 'MasterSupplierController@submitAlamat')->middleware('auth');
Route::post('/mastersupplierdeletealamat' , 'MasterSupplierController@spDeleteAlamat')->middleware('auth');
Route::post('/mastersuppliereditalamat' , 'MasterSupplierController@spEditAlamat')->middleware('auth');

//MASTER JENIS CUSTOMER ==================================================
Route::get('/masterjeniscustomer' , 'MasterJenisCustomerController@index')->middleware('auth');
Route::post('/masterjeniscustomerspadd' , 'MasterJenisCustomerController@spAdd')->middleware('auth');
Route::post('/masterjeniscustomerspdelete' , 'MasterJenisCustomerController@spDelete')->middleware('auth');
Route::get('/masterjeniscustomerspdetail' , 'MasterJenisCustomerController@spDetail')->middleware('auth');
Route::post('/masterjeniscustomerspedit' , 'MasterJenisCustomerController@spEdit')->middleware('auth');
Route::get('/masterjeniscustomerloadall' , 'MasterJenisCustomerController@loadAll')->middleware('auth');

//MASTER GROUP CUSTOMER ==================================================
Route::get('/mastergroupcustomer' , 'MasterGroupCustomerController@index')->middleware('auth');
Route::post('/mastergroupcustomerspadd' , 'MasterGroupCustomerController@spAdd')->middleware('auth');
Route::post('/mastergroupcustomerspdelete' , 'MasterGroupCustomerController@spDelete')->middleware('auth');
Route::get('/mastergroupcustomerspdetail' , 'MasterGroupCustomerController@spDetail')->middleware('auth');
Route::post('/mastergroupcustomerspedit' , 'MasterGroupCustomerController@spEdit')->middleware('auth');
Route::get('/mastergroupcustomerloadall' , 'MasterGroupCustomerController@loadAll')->middleware('auth');

//MASTER CUSTOMER ========================================================
Route::get('/mastercustomer' , 'MasterCustomerController@index')->middleware('auth');
Route::get('/mastercustomerlistselect' , 'MasterCustomerController@spListSelect')->middleware('auth');
Route::post('/mastercustomerspadd' , 'MasterCustomerController@spAdd')->middleware('auth');
Route::post('/mastercustomerspdelete' , 'MasterCustomerController@spDelete')->middleware('auth');
Route::post('/mastercustomerspdetail' , 'MasterCustomerController@spDetail')->middleware('auth');
Route::post('/mastercustomerspedit' , 'MasterCustomerController@spEdit')->middleware('auth');
Route::get('/mastercustomerloadall' , 'MasterCustomerController@loadAll')->middleware('auth');
Route::get('/mastercustomerloaddetailakun', 'MasterCustomerController@loadDetailAkun')->middleware('auth');
Route::get('/mastercustomerloaddetailperkiraan', 'MasterCustomerController@loadDetailPerkiraan')->middleware('auth');
Route::get('/mastercustomerloadperkiraanedit', 'MasterCustomerController@loadPerkiraanEdit')->middleware('auth');
Route::post('/mastercustomerspadddetailakun' , 'MasterCustomerController@spAddDetailAkun')->middleware('auth');
Route::post('/mastercustomerspadddetailakunedit' , 'MasterCustomerController@spAddDetailAkunEdit')->middleware('auth');
Route::post('/mastercustomerspdeletedetailakun' , 'MasterCustomerController@spDeleteDetailAkun')->middleware('auth');

// MASTER EKSPEDISI ==========================================================
Route::get('/masterekspedisi', 'MasterEkspedisiController@index')->middleware('auth');
Route::get('/masterekspedisiloadall', 'MasterEkspedisiController@loadAll')->middleware('auth');
Route::get('/masterEkspedisiLoadDetailAkun', 'MasterEkspedisiController@loadDetailAkun')->middleware('auth');
Route::get('/masterEkspedisiLoadDetailAkunEdit', 'MasterEkspedisiController@loadDetailAkunEdit')->middleware('auth');
Route::get('/masterEkspedisiLoadHutangPiutang', 'MasterEkspedisiController@loadHutangPiutang')->middleware('auth');
Route::post('/masterEkspedisiAddDetailAkun', 'MasterEkspedisiController@submitAddDetailAkun')->middleware('auth');
Route::post('/masterEkspedisiDeleteDetailAkun', 'MasterEkspedisiController@submitDeleteDetailAkun')->middleware('auth');
Route::post('/masterEkspedisiSubmitEditDetailAkun', 'MasterEkspedisiController@submitEditDetailAkun')->middleware('auth');

Route::post('/masterEkspedisiSubmitAdd', 'MasterEkspedisiController@submitAdd')->middleware('auth');
Route::post('/masterEkspedisiSubmitDelete', 'MasterEkspedisiController@submitDelete')->middleware('auth');
Route::post('/masterEkspedisiSubmitEdit', 'MasterEkspedisiController@submitEdit')->middleware('auth');
Route::get('/masterEkspedisiLoadDetail', 'MasterEkspedisiController@spDetail')->middleware('auth');
Route::get('/masterEkspedisiLoadKota', 'MasterEkspedisiController@loadKota')->middleware('auth');
Route::get('/masterEkspedisiLoadKotaEdit', 'MasterEkspedisiController@loadKotaEdit')->middleware('auth');

Route::get('/masterEkspedisiLoadAlamatKirim', 'MasterEkspedisiController@loadAlamatKirim')->middleware('auth');
Route::post('/masterEkspedisiGetNomorAlamatKirim', 'MasterEkspedisiController@getNewNomorAlamatKirim')->middleware('auth');
Route::post('/masterEkspedisiAddAlamatKirim', 'MasterEkspedisiController@submitAddAlamatKirim')->middleware('auth');
Route::post('/masterEkspedisiDeleteAlamatKirim', 'MasterEkspedisiController@submitDeleteAlamatKirim')->middleware('auth');
Route::get('/masterEkspedisiLoadAlamatKirimEdit', 'MasterEkspedisiController@loadAlamatKirimEdit')->middleware('auth');
Route::post('/masterEkspedisiSubmitEditAlamatKirim', 'MasterEkspedisiController@submitEditAlamatKirim')->middleware('auth');

// END OF SUPPLIER / CUSTOMER =======================================================================================================
//===================================================================================================================================

// LAIN - LAIN ======================================================================================================================
//===================================================================================================================================

// MASTER DEPARTEMEN =========================================================
Route::get('/masterdepartemen' , 'MasterDepartemenController@index')->middleware('auth');
Route::post('/masterdepartemenspadd' , 'MasterDepartemenController@spAdd')->middleware('auth');
Route::post('/masterdepartemenspdelete' , 'MasterDepartemenController@spDelete')->middleware('auth');
Route::get('/masterdepartemenspdetail' , 'MasterDepartemenController@spDetail')->middleware('auth');
Route::post('/masterdepartemenspedit' , 'MasterDepartemenController@spEdit')->middleware('auth');
Route::get('/masterdepartemenloadall' , 'MasterDepartemenController@loadAll')->middleware('auth');

// MASTER JABATAN =========================================================
Route::get('/masterjabatan' , 'MasterJabatanController@index')->middleware('auth');
Route::post('/masterjabatanspadd' , 'MasterJabatanController@spAdd')->middleware('auth');
Route::post('/masterjabatanspdelete' , 'MasterJabatanController@spDelete')->middleware('auth');
Route::get('/masterjabatanspdetail' , 'MasterJabatanController@spDetail')->middleware('auth');
Route::post('/masterjabatanspedit' , 'MasterJabatanController@spEdit')->middleware('auth');
Route::get('/masterjabatanloadall' , 'MasterJabatanController@loadAll')->middleware('auth');

// MASTER DAFTAR KARYAWAN =========================================================
Route::get('/masterdaftarkaryawan' , 'MasterDaftarKaryawanController@index')->middleware('auth');
Route::post('/masterdaftarkaryawanspadd' , 'MasterDaftarKaryawanController@spAdd')->middleware('auth');
Route::post('/masterdaftarkaryawanspdelete' , 'MasterDaftarKaryawanController@spDelete')->middleware('auth');
Route::get('/masterdaftarkaryawanspdetail' , 'MasterDaftarKaryawanController@spDetail')->middleware('auth');
Route::post('/masterdaftarkaryawanspedit' , 'MasterDaftarKaryawanController@spEdit')->middleware('auth');
Route::get('/masterdaftarkaryawanloadall' , 'MasterDaftarKaryawanController@loadAll')->middleware('auth');
Route::get('/masterKaryawanGetKeyNIK' , 'MasterDaftarKaryawanController@getNewKeyNIK')->middleware('auth');

// MASTER DAFTAR BIAYA =========================================================
Route::get('/masterdaftarbiaya' , 'MasterDaftarBiayaController@index')->middleware('auth');
Route::post('/masterdaftarbiayaspadd' , 'MasterDaftarBiayaController@spAdd')->middleware('auth');
Route::post('/masterdaftarbiayaspdelete' , 'MasterDaftarBiayaController@spDelete')->middleware('auth');
Route::get('/masterdaftarbiayaspdetail' , 'MasterDaftarBiayaController@spDetail')->middleware('auth');
Route::post('/masterdaftarbiayaspedit' , 'MasterDaftarBiayaController@spEdit')->middleware('auth');
Route::get('/masterdaftarbiayaloadall' , 'MasterDaftarBiayaController@loadAll')->middleware('auth');
Route::get('/masterdaftarbiayaselectperkiraan' , 'MasterDaftarBiayaController@selectPerkiraan')->middleware('auth');

// MASTER SALES ====================================================================
Route::get('/mastersales' ,'MasterSalesController@index')->middleware('auth');
Route::get('/masterSalesSpDetail' , 'MasterSalesController@spDetail')->middleware('auth');
Route::post('/masterSalesSpEdit' ,'MasterSalesController@spEdit')->middleware('auth');
Route::get('/masterSalesListGudang' , 'MasterSalesController@loadGudang')->middleware('auth');
Route::get('/masterSalesListCosting' , 'MasterSalesController@loadCosting')->middleware('auth');
Route::get('/masterSalesListCustSupp' , 'MasterSalesController@loadCustSupp')->middleware('auth');
Route::get('/masterSalesLoadDataSales' , 'MasterSalesController@loadDataSales')->middleware('auth');
Route::get('/masterSalesLoadDataSalesEdit' , 'MasterSalesController@loadDataSalesEdit')->middleware('auth');
Route::get('/masterSalesLoadKaryawan' , 'MasterSalesController@loadKaryawan')->middleware('auth');
Route::post('/masterSalesAddSalesCust' , 'MasterSalesController@submitAddSalesCust')->middleware('auth');
Route::post('/masterSalesDeleteSalesCust' , 'MasterSalesController@submitDeleteSalesCust')->middleware('auth');
Route::post('/masterSalesEditSalesCust' , 'MasterSalesController@submitEditSalesCust')->middleware('auth');
Route::get('/masterSalesLoadDataTarget' , 'MasterSalesController@loadDataTarget')->middleware('auth');
Route::get('/masterSalesListMerk' , 'MasterSalesController@loadMerk')->middleware('auth');
Route::post('/masterSalesAddTarget' , 'MasterSalesController@submitAddTarget')->middleware('auth');
Route::post('/masterSalesDeleteTarget' , 'MasterSalesController@submitDeleteTarget')->middleware('auth');
Route::get('/masterSalesLoadDataTargetEdit' , 'MasterSalesController@loadDataTargetEdit')->middleware('auth');
Route::post('/masterSalesEditTarget' , 'MasterSalesController@submitEditTarget')->middleware('auth');

Route::get('/mastersaleslistselect' , 'MasterSalesController@spListSelect')->middleware('auth');
Route::post('/mastersalesspcheckdbsales' , 'MasterSalesController@spCheckDBSales')->middleware('auth');
Route::post('/mastersalesspadd' ,'MasterSalesController@spAdd')->middleware('auth');
Route::get('/mastersalesloadall' , 'MasterSalesController@loadAll')->middleware('auth');
Route::get('/mastersaleslistsupplier' , 'MasterSalesController@spListSupplier')->middleware('auth');
Route::get('/mastersalesspdetailharga' ,'MasterSalesController@spDetailHarga')->middleware('auth');
Route::post('/mastersalesspaddharga' ,'MasterSalesController@spAddHarga')->middleware('auth');
Route::get('/mastersalesspdetailhargadetail' ,'MasterSalesController@spDetailHargaDetail')->middleware('auth');
Route::post('/mastersalesspeditharga' ,'MasterSalesController@spEditHarga')->middleware('auth');
Route::post('/mastersalesspdelete' , 'MasterSalesController@spDelete')->middleware('auth');
Route::post('/mastersalesspdeleteharga' , 'MasterSalesController@spDeleteHarga')->middleware('auth');

// MASTER NILAI PPN =========================================================
Route::get('/masternilaippn' , 'MasterNilaiPPNController@index')->middleware('auth');
Route::post('/masternilaippnspadd' , 'MasterNilaiPPNController@spAdd')->middleware('auth');
Route::post('/masternilaippnspdelete' , 'MasterNilaiPPNController@spDelete')->middleware('auth');
Route::get('/masternilaippnspdetail' , 'MasterNilaiPPNController@spDetail')->middleware('auth');
Route::post('/masternilaippnspedit' , 'MasterNilaiPPNController@spEdit')->middleware('auth');
Route::get('/masternilaippnloadall' , 'MasterNilaiPPNController@loadAll')->middleware('auth');
Route::get('/masternilaippndefault' , 'MasterNilaiPPNController@spDefaultUrut')->middleware('auth');

// MASTER NOMOR FAKTUR PAJAK =========================================================
Route::get('/masternomorfakturpajak' , 'MasterNomorFakturPajakController@index')->middleware('auth');
Route::post('/masternomorfakturpajakspadd' , 'MasterNomorFakturPajakController@spAdd')->middleware('auth');
Route::post('/masternomorfakturpajakspdelete' , 'MasterNomorFakturPajakController@spDelete')->middleware('auth');
Route::get('/masternomorfakturpajakspdetail' , 'MasterNomorFakturPajakController@spDetail')->middleware('auth');
Route::post('/masternomorfakturpajakspedit' , 'MasterNomorFakturPajakController@spEdit')->middleware('auth');
Route::get('/masternomorfakturpajakloadall' , 'MasterNomorFakturPajakController@loadAll')->middleware('auth');
Route::get('/masternomorfakturpajakdefault' , 'MasterNomorFakturPajakController@spDefaultUrut')->middleware('auth');
Route::get('/masternomorfakturpajakupdatepenuh', 'MasterNomorFakturPajakController@updateIsPenuh')->middleware('auth');

// END OF LAIN LAIN ===================================================================================================================
//=====================================================================================================================================

// KENDARAAN ==========================================================================================================================
//=====================================================================================================================================

//MASTER NO POL =========================================================
Route::get('/masternopol' , 'MasterNoPolController@index');
Route::post('/masternopolspadd' , 'MasterNoPolController@spAdd');
Route::post('/masternopolspdelete' , 'MasterNoPolController@spDelete');
Route::get('/masternopolspdetail' , 'MasterNoPolController@spDetail');
Route::post('/masternopolspedit' , 'MasterNoPolController@spEdit');
Route::get('/masternopolloadall' , 'MasterNoPolController@loadAll');
Route::get('/masternopolselectperkiraan' , 'MasterNoPolController@selectKodeCost');

//MASTER SOPIR =========================================================
Route::get('/mastersopir' , 'MasterSopirController@index');
Route::post('/mastersopirspadd' , 'MasterSopirController@spAdd');
Route::post('/mastersopirspdelete' , 'MasterSopirController@spDelete');
Route::get('/mastersopirspdetail' , 'MasterSopirController@spDetail');
Route::post('/mastersopirspedit' , 'MasterSopirController@spEdit');
Route::get('/mastersopirloadall' , 'MasterSopirController@loadAll');
Route::get('/mastersopirselectperkiraan' , 'MasterSopirController@selectKodeCost');

// END OF KENDARAAN ======================================================================================================================
//========================================================================================================================================

});
