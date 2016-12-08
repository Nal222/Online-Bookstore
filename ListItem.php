<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product Type Setup</title>
<link href="menu.css" rel="stylesheet" type="text/css" />
</head>

<body class="pgbkcolor">
<h1>Item Details </h1>
<?php
error_reporting(E_ALL ^ E_NOTICE);
$self=$_SERVER['PHP_SELF'];
$errormsg="";
$form = $_POST['submit'];
include 'DbInfo.php';

//RETRIVE ITEMS 
$query1 = mysql_query("SELECT P.ProductType, SP.ProductSubCategory, I.Title, I.ItemID, I.ISBN, ITS.UnitPrice, ITS.QuantityInStock
FROM productsubcategory SP, producttype P, items I, item_stock ITS
WHERE P.ProductTypeID = SP.ProductTypeID
AND SP.ProductSubCategoryID = I.ProductSubCategoryID
AND I.ItemID = ITS.ItemID");

echo '<table cellpadding="0" cellspacing="0" border="">';
 		echo'<BR><BR>';
   		echo '<th class="fieldheadingdisplay">ProductType</th>';
  		echo '<th class="fieldheadingdisplay">Product Sub Category</th>';
		echo '<th class="fieldheadingdisplay">Title</th>';
		echo '<th class="fieldheadingdisplay">ISBN</th>';
		echo '<th class="fieldheadingdisplay">Quantity in Stock</th>';
		echo '<th class="fieldheadingdisplay">Unit Price</th>';
		echo '<th class="fieldheadingdisplay">Modify</th>';
		
while($row=mysql_fetch_array($query1))
{
	echo '<tr>';
	echo '<td class="fielddisplay">'.$row['ProductType'] . '</td>';
	echo '<td class="fielddisplay">'.$row['ProductSubCategory'] . '</td>';
	echo '<td class="fielddisplay">'.$row['Title'] . '</td>';
	echo '<td class="fielddisplay">'.$row['ISBN'] . '</td>';
	echo '<td class="fielddisplay">'.$row['QuantityInStock'] . '</td>';
	echo '<td class="fielddisplay">'.$row['UnitPrice'] . '</td>';
	echo "<td ><a href='EditItem.php?id=".$row['ItemID']."'>Edit</a></td>";
	echo '</tr>';
}
?>
</table>
</body>
</html>