<?php
	r_require_once("/lib/GenericDao.php");
	class WebInfo extends GenericDao {
	    
	    //获取公司信息
	    function getWeb() {
	    	$sql="SELECT * FROM tbl_website where id=1";
	    	return $this->getOne($sql);
	    }
	    
	    //修改公司信息
	    function updateWeb($id,$website,$comname,$keyword,$description,$negotiator,$address,$postcode,$tel,$fax,$email,$copyright) {
	    	$sql="update tbl_website set website='$website',comname='$comname',keyword='$keyword',description='$description',negotiator='$negotiator',address='$address',postcode='$postcode',tel='$tel',fax='$fax',email='$email',copyright='$copyright' where id=$id";
	    	return $this->executeUpdate($sql);
	    }
	}
?>