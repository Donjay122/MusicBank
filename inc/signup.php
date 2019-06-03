
<?php
use PHPMailer\PHPMailer\PHPMailer;
if($pageTitle == 'Signup'){

}else{
//Import the PHPMailer class into the global namespace

require '../libraries/phpmailer/src/PHPMailer.php';
require '../libraries/phpmailer/src/Exception.php';
require '../libraries/phpmailer/src/SMTP.php';
}


if($_SERVER['REQUEST_METHOD'] == 'POST'){
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$message = 'Hi '.$name .', Thanks for signing up for Musibank. Click this email to verify your account';
$msg = '';


if(!PHPMailer::validateAddress($email)){
  echo "Invalid email address";
   exit;
}


        $mail = new PHPMailer;

        //Tell PHPMailer to use SMTP
		$mail->isSMTP();
		//Enable SMTP debugging
		// 0 = off (for production use)
		// 1 = client messages
		// 2 = client and server messages
		$mail->SMTPDebug = 2;
		//Set the hostname of the mail server
		$mail->Host = 'smtp.gmail.com';
		// use
		// $mail->Host = gethostbyname('smtp.gmail.com');
		// if your network does not support SMTP over IPv6
		//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
		$mail->Port = 587;
		//Set the encryption system to use - ssl (deprecated) or tls
		$mail->SMTPSecure = 'tls';
		//Whether to use SMTP authentication
		$mail->SMTPAuth = true;
		//Username to use for SMTP authentication - use full email address for gmail
		$mail->Username = "golferscoach@gmail.com";
		//Password to use for SMTP authentication
		$mail->Password = "ppspkencduybygkb";

        //It's important not to use the submitter's address as the from address as it's forgery,
        //which will cause your messages to fail SPF checks.
        //Use an address in your own domain as the from address, put the submitter's address in a 
        $mail->setFrom('golferscoach@gmail.com', 'Musibank Inc');
        $mail->addAddress($email, $name);
        $mail->addReplyTo('golferscoach@gmail.com', 'Musibank');
        $mail->Subject = 'MusiBank Signup';
        $mail->Body = $message;
        if (!$mail->send()) {
            $msg .= "Mailer Error: " . $mail->ErrorInfo;
            exit;
        }




header('location:../category.php?status=thanks');

}

?>

<form role='form' method="POST" action="inc/signup.php">
	
  <input type="text" name="name" placeholder="Fullname" class="inputs"><br>
  <input type="email" name="email" placeholder ='Email' class="inputs"><br>
  <input type="number" name="phone" placeholder ='Tel' class="inputs"><br>
  <input type="submit" value="Signup" class="button">

</form>