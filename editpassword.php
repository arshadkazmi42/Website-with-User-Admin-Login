<?
include_once 'include/processes.php';
$Login_Process = new Login_Process;
$Login_Process->check_status($_SERVER['SCRIPT_NAME']);
$Edit = $Login_Process->edit_password($_POST, $_POST['process']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<meta name="TrafficVoilation" content="Traffic Voilation">

        <!-- Stylesheets -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        		
		<title>CHANGE PASSWORD</title>
          
    </head>

	<body bgcolor="black">

	<span style="position:absolute;top:30%;left:43%;" class="heading">UPDATE PASSWORD</span>	<br />	<br />
		
	<div style="text-align:center;position:absolute;top:35%;left:35%;border-style:solid;border-width:7px 7px 7px 7px;border-color:#a6e348;padding:2px;width:400px;height:180px;"><br />
	
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

			<span style="position:relative;left:120px;top:-20px;"><a class="stext" href="main.php">-> Welcome Centers</a></span><br />
			<div class="red"><?php echo $Edit; ?></div>

			<span class="text">Current Pass:</span>&nbsp;
			<input name="pass" type="password" class="submit" size='20' ><br />
			
			<span class="text">New Pass:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input name="pass1" type="password" class="submit" size='20' ><br />

			<span class="text">Confirm Pass:</span>
			<input name="pass2" type="password" class="submit" size='20' ><br />

			<input name="username" type="hidden" value="<? echo $_SESSION['username']; ?>" size="50" /><br />
				
			<input style="position:relative;left:20px;" class="button" type="submit" name="process" id="process" value="Update Password">&nbsp;&nbsp;&nbsp;
		
		</form>
	
	