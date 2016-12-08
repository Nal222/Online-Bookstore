<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Item</title>
<link href="menu.css" rel="stylesheet" type="text/css" />
</head>

<body class="pgbkcolor">
<h1>Item Setup </h1>
<?php
error_reporting(E_ALL ^ E_NOTICE);
$self=$_SERVER['PHP_SELF'];
$errormsg="";
$form = $_POST['submit'];

include 'DbInfo.php';
$unitprice=$_POST['txtunitprice'];
$qty=$_POST['txtqty'];
$itemtitle=$_POST['txttitle'];
$itemid=$_POST['txtid'];
$id=$_GET['id'];

?>

<form id="itemdetails" name="itemdetails" method="post" action="<?php echo($self);?>">
  
   <?php
	$sql="Select I.Title, ITS.QuantityInStock,I.ItemID, ITS.UnitPrice FROM items I, item_stock ITS WHERE I.ItemID = ITS.ItemID and I.ItemID = $id";
	$res = mysql_query($sql);
	if ($res==FALSE) { die (mysql_error());}
	$row = mysql_fetch_array($res);
	?>
   
  <table class="tabledata">
    <tr>
          <td colspan="3" class="heading"></td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="195" class="fieldheading"><label>Item Title</label></td>
      <td width="10">&nbsp;</td>
      <td width="337"><input name="txttitle" type="text" id="txttitle" class="inputfield" value="<?php echo $row['Title']; ?>"/>
         <label class="required" >*</label></td>
    </tr>
    <tr>
      <td class="fieldheading">Quantity</td>
      <td>&nbsp;</td>
      <td><input type="text" name="txtqty" id="txtqty" class="inputfield" value="<?php echo $row['QuantityInStock']; ?>"/>
        <label class="required">*</label></td>
    </tr>
    <tr>
      <td class="fieldheading">Unit Price</td>
      <td>&nbsp;</td>
      <td><input type="text" name="txtunitprice" id="txtunitprice" class="inputfield" value="<?php echo $row['UnitPrice']; ?>"/>
        <label class="required">*</label></td>
 
<input name="txtid" type="hidden" id="txtid" class="inputfield" value="<?php echo $row['ItemID']; ?>"/>


    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input name="submit" type= "submit" id="submit" value="Update" class="buttonstyle"/>
      <input name="cancel" type="button" id="cancel" value="Cancel" class="buttonstyle" onclick="window.location = 'ListItem.php'"/></td>
    </tr>
    
    
   
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
<td class="required">* All fields Required</td>    </tr>
    <tr>
<td colspan="3"class="error"><?php echo $errormsg;?></td>    </tr>
  </table>
</form>
<?php

if( isset($form) ) 
{
	$query3=mysql_query("Update items SET Title = '$itemtitle' where ItemID = '$itemid'");
	$query4=mysql_query("Update item_stock SET QuantityInStock = $qty WHERE ItemID = $itemid");
		
	if ($query4==FALSE) { die (mysql_error());}	
	if($query4)
	{
	header('location:ListItem.php');
	}
}



?>
</body>
</html>