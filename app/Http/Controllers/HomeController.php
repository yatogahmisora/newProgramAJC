<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\User;
use App\Models\Periode;
use App\Models\NewMenu;
use App\Models\NewAksesMenu;
use App\Models\NewPeriode;
use Illuminate\Support\Facades\DB;

use App\Traits\AksesTrait;

class HomeController extends Controller
{

  use AksesTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      User::where('id', \Auth::id())->update(['status' => 1, 'hostid' => gethostbyaddr(\Request::ip()), 'ipaddress' => \Request::ip()]);
      $checkUser = User::where('id', \Auth::id())->first();
  		if ($checkUser->level == 3 && $checkUser->username == 'SA') {
        $menu = Menu::join('akses_menu', 'menu.id', '=', 'akses_menu.id_menu')->where('akses_menu.tampil', 1)->where('menu.show_acc', 1)->where('akses_menu.id_user', \Auth::id())->select('menu.*')->get();
      }else{
        $menu = Menu::join('akses_menu', 'menu.id', '=', 'akses_menu.id_menu')->where('akses_menu.tampil', 1)->where('menu.grup','>', 0)->where('menu.show_acc', 1)->where('akses_menu.id_user', \Auth::id())->select('menu.*')->get();
      }
      $periode = Periode::where('id_user', \Auth::id())->first();
      return view("dashboard")->with('menu', $menu)->with('periode', $periode);

    }

    public function newIndex() {
      $periode = NewPeriode::where('user_id' , \Auth::User()->username)->first();

      // $menul0 = app('App\Http\Controllers\NewMenuController')->getMenuL0();

      return view('newmaster' , [
        "menul0" => [],
        "periode" => $periode,
      ]);

    }

      public function accountingIndex() {
      $periode = NewPeriode::where('user_id' , \Auth::User()->username)->first();

      $menul0 = app('App\Http\Controllers\NewMenuController')->getMenuL0(5);

      return view('accounting.newmaster' , [
        "menul0" => $menul0,
        "periode" => $periode,
      ]);

    }

    public function marketingIndex() {
      $periode = NewPeriode::where('user_id' , \Auth::User()->username)->first();

      $menul0 = app('App\Http\Controllers\NewMenuController')->getMenuL0(4);

      return view('marketing.newmaster' , [
        "menul0" => $menul0,
        "periode" => $periode,
      ]);

    }

    public function gudangIndex() {
      $periode = NewPeriode::where('user_id' , \Auth::User()->username)->first();

      $menul0 = app('App\Http\Controllers\NewMenuController')->getMenuL0(6);

      return view('gudang.newmaster' , [
        "menul0" => $menul0,
        "periode" => $periode,
      ]);

    }

    public function purchasingIndex() {
      $periode = NewPeriode::where('user_id' , \Auth::User()->username)->first();

      $menul0 = app('App\Http\Controllers\NewMenuController')->getMenuL0(3);

      return view('purchasing.newmaster' , [
        "menul0" => $menul0,
        "periode" => $periode,
      ]);


    }

     public function masterIndex() {
      $periode = NewPeriode::where('user_id' , \Auth::User()->username)->first();

      $menul0 = app('App\Http\Controllers\NewMenuController')->getMenuL0(2);

      return view('master.newmaster' , [
        "menul0" => $menul0,
        "periode" => $periode,
      ]);


    }

     public function reportIndex() {
      $periode = NewPeriode::where('user_id' , \Auth::User()->username)->first();
      $akses = $this->cekAkses("Home");

      $menul0 = app('App\Http\Controllers\NewMenuController')->getMenuL0(5);

      return view('report.mastercore' , [
        "menul0" => $menul0,
        "periode" => $periode,
        "akses" => $akses
      ]);


    }

     public function berkasIndex() {
      $periode = NewPeriode::where('user_id' , \Auth::User()->username)->first();
      $akses = $this->cekAkses("Home");

      $menul0 = app('App\Http\Controllers\NewMenuController')->getMenuL0(1);

      return view('berkas.newmaster' , [
        "menul0" => $menul0,
        "periode" => $periode,
        "akses" => $akses
      ]);


    }

  public function GetMenu()
{
    $menu = DB::connection("sqlsrv")
        ->table('dbmenu')
        ->orderBy('KODEMENU')
        ->get();

    return response()->json($menu);
}




}
