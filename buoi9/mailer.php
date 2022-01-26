<?php 
    //Load Composer's autoloader
    require './vendor/autoload.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

class Mailer{
        

        public function __construct($source){
            $this->source = $source;
        }

        public function sendMail($params){
            

            $mail = new PHPMailer(true);

            try {
                //Server settings
                // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                $mail->CharSet = 'UTF-8';                    //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = $this->source[0]['username'];                     //SMTP username
                $mail->Password   = $this->source[0]['password'];                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
                //Recipients
                $mail->setFrom('tanloc21150us@gmail.com', 'Zendvn');
                $mail->addAddress($params['email'], $params['name']);     //Add a recipient
        
        
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Zendvn đã nhận được yêu cầu liên hệ của khách hàng';
                $mail->Body    = '
                 <ul>
                        <li>Name:'.$params['name'].'</li>
                        <li>Email:'.$params['email'].'</li>
                        <li>Title:'.$params['title'].'</li>
                        <li>message:'.$params['message'].'</li>
                   </ul>
                ';

                $mail->send();
                
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
    }