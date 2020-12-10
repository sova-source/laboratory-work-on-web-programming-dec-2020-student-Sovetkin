<?php 

include_once ROOT.'/models/GetPositionsToOrgchart.php';

class OrgchartController
{
	public function actionGetposition($id)
	{
		GetPositionsToOrgchart::showOrghart($id);
		
		return true;
	}
	
	public function actionView()
	{
		
		require_once(ROOT.'/views/orgchart/orgchart.php');
		
		return true;
	}
}







?>