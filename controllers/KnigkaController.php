<?php 
include_once ROOT.'/models/Knigka.php';
include_once ROOT.'/models/Rabotniki.php';

class KnigkaController
{
	public function actionView()
	{
		$rabotniki = array();
		$rabotniki = Rabotniki::showRabotniki();
		
		require_once(ROOT.'/views/knigka/view.php');
		return true;
	}
	
	public function actionShow($id)
	{
		
		$rabotniki = array();
		$rabotniki = Rabotniki::showOneRabotniki($id);
		
		
		
		$knigka = array();
		$knigka = Knigka::showKnigka($id);
		
		require_once(ROOT.'/views/knigka/formaknigka.php');
		return true;
	}
		
		public function actionSet($id)
	{
		
		$ser_nom = $_POST['ser_nom'];
		$id_user = $id;
		$date = $_POST['date'];
		$svedenia = $_POST['svedenia'];
		$osnovanie = $_POST['osnovanie'];
		
		Knigka::setKnigka($ser_nom, $id_user, $date, $svedenia, $osnovanie);
		header("Location: /knigka/show/$id");
		return true;
	}
	
	
}









?>