<?php
	r_require_once("/lib/GenericDao.php");
	class Service extends GenericDao {
	    
	    function getService() {
	    	$sql="SELECT * FROM tbl_service where sid = 1";
	        return $this->getOne($sql);
	    }

	    function updateService($service){
	    	$sql="update tbl_service set service='$service' where sid = 1";
	    	return $this->executeUpdate($sql);
	    }
	}
?>