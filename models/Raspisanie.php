<?php 

class Raspisanie
{
		public static function showRaspisanie()
	{
		
		$raspisanie = array();
		
		$db = Db::getConnection();
		
		$result = $db->query("SELECT id, code, dolgnost, tarif, prim FROM sraspisanie WHERE status = '1' ORDER BY code ASC");
		
		$i = 0;
		while ($row = $result->fetch())
		{
			$raspisanie[$i]['id'] = $row['id'];
			$raspisanie[$i]['code'] = $row['code'];
			$raspisanie[$i]['dolgnost'] = $row['dolgnost'];
			$raspisanie[$i]['tarif'] = $row['tarif'];
			$raspisanie[$i]['prim'] = $row['prim'];
			$i++;
		}
		return $raspisanie;
	}
	
	
	public static function setPositionRaspisanie($code, $dolgnost, $tarif, $prim)
	{
		$db = Db::getConnection();
		
		        $sql = 'INSERT INTO sraspisanie (code, dolgnost, tarif, prim) VALUES (:code, :dolgnost, :tarif, :prim)';
        
        $result = $db->prepare($sql);
        $result->bindParam(':code', $code, PDO::PARAM_STR);
        $result->bindParam(':dolgnost', $dolgnost, PDO::PARAM_STR);
        $result->bindParam(':tarif', $tarif, PDO::PARAM_STR);
		$result->bindParam(':prim', $prim, PDO::PARAM_STR);
        
        return $result->execute();
		
		return true;
	}
	
	
	public static function hidePositionRaspisanie($id)
	{
		$db = Db::getConnection();
		
		$db->query("UPDATE sraspisanie SET status = '0'  WHERE id = $id");
		
		return true;
		
	}


	public static function showPositionRaspisanie($id)
	{
		$db = Db::getConnection();
		
		$db->query("UPDATE sraspisanie SET status = '1'  WHERE id = $id");
		
		return true;
		
	}




}






?>