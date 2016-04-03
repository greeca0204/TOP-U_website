<?php
	session_start();
	header('Content-Type: text/html; charset=UTF-8');
	include("global.inc.php");
	r_require_once("/lib/MultiActions.php");
	require_once("global.inc.php");
	r_require_once("/lib/MultiActions.php");	

	function _default()
	{
		r_require_once("/smarty/MySmarty.php");	
		r_require_once("/DAL/Service.php");		
		$tpl = new MySmarty();
		$service = new Service();
		$tpl->assign("siteTitle","服务流程");
		$tpl->assign("service",$service->getService());

		r_require_once("/DAL/WebInfo.php");
		$website = new WebInfo();
		$tpl->assign("website",$website->getWeb());
		r_require_once("/DAL/Friend.php");
		$friend = new Friend();
		$tpl->assign("friend",$friend->getAllFriend());
		
		$tpl->display("service_process.html");
	}
?>