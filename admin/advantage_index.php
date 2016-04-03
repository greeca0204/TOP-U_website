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
			
				
		r_require_once("/smarty/MySmarty.php");
		r_require_once("/DAL/Advantage_index.php");
		
		$tpl = new MySmarty("admin");		
		$advantage_index = new Advantage_index();
		
		$tpl->assign("siteTitle","后台管理系统");
		$tpl->assign('advantage_index', $advantage_index->getAdvantageIndex());
		$tpl->display("showAdvantageIndex.html");
	}
	
	function _save() {
		r_require_once("/DAL/Advantage_index.php");
		
		$title1 = getRequestStringParam('title1', '');
		$image1 = getRequestStringParam('image1', '');
		$hasimg1 = getRequestStringParam('hasimg1', '');
		$introduce1 = getRequestStringParam('introduce1', '');
		$title2 = getRequestStringParam('title2', '');
		$image2 = getRequestStringParam('image2', '');
		$hasimg2 = getRequestStringParam('hasimg2', '');
		$introduce2 = getRequestStringParam('introduce2', '');
		$title3 = getRequestStringParam('title3', '');
		$image3 = getRequestStringParam('image3', '');
		$hasimg3 = getRequestStringParam('hasimg3', '');
		$introduce3 = getRequestStringParam('introduce3', '');
		$title4 = getRequestStringParam('title4', '');
		$image4 = getRequestStringParam('image4', '');
		$hasimg4 = getRequestStringParam('hasimg4', '');
		$introduce4 = getRequestStringParam('introduce4', '');
		$title5 = getRequestStringParam('title5', '');
		$image5 = getRequestStringParam('image5', '');
		$hasimg5 = getRequestStringParam('hasimg5', '');
		$introduce5 = getRequestStringParam('introduce5', '');		
		$newimg1 = substr(uploadImages('image1'),1);	
		$newimg2 = substr(uploadImages('image2'),1);	
		$newimg3 = substr(uploadImages('image3'),1);	
		$newimg4 = substr(uploadImages('image4'),1);	
		$newimg5 = substr(uploadImages('image5'),1);	
		
		$advantage_index = new Advantage_index();
		
		if($newimg1 == "")
			$pic1 = $hasimg1;
		else
			$pic1 = $newimg1;
		
		if($newimg2 == "")
			$pic2 = $hasimg2;
		else
			$pic2 = $newimg2;
		
		if($newimg3 == "")
			$pic3 = $hasimg3;
		else
			$pic3 = $newimg3;
		
		if($newimg4 == "")
			$pic4 = $hasimg4;
		else
			$pic4 = $newimg4;
		
		if($newimg5 == "")
			$pic5 = $hasimg5;
		else
			$pic5 = $newimg5;
		
		$cc = $advantage_index->updateAdvantageIndex($title1,$pic1,$introduce1,$title2,$pic2,$introduce2,$title3,$pic3,$introduce3,$title4,$pic4,$introduce4,$title5,$pic5,$introduce5);
		
		if ($cc)
        	echo "<script>alert('操作成功！');window.location.href='advantage_index.php';</script>";
    	else
        	echo "<script>alert('操作失败！');window.location.href='advantage_index.php';</script>";
	}
?>