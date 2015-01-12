<!--

 img_concept (working name)
 file: index.php
 purpose: main page

-->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<?php
include('include/config.php');

if( defined("installed") )
{
echo "
<style type='text/css'>

.tg  {border-collapse:collapse;border-spacing:0;border-color:#999;}
.tg td{margin-left: 50px; text-align: left;font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#444;background-color:#F7FDFA;}
.tg th{margin-left: 50px; text-align: left;font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#444;background-color:#F7FDFA;}
.container {background: url('http://bibben.se/wp-content/uploads/2013/07/background.png'); width: 600px; height: 600px; border-radius: 8px 8px 8px 8px; border: 1px solid black;}
.login_container {width: 450px; height: 300px; border-radius: 8px 8px 8px 8px; border: 1px solid black; font-family: verdana; font-size: 16px}
</style>
<center>
<div align='center' class='container'>
<font style='font-size: 18px; font-family: Arial;'><img src='skin/" . default_skin. "/" . site_logo . "'/><br><b>". site_name . "</b></font><br>
<br>
<br>
<br>
<br>
<div class='login_container'>
  Username<br> <input type='text' name='username'><br>
  Password<br><input type='text' name='password'><br>
  <input type='submit' name='login' value='Login'><br>
</form>
<a href='register.php'>Register Account</a>
<div>
</center>
</div>";
}
else
{
	die('imgconcept has not been installed. Please click <a href="install/index.php">HERE</a> to install.');
}

?>