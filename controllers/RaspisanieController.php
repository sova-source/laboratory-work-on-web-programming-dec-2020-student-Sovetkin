<?php 
include_once ROOT.'/models/Raspisanie.php';

class RaspisanieController
{
	public function actionView()
	{
		$raspisanie = array();
		$raspisanie = Raspisanie::showRaspisanie();
		
		require_once(ROOT.'/views/raspisanie/view.php');
		return true;
	}
	
		public function actionSet()
	{
		
		$code = $_POST['code'];
		$dolgnost = $_POST['dolgnost'];
		$tarif = $_POST['tarif'];
		$prim = $_POST['prim'];
		
		
		Raspisanie::setPositionRaspisanie($code,$dolgnost,$tarif,$prim);
		header("Location: /raspisanie");
		return true;
	}
	
	
	public function actionHide($id)
	{
		
		
		Raspisanie::hidePositionRaspisanie($id);
		header("Location: /raspisanie");
		return true;
	}
	
	
}









?>