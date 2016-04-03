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
		r_require_once("/DAL/News.php");
		$tpl = new MySmarty();
		$news = new News();
		$tpl->assign("siteTitle","TOP首页");
		$tpl->assign("news1",$news->getOneNewsBySTime(2,0));
		$tpl->assign("news2",$news->getOneNewsBySTime(2,1));
		$tpl->assign("news3",$news->getOneNewsBySTime(2,2));
		$tpl->assign("news4",$news->getOneNewsBySTime(2,3));
		$tpl->assign("news5",$news->getOneNewsBySTime(2,4));
		$tpl->display("qiehuan.html");
	}
?>
