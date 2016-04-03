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
		r_require_once("/DAL/HotNews.php");		
		r_require_once("/DAL/AdNews.php");	
		$tpl = new MySmarty();
		$news = new News();
		$hotNews = new HotNews();
		$adNews = new AdNews();
		$tpl->assign("siteTitle","留学资讯");
		$type = 1;
		
		$pageNum = getRequestIntParam('page_num', 1);
		$pageSize = 10;
		$totalRecords = $news->getTotalbyNews($type);
		$totalPages = intval($totalRecords / $pageSize);
		$totalPages += ($totalRecords % $pageSize == 0 ? 0 : 1);
		if($pageNum > $totalPages) $pageNum = $totalPages;
		if($totalRecords>0)
			$tpl->assign('news', $news->getNewsByNewsPage($type,$pageNum,$pageSize,0));
		
		$tpl->assign('type',$type);
		$tpl->assign('paggingbar', genPaggingbar('news.php?type='.$type,$pageNum,$totalPages));
		
		$tpl->assign('hotNews', $hotNews->getDisHotNews());
		$tpl->assign('adNews', $adNews->getLimOneAdNews());
		$tpl->assign('adNews2', $adNews->getLimTwoAdNews());
		//$tpl->assign("news",$news->getNewsByNewsPage(1,1,8));

		r_require_once("/DAL/WebInfo.php");
		$website = new WebInfo();
		$tpl->assign("website",$website->getWeb());
		r_require_once("/DAL/Friend.php");
		$friend = new Friend();
		$tpl->assign("friend",$friend->getAllFriend());
		
		$tpl->display("top_news.html");
	}
?>