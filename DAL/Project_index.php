<?php
	r_require_once("/lib/GenericDao.php");
	class Project_index extends GenericDao {
	    
	    function getProjectIndex() {
	    	$sql="SELECT * FROM tbl_project_index where cid = 1";
	        return $this->getOne($sql);
	    }

	    function updateProjectIndex($introduce){
	    	$sql="update tbl_project_index set introduce='$introduce' where cid = 1";
	    	return $this->executeUpdate($sql);
	    }
	}
?>