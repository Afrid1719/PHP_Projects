<?php
include('connection.config.php');

class UploadData{
	public function insert_data($data){
		$insert='INSERT INTO people VALUES($data["nm"],$data["phno"],$data["email"],$data["file_upload"])';
		try{
			$this->con->query($insert);
			return 1;
		}catch(Exception $e){
			return $e->getMessage();
		}
	}
}

?>