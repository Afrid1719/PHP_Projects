<?php

class Connect{
	protected $con;
	const hostName="localhost";
	const userName="root";
	const password="";
	const dbName="Client_n_Company";

	public function Connect(){
		try{
			$this->con=new mysqli(self::hostName,self::userName,self::password,self::dbName);
			return $this->con;
		}catch(Exception $e){
			return $e->getMessage();
		}
	}
}


?>