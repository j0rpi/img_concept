<!--

 img_concept (working name)
 file: install.php
 purpose: easy installation script

-->

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<?php
include('../include/config.php');
if( defined("installed") )
{
	die("imgconcept is already istalled. Click <a href='../index.php'>here to return to main site.</a>");
}
else
{

echo "
<style type='text/css'>

.tg  {border-collapse:collapse;border-spacing:0;border-color:#999;}
.tg td{margin-left: 50px; text-align: left;font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#444;background-color:#F7FDFA;}
.tg th{margin-left: 50px; text-align: left;font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#444;background-color:#F7FDFA;}
.container {background: url('http://bibben.se/wp-content/uploads/2013/07/background.png'); width: 800px; height: 1500px; border-radius: 8px 8px 8px 8px; border: 1px solid black;}
</style>
<center>
<div align='center' class='container'>
<font style='font-size: 18px; font-family: Arial;'><b>Img Concept Installer</b></font><br>
<font style='font-size: 12px; font-family: Arial;'>This installer is not 100% accurate and my fuck up your installation.
<br>
If you wish to do configuring manually, edit <b>/include/config.php.example</b> and rename to <b>'config.php'</b>
</font>
<br>
<br>
<br>
<br>
<br>
<font style='font-size: 16px; font-family: Arial;'><b>Database Settings</b></font>
<br>
<br>
<table class='tg'>
  <tr>
    <th class='tg-031e'>Database Host</th>
    <th class='tg-031e'><input name='dbhost' id='dbhost' type='text' value='localhost'></th>
  </tr>
  <tr>
    <td class='tg-031e'>Database Username</td>
    <td class='tg-031e'><input name='dbuser' id='dbuser' type='text' value='root'></td>
  </tr>
  <tr>
    <td class='tg-031e'>Database Password</td>
    <td class='tg-031e'><input name='dbpass' id='dbpass' type='text'></td>
  </tr>
  <tr>
    <td class='tg-031e'>Database Name</td>
    <td class='tg-031e'><input name='dbname' id='dbname' type='text' value='imgconcept'></td>
  </tr>
  <tr>
    <td class='tg-031e'>Database Prefix</td>
    <td class='tg-031e'><input name='db_prefix' id='db_prefix' type='text'></td>
  </tr>
</table>
<br>
<br>
<font style='font-size: 16px; font-family: Arial;'><b>Site Settings</b></font>
<br>
<br>
<table class='tg'>
  <tr>
    <th class='tg-031e'>Site Name</th>
    <th class='tg-031e'><input type='text' name='site_name' id='site_name' value='imgconcept'></th>
  </tr>
  <tr>
    <td class='tg-031e'>Site Logo</td>
    <td class='tg-031e'><input type='text' name='site_logo' id='site_logo' value='/img/logo.png'></td>
  </tr>
  <tr>
    <td class='tg-031e'>Default Skin</td>
    <td class='tg-031e'><br><input type='text' name='default_skin' value='default'></td>
  </tr>
</table>
<br>
<br>
<font style='font-size: 16px; font-family: Arial;'><b>Registration Settings</b></font>
<br>
<br>
<table class='tg'>
  <tr>
    <th class='tg-031e'>Captcha</th>
    <th class='tg-031e'><input type='checkbox' value='Yes'></th>
  </tr>
  <tr>
    <td class='tg-031e'>Allow Any Characters In Username/Password</td>
    <td class='tg-031e'><input type='checkbox' checked='true'></td>
  </tr>
  <tr>
    <td class='tg-031e'>Enable Avatars</td>
    <td class='tg-031e'><input type='checkbox' checked='true'></td>
  </tr>
  <tr>
    <td class='tg-031e'>Avatars Path</td>
    <td class='tg-031e'><input type='text' value='/files/avatars'></td>
  </tr>
</table>
<br>
<br>
<font style='font-size: 16px; font-family: Arial;'><b>Rankings</b></font>
<br>
<br>
<table class='tg'>
  <tr>
    <th class='tg-031e'>Rank Name #1 (5 Images Uploaded)</th>
    <th class='tg-031e'><input name='rank_5imgs' type='text'></th>
  </tr>
  <tr>
    <td class='tg-031e'>Rank Name #2 (10 Images Uploaded)</td>
    <td class='tg-031e'><input name='rank_10imgs' type='text'></td>
  </tr>
  <tr>
    <td class='tg-031e'>Rank Name #3 (20 Images Uploaded)</td>
    <td class='tg-031e'><input name='rank_20imgs' type='text'></td>
  </tr>
  <tr>
    <td class='tg-031e'>Rank Name #4 (50 Images Uploaded)</td>
    <td class='tg-031e'><input name='rank_50imgs' type='text'></td>
  </tr>
  <tr>
    <td class='tg-031e'>Rank Name #5 (100 Images Uploaded)</td>
    <td class='tg-031e'><input name='rank_100imgs' type='text'></td>
  </tr>
  <tr>
    <td class='tg-031e'>Rank Name #6 (Donator)</td>
    <td class='tg-031e'><input name='rank_donator' type='text'></td>
  </tr>
  <tr>
    <td class='tg-031e'>Rank Name #7 (Administrator)</td>
    <td class='tg-031e'><input name='rank_admin' type='text'></td>
  </tr>
  <tr>
    <td class='tg-031e'>Rank Name #8 (Founder)</td>
    <td class='tg-031e'><input name='rank_founder' type='text'></td>
  </tr>
  <tr>
    <td class='tg-031e'>Rank Name #9 (Banned)</td>
    <td class='tg-031e'><input name='rank_banned' type='text'></td>
  </tr>
</table>
<br>
<br>
<font style='font-size: 16px; font-family: Arial;'><b>Admin Account Settings</b></font>
<br>
<br>
<table class='tg'>
  <tr>
    <th class='tg-031e'>Admin Username</th>
    <th class='tg-031e'><input name='admin_username' type='text'></th>
  </tr>
  <tr>
    <td class='tg-031e'>Admin Password</td>
    <td class='tg-031e'><input name='admin_password' type='text'></td>
  </tr>
  <tr>
    <td class='tg-031e'>Admin Email</td>
    <td class='tg-031e'><input name='admin_email' type='text'></td>
  </tr>
</table>
<br>
<input type='submit' name='install' value='Install' />

</center>
</div>
</form>";
}

?>
<?php
if (isset ($_POST['install']))
{
   if ( $_POST['install'] || $_GET['install'] )
   {
	   config();
	   database();
	   redirect();
   }
   else
   {
	   die("Failed to install. Please try again.");
   }
}
?>

<?php

function config()
{
	$file = '../include/config.php';
	$config_content = file_get_contents($file);
	$config_content .= "<?php\n";
	$config_content .= "###########################################\n";
	$config_content .= "# Config file for imgconcept\n";
	$config_content .= "# generated by imgconcept_install script\n";
	$config_content .= "###########################################\n";
	$config_content .= "\n";
	$config_content .= "# Is imgconcept installed? \n";
	$config_content .= "define('installed', true);\n";
	$config_content .= "\n";
	$config_content .= "# SQL Settings\n";
	$config_content .= "define('dbhost', '" . $_POST['dbhost'] . "');\n";
	$config_content .= "define('dbuser', '" . $_POST['dbuser'] . "');\n";
    $config_content .= "define('dbpass', '" . $_POST['dbpass'] . "');\n";
	$config_content .= "define('dbname', '" . $_POST['dbname'] . "');\n";
	$config_content .= "\n";
	$config_content .= "# Site Settings\n";
	$config_content .= "define('site_logo', '" . $_POST['site_logo'] . "');\n";
    $config_content .= "define('site_name', '" . $_POST['site_name'] . "');\n";
	$config_content .= "define('default_skin', '" . $_POST['default_skin'] . "');\n";
	$config_content .= "\n";
	$config_content .= "# Registration Settings\n";
	$config_content .= "define('captcha', false);\n";
	$config_content .= "define('anychar', false);\n";
    $config_content .= "define('avatars', false);\n";
	$config_content .= "define('avatars_dir', '');\n";
	$config_content .= "\n";
	$config_content .= "# Rankings\n";
	$config_content .= "define('rank_5imgs', '" . $_POST['rank_5imgs'] . "');\n";
	$config_content .= "define('rank_10imgs', '" . $_POST['rank_10imgs'] . "');\n";
	$config_content .= "define('rank_20imgs', '" . $_POST['rank_20imgs'] . "');\n";
	$config_content .= "define('rank_50imgs', '" . $_POST['rank_50imgs'] . "');\n";
	$config_content .= "define('rank_100imgs', '" . $_POST['rank_100imgs'] . "');\n";
	$config_content .= "# Special Ranks\n";
	$config_content .= "define('rank_donator', '" . $_POST['rank_donator'] . "');\n";
	$config_content .= "define('rank_admin', '" . $_POST['rank_admin'] . "');\n";
	$config_content .= "define('rank_founder', '" . $_POST['rank_founder'] . "');\n";
	$config_content .= "define('rank_banned', '" . $_POST['rank_banned'] . "');\n";
	$config_content .= "?>";
	
	file_put_contents($file, $config_content);
}

function database()
{
	$conn = new mysqli($_POST['dbhost'], $_POST['dbuser'], $_POST['dbpass'], $_POST['dbname']);
	if ($conn->connect_error) 
	{
		die("Could not connect and populate the database with data.\n" . $conn->connect_error);
	}
	
$sql = "INSERT INTO users (username, password, email) VALUES ('". $_POST['admin_username'] ."', '" . md5($_POST['admin_password']) . "', '" . $_POST['admin_email'] . "')";
    if ($conn->query($sql) === TRUE) 
	{
       
    } 
    else 
    {
       echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function redirect()
{
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=ok.php">';    
    exit;  
}
?>

