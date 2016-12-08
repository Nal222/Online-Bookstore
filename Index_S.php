<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
<title>Homepage::Staff System</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head> 
<?php
session_start();
$usertype = $_SESSION['usertype'];
$usertypeid=$_SESSION['usertypeid'] 
#$usertype=trim($usertype);

?>
<frameset rows="15%,85%">
<frame src="TopFrame.php" name="TopFrame" frameborder="0">
<frameset rows="11%,*" cols="89%" bordercolor="#D6D6D6">
<frame src="HMenu.php" name="MiddelFrame" scrolling="no" frameborder="0">
<?php if ($usertype=='REG')
	{
echo '<frame src="StudentDetails.php" name="MainFrame" scrolling="auto" frameborder="0"></frameset>';
exit();
	}
	if ($usertype=='MIT')
	{
echo '<frame src="SearchStudent.php" name="MainFrame" scrolling="no" frameborder="0"></frameset>';
exit();
	}
	
	if ($usertype=='FAC' OR $usertype=='STAFF')
	{
echo '<frame src="SearchStudentUnits.php" name="MainFrame" scrolling="no" frameborder="0"></frameset>';
exit();
	}

	
	
?>
<noframes></noframes>
</html>