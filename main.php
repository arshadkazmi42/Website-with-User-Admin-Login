<?
include_once 'include/processes.php';
$Login_Process = new Login_Process;
$Login_Process->check_status($_SERVER['SCRIPT_NAME']);
$myLogin = $Login_Process->show_voilation($_SESSION['info']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<meta name="TrafficVoilation" content="Traffic Voilation">

        <!-- Stylesheets -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
		
        		
		<title>WELCOME</title>
          
    </head>

	<body bgcolor="black">

<form>
	

		
		<span style="text-align:center;position:absolute;top:2%;left:83px;background-color:#a6e348;height:30px;width:1200px;color:black" class="heading">&nbsp;Welcome <? echo $_SESSION['first_name']; ?></span>
		<div class="red"><?php echo $_GET['alert']; ?></div>
		
<div style="text-align:center;position:absolute;top:8%;left:83px;border-style:solid;border-width:7px 7px 7px 7px;border-color:#a6e348;padding:2px;width:1181px;height:380px;"><br />

<?php 
		if($_SESSION['user_level'] >= 5) {
			echo '<span style="position:relative;left:210px;top:-20px;"><a class="stext" href="admin/admin_center.php">-> Admin Center</a></span><br />'; }
	?>

<span class="text"><u>Username:</u></span>
<span class="text"><? echo $_SESSION['username']; ?></span><br /><br />

<span class="text"><u>Email:</u></span>
<span class="text"><? echo $_SESSION['email_address']; ?></span><br /><br />

<span class="text"><u>License Plate No:</u></span>
<span class="text"><? echo $_SESSION['info']; ?></span><br /><br />

<span class="text"><u>Name:</u></span>
<span class="text"><? echo $_SESSION['first_name']; ?> <? echo $_SESSION['last_name']; ?></span><br /><br />

<span class="text"><u>Phone Number:</u></span>
<span class="text"><? echo $_SESSION['phone']; ?></span><br /><br />



<br />
<div>
<a class="stext" href="edituser.php">My Account</a> <span class="stext">|</span> <a class="stext" href="editpassword.php">My Password</a> 
 <span class="stext">|</span> <a class="stext" href="include/processes.php?log_out=true">Log out</a></div>
</form>
</div>
<br />
<div align="center">
 <a name="suspended" id="suspended"></a>
 <span style="position:absolute;top:490px;left:83px;background-color:#a6e348;height:30px;width:1200px;color:black" class="heading">&nbsp;Voilations</span>
<?	$myLogin  ?>
</div>