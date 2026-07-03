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

class NewSetPemakaiController extends Controller
{

  public function index(Request $req) {

    // $user = DB::connection("SML")->select('select * from DBGUDANG where KODEGDG <> :id', ['id' => 'GTC']);
    $users = DB::connection("SML")->select('select * from DBFLPASS');

    $periode = NewPeriode::where('user_id' , \Auth::User()->username)->first();

    $menul0 = app('App\Http\Controllers\NewMenuController')->getMenuL0(1);

    return view('berkas.newsetpemakai' , [
      "menul0" => $menul0,
      "periode" => $periode,
      "users"=> $users
    ]);

  }

  public function loadAll () {
    $users = DB::connection("SML")->select('select * from DBFLPASS');
    return $users;

  }

  public function detailUser (Request $req ) {

    $list = DB::connection("SML")->select('select * from DBFLPASS where username = :username ' ,["username" => $req->username]);
    return $list;

  }


  public function listAkses (Request $req) {
    $values = [
        $req->userid,
      ];

    // return [$values];  
    DB::connection('SML')->update('exec sp_updateMenuWeb1 ?',$values);


    $listAkses = DB::connection("SML")->select('select a.* , b.* from DBMENUWEB a join DBFLMENUWEB b ON a.KODEMENU = b.L1 where b.USERID = :username order by a.KODEMENU' , ['username' => $req->userid]);

    return $listAkses;
  }

  public function listAksesReport (Request $req) {
    //   select * from DBMENUREPORT
    //
    // select * from DBFLMENUREPORT
    $values = [
        $req->userid,
      ];
    DB::connection('SML')->update('exec sp_updateMenuReportWeb1 ?',$values);


    $listAksesReport = DB::connection("SML")->select('select a.* , b.* from DBMENUREPORT a join DBFLMENUREPORT b on a.KODEMENU = b.L1 where b.UserID = :username order by a.KODEMENU', ['username' => $req->userid]);
    return $listAksesReport;


  }

  public function listCoa (Request $req) {
    $tes = DB::connection("SML")->update('update DBPERKIRAAN set iskirim = 0');
    $listCoa = DB::connection("SML")->select('select Perkiraan, Keterangan from DBPERKIRAAN where Perkiraan not in ( select Perkiraan from DBAKSESPERKIRAAN where UserID = :username )', ['username' => $req->username]);
    $listAksesCoa = DB::connection("SML")->select('select a.Keterangan , b.Perkiraan from DBAKSESPERKIRAAN b join DBPERKIRAAN a on a.Perkiraan = b.Perkiraan where b.UserID = :username', ['username' => $req->username]);

    return [
      'listCoa' => $listCoa, 'listAksesCoa' => $listAksesCoa, 'tes'=>$tes
    ];
  }

  public function updateIsKirimCOA (Request $req) {


      $tes = DB::connection("SML")->update('update DBPERKIRAAN set iskirim = :nilai where Perkiraan = :perkiraan' , ['perkiraan' => $req->perkiraan, 'nilai' => $req->nilai]);
      return $tes;
  }

  public function updateAddAksesCOA (Request $req) {
    // insert into dbaksesperkiraan
    // Select '+QuotedStr(Myuser)+',Perkiraan from dbperkiraan
    // where Tipe=1 and perkiraan not in(select perkiraan from dbaksesperkiraan where userid='+QuotedStr(Myuser)+')
    // insert into DBAKSESPERKIRAAN select 'SA' , Perkiraan from DBPERKIRAAN where iskirim=1 and Perkiraan not in (select perkiraan from dbaksesperkiraan where userid='SA')
    $tes = DB::connection("SML")->insert('insert into DBAKSESPERKIRAAN select :username , Perkiraan from DBPERKIRAAN where iskirim=1 and Perkiraan not in (select perkiraan from dbaksesperkiraan where userid=:username1)', ['username' => $req->username , 'username1' => $req->username]);
    return json_encode($tes);

  }

  public function updateAddAllAksesCOA (Request $req) {
    $tes = DB::connection("SML")->insert('insert into DBAKSESPERKIRAAN select :username , Perkiraan from DBPERKIRAAN where Perkiraan not in (select perkiraan from dbaksesperkiraan where userid=:username1)' , ['username' => $req->username , 'username1' => $req->username]);
    return json_encode($tes);
  }

  public function deleteAllAksesCOA (Request $req) {
    // delete from DBAKSESPERKIRAAN where UserID= 'SA'

    $tes = DB::connection("SML")->update('delete from DBAKSESPERKIRAAN where UserID= :username' , ['username' => $req->username ]);

    return $tes;
  }


