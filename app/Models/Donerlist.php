<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class donerlist extends Sximo  {
	
	protected $table = 'donerlist';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT donerlist.* FROM donerlist  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE donerlist.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
