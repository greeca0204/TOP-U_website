<?php
	r_require_once("/lib/GenericDao.php");
	class Company extends GenericDao {
	    
	    function getCompany() {
	    	$sql="SELECT * FROM tbl_company where cid = 1";
	        return $this->getOne($sql);
	    }

	    function updateCompany($introduce,$introduce_advpage){
	    	$sql="update tbl_company set introduce='$introduce',introduce_advpage='$introduce_advpage' where cid = 1";
	    	return $this->executeUpdate($sql);
	    }
	}
?>