  public function deleteUser (Request $req) {

      $tes = DB::connection("SML")->update('delete from dbflpass where username= :username' , ['username' => $req->username]);

    return 1;
  }


  public function deleteAksesCOA (Request $req) {
    $perkiraan = $req->perkiraan;
    $username = $req->username;
    // $tes = DB::connection("SML")->update('delete from DBAKSESPERKIRAAN where UserID= :username and Perkiraan = :perkiraan' , ['username' => $req->username, 'perkiraan' => $req->perkiraan ]);
    // delete from DBAKSESPERKIRAAN where UserID= 'SA' and Perkiraan = '00'

    foreach ($perkiraan as $p) {
      // code...
      $tes = DB::connection("SML")->update('delete from DBAKSESPERKIRAAN where UserID= :username and Perkiraan = :perkiraan' , ['username' => $username, 'perkiraan' => $p['Perkiraan'] ]);
    }
    return 1;
  }

  public function spUpdateAksesReport (Request $req) {
    $username = $req->input('username');

    $data = $req->input('tempData');

    // DB::connection('SML')->statement('delete	DBFLMENUREPORT where UserID = :USERID',['USERID' => $username ]);

    // foreach ($data as $d) {
      $values = [
         $username,
         $data['KODEMENU'],
         $data['HASACCESS'],
         $data['ISDESIGN'],
         $data['ISEXPORT']
        ];
      DB::connection('SML')->update('exec SP_Flmenureportweb1 ?,?,?,?,?',$values);
    // }

    return 1;
  }



  public function spUpdateAkses (Request $req) {

    $username = $req->input('username');

    $data = $req->input('tempData');

    // DB::connection('SML')->statement('delete	DBFLMENUWEB where USERID = :USERID',['USERID' => $username ]);

    // foreach ($data as $d) {
      $values = [
         $username,
         $data['KODEMENU'],
         $data['HASACCESS'],
         $data['ISTAMBAH'],
         $data['ISKOREKSI'],
         $data['ISHAPUS'],
         $data['ISCETAK'],
         $data['ISEXPORT'],
         $data['ISOTO1'],
         $data['ISOTO2'],
         $data['ISOTO3'],
         $data['ISOTO4'],
         $data['ISOTO5'],
         $data['ISBATAL'],
         ''
        ];
      DB::connection('SML')->update('exec SP_FlmenuWeb1 ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?',$values);
    // }

    return 1;


  }

  public function spUpdateAksesHeader (Request $req) {

    // $username = $req->input('username');

    // $data = $req->input('tempData');


    // DB::connection('SML')->statement('delete	DBFLMENUWEB where USERID = :USERID',['USERID' => $username ]);


    // foreach ($data as $d) {
      $values = [
         $req->input('headermenu'),
         $req->input('nilai'),
         $req->input('username'),
         $req->input('field'),
        ];
      DB::connection('SML')->update('exec sp_updatesetmenuweb1 ?,?,?,?',$values);
    // }

    return 1;


  }

  public function loadKaryawan (){
    $list = DB::connection('SML')->select('SELECT NIK, Nama FROM DBKARYAWAN');

    return $list;
  }

  public function loadDepartemen (){
    $list = DB::connection('SML')->select('SELECT KDDEP,NMDEP FROM DBDEPART');

    return $list;
  }

  public function loadJabatan (){
    $list = DB::connection('SML')->select('SELECT KODEJAB, NamaJab FROM DBJABATAN');

    return $list;
  }

  public function submitAdduser (Request $req) {
    $hashedPassword = 'xx';
    if ( $req->input('choice') == 'I') {

      $hashedPassword = Hash::make($req->input('password'));

    }

   //   [
   //     $req->input('choice'),
   //     $req->input('user'),
   //     'dariweb' ,
   //     $req->input('level'),
   //     $req->input('status'),
   //     $req->input('namaLengkap'),
   //     $req->input('departemen'),
   //     $req->input('jabatan'),
   //      $req->input('kodeKasir'),
   //      '',
   //     $req->input('nik'),
   //     $req->input('limit'),
   //     $hashedPassword
   // ];

  $check = DB::connection('SML')->update("EXEC Sp_FLpassWEB ?,?,?,?,?,?,?,?,?,?,?,?,?",
   [
      $req->input('choice'),
      $req->input('user'),
      'dariweb' ,
      $req->input('level'),
      $req->input('status'),
      $req->input('namaLengkap'),
      $req->input('departemen'),
      $req->input('jabatan'),
      $req->input('kodeKasir'),
      '',
      $req->input('nik'),
      $req->input('limit'),
      $hashedPassword
  ]);

  return 1;

}

}
