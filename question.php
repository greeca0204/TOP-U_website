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
		r_require_once("/DAL/News.php");
		$tpl = new MySmarty();
		$question = new Question();
		$news = new News();
		$tpl->assign("siteTitle","TOP课程");
		$tpl->assign("question",$question->getQuestion());
		$tpl->assign("lxzx",$news->getNewsByNewsPage(1,0,5));
		$tpl->assign("dongtai",$news->getNewsByNewsPage(2,0,9));

		r_require_once("/DAL/WebInfo.php");
		$website = new WebInfo();
		$tpl->assign("website",$website->getWeb());
		r_require_once("/DAL/Friend.php");
		$friend = new Friend();
		$tpl->assign("friend",$friend->getAllFriend());
		
		$tpl->display("question.html");
	}
?>