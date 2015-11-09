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
        		
		<title>ADMIN CENTER - USER DETAILS</title>
          
    </head>

	<body bgcolor="black">

	<span class="text" style="position:relative;left:530px;">Admin Center: <? echo $_SESSION['username']; ?> (<a class="stext" href="../include/processes.php?log_out=true">Log out</a>)<br />
	</span>

	<div align="center"><a class="stext" href="../main.php">Return to Main</a></div>
	<div class="red" align="center">
	<?php  echo $_GET['alert']; ?></div>

	<br />
	
	<div style="background-color:#a6e348;width:500px;height:50px;text-align:center;position:relative;left:430px;"><a class="text" style="color:black;position:relative;top:10px;" href="admin_center.php">Add Voilation</a>&nbsp;<span class="text" style="color:black;position:relative;top:10px;">|</span>&nbsp;<a style="color:black;position:relative;top:10px;" class="text" href="change_suspend.php">Change User Status</a>&nbsp;<span style="color:black;position:relative;top:10px;" class="text">|</span>&nbsp;<a style="color:black;position:relative;top:10px;" class="text" href="user_details.php">View Users</a></div><br />


<div align="center">
		<span class="text">
			<a name="active" class="text" id="active"></a>		Active Users </span>
			<?	$Admin_Process->active_users_table()  ?>
	</div><br>

	<div align="center">
	<span class="text"> <a name="suspended" class="text" id="suspended"></a> Suspended Users </span>
		<?	$Admin_Process->suspended_users_table()  ?>
	</div><br>

	<?php 
		if(Admin_Approvial == true) {
		echo '
			<div align="center">
				<span class="text"> <a name="pending" class="text" id="pending"></a> Users Awating Approval </span>';
				$Admin_Process->pending_users_table();
		echo '</div><br>';
		}
	?>