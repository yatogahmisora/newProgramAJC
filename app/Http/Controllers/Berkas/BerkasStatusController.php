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

class BerkasStatusController extends Controller
{

  public function index(Request $req) {

    // $user = DB::connection("SML")->select('select * from DBGUDANG where KODEGDG <> :id', ['id' => 'GTC']);
    $users = DB::connection("SML")->select('select * from DBFLPASS');

    $periode = NewPeriode::where('user_id' , \Auth::User()->username)->first();

    $menul0 = app('App\Http\Controllers\NewMenuController')->getMenuL0(1);

    return view('berkas.berkasstatus' , [
      "menul0" => $menul0,
      "periode" => $periode,
      "users"=> $users
    ]);

  }

  public function loadAll () {
    $users = DB::connection("SML")->select('select * from DBFLPASS');
    return $users;

  }

  public function spEdit (Request $req) {
    $edit = DB::connection('SML')->update('update DBFLPASS set STATUS = :status where USERID = :kode' , ['kode' => $req->kode , 'status' => $req->status]);

    return $edit;
  }

  public function spDetail (Request $req) {
    $detail = DB::connection('SML')->select('SELECT * FROM DBFLPASS where USERID = :kode' , ['kode' => $req->kode]);
    return $detail;
  }

}
