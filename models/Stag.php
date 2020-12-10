<?php 

class Stag
{
		public static function showStag($id)
	{
		
		$stag = array();
		
		$db = Db::getConnection();
		
		$result = $db->query("SELECT t_stag.id, t_stag.id_user, t_stag.date_s, t_stag.date_po, t_stag.koef, t_stag.itog, rabotniki.familia,rabotniki.imya, rabotniki.otchestvo FROM t_stag INNER JOIN rabotniki ON t_stag.id_user = rabotniki.id WHERE rabotniki.id = $id  ORDER BY id ASC");
		
		$i = 0;
		while ($row = $result->fetch())
		{
			$stag[$i]['id'] = $row['id'];
			$stag[$i]['id_user'] = $row['id_user'];
			$stag[$i]['date_s'] = $row['date_s'];
			$stag[$i]['date_po'] = $row['date_po'];
			$stag[$i]['koef'] = $row['koef'];
			$stag[$i]['familia'] = $row['familia'];
			$stag[$i]['imya'] = $row['imya'];
			$stag[$i]['otchestvo'] = $row['otchestvo'];
			$stag[$i]['itog'] = $row['itog'];
			$i++;
		}
		return $stag;
	}
	
	
	public static function setStag($id_user, $date_s, $date_po, $koef)
	{
		
		$itog = Stag::date_difference($date_s, $date_po, $koef);
		
		$db = Db::getConnection();
		
		        $sql = 'INSERT INTO t_stag (id_user, date_s, date_po, koef, itog) VALUES (:id_user, :date_s, :date_po, :koef, :itog)';
        
        $result = $db->prepare($sql);
        $result->bindParam(':id_user', $id_user, PDO::PARAM_STR);
        $result->bindParam(':date_s', $date_s, PDO::PARAM_STR);
        $result->bindParam(':date_po', $date_po, PDO::PARAM_STR);
		$result->bindParam(':koef', $koef, PDO::PARAM_STR);
		$result->bindParam(':itog', $itog, PDO::PARAM_STR);
        
        return $result->execute();
		
		return true;
	}
	
	
	public static function showTotalStag($id)
	{
		$stag = Stag::showStag($id);
		
		$result_int = 0;
		foreach ($stag as $row)
		{
			$total_int = Stag::date_to_int($row['date_po'],$row['koef']) - Stag::date_to_int($row['date_s'],$row['koef']);
			$result_int = $total_int + $result_int;
		}
		
		$total_stag = Stag::int_to_date($result_int);
		
		return $total_stag;
	}
	
	
	
	
	
	
	public static function date_to_int($date, $koef)
{
		$year = intval(date('Y', strtotime($date)))*$koef;

		$month = intval(date("m", strtotime($date)))*$koef;

		$day = intval(date("d", strtotime($date)))*$koef;
		
		$result = ($year*360)+($month*30)+$day;
		
		return $result;
}


	public static function int_to_date($intdate)
{
		$year = floor($intdate/360);
		
		$month = floor(($intdate-($year*360))/30);
		
		$day = $intdate - ($year*360)-($month*30);
		
		$result = $year.' лет '.$month.' мес. '.$day.' дн. ';
		
		return $result;
}

	public static function date_difference($date1, $date2, $koef)
{
		$diff = Stag::date_to_int($date2, $koef) - Stag::date_to_int($date1, $koef);
		
		$result = Stag::int_to_date($diff);
		
		return $result;
}



}






?>