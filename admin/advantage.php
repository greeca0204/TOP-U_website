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
		r_require_once("/DAL/Advantage.php");
		
		$tpl = new MySmarty("admin");		
		$advantage = new Advantage();
		
		$tpl->assign("siteTitle","后台管理系统");
		$tpl->assign('advantage', $advantage->getAdvantage());
		$tpl->display("showAdvantage.html");
	}
	
	function _save() {
		r_require_once("/DAL/Advantage.php");
		
		$introduce = getRequestStringParam('introduce', '');
		if (!empty($_POST['content1'])) {
			if (get_magic_quotes_gpc()) {
				$british_advantage = stripslashes($_POST['content1']);
			} else {
				$british_advantage = $_POST['content1'];
			}
		}
		$gzqz = getRequestStringParam('gzqz', '');
		$jyzl = getRequestStringParam('jyzl', '');
		$sjcb = getRequestStringParam('sjcb', '');
		$fycb = getRequestStringParam('fycb', '');
		$yywh = getRequestStringParam('yywh', '');
		$kksy = getRequestStringParam('kksy', '');
		
		$advantage = new Advantage();
		$cc = $advantage->updateAdvantage($introduce,$british_advantage,$gzqz,$jyzl,$sjcb,$fycb,$yywh,$kksy);
		
		if ($cc)
        	echo "<script>alert('操作成功！');window.location.href='advantage.php';</script>";
    	else
        	echo "<script>alert('操作失败！');window.location.href='advantage.php';</script>";
	}
?>