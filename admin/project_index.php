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
		r_require_once("/DAL/Project_index.php");
		
		$tpl = new MySmarty("admin");		
		$project_index = new Project_index();
		
		$tpl->assign("siteTitle","后台管理系统");
		$tpl->assign('project_index', $project_index->getProjectIndex());
		$tpl->display("showProjectIndex.html");
	}
	
	function _save() {
		r_require_once("/DAL/Project_index.php");

		if (!empty($_POST['content1'])) {
			if (get_magic_quotes_gpc()) {
				$introduce = stripslashes($_POST['content1']);
			} else {
				$introduce = $_POST['content1'];
			}
		}
	
		$project_index = new Project_index();
		$cc = $project_index->updateProjectIndex($introduce);
		
		if ($cc)
        	echo "<script>alert('操作成功！');window.location.href='project_index.php';</script>";
    	else
        	echo "<script>alert('操作失败！');window.location.href='project_index.php';</script>";
	}
?>