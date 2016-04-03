<?php
	session_start();
	echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
	
	if($_SESSION['username'] == null)
	{
		echo "<script>alert('请先登录！');location.href='index.php';</script>";
	}

	require_once("../global.inc.php");
	r_require_once("/lib/MultiActions.php");	

	function _default(){		
			
				
		r_require_once("/smarty/MySmarty.php");
		r_require_once("/DAL/Service.php");
		
		$tpl = new MySmarty("admin");		
		$service = new Service();
		
		$tpl->assign("siteTitle","后台管理系统");
		$tpl->assign('service', $service->getService());
		$tpl->display("showService.html");
	}
	
	function _save() {
		r_require_once("/DAL/Service.php");
		
		if (!empty($_POST['content1'])) {
			if (get_magic_quotes_gpc()) {
				$service = stripslashes($_POST['content1']);
			} else {
				$service = $_POST['content1'];
			}
		}
		
		$services = new Service();
		$cc = $services->updateService($service);
		
		if ($cc)
        	echo "<script>alert('操作成功！');window.location.href='service.php';</script>";
    	else
        	echo "<script>alert('操作失败！');window.location.href='service.php';</script>";
	}
?>