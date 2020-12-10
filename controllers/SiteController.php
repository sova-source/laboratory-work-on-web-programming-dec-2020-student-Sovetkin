<?php 


include_once ROOT.'/models/Site.php';


class SiteController
{
	public function actionIndex()
	{
		
		$count = Site::showCountRabotniki();
		$dolgnosti = Site::showCountDolgnosti();
		require_once(ROOT.'/views/site/index.php');
		
		
		return true;
	}
	
	public function actionSearch()
	{
		
		$count = Site::showCountRabotniki();
		$dolgnosti = Site::showCountDolgnosti();
		$pattern = $_POST['pattern'];
		$searcharray = Site::showSearch($pattern);
		
		require_once(ROOT.'/views/site/search.php');
		return true;
	}
}







?>