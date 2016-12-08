<html>
<head>
<link href="menu.css" rel="stylesheet" type="text/css" />

</head>
<body class="pgbkcolor">
<?php

$conn=@mysql_connect("localhost", "root", "");
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("test", $conn);
# get the ID from Coursename tables

$firstname=$_POST['txtfirstname'];
$studentid=$_POST['txtstudentid'];
$lastname=$_POST['txtlastname'];
$term=$_POST['TermID'];

	
# Filter view according to the criteria
# Selected Coursename
/*if ($coursename!="" )
{
$sql="Select CourseName from coursenames where CourseNameID= '$coursename'";

 $result = mysql_query ($sql);
    $row = mysql_fetch_array($result);
    $coursename = $row['CourseName'];

$sql="Select StudentID,FirstName,LastName,CourseName,TermMon, TermYr,Units from view_studentunitdetails where CourseName Like '%$coursename%' ";
}
*/# Selected FirstName
if ($firstname!="" )
{
	$sql="Select StudentID,FirstName,LastName,MonthName(Term) as TermMon, Year(Term)as TermYr,Mitigation,Advices from view_academiceadvices where FirstName Like '%$firstname%'";
}
# Selected StudentID
else if ($studentid!="" )
{
	$sql="Select StudentID,FirstName,LastName,MonthName(Term) as TermMon, Year(Term)as TermYr,Mitigation,Advices from view_academiceadvices  where StudentID ='$studentid'";
}
# Selected Lastname
else if ($lastname!="" )

{
	$sql="Select StudentID,FirstName,LastName,MonthName(Term) as TermMon, Year(Term)as TermYr,Mitigation,Advices from view_academiceadvices where LastName ='$lastname'";
}

# Selected Termbefore
else if ($term!="" )
{
	$sql="Select Term from termintakes where TermID ='$term'";
	$result = mysql_query ($sql);
    $row = mysql_fetch_array($result);
    $term = $row['Term'];
	
	#$echo $termmon.$termyr;
	$sql="Select StudentID,FirstName,LastName,MonthName(Term) as TermMon, Year(Term)as TermYr,Mitigation,Advices from view_academiceadvices where Term ='$term' ORDER BY Term";
}

	$res = mysql_query($sql) or die($sql."<br/><br/>".mysql_error());
	if ($res!=0)
	{
		echo '<table cellpadding="0" cellspacing="0" border="1">';
 		echo'<BR><BR>';
		echo '<tr>';
   		echo '<td class="fieldheading">Student ID</td>';
  		echo '<td class="fieldheading">First Name</td>';
  		echo '<td class="fieldheading">Last Name</td>';
  		echo '<td class="fieldheading">Term Year</td>';
  		echo '<td class="fieldheading">Term Month</td>';
		echo '<td class="fieldheading">Mitigation</td>';
		echo '<td class="fieldheading">Advices</td>';
		echo '</td>';

		while ($row = mysql_fetch_array($res))
		{
			echo '<tr>';
			echo '<td class="fielddisplay">'.$row['StudentID'] . '</td>';
			echo '<td width=100 class="fielddisplay">' .$row['FirstName']. '</td>';
			echo '<td width=100 class="fielddisplay">' .$row['LastName']. '</td>';
			echo '<td width=100 class="fielddisplay">'.$row['TermMon'].'</td>';
			echo '<td width=100 class="fielddisplay">'.$row['TermYr'].'</td>';
			echo '<td width=200 class="fielddisplay">' .$row['Mitigation']. '</td>';
			echo '<td width=500 class="fielddisplay">'.$row['Advices'].'</td>';

			echo '</tr>';
		}
	echo '</table>'	;
	}
	?>
</body>

</html>
