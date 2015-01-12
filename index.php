<!--

 img_concept (working name)
 file: index.php
 purpose: main page

-->

<?php
include('include/config.php');

if( defined('installed') )
{
	echo '
	<font style="font-family: verdana; font-size: 16px;"><img src="skin/' . default_skin . '/' . site_logo . '" />
	IMG_CONCEPT</font>
	'
}
else
{
	die('imgconcept has not been installed. Please click <a href="install/index.php">HERE</a> to install.');
}

?>