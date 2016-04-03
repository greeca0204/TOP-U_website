<?php
	r_require_once("/lib/GenericDao.php");
	class Cooperation extends GenericDao {
	    
	    function getCoop() {
	    	$sql="SELECT * FROM tbl_project";
	        return $this->executeQuery($sql);
	    }

	     function getCoopByPage($pageNum,$pageSize,$offLimit=0) {
	    	$sql="SELECT * FROM tbl_project";
	        return $this->pagedQuery($sql,$pageNum,$pageSize);
	    }

	    function getTotalByCoop() {
	    	$sql = "SELECT COUNT(*) AS CNT FROM tbl_project";
	    	$row = $this->getOne($sql);
	    	return $row?$row['CNT']:0;
	    }

	    function getOneCoop($pid){
	    	$sql = "SELECT * FROM tbl_project where pid=$pid";
	    	return $this->getOne($sql);
	    }

	    function insertCoop($pname,$introduce){
	    	$sql="insert into tbl_project(pname,introduce) values('$pname','$introduce')";
	    	return $this->executeInsert($sql);
	    }

	    function updateCoop($pid,$pname,$introduce){
	    	$sql="update tbl_project set pname='$pname',introduce='$introduce' where pid=$pid";
	    	return $this->executeUpdate($sql);
	    }

	    function deleteCoop($pid){
	    	$sql="delete from tbl_project where pid=$pid";
	    	return $this->executeDelete($sql);
	    }
	}
?>