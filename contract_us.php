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
		
		$tpl = new MySmarty();		
		$tpl->assign("siteTitle","联系我们");
		r_require_once("/DAL/WebInfo.php");
		$website = new WebInfo();
		$tpl->assign("website",$website->getWeb());
		r_require_once("/DAL/Friend.php");
		$friend = new Friend();
		$tpl->assign("friend",$friend->getAllFriend());
		$tpl->display("contract_us.html");
	}
	
	function _save() {
		r_require_once("/DAL/Message.php");

		$username = getRequestStringParam('username', '');
		$tel = getRequestStringParam('tel', '');
		$other = getRequestStringParam('other', '');
		$message = getRequestStringParam('message', '');

		$msg = new Message();	
		$cc = $msg->insertMsg($username,$tel,$other,$message);
		
		if ($cc)
        	echo "<script>alert('操作成功！');window.location.href='contract_us.php';</script>";
    	else
        	echo "<script>alert('操作失败！');window.location.href='contract_us.php';</script>";
	}
?>