<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewMenu;
use App\Models\NewAksesMenu;
use App\Models\DBFLMENU;
use App\Models\NewPeriode;
use App\Models\NewUsers;
use Illuminate\Support\Facades\DB;

class HeaderTableController extends Controller


{
  public function saveHeaderTable (Request $req) {
    $username = \Auth::user()->username;

    // $periode = app('App\Http\Controllers\GlobalController')->getPeriode();
    $res = DB::connection('SML')->select(
        "select * from  DBHEADERTABLE where username = :username and href = :href ",
        [
            "username" => $username,
            "href" => $req->href
        ]
    );
    if ($res) {

    $res = DB::connection('SML')->update(
        "UPDATE DBHEADERTABLE SET header = :header , tipe = :tipe , isnumber = :isnumber , value = :value , isshown = :isshown  where username = :username and href = :href ",
        [
          "header" => $req->header ,
           "tipe" => $req->tipe ,
            "isnumber" => $req->isnumber ,
             "value" => $req->value ,
              "isshown" => $req->isshown ,
            "username" => \Auth::user()->username,

            "href" => $req->href

        ]
    );
  } else {
    $res = DB::connection('SML')->statement(
        "INSERT INTO DBHEADERTABLE (username, href, header, tipe, isshown , value, isnumber)
VALUES (:username , :href , :header , :tipe , :isshown , :value , :isnumber);",
        [
          "header" => $req->header ,
           "tipe" => $req->tipe ,
            "isnumber" => $req->isnumber ,
             "value" => $req->value ,
              "isshown" => $req->isshown ,
            "username" => \Auth::user()->username,

            "href" => $req->href
        ]
    );

  }
  return 1;

  }


  public function getHeaderTable (Request $req) {
    $isnumberheadertable = [];
    $headertablevalue = [];
    $headertableheader = [];
    $headerisshown = [];
    $username = \Auth::user()->username;

    $periode = app('App\Http\Controllers\GlobalController')->getPeriode();


    if ($req->href == 'pembelianpermintaannonagen') {
      $otorisasi = DB::connection("SML")->select("select NoBukti , Tanggal  , IsOtorisasi1, TglOto1, OtoUser1  from vwppl where  bulan = :bulan and tahun = :tahun and IsJasa = 0 and pAgen = 0 "  , ["bulan" => $periode->bulan , "tahun" => $periode->tahun ]);

  $otorisasi = collect($otorisasi)->groupBy('NOBUKTI');
      $tempOtorisasi = [];
      foreach ($otorisasi as $groupedData) {
          $tempOtorisasi[] = $groupedData;
      }
      $isparsed = 0;
      $headertable = DB::connection("SML")->select("select *  from dbheadertable where  href= :href and username = :username "  , ["username" => \Auth::user()->username , "href" => $req->href ]);


      if (count($headertable) > 0) {
        $isnumberheadertable = $headertable[0]->isnumber;
        $headertablevalue = $headertable[0]->value;
        $headertableheader = $headertable[0]->header;
        $headerisshown = $headertable[0]->isshown;
        $isparsed = 0;
      } else {
        // $headertable = [];


        if(!$tempOtorisasi) {

        } else {
          $isparsed = 1;
          foreach ($tempOtorisasi[0][0] as $key => $value) {

            if (str_contains($key, "Oto")) {


            } else {

                array_push($headertablevalue, $key);
              array_push($headertableheader, $key);
            array_push($headerisshown, 1);

              if (strtotime($value)) {

                    array_push( $isnumberheadertable , 2);
              } else if (is_numeric($value)) {
                  array_push( $isnumberheadertable , 1);
              } else {

                    array_push($isnumberheadertable,0);
              }
            }



          }
        }




      }
    }
    return [
      "isparsed" => $isparsed ,
      "headertableheader" => $headertableheader ,
      "isnumeric" => $isnumberheadertable,
      "headertablevalue" => $headertablevalue,
      "isshown" => $headerisshown];



  }


}
