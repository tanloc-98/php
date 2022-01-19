<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Admin</title>
</head>
<body>
	<div id="wrapper">
    	<div class="title">Admin</div>
        <div id="form">   
        <?php
			session_start();

			$xml = simplexml_load_file('_data/timeout.xml');
			$timeout = $xml -> timeout;
			if(!empty($_POST['timeout'])){
				$xml -> timeout = $_POST['timeout'];
				$xml->asXML('_data/timeout.xml');
			};
				if($_SESSION['flagPermission']==true){
					if($_SESSION['timeout'] + $timeout > time()){
					$fullName = $_SESSION['fullName'];
					$logout = '<a href="logout.php">Đăng xuất</a>';
					if($_SESSION['role'] == 'member') header('location: member.php');
				}else{
					session_unset();
					header('location: login.php');
				}
			}
		?>
			<form action="#" method="post" name="add-form">
				<h3><?php echo $fullName ?></h3>
					<p>Set time out</p>
					<input type="number" name="timeout" value="<?= $timeout ?>"/>
					<input type="submit" value="Update" name="Update">
			</form>
		<?php echo $logout ?>
    	</div>
	</div>
</body>
</html>
