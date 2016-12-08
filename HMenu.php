<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HMenu</title>
<link href="menu.css" rel="stylesheet" type="text/css" />

</head>

<body bgcolor="#CC0000">
<?php
session_start();
$usertype = $_SESSION['usertype'];
$usertypeid=$_SESSION['usertypeid'] 
#$usertype=trim($usertype);

?>

  	
	<?php 
	
	echo '<table width="400" height="35">';
  echo '<tr>';
	if ($usertype=='MIT')
	{
    echo '<td width=500 class="Menuitem"><a href="SearchStudent.php" target="mainFrame" class="hyperlink">Add Academic Advices</a></td>';
		exit();
	}
	else if ($usertype=='REG')
	{
    echo '<td width=500 class="Menuitem" ><a href="StudentDetails.php" target="mainFrame" class="hyperlink">Student Registration</a></td>';
	exit();
	}
	

    else if (($usertype=='STAFF') OR ($usertype=='FAC'))
	{
    echo '<td width=1000 class="Menuitem"><a href="SearchStudentUnits.php" target="mainFrame" class="hyperlink">Student_Units_Grades</a></td>';
    echo '<td width=1200 class="Menuitem"><a href="ReportStudAcademic.php" target="mainFrame" class="hyperlink">Rep:Academic_issues</a></td>';
    echo '<td width=1200 class="Menuitem"><a href="ReportTermwise.php" target="mainFrame" class="hyperlink">Rep:Student_Termwise</a></td>';
    echo '<td width=1000 class="Menuitem"><a href="ReportUnitwise.php" target="mainFrame" class="hyperlink">Rep:Students_Courses</a></td>';
	exit();
	}
	echo '</tr>';
	echo '</table>';
	?>
    
    
  
</body>
</html>
