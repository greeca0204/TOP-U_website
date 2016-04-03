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
		r_require_once("/DAL/Advantage.php");
		r_require_once("/DAL/Question.php");
		r_require_once("/DAL/Teacher.php");
		r_require_once("/DAL/Company.php");
		r_require_once("/DAL/Advantage_index.php");
		
		$tpl = new MySmarty();
		$adv = new Advantage();
		$teacher = new Teacher();
		$question = new Question();
		$company = new Company();
		$advantage_index = new Advantage_index();

		$tpl->assign("siteTitle","TOP优势");
		$tpl->assign("advantage",$adv->getAdvantage());
		$tpl->assign("question",$question->getQuestion());
		$tpl->assign("teacher",$teacher->getTeacher());
		$tpl->assign("teacher2",$teacher->getTeacher());
		$tpl->assign("company",$company->getCompany());
		$tpl->assign("advantage_index",$advantage_index->getAdvantageIndex());

		r_require_once("/DAL/Friend.php");
		$friend = new Friend();
		$tpl->assign("friend",$friend->getAllFriend());
		r_require_once("/DAL/WebInfo.php");
		$website = new WebInfo();
		$tpl->assign("website",$website->getWeb());

		$tpl->display("top_advantage.html");
	}
?>