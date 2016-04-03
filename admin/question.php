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
		r_require_once("/DAL/Question.php");
		
		$tpl = new MySmarty("admin");		
		$question = new Question();
		
		$tpl->assign("siteTitle","后台管理系统");
		$pageNum = getRequestIntParam('page_num', 1);
		$pageSize = 15;
		$totalRecords = $question->getTotalByQuestion();
		$totalPages = intval($totalRecords / $pageSize);
		$totalPages += ($totalRecords % $pageSize == 0 ? 0 : 1);
		if($pageNum > $totalPages) $pageNum = $totalPages;
		if($totalRecords>0)
			$tpl->assign('question', $question->getQuestionByPage($pageNum,$pageSize,0));
		
		$tpl->assign('paggingbar', genPaggingbar('question.php',$pageNum,$totalPages));
		$tpl->display("showQuestion.html");
	}
	
	function _new() {
		r_include_once("/smarty/MySmarty.php");
		r_require_once("/DAL/Question.php");

		$qid = getRequestIntParam('qid', 0);
		$avatar = getRequestStringParam('question', '');
		$name = getRequestStringParam('answer', '');
		
		$tpl = new MySmarty("admin");
		$questions = new Question();
		
		$tpl->assign("siteTitle","后台管理系统");		
		$tpl->assign("question",$questions->getOneQuestion($qid));
		$tpl->display("editQuestion.html");
	}
	
	function _save() {
		r_require_once("/DAL/Question.php");

		$qid = getRequestIntParam('qid', 0);
		$question = getRequestStringParam('question', '');
		$answer = getRequestStringParam('answer', '');

		$questions = new Question();	

		if ($qid == 0) {
			$cc = $questions->insertQuestion($question,$answer);
		} else {
			$cc = $questions->updateQuestion($qid,$question,$answer);
		}
		
		if ($cc)
        	echo "<script>alert('操作成功！');window.location.href='question.php';</script>";
    	else
        	echo "<script>alert('操作失败！');window.location.href='question.php';</script>";
	}
	
	function _delete() {
		r_include_once("/DAL/Question.php");
		$question = new Question();
		$chk1=$_POST['chk1'];
		if ($chk1!="" or count($chk1)!=0) {
			for ($i=0;$i<count($chk1);$i++){
				$cc = $question->deleteQuestion($chk1[$i]);
			}
			echo "<script>alert('操作成功！');window.location.href='question.php';</script>";
		}
		else
			echo "<script>alert('操作失败！');window.location.href='question.php';</script>";
	}
?>