<?php
session_start();
include_once 'dbConnect.php';
include("functions.php");
if(isset($_SESSION["email"])) {
	if(isLoginSessionExpired()) {
		header("Location:logout.php?session_expired=true");
	}
}


?>

<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <title>activity</title>
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
            <h1 style=" top:-90%; position: absolute; left:20%">Select Activity</h1>
            <p style="position: absolute; top:-88%; left:200% "> <a href="home.html"><?php echo $_GET["name"]; ?>!</a></p>
            <p style="position: absolute; top:-88%; left:230% "> <a href="logout.php">Logout</a></p>
            <form action="" method="post">
                <div>                               
                    <label> Select type of activity</label>&nbsp;&nbsp;
                    
                <select>
                    <option>---Select---</option>
                    <option value= "lstr" name="lstr" id="lstr"> List of Restaurants</option>
                    <option value="bkt" name="bkt" id="bkt"> Book Table</option>
                </select>
                </div>
                <br>
                <p class="login button"><input type="submit" name="Submit" value="Submit"/></p>
                </form>  
        </div>
                   
                     <div style="top:350%; position: absolute; left:49%; font-family: 'FranchiseRegular','Arial Narrow',Arial,sans-serif; display: bold; font-size: 20px;">
                         <a href="home.html"><b>Home</b></a>
                     </div>
  
                    <div >  
                     

                    </div>
</form>
        </div></div>
    </body>
                </html>



