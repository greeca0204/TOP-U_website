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
		date_default_timezone_set('Asia/Shanghai');
		r_require_once("/smarty/MySmarty.php");
		r_include_once("/DAL/public/paggingbar.php");
		r_require_once("/DAL/News.php");
		
		$tpl = new MySmarty("admin");		
		$news = new News();
		$type = getRequestIntParam('type', 0);
		$_SESSION['type'] = $type;
		$tpl->assign("siteTitle","后台管理系统");
		$pageNum = getRequestIntParam('page_num', 1);
		$pageSize = 15;
		$totalRecords = $news->getTotalbyNews($type);
		$totalPages = intval($totalRecords / $pageSize);
		$totalPages += ($totalRecords % $pageSize == 0 ? 0 : 1);
		if($pageNum > $totalPages) $pageNum = $totalPages;
		if($totalRecords>0)
			$tpl->assign('news', $news->getNewsByNewsPage($type,$pageNum,$pageSize,0));
		
		$tpl->assign('type',$type);
		$tpl->assign('paggingbar', genPaggingbar('news.php?type='.$_SESSION['type'],$pageNum,$totalPages));
		$tpl->display("showNews.html");
	}
	
	function _new() {
		date_default_timezone_set('Asia/Shanghai');
		r_include_once("/smarty/MySmarty.php");
		r_require_once("/DAL/News.php");
		
		$nid = getRequestIntParam('nid', 0);
		$type = getRequestIntParam('type', 0);
		
		if($nid == 0) $_SESSION['type'] = $type;
		
		$tpl = new MySmarty("admin");
		$news = new News();
		
		$tpl->assign("siteTitle","后台管理系统");
		$tpl->assign('type',$type);		
		$tpl->assign("news",$news->getOneNews($nid));
		$tpl->display("editNews.html");
	}
	
	function _save() {
		date_default_timezone_set('Asia/Shanghai');
		r_require_once("/DAL/News.php");
		
		$nid = getRequestIntParam('nid', 0);
		$name = getRequestStringParam('name', '');
		$addtime = getRequestStringParam('addtime','');
		$addtime = strtotime($addtime);
		$image = getRequestStringParam('image', '');
		$hasimg = getRequestStringParam('hasimg', '');
		$image1 = getRequestStringParam('image1', '');
		$hasimg1 = getRequestStringParam('hasimg1', '');
		$image2 = getRequestStringParam('image2', '');
		$hasimg2 = getRequestStringParam('hasimg2', '');
		$image3 = getRequestStringParam('image3', '');
		$hasimg3 = getRequestStringParam('hasimg3', '');
		$summary = getRequestStringParam('summary', '');
		if (!empty($_POST['content1'])) {
			if (get_magic_quotes_gpc()) {
				$content = stripslashes($_POST['content1']);
			} else {
				$content = $_POST['content1'];
			}
		}

		if($nid == 0)
			$type = $_SESSION['type'];
		else		
			$type = getRequestIntParam('type', 0);
		$status = getRequestIntParam('status', 0);
		$recommend = getRequestIntParam('recommend', 0);
		$slide = getRequestIntParam('slide', 0);
		$indexshow = getRequestIntParam('indexshow', 0);
		$news = new News();
		
		$newimg = substr(uploadImages('image'),1);		
		$newimg1 = substr(uploadImages('image1'),1);	
		$newimg2 = substr(uploadImages('image2'),1);	
		$newimg3 = substr(uploadImages('image3'),1);	

		if ($nid == 0) {
			$cc = $news->insertNews($name,$addtime,$newimg,$newimg1,$newimg2,$newimg3,$summary,$content,$type,$status,$recommend,$slide,$indexshow);
		} else {
			if($newimg=="")
				$imgurl=$hasimg;
			else
				$imgurl=$newimg;

			if($newimg1=="")
				$imgurl1=$hasimg1;
			else
				$imgurl1=$newimg1;
			
			if($newimg2=="")
				$imgurl2=$hasimg2;
			else
				$imgurl2=$newimg2;

			if($newimg3=="")
				$imgurl3=$hasimg3;
			else
				$imgurl3=$newimg3;
			
			$cc = $news->updateNews($nid,$name,$addtime,$imgurl,$imgurl1,$imgurl2,$imgurl3,$summary,$content,$type,$status,$recommend,$slide,$indexshow);
		}
		
		if ($cc)
        	echo "<script>alert('操作成功！');window.location.href='news.php?type=".$type."';</script>";
    	else
        	echo "<script>alert('操作失败！');window.location.href='news.php?type=".$type."';</script>";
	}
	
	function _delete() {
		r_include_once("/DAL/News.php");
		$news = new News();
		$chk1=$_POST['chk1'];
		if ($chk1!="" or count($chk1)!=0) {
			for ($i=0;$i<count($chk1);$i++){
				$cc = $news->deleteNews($chk1[$i]);
			}
			echo "<script>alert('操作成功！');window.location.href='news.php?type=".$_SESSION['type']."';</script>";
		}
		else
			echo "<script>alert('操作失败！');window.location.href='news.php?type=".$_SESSION['type']."';</script>";
	}
?>