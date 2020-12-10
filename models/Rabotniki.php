<?php 

class Rabotniki 
{
		public static function showRabotniki()
	{
		
		$rabotniki = array();
		
		$db = Db::getConnection();
		
		$result = $db->query("SELECT rabotniki.id, rabotniki.familia, rabotniki.imya, rabotniki.otchestvo, rabotniki.datar, rabotniki.mestor, rabotniki.passport, rabotniki.obrazovanie, rabotniki.dolgnost, rabotniki.status, sraspisanie.dolgnost FROM rabotniki INNER JOIN sraspisanie ON rabotniki.dolgnost = sraspisanie.id WHERE rabotniki.status = '1' ORDER BY id ASC");
		
		$i = 0;
		while ($row = $result->fetch())
		{
			$rabotniki[$i]['id'] = $row['id'];
			$rabotniki[$i]['familia'] = $row['familia'];
			$rabotniki[$i]['imya'] = $row['imya'];
			$rabotniki[$i]['otchestvo'] = $row['otchestvo'];
			$rabotniki[$i]['datar'] = $row['datar'];
			$rabotniki[$i]['mestor'] = $row['mestor'];
			$rabotniki[$i]['passport'] = $row['passport'];
			$rabotniki[$i]['obrazovanie'] = $row['obrazovanie'];
			$rabotniki[$i]['dolgnost'] = $row['dolgnost'];
			$rabotniki[$i]['status'] = $row['status'];
			$rabotniki[$i]['dolgnost'] = $row['dolgnost'];
			$i++;
		}
		return $rabotniki;
	}
	
			public static function showOneRabotniki($id)
	{
		
		$rabotniki = array();
		
		$db = Db::getConnection();
		
		$result = $db->query("SELECT rabotniki.id, rabotniki.familia, rabotniki.imya, rabotniki.otchestvo, rabotniki.datar, rabotniki.mestor, rabotniki.passport, rabotniki.obrazovanie, rabotniki.dolgnost, rabotniki.status, sraspisanie.dolgnost FROM rabotniki INNER JOIN sraspisanie ON rabotniki.dolgnost = sraspisanie.id WHERE rabotniki.id = $id AND rabotniki.status = '1' ORDER BY id ASC");
		
		$i = 0;
		while ($row = $result->fetch())
		{
			$rabotniki['id'] = $row['id'];
			$rabotniki['familia'] = $row['familia'];
			$rabotniki['imya'] = $row['imya'];
			$rabotniki['otchestvo'] = $row['otchestvo'];
			$rabotniki['datar'] = $row['datar'];
			$rabotniki['mestor'] = $row['mestor'];
			$rabotniki['passport'] = $row['passport'];
			$rabotniki['obrazovanie'] = $row['obrazovanie'];
			$rabotniki['dolgnost'] = $row['dolgnost'];
			$rabotniki['status'] = $row['status'];
			$rabotniki['dolgnost'] = $row['dolgnost'];
			$i++;
		}
		return $rabotniki;
	}
	
	public static function setRabotniki($familia, $imya, $otchestvo, $datar, $mestor, $passport, $obrazovanie, $dolgnost)
	{
		$db = Db::getConnection();
		
		        $sql = 'INSERT INTO rabotniki (familia, imya, otchestvo, datar, mestor, passport, obrazovanie, dolgnost) VALUES (:familia, :imya, :otchestvo, :datar, :mestor, :passport, :obrazovanie, :dolgnost)';
        
        $result = $db->prepare($sql);
        $result->bindParam(':familia', $familia, PDO::PARAM_STR);
        $result->bindParam(':imya', $imya, PDO::PARAM_STR);
        $result->bindParam(':otchestvo', $otchestvo, PDO::PARAM_STR);
		$result->bindParam(':datar', $datar, PDO::PARAM_STR);
		$result->bindParam(':mestor', $mestor, PDO::PARAM_STR);
        $result->bindParam(':passport', $passport, PDO::PARAM_STR);
        $result->bindParam(':obrazovanie', $obrazovanie, PDO::PARAM_STR);
		$result->bindParam(':dolgnost', $dolgnost, PDO::PARAM_STR);
        
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