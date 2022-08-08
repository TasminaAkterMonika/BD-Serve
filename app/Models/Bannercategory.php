<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class bannercategory extends Sximo  {
	
	protected $table = 'banner_category';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT banner_category.* FROM banner_category  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE banner_category.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
