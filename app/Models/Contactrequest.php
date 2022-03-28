<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class contactrequest extends Sximo  {
	
	protected $table = 'contact_request';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT contact_request.* FROM contact_request  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE contact_request.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
