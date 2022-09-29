<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class servicesprice extends Sximo  {
	
	protected $table = 'services_price';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT services_price.* FROM services_price  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE services_price.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
