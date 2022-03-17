<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class review extends Sximo  {
	
	protected $table = 'review';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT review.* FROM review  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE review.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
