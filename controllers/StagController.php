<?php 
include_once ROOT.'/models/Stag.php';
include_once ROOT.'/models/Rabotniki.php';


class StagController
{
	public function actionView()
	{
		$rabotniki = array();
		$rabotniki = Rabotniki::showRabotniki();
		
		
		require_once(ROOT.'/views/stag/view.php');
		return true;
	}
	
		public function actionSet($id)
	{
		
		$id_user = $id;
		$date_s = $_POST['date_s'];
		$date_po = $_POST['date_po'];
		$koef = $_POST['koef'];
		
		$stag = array();
		$stag = Stag::showStag($id_user);
		
		Stag::setStag($id_user, $date_s, $date_po, $koef);
		
		header("Location: /stag/show/$id_user");
		return true;
	}
	
	public function actionShow($id)
	{
		$rabotniki = array();
		$rabotniki = Rabotniki::showOneRabotniki($id);
		
		$stag = array();
		$stag = Stag::showStag($id);
		
		$total_stag = Stag::showTotalStag($id);
		
		require_once(ROOT.'/views/stag/formstag.php');
		
		return true;
	}
}




?>