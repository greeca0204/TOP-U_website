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
		r_require_once("/DAL/Question.php");
		r_require_once("/DAL/Course.php");
		r_require_once("/DAL/Teacher.php");		
		//r_require_once("/DAL/CourseDetail.php");	
		$teacher = new Teacher();
		$tpl = new MySmarty();
		$question = new Question();
		/*
		$courseDetail = new CourseDetail();
		$courseDetail2 = new CourseDetail();
		*/
		$course = new Course();
		$tpl->assign("siteTitle","TOP课程");
		$tpl->assign("question",$question->getQuestion());
		$tpl->assign("course",$course->getCourse());
		/*
		$tpl->assign("courseDetail",$courseDetail->getCourseDetail());
		$tpl->assign("courseDetail2",$courseDetail2->getCourseDetail());
		*/
		$tpl->assign("teacher",$teacher->getTeacher());
		$tpl->assign("teacher2",$teacher->getTeacher());
		
		r_require_once("/DAL/WebInfo.php");
		$website = new WebInfo();
		$tpl->assign("website",$website->getWeb());
		r_require_once("/DAL/Friend.php");
		$friend = new Friend();
		$tpl->assign("friend",$friend->getAllFriend());
		
		$tpl->display("top_class.html");
	}
?>