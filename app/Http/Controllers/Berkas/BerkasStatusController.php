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

public function kunciPeriodeLoad(Request $req)
{
    $tahun = $req->tahun;

    $bulanLocked = DB::connection('SML')
        ->table('DBLOCKPERIODE')
        ->where('TAHUN', $tahun)
        ->pluck('BULAN');

    return response()->json($bulanLocked);
}

public function kunciPeriodeToggle(Request $req)
{
    $bulan   = $req->bulan;
    $tahun   = $req->tahun;
    $checked = $req->checked; // '1' = lock (insert), '0' = unlock (delete)

    if ($checked == 1) {
        $exists = DB::connection('SML')
            ->table('DBLOCKPERIODE')
            ->where('BULAN', $bulan)
            ->where('TAHUN', $tahun)
            ->exists();

        if (!$exists) {
            DB::connection('SML')->table('DBLOCKPERIODE')->insert([
                'BULAN' => $bulan,
                'TAHUN' => $tahun,
            ]);
        }
    } else {
        DB::connection('SML')
            ->table('DBLOCKPERIODE')
            ->where('BULAN', $bulan)
            ->where('TAHUN', $tahun)
            ->delete();
    }

    return response()->json(1);
}

}
