<?php
	r_require_once("/lib/GenericDao.php");
	class AdTrend extends GenericDao {
	    
		//获取所有广告信息
	    function getAllAdTrend() {
	    	$sql="SELECT * FROM tbl_adTrend";
	        return $this->executeQuery($sql);
	    }

	    //获取需要显示的广告信息
	    function getDisAdTrend() {
	    	$sql="SELECT * FROM tbl_adTrend where checked=1";
	        return $this->executeQuery($sql);
	    }
	    
	    //分页显示广告信息
	    function getbyAdTrend($pageNum,$pageSize,$offLimit=0) {
	    	$sql = "SELECT * FROM tbl_adTrend ORDER BY id";
	    	return $this->pagedQuery($sql,$pageNum,$pageSize);
	    }

	    //查询记录总行数
	    function getTotalbyAdTrend() {
	    	$sql = "SELECT COUNT(*) AS CNT FROM tbl_adTrend";
	    	$row = $this->getOne($sql);
	    	return $row?$row['CNT']:0;
	    }
	    
	    //获取单条广告信息
	    function getAdTrendbyId($id) {
	    	$sql="SELECT * FROM tbl_adTrend where id=$id";
	    	return $this->getOne($sql);
	    }

	    function getFirstAdTrend() {
	    	$sql="SELECT * FROM tbl_adTrend where id=1";
	    	return $this->getOne($sql);
	    }

	    function getSecondAdTrend() {
	    	$sql="SELECT * FROM tbl_adTrend where id=2";
	    	return $this->getOne($sql);
	    }

	    function getThirdAdTrend() {
	    	$sql="SELECT * FROM tbl_adTrend where id=3";
	    	return $this->getOne($sql);
	    }
	    
	    //修改广告信息
	    function updateAdTrend($id,$title,$imgurl,$contenturl,$checked) {
			$sql="update tbl_adTrend set title='$title',imgurl='$imgurl',contenturl='$contenturl',checked=$checked where id=$id";
	    	return $this->executeUpdate($sql);
	    }
	}
?>