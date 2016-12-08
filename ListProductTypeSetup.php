<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Display Products</title>
<link href="menu.css" rel="stylesheet" type="text/css" />
</head>

<body class="pgbkcolor">

<?php
error_reporting(E_ALL ^ E_NOTICE);
$self=$_SERVER['PHP_SELF'];
$errormsg="";
$form = $_POST['submit'];

$conn=@mysql_connect("localhost", "root", "")or die("Err:Conn");
$rs=@mysql_select_db("onlinebook", $conn) or die("Err:Db");

$query1 = mysql_query("Select * from producttype");

echo '<table cellpadding="0" cellspacing="0" border="">';
 		echo'<BR><BR>';
   		echo '<th class="fieldheadingdisplay">ProductType ID</th>';
  		echo '<th class="fieldheadingdisplay">Product Type</th>';
  		echo '<th class="fieldheadingdisplay">Modify</th>';
		
while($query2=mysql_fetch_array($query1))
{
	echo '<tr>';
	echo '<td class="fielddisplay">'.$query2['ProductTypeID'] . '</td>';
	echo '<td class="fielddisplay">'.$query2['ProductType'] . '</td>';
	
	echo "<td><a href='EditProductTypeSetup.php?id=".$query2['ProductTypeID']."'>Edit</a></td>";
	echo '</tr>';
}

$query1 = mysql_query("SELECT P.ProductType, SP.ProductSubCategoryID, SP.ProductSubCategory FROM productsubcategory SP,producttype P where P.ProductTypeID = SP.ProductTypeID");

echo '<table cellpadding="0" cellspacing="0" border="">';
 		echo'<BR><BR>';
   		echo '<th class="fieldheadingdisplay">ProductType</th>';
  		echo '<th class="fieldheadingdisplay">Product Sub Category</th>';
  		echo '<th class="fieldheadingdisplay">Modify</th>';
		
while($query2=mysql_fetch_array($query1))
{
	echo '<tr>';
	echo '<td class="fielddisplay">'.$query2['ProductType'] . '</td>';
	echo '<td class="fielddisplay">'.$query2['ProductSubCategory'] . '</td>';
	
	echo "<td><a href='EditProductSubCatSetup.php?id=".$query2['ProductSubCategoryID']."'>Edit</a></td>";
	echo '</tr>';
}
?>
</table>
</body>
</html>