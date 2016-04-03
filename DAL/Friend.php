<?php
	/*
	* 页面名称：Friend.php
	* 页面功能：友情链接信息管理数据操作
	* 页面类别：数据层
	* 编写日期：2013.05.07
	*/
	
	r_require_once("/lib/GenericDao.php");
	class Friend extends GenericDao {
	    
		//获取所有友情链接信息
	    function getAllFriend() {
	    	$sql="SELECT * FROM tbl_friends";
	        return $this->executeQuery($sql);
	    }
	    
	    //分页显示友情链接信息
	    function getbyFriend($pageNum,$pageSize,$offLimit=0) {
	    	$sql = "SELECT * FROM tbl_friends ORDER BY id";
	    	return $this->pagedQuery($sql,$pageNum,$pageSize);
	    }
	    
	    //查询记录总行数
	    function getTotalbyFriend() {
	    	$sql = "SELECT COUNT(*) AS CNT FROM tbl_friends";
	    	$row = $this->getOne($sql);
	    	return $row?$row['CNT']:0;
	    }
	    
	    //获取单条友情链接信息
	    function getFriendbyId($id) {
	    	$sql="SELECT * FROM tbl_friends where id=$id";
	    	return $this->getOne($sql);
	    }
	    
	    //添加友情链接信息
	    function insertFriend($friends,$url) {
			$sql="insert into tbl_friends(friends,url) values('$friends','$url')";
	    	return $this->executeInsert($sql);
	    }
	    
	    //修改友情链接信息
	    function updateFriend($id,$friends,$url) {
			$sql="update tbl_friends set friends='$friends',url='$url' where id=$id";
	    	return $this->executeUpdate($sql);
	    }
	    
	    //删除友情链接信息
	    function deleteFriend($id)
	    {
	    	$sql="delete from tbl_friends where id=$id";
	    	return $this->executeDelete($sql);
	    }
	}
?>