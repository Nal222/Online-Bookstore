<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Top Frame</title>
<link href="menu.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#990000">
<?php
session_start();

$conn=@mysql_connect("localhost", "root", "");

if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }
$rs=@mysql_select_db("onlinebook", $conn);

//$login = $_SESSION['userid'];
//$usertype = $_SESSION['usertype'];
//$custid = $_SESSION['custid'];


/*if ($custid!="")
{
	$sql="Select FirstName, LastName from customer where CustomerID=$custid";
	$result = mysql_query ($sql);
    $row = mysql_fetch_array($result);
	$firstname=$row['FirstName'];
	$lastname=$row['LastName'];
	$name =  $firstname." ".$lastname ;
}
else
{
	$name =  " ";
	$usertype = "";
	 <td width="450" class="fieldheading"><?php echo "Welcome  ".$usertype?>:&nbsp;<?php echo $name;?></td>
}*/

?>
<table width="1315" border="0">
  <tr>
    <td colspan="2" class="heading">Online Book Store </td>
    <td width="89"class="fieldheading" ><a href="CustomerLogin.php" target="_parent">Log In</a></td>
    <td width="89"class="fieldheading" ><a href="logout.php" target="_parent">Logout</a></td>
    
  </tr>
  <tr>
   
    <td width="762">&nbsp;</td>
    <td></td>
  </tr>
</table>

</body>
</html>
