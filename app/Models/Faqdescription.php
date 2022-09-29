<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class faqdescription extends Sximo  {
	
	protected $table = 'faq_description';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT faq_description.* FROM faq_description  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE faq_description.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
