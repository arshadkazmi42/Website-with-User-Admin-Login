<?
include_once '../include/admin_processes.php';
$Admin_Process = new Admin_Process;
$Admin_Process->check_status($_SERVER['SCRIPT_NAME']);
$New = $Admin_Process->Register($_POST, $_POST['add_user']);
$myNew = $Admin_Process->Voilation($_POST, $_POST['add_voilation']);
$Suspend = $Admin_Process->suspend_user($_POST, $_POST['Suspend']);
$Change = $Admin_Process->update_user($_POST, $_POST['Change']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<meta name="TrafficVoilation" content="Traffic Voilation">

        <!-- Stylesheets -->
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        		
		<title>ADMIN CENTER - USER STATUS</title>
          
    </head>

	<body bgcolor="black">

	<span class="text" style="position:relative;left:530px;">Admin Center: <? echo $_SESSION['username']; ?> (<a class="stext" href="../include/processes.php?log_out=true">Log out</a>)<br />
	</span>

	<div align="center"><a class="stext" href="../main.php">Return to Main</a></div>
	<div class="red" align="center">
	<?php  echo $_GET['alert']; ?></div>

	<br />

	<div style="background-color:#a6e348;width:500px;height:50px;text-align:center;position:relative;left:430px;"><a class="text" style="color:black;position:relative;top:10px;" href="admin_center.php">Add Voilation</a>&nbsp;<span class="text" style="color:black;position:relative;top:10px;">|</span>&nbsp;<a style="color:black;position:relative;top:10px;" class="text" href="change_suspend.php">Change User Status</a>&nbsp;<span style="color:black;position:relative;top:10px;" class="text">|</span>&nbsp;<a style="color:black;position:relative;top:10px;" class="text" href="user_details.php">View Users</a></div><br />
	
<div align="center" style="text-align:center;position:absolute;top:150px;left:75px;border-style:solid;border-width:7px 7px 7px 7px;border-color:#a6e348;padding:2px;width:580px;height:200px;"><br />
<a name="change" id="change"></a>
<form action="<?php echo $_SERVER['PHP_SELF']."#change"; ?>" method="post">

<span class="text"> <u><strong>Change User Level</u></strong></span><br />
<div class="red"><?php echo $Change; ?> </div>
<span class="text">Username Name:</span>
<?php $Admin_Process->list_users() ?><br><br>
<span class="text">Username Level:</span>

<select name="level" class="submit" id="level">
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                </select>
								
								<br /><br />


<input name="Change" type="submit" class="button" value="Update" />


</form>
</div>
<br>
<div align="center" style="text-align:center;position:absolute;top:150px;left:680px;border-style:solid;border-width:7px 7px 7px 7px;border-color:#a6e348;padding:2px;width:580px;height:200px;"><br />
<a name="suspend" id="suspend"></a>
<form action="<?php echo $_SERVER['PHP_SELF']."#suspend"; ?>" method="post">
<span class="text"> <strong><u>Suspend User</u></strong></span><br />
<div class="red"><?php echo $Suspend; ?> </div>
<span class="text">Username Name:</span>
<?php $Admin_Process->list_users() ?><br><br>

<span class="text">Status</span>
<select name="level" class="submit" id="level">
                                  <option value="suspended">Suspended</option>
                                  <option value="live">Live</option>
                                </select>
<br /><br />


<input name="Suspend" type="submit" class="button" value="Update" />


</form>
</div>