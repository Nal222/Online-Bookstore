<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Item</title>
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

if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['submit']))
{
$producttype=$_POST['txtproductsubcat'];
$query3=mysql_query("update productsubcategory set ProductSubCategory='$producttype' where ProductSubCategoryID='$id'");

if($query3)
{
	header('location:ListProductTypeSetup.php');
}
}
$query1=mysql_query("Select ProductSubCategory from productsubcategory where ProductSubCategoryID='$id'");
$query2=mysql_fetch_array($query1);

?>
<form id="producttype" name="producttype" method="post" action="">
  <table class="tabledata">
    <tr>
          <td colspan="3" class="heading">Product Sub Category Setup</td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="195" class="fieldheading"><label>Product Sub Category</label></td>
      <td width="10">&nbsp;</td>
      <td width="337"><input name="txtproductsubcat" type="text" id="txtproductsubcat" class="inputfield" value="<?php echo $query2['ProductSubCategory']; ?>"/>
         <label class="required" >*</label></td>
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
      <input name="cancel" type="button" id="cancel" value="Cancel" class="buttonstyle" onclick="window.location = 'ListProductTypeSetup.php'"/></td>
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
}
?>
</body>
</html>