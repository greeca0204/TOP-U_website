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
		r_include_once("/DAL/public/paggingbar.php");
		r_require_once("/DAL/Teacher.php");
		
		$tpl = new MySmarty("admin");		
		$teacher = new Teacher();
		
		$tpl->assign("siteTitle","后台管理系统");
		$pageNum = getRequestIntParam('page_num', 1);
		$pageSize = 15;
		$totalRecords = $teacher->getTotalByTeacher();
		$totalPages = intval($totalRecords / $pageSize);
		$totalPages += ($totalRecords % $pageSize == 0 ? 0 : 1);
		if($pageNum > $totalPages) $pageNum = $totalPages;
		if($totalRecords>0)
			$tpl->assign('teacher', $teacher->getTeacherByPage($pageNum,$pageSize,0));
		
		$tpl->assign('paggingbar', genPaggingbar('teacher.php',$pageNum,$totalPages));
		$tpl->display("showTeacher.html");
	}
	
	function _new() {
		r_include_once("/smarty/MySmarty.php");
		r_require_once("/DAL/Teacher.php");

		$tid = getRequestIntParam('tid', 0);
		$image = getRequestStringParam('image', '');
		$hasimg = getRequestStringParam('hasimg', '');
		$name = getRequestStringParam('name', '');
		$job = getRequestStringParam('job', '');
		if (!empty($_POST['content1'])) {
			if (get_magic_quotes_gpc()) {
				$introduce = stripslashes($_POST['content1']);
			} else {
				$introduce = $_POST['content1'];
			}
		}
		
		$tpl = new MySmarty("admin");
		$teacher = new Teacher();
		
		$tpl->assign("siteTitle","后台管理系统");		
		$tpl->assign("teacher",$teacher->getOneTeacher($tid));
		$tpl->display("editTeacher.html");
	}
	
	function _save() {
		r_include_once("/smarty/MySmarty.php");
		r_require_once("/DAL/Teacher.php");

		$tid = getRequestIntParam('tid', 0);
		$image = getRequestStringParam('image', '');
		$hasimg = getRequestStringParam('hasimg', '');
		$name = getRequestStringParam('name', '');
		$job = getRequestStringParam('job', '');
		if (!empty($_POST['content1'])) {
			if (get_magic_quotes_gpc()) {
				$introduce = stripslashes($_POST['content1']);
			} else {
				$introduce = $_POST['content1'];
			}
		}	
		$teacher = new Teacher();	

		$newimg = substr(uploadImages('image'),1);	

		if ($tid == 0) {
			$cc = $teacher->insertTeacher($newimg,$name,$job,$introduce);
		} else {
			if($newimg=="")
				$imgurl=$hasimg;
			else
				$imgurl=$newimg;
			
			$cc = $teacher->updateTeacher($tid,$imgurl,$name,$job,$introduce);
		}	
		
		if ($cc)
        	echo "<script>alert('操作成功！');window.location.href='teacher.php';</script>";
    	else
        	echo "<script>alert('操作失败！');window.location.href='teacher.php';</script>";
	}
	
	function _delete() {
		r_include_once("/DAL/Teacher.php");
		$teacher = new Teacher();
		$chk1=$_POST['chk1'];
		if ($chk1!="" or count($chk1)!=0) {
			for ($i=0;$i<count($chk1);$i++){
				$cc = $teacher->deleteTeacher($chk1[$i]);
			}
			echo "<script>alert('操作成功！');window.location.href='teacher.php';</script>";
		}
		else
			echo "<script>alert('操作失败！');window.location.href='teacher.php';</script>";
	}
?>
