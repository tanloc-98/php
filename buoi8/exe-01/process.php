<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Process</title>
</head>
<body>
	<div id="wrapper">
    	<div class="title">PROCESS</div>
        <div id="form">   
			<?php
				require_once 'functions.php';
				session_start();
				
				$timeout = simplexml_load_file("_data/timeout.xml") -> timeout;

				if($_SESSION['flagPermission']==true){
					if($_SESSION['timeout'] + intval($timeout) > time()){
						if($_SESSION['role'] == 'admin') header('location: admin.php');
						if($_SESSION['role'] == 'member') header('location: member.php');
					}else{
						session_unset();
						header('location: login.php');
					}
				}else{
					if(!checkEmpty($_POST['username']) && !checkEmpty($_POST['password'])){
						$username 			= $_POST['username'];
						$password 			= md5($_POST['password']);
						$data				= file_get_contents('./_data/user.json');
						$userInfo 			= json_decode($data, true);
						
						foreach($userInfo as $user){
							if($user['username'] == $username && $user['password'] == $password){
								$_SESSION['flagPermission'] = true;
								$_SESSION['fullName'] 		= $user['fullName'];
								$_SESSION['role'] 			= $user['role'];	
								$_SESSION['timeout'] 		= time();
							}else{
								header('location: login.php');
							}
						}
					}else{
						header('location: login.php');
					}	
					if($_SESSION['role'] == 'admin') header('location: admin.php');
					if($_SESSION['role'] == 'member') header('location: member.php');
				}
			?>
        </div>
        
    </div>
</body>
</html>
