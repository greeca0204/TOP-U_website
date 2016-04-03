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
		r_require_once("/DAL/Course_index.php");
		
		$tpl = new MySmarty("admin");		
		$course_index = new Course_index();
		
		$tpl->assign("siteTitle","后台管理系统");
		$tpl->assign('course_index', $course_index->getCourseIndex());
		$tpl->display("showCourseIndex.html");
	}
	
	function _save() {
		r_require_once("/DAL/Course_index.php");
		
		if (!empty($_POST['content1'])) {
			if (get_magic_quotes_gpc()) {
				$introduce = stripslashes($_POST['content1']);
			} else {
				$introduce = $_POST['content1'];
			}
		}
		
		$course_index = new Course_index();
		$cc = $course_index->updateCourseIndex($introduce);
		
		if ($cc)
        	echo "<script>alert('操作成功！');window.location.href='course_index.php';</script>";
    	else
        	echo "<script>alert('操作失败！');window.location.href='course_index.php';</script>";
	}
?>