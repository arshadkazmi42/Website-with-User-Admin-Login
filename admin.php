<?php
include_once 'include/processes.php';
$Login_Process = new Login_Process;
$Login_Process->check_login($_GET['page']);
$Login = $Login_Process->log_in_admin($_POST['user'], $_POST['pass'], $_POST['remember'], $_POST['page'], $_POST['submit']); 
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
        <meta name="TrafficVoilation" content="Traffic Voilation">
        
        <!-- Stylesheets -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        		
		<title>ADMIN - LOG!N</title>
          
    </head>
	<body bgcolor="black">
	
		<span style="position:absolute;top:43%;left:40%;" class="heading">CHENNAI TRAFFIC VOILATION</span>	<br />	<br />
		
		<div style="text-align:center;position:absolute;top:50%;left:35%;border-style:solid;border-width:7px 7px 7px 7px;border-color:#a6e348;padding:2px;width:400px;height:230px;"><br />
			
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			
				<div class="red"><?php echo $Login; ?></div>
				
				<span class="text">Username </span> 
				<input name="user" type="text" id="user" class="submit" size='20' ><br />
				
				<span class="text">Password </span> &nbsp;
				<input name="pass" type="password" id="pass" value="" class="submit" size='20'><br />
				
				<span style="position:relative;left:67px;top:10px;" class="stext">Remeber me</span>
				<input style="position:relative;left:67px;top:12px;" class="checkbox" name="remember" type="checkbox" value="true"><br /><br />
				
				<input name="page" type="hidden" value="<? echo $_GET['page']; ?>" />
				
				<input style="position:relative;left:100px;" class="button" type="submit" name="submit" value="Login">&nbsp;&nbsp;&nbsp;
				<!--<input style="position:relative;left:60px;" class="button" type="reset" value="Reset">--><br />
				
				<span style="position:relative;top:5px;left:65px;">
				
					<a href="forgotpassword.php" class="stext">Reset Password</a>
					
										
				</span>
				
			</form>
			
		</div>
				
		
	</body>
</html>