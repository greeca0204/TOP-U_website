<?php
	r_require_once("/lib/GenericDao.php");
	class Course_index extends GenericDao {
	    
	    function getCourseIndex() {
	    	$sql="SELECT * FROM tbl_course_index where cid = 1";
	        return $this->getOne($sql);
	    }

	    function updateCourseIndex($introduce){
	    	$sql="update tbl_course_index set introduce='$introduce' where cid = 1";
	    	return $this->executeUpdate($sql);
	    }
	}
?>