<?php

use App\Http\Controllers\Berkas\NewSetPemakaiController;
use App\Http\Controllers\Berkas\NewSetupPeriodeKerjaController;
use App\Http\Controllers\Berkas\KunciPeriodeKerjaController;
use App\Http\Controllers\Berkas\GantiPasswordController;
use Illuminate\Support\Facades\Route;

// Berkas
Route::controller(NewSetPemakaiController::class)->group(function () {
    Route::get('/newsetpemakai', 'index');
    Route::get('/newsetpemakailoadall', 'loadAll');

    Route::post('/newsetpemakailistakses', 'listAkses');
    Route::post('/newsetpemakaidetailuser', 'detailUser');

    Route::post('/newsetpemakaispupdateakses', 'spUpdateAkses');
    Route::post('/newsetpemakaispupdateaksesheader', 'spUpdateAksesHeader');
    Route::post('/newsetpemakailistaksesreport', 'listAksesReport');
    Route::post('/newsetpemakaispupdateaksesreport', 'spUpdateAksesReport');
    Route::post('/newsetpemakailistcoa', 'listCoa');
    Route::post('/newsetpemakaiupdateiskirimcoa', 'updateIsKirimCOA');
    Route::post('/newsetpemakaiupdateaddcoa', 'updateAddAksesCOA');
    Route::post('/newsetpemakaiupdateaddallcoa', 'updateAddAllAksesCOA');
    Route::post('/newsetpemakaideleteaksescoa', 'deleteAksesCOA');
    Route::post('/newsetpemakaideleteallaksescoa', 'deleteAllAksesCOA');
    Route::get('/newsetpemakaiLoadKaryawan', 'loadKaryawan');
    Route::get('/newsetpemakaiLoadDepartemen', 'loadDepartemen');
    Route::get('/newsetpemakaiLoadJabatan', 'loadJabatan');
    Route::post('/newsetpemakaiAddUser', 'submitAddUser');
    Route::post('/newsetpemakaideleteuser', 'deleteUser');
});

Route::get('/newsetupperiodekerja', [NewSetupPeriodeKerjaController::class, 'index']);
Route::post('/newsetupperiodekerjaupdate', [NewSetupPeriodeKerjaController::class, 'updatePeriodeKerja']);

Route::get('/kunciperiodekerja', [KunciPeriodeKerjaController::class, 'index']);
Route::get('kunciperiodeload', [KunciPeriodeKerjaController::class, 'kunciPeriodeLoad']);
Route::post('kunciperiodetoggle', [KunciPeriodeKerjaController::class, 'kunciPeriodeToggle']);

// GANTI PASSWORD
Route::get('/gantipassword', [GantiPasswordController::class, 'index'])->middleware('auth');
Route::post('/gantipassworduser', [GantiPasswordController::class, 'gantiPassword'])->middleware('auth');