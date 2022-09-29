<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class orderrequest extends Sximo  {
	
	protected $table = 'order_request';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT order_request.* FROM order_request  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE order_request.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
