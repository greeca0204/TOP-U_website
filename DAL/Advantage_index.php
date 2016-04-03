<?php
	r_require_once("/lib/GenericDao.php");
	class Advantage_index extends GenericDao {
	    
	    function getAdvantageIndex() {
	    	$sql="SELECT * FROM tbl_advantage_index where aid = 1";
	        return $this->getOne($sql);
	    }

	    function updateAdvantageIndex($title1,$pic1,$introduce1,$title2,$pic2,$introduce2,$title3,$pic3,$introduce3,$title4,$pic4,$introduce4,$title5,$pic5,$introduce5){
	    	$sql="update tbl_advantage_index set title1='$title1',pic1='$pic1',introduce1='$introduce1',title2='$title2',pic2='$pic2',introduce2='$introduce2',title3='$title3',pic3='$pic3',introduce3='$introduce3',title4='$title4',pic4='$pic4',introduce4='$introduce4',title5='$title5',pic5='$pic5',introduce5='$introduce5' where aid = 1";
	    	return $this->executeUpdate($sql);
	    }
	}
?>