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

class BerkasMenuController extends Controller
{

  public function index(Request $req) {

    // $user = DB::connection("SML")->select('select * from DBGUDANG where KODEGDG <> :id', ['id' => 'GTC']);
    $users = DB::connection("SML")->select('select * from DBFLPASS');

    $periode = NewPeriode::where('user_id' , \Auth::User()->username)->first();

    $menul0 = app('App\Http\Controllers\NewMenuController')->getMenuL0(1);

    return view('berkas.berkasmenu' , [
      "menul0" => $menul0,
      "periode" => $periode,
      "users"=> $users
    ]);

  }

  public function loadAll () {
    $users = DB::connection("SML")->select('select * from DBMENUWEB');
    return $users;

  }

    public function spAdd (Request $req) 
    {
        $check = DB::connection('SML')->select(
            'SELECT * FROM DBMENUWEB where KODEMENU = :KODEMENU',
            ['KODEMENU' => $req->KODEMENU]
        );

        if ($check) {
            return 'Kode jenis sudah ada di database';
        }

        DB::connection('SML')->insert(
            'insert into DBMENUWEB (KODEMENU, Keterangan, L0, ACCESS, OL, TipeTrans, HeaderMenu, href, icon)
            values (:KODEMENU, :Keterangan, :L0, :ACCESS, :OL, :TipeTrans, :HeaderMenu, :href, :icon)',
            [
                'KODEMENU'   => $req->KODEMENU,
                'Keterangan' => $req->Keterangan,
                'L0'         => $req->L0,
                'ACCESS'     => $req->ACCESS,
                'OL'         => $req->OL,
                'TipeTrans'  => '',
                'HeaderMenu' => 1,
                'href'       => '#',
                'icon'       => null,
            ]
        );

        return 1;
    }

  public function spDelete (Request $req) {
    // $check = DB::connection('SML')->select('SELECT * FROM DBPPL where KDDep = :kode' , ['kode' => $req->kode]);

    // if ($check) {
    //   return 'Dept digunakkan di Pembelian';
    // }

    //$check = DB::connection('SML')->select('SELECT * FROM DBDEPARTEMEN where KodeDepartemen = :kode' , ['kode' => $req->kode]);
    //if ($check) {
      //return 'ga bisa hapus';
    //}
    $delete = DB::connection('SML')->update('delete from DBMENUWEB where KODEMENU = :kode' , ['kode' => $req->kode ]);
    return $delete;
  }

  public function spEdit (Request $req) {
    $edit = DB::connection('SML')->update('update DBMENUWEB set Keterangan = :Keterangan, L0 = :L0, ACCESS = :ACCESS, OL = :OL where KODEMENU = :KODEMENU' , ['KODEMENU' => $req->KODEMENU , 'Keterangan' => $req->Keterangan, 'L0' => $req->L0, 'ACCESS' => $req->ACCESS, 'OL' => $req->OL]);

    return $edit;
  }

  public function spDetail (Request $req) {
    $detail = DB::connection('SML')->select('SELECT * FROM DBMENUWEB where KODEMENU = :KODEMENU' , ['KODEMENU' => $req->KODEMENU]);
    return $detail;
  }

}
