<?php 

class Knigka
{
		public static function showKnigka($id)
	{
		
		$knigka = array();
		
		$db = Db::getConnection();
		
		$result = $db->query("SELECT t_knigka.id, t_knigka.ser_nom, t_knigka.id_user, t_knigka.date, t_knigka.svedenia, t_knigka.osnovanie, rabotniki.familia, rabotniki.imya, rabotniki.otchestvo FROM t_knigka INNER JOIN rabotniki ON t_knigka.id_user = rabotniki.id WHERE rabotniki.id = $id ORDER BY id ASC");
		
		$i = 0;
		while ($row = $result->fetch())
		{
			$knigka[$i]['id'] = $row['id'];
			$knigka[$i]['ser_nom'] = $row['ser_nom'];
			$knigka[$i]['id_user'] = $row['id_user'];
			$knigka[$i]['date'] = $row['date'];
			$knigka[$i]['svedenia'] = $row['svedenia'];
			$knigka[$i]['osnovanie'] = $row['osnovanie'];
			$knigka[$i]['familia'] = $row['familia'];
			$knigka[$i]['imya'] = $row['imya'];
			$knigka[$i]['otchestvo'] = $row['otchestvo'];
			$i++;
		}
		return $knigka;
	}
	
	
	public static function setKnigka($ser_nom, $id_user, $date, $svedenia, $osnovanie)
	{
		$db = Db::getConnection();
		
		        $sql = 'INSERT INTO t_knigka (ser_nom, id_user, date, svedenia, osnovanie) VALUES (:ser_nom, :id_user, :date, :svedenia, :osnovanie)';
        
        $result = $db->prepare($sql);
        $result->bindParam(':ser_nom', $ser_nom, PDO::PARAM_STR);
        $result->bindParam(':id_user', $id_user, PDO::PARAM_STR);
        $result->bindParam(':date', $date, PDO::PARAM_STR);
		$result->bindParam(':svedenia', $svedenia, PDO::PARAM_STR);
		$result->bindParam(':osnovanie', $osnovanie, PDO::PARAM_STR);
        
        return $result->execute();
		
		return true;
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