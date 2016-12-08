<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product Type Setup</title>
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

$id=$_GET['id'];

$query1 = mysql_query("Select I.ItemID, I.ItemName, ITS.QuantityInStock,ITS.UnitPrice, SUM(ITS.UnitPrice*ITS.QuantityInStock) as TotalPrice from items I, item_stock ITS where I.ItemID = ITS.ItemID and I.ItemID = '$id' ");

echo '<table cellpadding="0" cellspacing="0" border="">';
 		echo'<BR><BR>';
   		echo '<th class="fieldheadingdisplay">Qty</th>';
  		echo '<th class="fieldheadingdisplay">Item #</th>';
		echo '<th class="fieldheadingdisplay">Item Desccription</th>';
		echo '<th class="fieldheadingdisplay">Price</th>';
		echo '<th class="fieldheadingdisplay">Sub-Total</th>';
		echo '<th class="fieldheadingdisplay">Modify</th>';
		echo '<th class="fieldheadingdisplay">Remove</th>';
		
				
	while($row=mysql_fetch_array($query1))
	{
		echo '<tr>';
		echo '<td class="fielddisplay">'.$row['QuantityInStock'] . '</td>';
		echo '<td class="fielddisplay">'.$row['ItemID'] . '</td>';
		echo '<td class="fielddisplay">'.$row['ItemName'] . '</td>';
		echo '<td class="fielddisplay">'.$row['UnitPrice'] . '</td>';
		echo '<td class="fielddisplay">'.$row['TotalPrice'] . '</td>';
		echo "<td><a href='EditShoppingList.php?id=".$row['ItemID']."'>Edit</a></td>";
		echo "<td><a href='RemoveBasketItem.php?remove =".$row['ItemID']."'>Delete</a></td>";
		echo '</tr>';
	}

echo '<tr>';
echo '<td class="fieldheadingdisplay">Total Order (Amount)</td>';
echo '</tr>';

?>
</table>
</body>
</html>