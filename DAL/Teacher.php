<?php
	r_require_once("/lib/GenericDao.php");
	class Teacher extends GenericDao {
	    
	    function getTeacher() {
	    	$sql = "SELECT * FROM tbl_teacher";
	        return $this->executeQuery($sql);
	    }

	    function getTeacherByPage($pageNum,$pageSize,$offLimit=0) {
	    	$sql="SELECT * FROM tbl_teacher";
	        return $this->pagedQuery($sql,$pageNum,$pageSize);
	    }

	    function getTotalByTeacher() {
	    	$sql = "SELECT COUNT(*) AS CNT FROM tbl_teacher";
	    	$row = $this->getOne($sql);
	    	return $row?$row['CNT']:0;
	    }

	    function getOneTeacher($tid){
	    	$sql = "SELECT * FROM tbl_teacher where tid=$tid";
	    	return $this->getOne($sql);
	    }

	    function insertTeacher($avatar,$name,$job,$introduce){
	    	$sql = "insert into tbl_teacher(avatar,name,job,introduce) values('$avatar','$name','$job','$introduce')";
	    	return $this->executeInsert($sql);
	    }

	    function updateTeacher($tid,$avatar,$name,$job,$introduce){
	    	$sql = "update tbl_teacher set avatar='$avatar',name='$name',job='$job',introduce='$introduce' where tid = $tid";
	    	return $this->executeUpdate($sql);
	    }

	    function deleteTeacher($tid){
	    	$sql = "delete from tbl_teacher where tid =$tid";
	    	return $this->executeDelete($sql);
	    }
	}
?>