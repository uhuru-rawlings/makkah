<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require "vendor/autoload.php";
    class SendMail {
        public $body;
        public $from;
        public $to;

        public function sendMail()
        {
            try {
                $mail = new PHPMailer(true);
                $mail->SMTPDebug = 0;
                $mail->isSMTP(); 
                $mail->Host       = 'mail.voocar.co.ke';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'info@voocar.co.ke';
                $mail->Password   = 'Info@2022!';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
                $mail->Port       = 587;                                   
                $mail->setFrom("info@voocar.co.ke");
                $mail->addAddress($this -> to); 
                $mail->addReplyTo('info@voocar.co.ke');
                $mail->isHTML(true);
                $mail->Subject = 'Voocar online shopping.';
                $mail->Body = '<p>Thank you for shopping with us, your order was succesfully placed and you will be contacted for the next step.</p><p>For any inquiry please reach us on <a href="tel:+254 759829346">+254 759829346</a> or on email at <a href="mailto:info@voocar.co.ke">info@voocar.co.ke</a></p><p>Thank you our valued customer.</p>';
            
                $mail->send();
                $update = "yes";
            } catch (Exception $e) {
                header("location: login_user.php");
            }
        }
    }
?>