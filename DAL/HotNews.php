<?php
	r_require_once("/lib/GenericDao.php");
	class HotNews extends GenericDao {
	    
		//获取所有广告信息
	    function getAllHotNews() {
	    	$sql="SELECT * FROM tbl_hotNews";
	        return $this->executeQuery($sql);
	    }

	    //获取需要显示的广告信息
	    function getDisHotNews() {
	    	$sql="SELECT * FROM tbl_hotNews where checked=1";
	        return $this->executeQuery($sql);
	    }
	    
	    //分页显示广告信息
	    function getbyHotNews($pageNum,$pageSize,$offLimit=0) {
	    	$sql = "SELECT * FROM tbl_hotNews ORDER BY id";
	    	return $this->pagedQuery($sql,$pageNum,$pageSize);
	    }
	    
	    //查询记录总行数
	    function getTotalbyHotNews() {
	    	$sql = "SELECT COUNT(*) AS CNT FROM tbl_hotNews";
	    	$row = $this->getOne($sql);
	    	return $row?$row['CNT']:0;
	    }
	    
	    //获取单条广告信息
	    function getHotNewsbyId($id) {
	    	$sql="SELECT * FROM tbl_hotNews where id=$id";
	    	return $this->getOne($sql);
	    }
	    
	    //添加广告信息
	    function insertHotNews($title,$imgurl,$contenturl,$checked) {
			$sql="insert into tbl_hotNews(title,imgurl,contenturl,checked) values('$title','$imgurl','$contenturl',$checked)";
	    	return $this->executeInsert($sql);
	    }
	    
	    //修改广告信息
	    function updateHotNews($id,$title,$imgurl,$contenturl,$checked) {
			$sql="update tbl_hotNews set title='$title',imgurl='$imgurl',contenturl='$contenturl',checked=$checked where id=$id";
	    	return $this->executeUpdate($sql);
	    }
	    
	    //删除广告信息
	    function deleteHotNews($id)
	    {
	    	$sql="delete from tbl_hotNews where id=$id";
	    	return $this->executeDelete($sql);
	    }
	}
?>