<?php
	r_require_once("/lib/GenericDao.php");
	class CourseDetail extends GenericDao {
	    
	    function getCourseDetail() {
	    	$sql = "SELECT * FROM tbl_course_detail";
	        return $this->executeQuery($sql);
	    }

	    function getCourseDetailByPage($pageNum,$pageSize,$offLimit=0) {
	    	$sql="SELECT * FROM tbl_course_detail";
	        return $this->pagedQuery($sql,$pageNum,$pageSize);
	    }

	    function getTotalByCourseDetail() {
	    	$sql = "SELECT COUNT(*) AS CNT FROM tbl_course_detail";
	    	$row = $this->getOne($sql);
	    	return $row?$row['CNT']:0;
	    }

	    function getOneCourseDetail($cid){
	    	$sql = "SELECT * FROM tbl_course_detail where cid=$cid";
	    	return $this->getOne($sql);
	    }

	    function insertCourseDetail($title,$pic,$introduce){
	    	$sql = "insert into tbl_course_detail(title,pic,introduce) values('$title','$pic','$introduce')";
	    	return $this->executeInsert($sql);
	    }

	    function updateCourseDetail($cid,$title,$pic,$introduce){
	    	$sql = "update tbl_course_detail set title='$title',pic='$pic',introduce='$introduce' where cid = $cid";
	    	return $this->executeUpdate($sql);
	    }

	    function deleteCourseDetail($cid){
	    	$sql = "delete from tbl_course_detail where cid =$cid";
	    	return $this->executeDelete($sql);
	    }
	}
?>