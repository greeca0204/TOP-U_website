<?php
	session_start();
	echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
	
	if($_SESSION['username'] == null)
	{
		echo "<script>alert('请先登录！');location.href='index.php';</script>";
	}

	include("../global.inc.php");
	r_require_once("/lib/MultiActions.php");	

	//默认情况时
	function _default()
	{
		r_require_once("/smarty/MySmarty.php");
		r_include_once("/DAL/public/paggingbar.php");
		r_require_once("/DAL/HotNews.php");
		
		$tpl = new MySmarty("admin");		
		$hotNews = new HotNews();
		
		$tpl->assign("siteTitle","后台管理系统");
		
		$pageNum = getRequestIntParam('page_num', 1);
		$pageSize = 15;
		$totalRecords = $hotNews->getTotalbyHotNews();
		$totalPages = intval($totalRecords / $pageSize);
		$totalPages += ($totalRecords % $pageSize == 0 ? 0 : 1);
		if($pageNum > $totalPages) $pageNum = $totalPages;
		if($totalRecords>0)
			$tpl->assign('hotNews', $hotNews->getbyHotNews($pageNum,$pageSize,0));
		
		$tpl->assign('paggingbar', genPaggingbar('hotNews.php',$pageNum,$totalPages));
		$tpl->display("showHotNews.html");
	}
	
	//添加、修改广告页面
	function _new() {
		r_include_once("/smarty/MySmarty.php");
		r_require_once("/DAL/HotNews.php");

		$id = getRequestIntParam('id', 0);
		
		$tpl = new MySmarty('admin');
		$hotNews = new HotNews();
		
		$tpl->assign("siteTitle","后台管理系统");		
		$tpl->assign("hotNews",$hotNews->getHotNewsbyId($id));
		$tpl->display("editHotNews.html");
	}
	
	//添加、修改广告操作
	function _save() {
		r_require_once("/DAL/HotNews.php");
		
		$id = getRequestIntParam('id', 0);
		$title = getRequestStringParam('title', '');
		$image = getRequestStringParam('image', '');
		$hasimg = getRequestStringParam('hasimg', '');
		$contenturl = getRequestStringParam('contenturl', '');
		$checked = getRequestIntParam('checked',0);
				
		$hotNews = new HotNews();
		$newimg = substr(uploadImages('image'),1);		
		
		if ($id == 0) {
			$cc = $hotNews->insertHotNews($title,$newimg,$contenturl,$checked);
		} else {
			if($newimg=="")
				$imgurl=$hasimg;
			else
				$imgurl=$newimg;

			$cc = $hotNews->updateHotNews($id,$title,$imgurl,$contenturl,$checked);
		} 
		
		if ($cc)
        	echo "<script>alert('操作成功！');window.location.href='hotNews.php';</script>";
    	else
        	echo "<script>alert('操作失败！');window.location.href='hotNews.php';</script>";
	}
	
	//删除广告操作
	function _delete() {
		r_require_once("/DAL/HotNews.php");
		$hotNews = new HotNews();
		$chk1=$_POST['chk1'];
		if ($chk1!="" or count($chk1)!=0) {
			for ($i=0;$i<count($chk1);$i++){
				$cc = $hotNews->deleteHotNews($chk1[$i]);
			}
			echo "<script>alert('操作成功！');window.location.href='hotNews.php';</script>";
		}
		else
			echo "<script>alert('操作失败！');window.location.href='hotNews.php';</script>";
	}
?>