<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class allbanner extends Sximo  {
	
	protected $table = 'all_banner';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT all_banner.* FROM all_banner  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE all_banner.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
