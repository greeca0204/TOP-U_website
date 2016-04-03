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
		r_require_once("/DAL/Course.php");
		
		$tpl = new MySmarty("admin");		
		$course = new Course();
		
		$tpl->assign("siteTitle","后台管理系统");
		$tpl->assign('course', $course->getCourse());
		$tpl->display("showCourse.html");
	}
	
	function _save() {
		r_require_once("/DAL/Course.php");
		
		$syrq = getRequestStringParam('syrq', '');
		$title1 = getRequestStringParam('title1', '');
		$title2 = getRequestStringParam('title2', '');
		$title3 = getRequestStringParam('title3', '');
		$title4 = getRequestStringParam('title4', '');
		$title5 = getRequestStringParam('title5', '');
		$picbox1 = getRequestStringParam('picbox1', '');
		$picbox2 = getRequestStringParam('picbox2', '');
		$picbox3 = getRequestStringParam('picbox3', '');
		$picbox4 = getRequestStringParam('picbox4', '');
		$picbox5 = getRequestStringParam('picbox5', '');
		
		$course = new Course();
		$cc = $course->updateCourse($syrq,$picbox1,$picbox2,$picbox3,$picbox4,$picbox5,$title1,$title2,$title3,$title4,$title5);
		
		if ($cc)
        	echo "<script>alert('操作成功！');window.location.href='course.php';</script>";
    	else
        	echo "<script>alert('操作失败！');window.location.href='course.php';</script>";
	}
?>
