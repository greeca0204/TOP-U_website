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
		r_include_once("/DAL/public/paggingbar.php");
		r_require_once("/DAL/Cooperation.php");
		
		$tpl = new MySmarty("admin");		
		$cooperation = new Cooperation();
		
		$tpl->assign("siteTitle","后台管理系统");
		$pageNum = getRequestIntParam('page_num', 1);
		$pageSize = 15;
		$totalRecords = $cooperation->getTotalByCoop();
		$totalPages = intval($totalRecords / $pageSize);
		$totalPages += ($totalRecords % $pageSize == 0 ? 0 : 1);
		if($pageNum > $totalPages) $pageNum = $totalPages;
		if($totalRecords>0)
			$tpl->assign('cooperation', $cooperation->getCoopByPage($pageNum,$pageSize,0));
		
		$tpl->assign('paggingbar', genPaggingbar('project.php',$pageNum,$totalPages));
		$tpl->display("showProject.html");
	}
	
	function _new() {
		r_include_once("/smarty/MySmarty.php");
		r_require_once("/DAL/Cooperation.php");

		$pid = getRequestIntParam('pid', 0);
		$pname = getRequestStringParam('pname', '');
		$introduce = getRequestStringParam('introduce', '');
		
		$tpl = new MySmarty("admin");
		$cooperation = new Cooperation();
		
		$tpl->assign("siteTitle","后台管理系统");		
		$tpl->assign("cooperation",$cooperation->getOneCoop($pid));
		$tpl->display("editProject.html");
	}
	
	function _save() {
		r_require_once("/DAL/Cooperation.php");

		$pid = getRequestIntParam('pid', 0);
		$pname = getRequestStringParam('pname', '');
		$introduce = getRequestStringParam('introduce', '');

		$cooperation = new Cooperation();

		if ($pid == 0) {
			$cc = $cooperation->insertCoop($pname,$introduce);
		} else {
			$cc = $cooperation->updateCoop($pid,$pname,$introduce);
		}
		
		if ($cc)
        	echo "<script>alert('操作成功！');window.location.href='project.php';</script>";
    	else
        	echo "<script>alert('操作失败！');window.location.href='project.php';</script>";
	}
	
	function _delete() {
		r_require_once("/DAL/Cooperation.php");
		$cooperation = new Cooperation();
		$chk1=$_POST['chk1'];
		if ($chk1!="" or count($chk1)!=0) {
			for ($i=0;$i<count($chk1);$i++){
				$cc = $cooperation->deleteCoop($chk1[$i]);
			}
			echo "<script>alert('操作成功！');window.location.href='project.php';</script>";
		}
		else
			echo "<script>alert('操作失败！');window.location.href='project.php';</script>";
	}
?>