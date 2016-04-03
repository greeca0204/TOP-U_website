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
		r_require_once("/DAL/Company.php");
		
		$tpl = new MySmarty("admin");		
		$company = new Company();
		
		$tpl->assign("siteTitle","后台管理系统");
		$tpl->assign('company', $company->getCompany());
		$tpl->display("showCompany.html");
	}
	
	function _save() {
		r_require_once("/DAL/Company.php");
		if (!empty($_POST['content1'])) {
			if (get_magic_quotes_gpc()) {
				$introduce = stripslashes($_POST['content1']);
			} else {
				$introduce = $_POST['content1'];
			}
		}
		$introduce_advpage = getRequestStringParam('introduce_advpage', '');
		$company = new Company();
		$cc = $company->updateCompany($introduce,$introduce_advpage);
		
		if ($cc)
        	echo "<script>alert('操作成功！');window.location.href='company.php';</script>";
    	else
        	echo "<script>alert('操作失败！');window.location.href='company.php';</script>";
	}
?>