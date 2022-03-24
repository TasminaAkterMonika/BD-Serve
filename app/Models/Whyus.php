<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class whyus extends Sximo  {
	
	protected $table = 'why_us';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT why_us.* FROM why_us  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE why_us.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
