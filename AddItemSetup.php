<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Item Setup</title>
<link href="menu.css" rel="stylesheet" type="text/css" />
</head>

<body class="pgbkcolor">
<?php
error_reporting(E_ALL ^ E_NOTICE);
$self=$_SERVER['PHP_SELF'];
$errormsg="";
$form = $_POST['submit'];
include 'DbInfo.php';
?>
 <h1>Item Setup</h1>
<form id="AddItem" name="AddItem" method="post" action="<?php echo($self);?>">
 
  <table>
    <tr>
      <td class="heading"></td>
    </tr>
    <tr>
      <td width="195" class="fieldheading">&nbsp;</td>
      <td width="10">&nbsp;</td>
      <td width="337">&nbsp;</td>
    </tr>
    <tr>
      <td class="fieldheading">Product Sub Category</td>
      <td>&nbsp;</td>
      <td><select name="ProductSubID">
        <option value="">Please Select</option>
        <?php 
	

	$sql="SELECT * from productsubcategory";
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res))
	{
	echo "<option value=".$row['ProductSubCategoryID'].">" .$row['ProductSubCategory']."</option>";
	}
?>
      </select>
        <label class="required">*</label></td>
    </tr>
    <tr>
      <td class="fieldheading">Item Description</td>
      <td>&nbsp;</td>
      <td><input type="text" name="txtitemname" id="txtitemname" class="inputfield"/> 
        <label class="required">*</label></td>
    </tr>
    <tr>
      <td class="fieldheading">Author/Artist</td>
      <td>&nbsp;</td>
      <td><input type="text" name="txtauthor" id="txtauthor" class="inputfield"/>
        <label class="required">*</label></td>
    </tr>
    <tr>
      <td class="fieldheading">Title</td>
      <td>&nbsp;</td>
      <td><input type="text" name="txttitle" id="txttitle" class="inputfield"/>
        <label class="required">*</label></td>
    </tr>
    <tr>
      <td class="fieldheading">Publisher</td>
      <td>&nbsp;</td>
      <td><input type="text" name="txtpublisher" id="txtpublisher" class="inputfield"/>
        <label class="required">*</label></td>
    </tr>
    <tr>
      <td class="fieldheading">Volume</td>
      <td>&nbsp;</td>
      <td><input type="text" name="txtvolume" id="txtvolume" class="inputfield"/>
        <label class="required"></label></td>
    </tr>
    <tr>
      <td class="fieldheading">ISBN / SBIN</td>
      <td>&nbsp;</td>
      <td><input type="text" name="txtisbn" id="txtisbn" class="inputfield"/>
        <label class="required">*</label></td>
    </tr>
    <tr>
      <td class="fieldheading">Edition</td>
      <td>&nbsp;</td>
      <td><input type="text" name="txtedition" id="txtedition" class="inputfield"/>
        <label class="required"></label></td>
    </tr>
    <tr>
      <td class="fieldheading">Version</td>
      <td>&nbsp;</td>
      <td><input type="text" name="txtversion" id="txtversion" class="inputfield"/>
        <label class="required"></label></td>
    </tr>
    <tr>
      <td class="fieldheading">Year Publisher</td>
      <td>&nbsp;</td>
      <td><input type="text" name="txtyrpublisher" id="txtyrpublisher" class="inputfield"/>
        <label class="required">*</label></td>
    </tr>
    <tr>
      <td class="fieldheading">Quantity</td>
      <td>&nbsp;</td>
      <td><input type="text" name="txtqty" id="txtqty" class="inputfield"/>
        <label class="required">*</label></td>
    </tr>
    <tr>
      <td class="fieldheading">Unit Price</td>
      <td>&nbsp;</td>
      <td><input type="text" name="txtunitprice" id="txtunitprice" class="inputfield"/>
        <label class="required">*</label></td>
     
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input name="submit" type="submit" id="btnSave" value="Save" class="buttonstyle"/>
      <input name="cancel" type="button" id="btncancel" value="Cancel" class="buttonstyle" onclick="window.location = 'AddItemSetup.php'"/></td>
      <td>&nbsp;</td>
      <td><label class="required">* All fields Required</label></td>
    </tr>
<?php
$producttypeid=$_POST['ProductSubID'];
$itemname=$_POST['txtitemname'];
$author=$_POST['txtauthor'];
$title=$_POST['txttitle'];
$publisher=$_POST['txtpublisher'];
$volume=$_POST['txtvolume'];
$isbn=$_POST['txtisbn'];
$edition=$_POST['txtedition'];
$version=$_POST['txtversion'];
$yrpublisher=$_POST['txtyrpublisher'];
$qtyinstock=$_POST['txtqty'];
$unitprice=$_POST['txtunitprice'];


if ($edition == '') 
$edition= "NULL";
	 
if ($version == '') 
$version="NULL"; 

if ($volume == '')
$volume = "NULL";


if( isset($form) ) 
{

//If(($unitprice) and ($qtyinstock) and($itemname) and ($title) and ($publisher) and ($isbn)and ($yrpublisher))														 																								 
	//{
		$sql="INSERT INTO ITEMS (ProductSubCategoryID, ItemName,Author,Title,Publisher,Volume,ISBN,Edition,Version,YearPublished)
		VALUES(\"$producttypeid\",\"$itemname\",\"$author\",\"$title\",\"$publisher\",\"$volume\",\"$isbn\",\"$edition\",\"$version\",\"$yrpublisher\")";
	
		if (!mysql_query($sql))
  		{
  			die('Error: ' . mysql_error());
  		}
		$id = mysql_insert_id();
		
		$sql="INSERT INTO ITEM_STOCK(ItemID,QuantityInStock,UnitPrice) VALUES($id,\"$qtyinstock\",\"$unitprice\") ";
		if (!mysql_query($sql))
  		{
  			die('Error: ' . mysql_error());
  		}
		
		
		$errormsg="Item has been added successfully";
		$url = 'AddItemSetup.php';
		header("Location: $url"); 
		exit;

	//}
	//else
	//{
		//$errormsg="Please provide the required details";
	//}	
}

?>

  <tr>
  <td colspan="3" class="error"><?php echo $errormsg;?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>

</body>
</html>