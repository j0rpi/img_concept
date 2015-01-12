<!--

 img_concept (working name)
 file: index.php
 purpose: main page

-->

<?php
include('include/config.php');

if( defined("installed") )
{
	echo '
	<center><font style="font-family: verdana; font-size: 16px;"><img src="skin/' . default_skin . '/' . site_logo . '" />
	<br>' . site_name . '<br><br><a href="register.php">REGISTER</a> | <a href="login.php">LOGIN</a><br><br>This 
	is a sample page with the core functions of img_concept</font></center>
	';
}
else
{
	die('imgconcept has not been installed. Please click <a href="install/index.php">HERE</a> to install.');
}

?>