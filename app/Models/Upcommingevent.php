<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class upcommingevent extends Sximo  {
	
	protected $table = 'upcomming_event';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT upcomming_event.* FROM upcomming_event  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE upcomming_event.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
