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
		r_require_once("/DAL/Student.php");
		
		$tpl = new MySmarty("admin");		
		$student = new Student();
		
		$tpl->assign("siteTitle","后台管理系统");
		$pageNum = getRequestIntParam('page_num', 1);
		$pageSize = 15;
		$totalRecords = $student->getTotalByStudent();
		$totalPages = intval($totalRecords / $pageSize);
		$totalPages += ($totalRecords % $pageSize == 0 ? 0 : 1);
		if($pageNum > $totalPages) $pageNum = $totalPages;
		if($totalRecords>0)
			$tpl->assign('student', $student->getStudentByPage($pageNum,$pageSize,0));
		
		$tpl->assign('paggingbar', genPaggingbar('student.php',$pageNum,$totalPages));
		$tpl->display("showStudent.html");
	}

	function _new() {
		r_include_once("/smarty/MySmarty.php");
		r_require_once("/DAL/Student.php");

		$sid = getRequestIntParam('sid', 0);		
		$tpl = new MySmarty("admin");
		$student = new Student();
		
		$tpl->assign("siteTitle","后台管理系统");		
		$tpl->assign("student",$student->getOneStudent($sid));
		$tpl->display("editStudent.html");
	}
	
	
	function _save() {
		r_require_once("/DAL/Student.php");
		$sid = getRequestIntParam('sid', 0);
		$stuName = getRequestStringParam('stuName', '');
		$englishName = getRequestStringParam('englishName', '');
		$school = getRequestStringParam('school', '');
		$subject = getRequestStringParam('subject', '');
		if (!empty($_POST['content1'])) {
			if (get_magic_quotes_gpc()) {
				$content = stripslashes($_POST['content1']);
			} else {
				$content = $_POST['content1'];
			}
		}

		$image = getRequestStringParam('image', '');
		$hasimg = getRequestStringParam('hasimg', '');
		$newimg = substr(uploadImages('image'),1);	
		
		$student = new Student();
		if($newimg == "")
			$pic = $hasimg;
		else
			$pic = $newimg;

		if ($sid == 0) {
			$cc = $student->insertStudent($stuName,$englishName,$school,$subject,$content,$pic);
		} 
		else {	
			$cc = $student->updateStudent($sid,$stuName,$englishName,$school,$subject,$content,$pic);
		}
		
		if ($cc)
        	echo "<script>alert('操作成功！');window.location.href='student.php';</script>";
    	else
        	echo "<script>alert('操作失败！');window.location.href='student.php';</script>";
	}

	function _delete() {
		r_include_once("/DAL/Student.php");
		$student = new Student();
		$chk1=$_POST['chk1'];
		if ($chk1!="" or count($chk1)!=0) {
			for ($i=0;$i<count($chk1);$i++){
				$cc = $student->deleteStudent($chk1[$i]);
			}
			echo "<script>alert('操作成功！');window.location.href='student.php';</script>";
		}
		else
			echo "<script>alert('操作失败！');window.location.href='student.php';</script>";
	}
?>