<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class NewMenu extends Model
{
		protected $connection = 'sqlsrv';
    // protected $table = 'DBMENU';
		protected $table = 'DBMENU';
    protected $fillable = array(
        'KODEMENU',
        'Keterangan',
        'L0',
        'ACCESS',
				'OL',
				'TipeTrans',
				'HeaderMenu',
				'href'
    );
    public $timestamps = false;
}


?>
