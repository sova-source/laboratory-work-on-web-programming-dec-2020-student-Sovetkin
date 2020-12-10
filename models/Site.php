<?php 

class Site
{
		public static function showCountRabotniki()
	{
		
		
		
		$db = Db::getConnection();
		
		$result = $db->query("SELECT COUNT(*) FROM rabotniki");
		
		$count = $result->fetch();
		
		return $count['0'];
	}
	
		public static function showCountDolgnosti()
	{
		
		$db = Db::getConnection();
		
		$result = $db->query("SELECT COUNT(*) FROM sraspisanie");
		
		$dolgnosti = $result->fetch();
		
		return $dolgnosti['0'];
	}
	
		public static function showSearch($pattern)
	{
		$db = Db::getConnection();
		
		$result = $db->query("SELECT familia, imya, otchestvo, datar FROM rabotniki WHERE familia LIKE '$pattern'");
		
		$i = 0;
		while ($row = $result->fetch())
		{
			$search[$i]['familia'] = $row['familia'];
			$search[$i]['imya'] = $row['imya'];
			$search[$i]['otchestvo'] = $row['otchestvo'];
			$search[$i]['datar'] = $row['datar'];
			$i++;
		}
		if ($search == null)
		{
			$search['0']['familia']='No result';
		}
		return $search;
	}
	
	
	public static function hideSelectedRabotniki($id)
	{
		$db = Db::getConnection();
		
		$db->query("UPDATE rabotniki SET status = '0'  WHERE id = $id");
		
		return true;
		
	}


	public static function showSelectedRabotniki($id)
	{
		$db = Db::getConnection();
		
		$db->query("UPDATE rabotniki SET status = '1'  WHERE id = $id");
		
		return true;
		
	}




}






?>