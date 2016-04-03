<?php
	r_require_once("/lib/GenericDao.php");
	class AdNews extends GenericDao {
	    
		//获取所有广告信息
	    function getAllAdNews() {
	    	$sql="SELECT * FROM tbl_adNews";
	        return $this->executeQuery($sql);
	    }

	    //获取需要显示的广告信息
	    function getDisAdNews() {
	    	$sql="SELECT * FROM tbl_adNews where checked=1";
	        return $this->executeQuery($sql);
	    }
	    
	    //分页显示广告信息
	    function getbyAdNews($pageNum,$pageSize,$offLimit=0) {
	    	$sql = "SELECT * FROM tbl_adNews ORDER BY id";
	    	return $this->pagedQuery($sql,$pageNum,$pageSize);
	    }

	    function getLimOneAdNews() {
	    	$sql = "SELECT * FROM tbl_adNews where checked=1 ORDER BY id desc limit 0,1";
	    	return $this->getOne($sql);
	    }
	    
	    function getLimTwoAdNews() {
	    	$sql = "SELECT * FROM tbl_adNews where checked=1 ORDER BY id desc limit 1,1";
	    	return $this->getOne($sql);
	    }

	    //查询记录总行数
	    function getTotalbyAdNews() {
	    	$sql = "SELECT COUNT(*) AS CNT FROM tbl_adNews";
	    	$row = $this->getOne($sql);
	    	return $row?$row['CNT']:0;
	    }
	    
	    //获取单条广告信息
	    function getAdNewsbyId($id) {
	    	$sql="SELECT * FROM tbl_adNews where id=$id";
	    	return $this->getOne($sql);
	    }
	    
	    //添加广告信息
	    function insertAdNews($title,$imgurl,$contenturl,$checked) {
			$sql="insert into tbl_adNews(title,imgurl,contenturl,checked) values('$title','$imgurl','$contenturl',$checked)";
	    	return $this->executeInsert($sql);
	    }
	    
	    //修改广告信息
	    function updateAdNews($id,$title,$imgurl,$contenturl,$checked) {
			$sql="update tbl_adNews set title='$title',imgurl='$imgurl',contenturl='$contenturl',checked=$checked where id=$id";
	    	return $this->executeUpdate($sql);
	    }
	    
	    //删除广告信息
	    function deleteAdNews($id)
	    {
	    	$sql="delete from tbl_adNews where id=$id";
	    	return $this->executeDelete($sql);
	    }
	}
?>