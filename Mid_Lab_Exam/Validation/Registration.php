<?php

	if(isset($_POST['signup'])){

		$id = $_POST['id'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		$name = $_POST['name'];

		if($id = NULL || $password = NULL || $cpassword = NULL || $name = NULL){
			echo "null submission";
		}else{

			if($password == $cpassword){

				$info = [	
                            'id'=>$id,
							'name'=>$name, 
							'password'=>$password,
                            'cpassword'=>$cpassword
						];

				$data = json_encode($info);
				$userinfo = fopen("../model/userinfo.json", "w");
				fwrite($userinfo, $data);
				fclose($userinfo);


				header('location: ../view/login.html');
			}else{
				echo "password & confirm password doesn't match";
			}
		}

	}
?>