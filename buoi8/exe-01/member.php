<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Member</title>
</head>
<body>
	<div id="wrapper">
    	<div class="title">Member</div>
        <div id="form">   
        <?php
			session_start();

			$timeout = simplexml_load_file("_data/timeout.xml") -> timeout;

			if($_SESSION['flagPermission']==true){
				if($_SESSION['timeout'] + intval($timeout) > time()){
					$fullName = $_SESSION['fullName'];
					$logout = '<a href="logout.php">Đăng xuất</a>';
					if($_SESSION['role'] == 'admin') header('location: admin.php');
				}else{
					session_unset();
					header('location: login.php');
				}
			}
		?>
			<form action="#" method="post" name="add-form">
				<h3><?php echo $fullName ?></h3>
			</form>
		<?php echo $logout ?>
    	</div>
	</div>
</body>
</html>
