<?php

namespace App\Traits;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Model\NewMenuReport;
use App\Model\NewPeriode;
use Carbon\Carbon;

trait AksesTrait {
	public function cekAkses($href) {
		$akses = array('userLoggedOut' => false);

    	// $periode = NewPeriode::where('USERID' , \Auth::User()->username)->first();
		$periode = collect(
		    DB::connection('MGL')->select(
		        'select top 1 bulan, tahun from DBPERIODE where user_id = ?',
		        [\Auth::user()->username]
		    )
		)->first();
		$menul0 = app('App\Http\Controllers\NewMenuController')->getMenuL0Report(5);

		$program = DB::connection('MGL')->select('select * from DBPERUSAHAAN');
		$akses = array_add($akses, 'program', $program[0]->NAMA);
		$akses = array_add($akses, 'href', $href);
		$akses = array_add($akses, 'user', \Auth::User()->username);
		
		if ($href != "Home") {
			$menu = NewMenuReport::where('href' , $href)->first();
			$aksesmenu = $this->getAksesMenu($href);
			$akses = array_add($akses, 'akses', $aksesmenu[0]);
			$akses = array_add($akses, 'namamenu', $menu->Keterangan);
		} else {
			$akses = array_add($akses, 'namamenu', "Home");
		}
		
		$akses = array_add($akses, 'periode', $periode);
		$akses = array_add($akses, 'menul0' , $menul0);

		/* // Tidak jadi dipakai karena timestamp tidak akurat
		$datetime = Carbon::now()->toDateTimeString();            // yyyy-mmm-dd hh:mm
		$datetime = Str::replaceArray('-', ['', ''], $datetime);  // yyyymmmdd hh:mm:ss
		$datetime = Str::replaceArray(':', ['', ''], $datetime);  // yyyymmmdd hhmmss
		$datetime = Str::replaceArray(' ', ['_'], $datetime);     // yyyymmmdd_hhmmss
		$akses = array_add($akses, 'xlsfilename', strtoupper($href) . "_" . $datetime);
		*/
		$akses = array_add($akses, 'xlsfilename', strtoupper($href));

		return $akses;
	}

	public function getAksesMenu($href) {
		return DB::connection('SML')->select('select fl.* from DBFLMENUREPORT fl left outer join DBMENUREPORT m on (fl.L1 = m.KODEMENU) where fl.UserID = :user and m.href = :href' , ['user' => \Auth::User()->username, 'href' => $href]);
	}


	/*
	// 2 function di bawah adalah function dari program Project
	// ditaruh sini sebgai refrensi
	public function checkMenu($access, $otherColumn = '') {
		$checkStatusUser = User::where('id', \Auth::id())->first();
		if ($checkStatusUser->status == 0) {
			User::where('id', Auth::id())->update(['status' => 0, 'hostid' => '', 'ipaddress' => '']);
			Auth::logout();
			$akses = array('userLoggedOut' => true);
			return $akses;
		}
		
		$columnName = ($otherColumn != '') ? $otherColumn : 'access';

		$getKode = Menu::where($columnName, $access)->first();
		$check = AksesMenu::where('id_user', \Auth::id())->where('kode_menu', $getKode->kode)->first();

		$akses = array('userLoggedOut' => false);
		$akses = array_add($akses, 'akses', $check);

		if ($check->tampil == 1) {
			User::where('id', \Auth::id())
				->update(['status' => 1, 'hostid' => gethostbyaddr(\Request::ip()), 'ipaddress' => \Request::ip()]);

			$checkUser = User::where('id', \Auth::id())->first();
			if ($checkUser->level == 3 && $checkUser->username == 'SA') {
	    		$menu = Menu::join('akses_menu', 'menu.kode', '=', 'akses_menu.kode_menu')
	    			->where('akses_menu.tampil', 1)
	    			->where('menu.show_acc', 1)
	    			->where('akses_menu.id_user', \Auth::id())
	    			->select('menu.*')->orderBy('kode', 'ASC')
	    			->get();
	  		} else {
	    		$menu = Menu::join('akses_menu', 'menu.kode', '=', 'akses_menu.kode_menu')
	    			->where('akses_menu.tampil', 1)
	    			->where('menu.grup','>', 0)
	    			->where('menu.show_acc', 1)
	    			->where('akses_menu.id_user', \Auth::id())
	    			->select('menu.*')->orderBy('kode', 'ASC')
	    			->get();
	  		}
	  		
			$periode = Periode::where('id_user', \Auth::id())->first();

			$akses = array_add($akses, 'allowTransEdit', $this->allowTransEdit($checkUser->level));
		} else {
			return $akses;
		}

		$akses = array_add($akses, 'menu', $menu);
		$akses = array_add($akses, 'periode', $periode);
		return $akses;
	}

	public function allowTransEdit($level) {
		if ($level == 3) {
			$getKode = Menu::where('access', '/transaksidiedit')->first();
			$check = AksesMenu::where('id_user', \Auth::id())->where('kode_menu', $getKode->kode)->first();

			if ($check->tampil == 1) { return true; }
		}

		return false;
	}
	/* */
  
}
