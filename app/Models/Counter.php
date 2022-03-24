<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class counter extends Sximo  {
	
	protected $table = 'counter';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT counter.* FROM counter  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE counter.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
