<?php 
include_once ROOT.'/models/Rabotniki.php';
include_once ROOT.'/models/Raspisanie.php';

class RabotnikiController
{
	public function actionView()
	{
		
		$raspisanie = array();
		$raspisanie = Raspisanie::showRaspisanie();
		
		$rabotniki = array();
		$rabotniki = Rabotniki::showRabotniki();
		
		require_once(ROOT.'/views/rabotniki/view.php');
		return true;
	}
	
		public function actionSet()
	{
		
		$familia = $_POST['familia'];
		$imya = $_POST['imya'];
		$otchestvo = $_POST['otchestvo'];
		$datar = $_POST['datar'];
		$mestor = $_POST['mestor'];
		$passport = $_POST['passport'];
		$obrazovanie = $_POST['obrazovanie'];
		$dolgnost = $_POST['dolgnost'];
		
		Rabotniki::setRabotniki($familia, $imya, $otchestvo, $datar, $mestor, $passport, $obrazovanie,$dolgnost);
		header("Location: /rabotniki");
		return true;
	}
	
			
		public function actionHide($id)
	{
		
		Rabotniki::hideSelectedRabotniki($id);
		header("Location: /rabotniki");
		return true;
	}
}









?>