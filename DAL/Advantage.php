<?php
	r_require_once("/lib/GenericDao.php");
	class Advantage extends GenericDao {
	    
	    function getAdvantage() {
	    	$sql="SELECT * FROM tbl_advantage where aid = 1";
	        return $this->getOne($sql);
	    }

	    function updateAdvantage($introduce,$british_advantage,$gzqz,$jyzl,$sjcb,$fycb,$yywh,$kksy){
	    	$sql="update tbl_advantage set introduce='$introduce',british_advantage='$british_advantage',gzqz='$gzqz',jyzl='$jyzl',sjcb='$sjcb',fycb='$fycb',yywh='$yywh',kksy='$kksy' where aid = 1";
	    	return $this->executeUpdate($sql);
	    }
	}
?>