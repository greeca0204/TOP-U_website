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
		r_include_once("/DAL/public/paggingbar.php");		
		r_require_once("/DAL/News.php");
		$tpl = new MySmarty();
		$news = new News();
		$tpl->assign("siteTitle","TOP动态");
		
		$type = 2;
		
		$pageNum = getRequestIntParam('page_num', 1);
		$pageSize = 30;
		$totalRecords = $news->getTotalbyFutureNews();
		$totalPages = intval($totalRecords / $pageSize);
		$totalPages += ($totalRecords % $pageSize == 0 ? 0 : 1);
		if($pageNum > $totalPages) $pageNum = $totalPages;
		if($totalRecords>0)
			$tpl->assign('news', $news->getNewsByFutureNewsPage($pageNum,$pageSize,0));
		
		$tpl->assign('type',$type);
		$tpl->assign('paggingbar', genPaggingbar('trendlist.php?type='.$type,$pageNum,$totalPages));

		r_require_once("/DAL/WebInfo.php");
		$website = new WebInfo();
		$tpl->assign("website",$website->getWeb());
		r_require_once("/DAL/Friend.php");
		$friend = new Friend();
		$tpl->assign("friend",$friend->getAllFriend());
		
		$tpl->display("list.html");
	}
?>