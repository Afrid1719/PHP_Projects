<?php
include('connection.php');

class Add extends Connect{
	public function pushData($table,$data){
		if($table=="client"){
			$sql=$this->con->prepare("INSERT INTO `$table` VALUES(?,?,?,?,CURRENT_DATE())");  //prepared statement for cleint data insertion
			$id=0;
			$sql->bind_param("isss",$id,$data['name'],$data['country'],$data['business_type']); //placeholder and value
		}
		else{
			$sql=$this->con->prepare("INSERT INTO `$table` VALUES()");  //prepared statement for company data insertion
			$sql->bind_param(); //placeholder and value
		}
		try{
			$done=$sql->execute();
		}catch(Exception $e){
			return $e->getMessage();
		}
		return $done;
		$sql.close();
	}
}


?>