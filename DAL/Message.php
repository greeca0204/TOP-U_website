<?php
	/*
	 * page name:Case.php
	 * author:Ryan Luo
	 * page function:slove the case data in eramus website
	 * page type:data layer
	 * code date:2015.04.03
	 * modify date:2015.04.03
	 */
	
	r_require_once("/lib/GenericDao.php");
	
	class Message extends GenericDao {
	
		//fetch all message from the tbl_message table
	    function getAllMsg() {
	    	$sql="SELECT * FROM tbl_message";
	        return $this->executeQuery($sql);
	    }
	    
	    //fetch all message by some page from the tbl_message table
	    function getMsgByPage($pageNum,$pageSize,$offLimit=0) {
	    	$sql = "SELECT * FROM tbl_message ORDER BY mid desc";
	    	return $this->pagedQuery($sql,$pageNum,$pageSize);
	    }
	    
	    //fetch one record from the tbl_message table by cid
	    function getOnebyMsg($mid) {
	    	$sql = "SELECT * FROM tbl_message where mid=$mid";
	    	return $this->getOne($sql);
	    }

	    //fetch the record row from the tbl_message table
	    function getTotalbyMsg() {
	    	$sql = "SELECT COUNT(*) AS CNT FROM tbl_message";
	    	$row = $this->getOne($sql);
	    	return $row?$row['CNT']:0;
	    }
	    
	    //insert the message information into the tbl_message table
	    function insertMsg($username,$tel,$other,$message) {
	    	$sql="insert into tbl_message(username,tel,other,message) values('$username','$tel','$other','$message')";
	    	return $this->executeInsert($sql);
	    }
	}
?>