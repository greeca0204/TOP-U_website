<?php
	r_require_once("/lib/GenericDao.php");
	class Question extends GenericDao {
	    
	    function getQuestion() {
	    	$sql="SELECT * FROM tbl_question";
	        return $this->executeQuery($sql);
	    }

	    function getQuestionByPage($pageNum,$pageSize,$offLimit=0) {
	    	$sql="SELECT * FROM tbl_question";
	        return $this->pagedQuery($sql,$pageNum,$pageSize);
	    }

	    function getTotalByQuestion() {
	    	$sql = "SELECT COUNT(*) AS CNT FROM tbl_question";
	    	$row = $this->getOne($sql);
	    	return $row?$row['CNT']:0;
	    }

	    function getOneQuestion($qid){
	    	$sql = "SELECT * FROM tbl_question where qid=$qid";
	    	return $this->getOne($sql);
	    }

	    function insertQuestion($question,$answer){
	    	$sql="insert into tbl_question(question,answer) values('$question','$answer')";
	    	return $this->executeInsert($sql);
	    }

	    function updateQuestion($qid,$question,$answer){
	    	$sql="update tbl_question set question='$question',answer='$answer' where qid=$qid";
	    	return $this->executeUpdate($sql);
	    }

	    function deleteQuestion($qid){
	    	$sql="delete from tbl_question where qid=$qid";
	    	return $this->executeDelete($sql);
	    }
	}
?>