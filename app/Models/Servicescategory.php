<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class servicescategory extends Sximo  {
	
	protected $table = 'category';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT category.* FROM category  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE category.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
