<?php
class Conekta_Plan extends Conekta_Resource
{
	public static function get($id)
	{
		$class = get_class();
		return self::_scpGet($class, $id);
	}
	
	public static function create($params=null)
	{
		$class = get_class();
		return self::_scpCreate($class, $params);
	}
	
	public static function where($params) {
		$class = get_class();
		return self::_scpWhere($class, $params);
	}
	
	public function delete() {
		return self::_delete();
	}
	
	public function update($params=null)
	{
		return self::_update($params);
	}	
}
?>