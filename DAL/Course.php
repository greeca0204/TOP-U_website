<?php
	r_require_once("/lib/GenericDao.php");
	class Course extends GenericDao {
	    
	    function getCourse() {
	    	$sql="SELECT * FROM tbl_course where cid = 1";
	        return $this->getOne($sql);
	    }

	    function updateCourse($syrq,$picbox1,$picbox2,$picbox3,$picbox4,$picbox5,$title1,$title2,$title3,$title4,$title5){
	    	$sql="update tbl_course set syrq='$syrq',picbox1='$picbox1',picbox2='$picbox2',picbox3='$picbox3',picbox4='$picbox4',picbox5='$picbox5',title1='$title1',title2='$title2',title3='$title3',title4='$title4',title5='$title5' where cid = 1";
	    	return $this->executeUpdate($sql);
	    }
	}
?>