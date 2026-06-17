<?php

// Berkas
Route::namespace('Berkas')->group(function () {

Route::get('/newsetpemakai', 'NewSetPemakaiController@index');
Route::get('/newsetpemakailoadall', 'NewSetPemakaiController@loadAll');

Route::post('/newsetpemakailistakses' , 'NewSetPemakaiController@listAkses');
Route::post('/newsetpemakaidetailuser' , 'NewSetPemakaiController@detailUser');

Route::post('/newsetpemakaispupdateakses', 'NewSetPemakaiController@spUpdateAkses');
Route::post('/newsetpemakaispupdateaksesheader', 'NewSetPemakaiController@spUpdateAksesHeader');
Route::post('/newsetpemakailistaksesreport' , 'NewSetPemakaiController@listAksesReport');
Route::post('/newsetpemakaispupdateaksesreport', 'NewSetPemakaiController@spUpdateAksesReport');
Route::post('/newsetpemakailistcoa', 'NewSetPemakaiController@listCoa');
Route::post('/newsetpemakaiupdateiskirimcoa' ,'NewSetPemakaiController@updateIsKirimCOA');
Route::post('/newsetpemakaiupdateaddcoa', 'NewSetPemakaiController@updateAddAksesCOA');
Route::post('/newsetpemakaiupdateaddallcoa', 'NewSetPemakaiController@updateAddAllAksesCOA');
Route::post('/newsetpemakaideleteaksescoa' , 'NewSetPemakaiController@deleteAksesCOA');
Route::post('/newsetpemakaideleteallaksescoa' , 'NewSetPemakaiController@deleteAllAksesCOA');
Route::post('/newsetpemakaideleteallaksescoa' , 'NewSetPemakaiController@deleteAllAksesCOA');
Route::get('/newsetpemakaiLoadKaryawan' , 'NewSetPemakaiController@loadKaryawan');
Route::get('/newsetpemakaiLoadDepartemen' , 'NewSetPemakaiController@loadDepartemen');
Route::get('/newsetpemakaiLoadJabatan' , 'NewSetPemakaiController@loadJabatan');
Route::post('/newsetpemakaiAddUser' , 'NewSetPemakaiController@submitAddUser');
Route::post('/newsetpemakaideleteuser' , 'NewSetPemakaiController@deleteUser');


Route::get('/newsetupperiodekerja', 'NewSetupPeriodeKerjaController@index');
Route::post('/newsetupperiodekerjaupdate' ,'NewSetupPeriodeKerjaController@updatePeriodeKerja');

Route::get('/newkunciperiodekerja' , 'NewKunciPeriodeKerjaController@index');
Route::post('/newkunciperiodekerjalisttahun' , 'NewKunciPeriodeKerjaController@getListKunciTahun');
Route::post('/newkunciperiodekerjaupdate' ,'NewKunciPeriodeKerjaController@updateKunciPeriode');

// GANTI PASSWORD
Route::get('/gantipassword' , 'GantiPasswordController@index')->middleware('auth');
Route::post('/gantipassworduser' , 'GantiPasswordController@gantiPassword')->middleware('auth');


});
