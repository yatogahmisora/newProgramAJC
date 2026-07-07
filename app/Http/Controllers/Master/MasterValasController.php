<?php

namespace App\Http\Controllers\Master;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\NewMenu;
use App\Models\NewAksesMenu;
use App\Models\NewPeriode;
use App\Models\NewUsers;
use Illuminate\Support\Facades\DB;
// use App\Model\VWPerkiraan;

class MasterValasController extends Controller
{

  public function index(Request $req) {

    // $users = DB::connection("SML")->select('select * from new_users');
    $periode = NewPeriode::where('user_id' , \Auth::User()->username)->first();
    $listData = DB::connection('SML')->select('SELECT * FROM dbVALAS');

    $akses = app('App\Http\Controllers\GlobalController')->getAkses('' , $req->path());
    if(!$akses || !$akses->HASACCESS) {
       return redirect('/home');
	}

    $menul0 = app('App\Http\Controllers\NewMenuController')->getMenuL0(2);

    return view('master.mastervalas' , [
      "menul0" => $menul0,
      "periode" => $periode,
      // "users"=> $users,
      "listData" => $listData,
      "akses" => $akses
    ]);

  }

  public function loadAll () {
    $listData = DB::connection('SML')->select('SELECT * FROM dbVALAS');
    return $listData;
  }

  public function spAdd (Request $req) {
    $check = DB::connection('SML')->select('SELECT * FROM dbVALAS where KODEVLS = :kode' , ['kode' => $req->kode]);

    if ($check) {
      return 'Kode jenis sudah ada di database';
    }
    $listData = DB::connection('SML')->update('insert into dbVALAS (KODEVLS, NAMAVLS, KURS, Simbol) values (:kode, :nama, :kurs, :simbol)' , ['kode' => $req->kode , 'nama' => $req->nama, 'kurs' => $req->kurs, 'simbol' => $req->simbol]);
    return 1;

  }

  public function spDelete (Request $req) {
    $check = DB::connection('SML')->select('SELECT * FROM DBPPL where KDDep = :kode' , ['kode' => $req->kode]);

    if ($check) {
      return 'Dept digunakkan di Pembelian';
    }

    //$check = DB::connection('SML')->select('SELECT * FROM DBDEPARTEMEN where KodeDepartemen = :kode' , ['kode' => $req->kode]);
    //if ($check) {
      //return 'ga bisa hapus';
    //}
    $delete = DB::connection('SML')->update('delete from dbVALAS where KODEVLS = :kode' , ['kode' => $req->kode ]);
    return $delete;
  }

  public function spEdit (Request $req) {
    $edit = DB::connection('SML')->update('update dbVALAS set NAMAVLS = :nama, KURS = :kurs, Simbol = :simbol where KODEVLS = :kode' , ['kode' => $req->kode , 'nama' => $req->nama , 'kurs' => $req->kurs , 'simbol' => $req->simbol ]);

    return $edit;
  }

  public function spDetail (Request $req) {
    $detail = DB::connection('SML')->select('SELECT * FROM dbVALAS where KODEVLS = :kode' , ['kode' => $req->kode]);
    return $detail;
  }



}
