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
		r_require_once("/DAL/AdTrend.php");	
		$tpl = new MySmarty();
		$news = new News();
		$adTrend = new AdTrend();
		$tpl->assign("siteTitle","TOP动态");
		$tpl->assign("adTrend1",$adTrend->getFirstAdTrend());//广告位1
		$tpl->assign("adTrend2",$adTrend->getSecondAdTrend());//广告位2
		$tpl->assign("adTrend3",$adTrend->getThirdAdTrend());//广告位3
		$tpl->assign("trend_future_doc",$news->getEightTrend());//即将举行文字
		$tpl->assign("trend_future",$news->getFutureNewsByPic(2,1,3));//即将举行图片
		$tpl->assign("trend_now_pic",$news->getNowNewsByPic(2,1,3));//往期活动图片
		
		/*往期活动文字*/
		$type = 2;	
		$pageNum = getRequestIntParam('page_num', 1);
		$pageSize = 10;
		$totalRecords = $news->getTotalNowNewsByDoc();
		$totalPages = intval($totalRecords / $pageSize);
		$totalPages += ($totalRecords % $pageSize == 0 ? 0 : 1);
		if($pageNum > $totalPages) $pageNum = $totalPages;
		if($totalRecords>0)
			$tpl->assign('trend_now_doc', $news->getNowNewsByDoc($type,$pageNum,$pageSize,0));
		
		$tpl->assign('type',$type);
		$tpl->assign('paggingbar', genPaggingbar('trend.php?type='.$type,$pageNum,$totalPages));

		r_require_once("/DAL/WebInfo.php");
		$website = new WebInfo();
		$tpl->assign("website",$website->getWeb());
		r_require_once("/DAL/Friend.php");
		$friend = new Friend();
		$tpl->assign("friend",$friend->getAllFriend());
		
		$tpl->display("top_trend.html");
	}
?>