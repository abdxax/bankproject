<?php

/**
 * 
 */
class DB 
{
	private $db;
	function __construct()
	{
		# code...
		$this->db=new PDO("mysql:host=localhost;dbname=bank","root","");
	}

	public function addOwn($namme,$phone,$blood){
         $sql=$this->db->prepare("INSERT INTO own(name,phone,blood) VALUES (?,?,?)");
         if ($sql->execute(array($namme,$phone,$blood))) {
         	return true;
         }
         return false;
	}


public function login($email,$pass){
	$sql=$this->db->prepare("SELECT * FROM user WHERE email=? AND pass=?");
	$sql->execute(array($email,$pass));
	if ($sql->rowCount()==1) {
		foreach ($sql as $key ) {
			if ($key['role']==1) {
				$_SESSION['email']=$email;
				$_SESSION['pass']=$pass;
				//$_SESSION['role']=$key['role_id'];
				//$_SESSION['depart']=$this->getDepartemtId($email);
				header("location:hospital/index.php");
			}
			else if($key["role"]==2){
				$_SESSION['email']=$email;
				$_SESSION['pass']=$pass;
				//$_SESSION['role']=$key['role_id'];
				//$_SESSION['depart']=$this->getDepartemtId($email);
				header("location:staf/index.php");

			}
		}
	}
}

public function addnewUser($namme,$phone,$email,$hos_email,$pass){
         $sql=$this->db->prepare("INSERT INTO user(email,pass,role) VALUES (?,?,?)");
         if ($sql->execute(array($email,$pass,2))) {
         	$sql2=$this->db->prepare("INSERT INTO employee(email,hosp_email,name,phone) VALUES (?,?,?,?)");
         	if ($sql2->execute(array($email,$hos_email,$namme,$phone))) {
         		header("location:index.php");
         	}
         	else{
         		echo "string";
         	}
         }
        
	}

	public function getAlluser($eml){
		  $sql=$this->db->prepare("SELECT * FROM employee WHERE hosp_email=?");
		  $sql->execute(array($eml));
		  return $sql;
	}

	public function getAllpatient($eml){
		  $sql=$this->db->prepare("SELECT * FROM patient WHERE hospital =?");
		  $sql->execute(array($eml));
		  return $sql;
	}


}