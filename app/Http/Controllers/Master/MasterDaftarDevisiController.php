<?php

namespace App\Http\Controllers\Master;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\NewMenu;
use App\Models\NewAksesMenu;
use App\Models\NewPeriode;
use App\Models\NewUsers;
use Illuminate\Support\Facades\DB;
// use App\Models\VWPerkiraan;

// use App\Http\Controllers\NewMenuController;

class MasterDaftarDevisiController extends Controller
{

  public function index(Request $req) {



    // $users = DB::connection("SML")->select('select * from new_users');
    $periode = NewPeriode::where('user_id' , \Auth::User()->username)->first();
    $listData = DB::connection('SML')->select('SELECT Devisi, NamaDevisi FROM dbDEVISI');


    $menul0 = app('App\Http\Controllers\NewMenuController')->getMenuL0(2);

    return view('master.masterdaftardevisi' , [
      "menul0" => $menul0,
      "periode" => $periode,
      // "users"=> $users,
      "listData" => $listData
    ]);

  }

  public function loadAll () {
    $listData = DB::connection('SML')->select('SELECT Devisi, NamaDevisi FROM dbDEVISI');
    return $listData;
  }

  public function spAdd (Request $req) {
    $check = DB::connection('SML')->select('SELECT * FROM dbDEVISI where Devisi = :kode' , ['kode' => $req->kode]);

    if ($check) {
      return 'Kode jenis sudah ada di database';
    }
    $listData = DB::connection('SML')->update('insert into dbDEVISI (Devisi, NamaDevisi) values (:kode, :nama)' , ['kode' => $req->kode , 'nama' => $req->nama]);
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
    $delete = DB::connection('SML')->update('delete from dbDEVISI where Devisi = :kode' , ['kode' => $req->kode ]);
    return $delete;
  }

  public function spEdit (Request $req) {
    $edit = DB::connection('SML')->update('update dbDEVISI set NamaDevisi = :nama where Devisi = :kode' , ['kode' => $req->kode , 'nama' => $req->nama ]);

    return $edit;
  }

  public function spDetail (Request $req) {
    $detail = DB::connection('SML')->select('SELECT Devisi, NamaDevisi FROM dbDEVISI where Devisi = :kode' , ['kode' => $req->kode]);
    return $detail;
  }



}
