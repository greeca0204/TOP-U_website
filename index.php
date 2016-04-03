<?php
	session_start();
	header('Content-Type: text/html; charset=UTF-8');
	include("global.inc.php");
	r_require_once("/lib/MultiActions.php");
	require_once("global.inc.php");
	r_require_once("/lib/MultiActions.php");	

	//首页
	function _default()
	{
		r_require_once("/smarty/MySmarty.php");		
		r_require_once("/DAL/Company.php");
		r_require_once("/DAL/Teacher.php");
		r_require_once("/DAL/Course_index.php");
		r_require_once("/DAL/Project_index.php");
		r_require_once("/DAL/Advantage_index.php");
		r_require_once("/DAL/Student.php");
		r_require_once("/DAL/News.php");
		$tpl = new MySmarty();
		$company = new Company();
		$teacher = new Teacher();
		$course_index = new Course_index();
		$project_index = new Project_index();
		$advantage_index = new Advantage_index();
		$student = new Student();
		$student2 = new Student();
		$news = new News();
		$tpl->assign("siteTitle","TOP首页");
		$tpl->assign("company",$company->getCompany());
		$tpl->assign("teacher",$teacher->getTeacher());
		$tpl->assign("teacher2",$teacher->getTeacher());
		$tpl->assign("course_index",$course_index->getCourseIndex());
		$tpl->assign("project_index",$project_index->getProjectIndex());
		$tpl->assign("advantage_index",$advantage_index->getAdvantageIndex());
		$tpl->assign("student",$student->getStudent());
		$tpl->assign("student2",$student2->getStudent());
		$tpl->assign("news1",$news->getOneNewsByITime(2,0));
		$tpl->assign("news2",$news->getOneNewsByITime(2,1));
		$tpl->assign("news3",$news->getOneNewsByITime(2,2));
		$tpl->assign("news4",$news->getOneNewsByITime(2,3));
		$tpl->assign("news5",$news->getOneNewsByITime(2,4));
		r_require_once("/DAL/WebInfo.php");
		$website = new WebInfo();
		$tpl->assign("website",$website->getWeb());
		r_require_once("/DAL/Friend.php");
		$friend = new Friend();
		$tpl->assign("friend",$friend->getAllFriend());
		
		$tpl->display("index.html");
	}
?>
