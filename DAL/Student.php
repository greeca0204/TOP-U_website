<?php
	r_require_once("/lib/GenericDao.php");
	class Student extends GenericDao {
	    
	    function getStudent() {
	    	$sql = "SELECT * FROM tbl_student";
	        return $this->executeQuery($sql);
	    }

	    function getStudentByPage($pageNum,$pageSize,$offLimit=0) {
	    	$sql="SELECT * FROM tbl_student";
	        return $this->pagedQuery($sql,$pageNum,$pageSize);
	    }

	    function getTotalByStudent() {
	    	$sql = "SELECT COUNT(*) AS CNT FROM tbl_student";
	    	$row = $this->getOne($sql);
	    	return $row?$row['CNT']:0;
	    }

	    function getOneStudent($sid){
	    	$sql = "SELECT * FROM tbl_student where sid=$sid";
	    	return $this->getOne($sql);
	    }

	    function insertStudent($stuName,$englishName,$school,$subject,$content,$pic){
	    	$sql = "insert into tbl_student(stuName,englishName,school,subject,content,pic) values('$stuName','$englishName','$school','$subject','$content','$pic')";
	    	return $this->executeInsert($sql);
	    }

	    function updateStudent($sid,$stuName,$englishName,$school,$subject,$content,$pic){
	    	$sql = "update tbl_student set stuName='$stuName',englishName='$englishName',school='$school',subject='$subject',content='$content',pic='$pic' where sid = $sid";
	    	return $this->executeUpdate($sql);
	    }

	    function deleteStudent($sid){
	    	$sql = "delete from tbl_student where sid =$sid";
	    	return $this->executeDelete($sql);
	    }
	}
?>