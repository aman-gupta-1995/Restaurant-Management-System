<?php
session_start();
include_once 'dbConnect.php';
if (isset($_POST['forgotPassword'])){
	$username = mysqli_real_escape_string($connection, $_POST['email']);
	$sql = "SELECT * FROM `user` WHERE email = '$email'";
	$res = mysqli_query($connection, $sql);
	$count = mysqli_num_rows($res);
        if($count==0){echo "Email id is not registered";die();}
        $token=getRandomString(10);
$q="insert into tokens (token,email) values ('".$token."','".$email."')";
mysql_query($q);
function getRandomString($length) 
	   {
    $validCharacters = "ABCDEFGHIJKLMNPQRSTUXYVWZ123456789";
    $validCharNumber = strlen($validCharacters);
    $result = "";
 
    for ($i = 0; $i < $length; $i++) {
        $index = mt_rand(0, $validCharNumber - 1);
        $result .= $validCharacters[$index];
    }
	return $result;}
 function mailresetlink($to,$token){
$subject = "Forgot Password on Megarush.net";
$uri = 'http://'. $_SERVER['HTTP_HOST'] ;
$message = '
<html>
<head>
<title>Forgot Password For Megarush.net</title>
</head>
<body>
<p>Click on the given link to reset your password <a href="'.$uri.'/reset.php?token='.$token.'">Reset Password</a></p>
 
</body>
</html>
';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= 'From: Admin<webmaster@example.com>' . "\r\n";
$headers .= 'Cc: Admin@example.com' . "\r\n";
 
if(mail($to,$subject,$message,$headers)){
	echo "We have sent the password reset link to your  email id <b>".$to."</b>"; 
}}
 
if(isset($_GET['email']))mailresetlink($email,$token);
	if($count == 1){

		 $errormsg = "Send email to user with password";
	}else{
		$errormsg = "User name does not exist in database";
	}
}

$r = mysqli_fetch_assoc($res);
$password = $r['password'];
$to = $r['email'];
$subject = "Your Recovered Password";
$message = "Please use this password to login " . $password;
$headers = "From : karthiknarla22@gmail.com";
if(mail($to, $subject, $message, $headers)){
	echo "Your Password has been sent to your email id";
}else{
	echo "Failed to Recover your password, try again";
}
?>




$token=getRandomString(10);
$q="insert into tokens (token,email) values ('".$token."','".$email."')";
mysql_query($q);
function getRandomString($length) 
	   {
    $validCharacters = "ABCDEFGHIJKLMNPQRSTUXYVWZ123456789";
    $validCharNumber = strlen($validCharacters);
    $result = "";
 
    for ($i = 0; $i < $length; $i++) {
        $index = mt_rand(0, $validCharNumber - 1);
        $result .= $validCharacters[$index];
    }
	return $result;}
 function mailresetlink($to,$token){
$subject = "Forgot Password on Megarush.net";
$uri = 'http://'. $_SERVER['HTTP_HOST'] ;
$message = '
<html>
<head>
<title>Forgot Password For Megarush.net</title>
</head>
<body>
<p>Click on the given link to reset your password <a href="'.$uri.'/reset.php?token='.$token.'">Reset Password</a></p>
 
</body>
</html>
';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= 'From: Admin<webmaster@example.com>' . "\r\n";
$headers .= 'Cc: Admin@example.com' . "\r\n";
 
if(mail($to,$subject,$message,$headers)){
	echo "We have sent the password reset link to your  email id <b>".$to."</b>"; 
}}
 
if(isset($_GET['email']))mailresetlink($email,$token);
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
           <link href="css/new.css" rel="stylesheet" type="text/css">
           
     <link href="css/home.css" rel="stylesheet" type="text/css">
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
    </head>
<body class="background">
        <div>
        <a class="hiddenanchor" id="toregister"></a>
	<a class="hiddenanchor" id="tologin"></a>
	<div id="wrapper">
		<div id="login" class="animate form">
     
         <div id="settingLogin">
            <h1>Forgot Password</h1>
            <form action="" method="post">
                <div>                               
                <label for="username"> Email </label>
                <input type="text" name="email" width="200px" size="37" class="username" placeholder="email" required> </div>
                <span><?php
                    if (isset($errormsg)) {
                        echo $errormsg;
                    }
                    ?></span><br>
                 <p class="login button"><input type="submit" name="login" value="Login"/></p>
               
            </form>
         </div></div>
                </div>
        </div>
</body></html>

