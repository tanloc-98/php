<?php
    require_once 'Validate.class.php';
    require_once 'mailer.php';

    $result = array('name' => '', 'email' => '', 'title' => '', 'message' => '');
    $errors = '';
    $message = '';
	if(!empty($_POST)){
        $source = $_POST;

		$validate = new Validate($source);
		
		// Rule
		$validate->addRule('name','string', 5, 100, true)
				 ->addRule('email','email')
				 ->addRule('title','title',10,100, true)
 				 ->addRule('message','message',100,500, true);
		
		// Run
		$validate->run();
		$errors = $validate->showErrors();
		$result = $validate->getResult();

        if(!$errors){
            $configSystem = json_decode(file_get_contents("./config/config.json"), true);
            $mail = new Mailer($configSystem);
            $mail -> sendMail($source);
            $message =  '<h4 style="color:#007bff">Tin nhắn đã được gửi!</h4>';
            $result = array('name' => '', 'email' => '', 'title' => '', 'message' => '');
        }
    }
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <?php require_once './html/head.php' ?>
</head>

<body class="stretched">

    <div id="wrapper" class="clearfix">

        <?php require_once './html/header.php' ?>
        <section id="page-title">

            <div class="container clearfix">
                <h1>LIEN HỆ</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Liên hệ</li>
                </ol>
            </div>

        </section>
        <!-- Content
		============================================= -->
        <?php require_once './html/input.php' ?>
        <!-- #content end -->

        <?php require_once './html/footer.php' ?>
    </div>

    <!-- Go To Top
	============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>
    <?php require_once './html/script.php' ?>
</body>

</html>
