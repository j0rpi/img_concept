<!--

 img_concept (working name)
 file: index.php
 purpose: main page

-->

<?php
include('include/config.php');

if( define('installed') )
{
	
}
else
{
	die('imgconcept has not been installed. Please click <a href="install/index.php">HERE</a> to install.');
}

?>