<?php
	/*
	* 页面名称：News.php
	* 页面功能：新闻信息管理数据操作
	* 页面类别：数据层
	* 编写日期：2013.05.07
	*/
	
	r_require_once("/lib/GenericDao.php");
	class News extends GenericDao {

		//分页显示某类所有文章
		function getNewsByNewsPage($type,$pageNum,$pageSize,$offLimit=0)
		{
			$sql = "SELECT * FROM tbl_news where type=$type ORDER BY addtime DESC";
			return $this->pagedQuery($sql,$pageNum,$pageSize);
		}

		//查询某类文章的记录总行数
	    function getTotalbyNews($type) {
	    	$sql = "SELECT COUNT(*) AS CNT FROM tbl_news where type=$type";
	    	$row = $this->getOne($sql);
	    	return $row?$row['CNT']:0;
	    }

	    //分页显示所有即将举行的活动
		function getNewsByFutureNewsPage($pageNum,$pageSize,$offLimit=0)
		{
			$sql = "SELECT * FROM tbl_news where type=2 and status=1 ORDER BY addtime DESC";
			return $this->pagedQuery($sql,$pageNum,$pageSize);
		}

		//查询所有即将举行的活动的记录总行数
	    function getTotalbyFutureNews() {
	    	$sql = "SELECT COUNT(*) AS CNT FROM tbl_news where type=2 and status=1";
	    	$row = $this->getOne($sql);
	    	return $row?$row['CNT']:0;
	    }	

	    //分页显示TOP动态的被推荐的即将举行活动
		function getFutureNewsByPic($type,$pageNum,$pageSize,$offLimit=0)
		{
			$sql = "SELECT * FROM tbl_news where type=2 and recommend=1 and status=1 ORDER BY addtime DESC";
			return $this->pagedQuery($sql,$pageNum,$pageSize);
		}

		//分页显示TOP动态的即将举行活动
		function getFutureNewsByDoc($type,$pageNum,$pageSize,$offLimit=0)
		{
			$sql = "SELECT * FROM tbl_news where type=2 and status=1 ORDER BY addtime DESC";
			return $this->pagedQuery($sql,$pageNum,$pageSize);
		}

		//分页显示TOP动态的被推荐的往期活动
		function getNowNewsByPic($type,$pageNum,$pageSize,$offLimit=0)
		{
			$sql = "SELECT * FROM tbl_news where type=2 and recommend=1 and status=2 ORDER BY addtime DESC";
			return $this->pagedQuery($sql,$pageNum,$pageSize);
		}	

		//分页显示TOP动态的往期活动
		function getNowNewsByDoc($type,$pageNum,$pageSize,$offLimit=0)
		{
			$sql = "SELECT * FROM tbl_news where type=2 and status=2 ORDER BY addtime DESC";
			return $this->pagedQuery($sql,$pageNum,$pageSize);
		}	

		//获取TOP动态的往期活动总行数
		function getTotalNowNewsByDoc() {
	    	$sql = "SELECT COUNT(*) AS CNT FROM tbl_news  where type=2 and status=2";
	    	$row = $this->getOne($sql);
	    	return $row?$row['CNT']:0;
	    }		
	    
		//获取一篇文章
		function getOneNews($nid)
		{
			$sql = "SELECT * FROM tbl_news WHERE nid = $nid";
			return $this->getOne($sql);			
		}

		//推荐动态显示
		function getOneNewsByTime($type,$time)
		{
			$sql = "SELECT * FROM tbl_news where type=$type and status=2 and recommend=1 ORDER BY addtime DESC limit $time,1";
			return $this->getOne($sql);			
		}

		//首页动态显示
		function getOneNewsByITime($type,$time)
		{
			$sql = "SELECT * FROM tbl_news where type=$type and status=2 and indexshow=1 ORDER BY addtime DESC limit $time,1";
			return $this->getOne($sql);			
		}

		//图片切换展示
		function getOneNewsBySTime($type,$time)
		{
			$sql = "SELECT * FROM tbl_news where type=$type and status=2 and slide=1 ORDER BY addtime DESC limit $time,1";
			return $this->getOne($sql);			
		}

		 //添加文章
	    function insertNews($name,$addtime,$pic,$pic1,$pic2,$pic3,$summary,$content,$type,$status,$recommend,$slide,$indexshow) {
			$sql="insert into tbl_news(name,addtime,pic,pic1,pic2,pic3,summary,content,type,status,recommend,slide,indexshow) values('$name',$addtime,'$pic','$pic1','$pic2','$pic3','$summary','$content',$type,$status,$recommend,$slide,$indexshow)";
	    	return $this->executeInsert($sql);
	    }
	    
	    //修改文章
	    function updateNews($nid,$name,$addtime,$pic,$pic1,$pic2,$pic3,$summary,$content,$type,$status,$recommend,$slide,$indexshow) {
			$sql="update tbl_news set name='$name',addtime=$addtime,pic='$pic',pic1='$pic1',pic2='$pic2',pic3='$pic3',summary='$summary',content='$content',type=$type,status=$status,recommend=$recommend,slide=$slide,indexshow=$indexshow where nid=$nid";
	    	return $this->executeUpdate($sql);
	    }
	    
	    //删除文章
	    function deleteNews($nid)
	    {
	    	$sql="delete from tbl_news where nid=$nid";
	    	return $this->executeDelete($sql);
	    }

	    //获取8条动态新闻
	    function getEightTrend()
	    {
	    	$sql = "SELECT * FROM tbl_news where type=2 and status=1 ORDER BY addtime DESC limit 0,5";
			return $this->executeQuery($sql);
	    }
	}
?>