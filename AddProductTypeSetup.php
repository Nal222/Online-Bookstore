<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product Type Setup</title>
<link href="menu.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">

function doValidateProductType(){
	
var error = false;
		var myfield1 = document.getElementById("txtproducttype");
		if(myfield1.value.length==0)
		{
			document.getElementById("hiddentr").style.display = '';
    		document.getElementById("hiddentr").innerHTML = "Please enter product type";
			var oldHTML = document.getElementById('hiddentr').innerHTML;
			var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
			document.getElementById('hiddentr').innerHTML = newHTML;
			error = true;
		}
		else{
			var alphabetExpression = /^[a-zA-Z]+$/;
			if(myfield1.value.match(alphabetExpression)){
				
				
			}
			else{
				document.getElementById("hiddentr").style.display = '';
				document.getElementById("hiddentr").innerHTML = "Please enter letters only";
				var oldHTML = document.getElementById('hiddentr').innerHTML;
				var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
				document.getElementById('hiddentr').innerHTML = newHTML;
				error = true;
			}
		}
		if(error==true){
			return false;
		}
		else if(error==false){
			return true;
		}
	
	



}
</script>

</head>

<body class="pgbkcolor">

<?php
error_reporting(E_ALL ^ E_NOTICE);
$self=$_SERVER['PHP_SELF'];
$errormsg="";
$form = $_POST['submit'];

$conn=@mysql_connect("localhost", "root", "")or die("Err:Conn");
#include "db_connect.php";
$rs=@mysql_select_db("onlinebook", $conn) or die("Err:Db");

?>
<form id="producttype" name="producttype" method="post" action="<?php echo($self);?> onSubmit="return doValidateProductType()">
  <table class="tabledata">
    <tr>
          <td colspan="3" class="heading">Product Type Setup</td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="195" class="fieldheading"><label>Product Type</label></td>
      <td width="10">&nbsp;</td>
      <td width="337"><input name="txtproducttype" type="text" id="txtproducttype" maxlength="100" class="inputfield"/>
         <label class="required" >*</label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td id="hiddentr">&nbsp;</td>
    </tr>
  
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input name="submit" type= "submit" id="submit" value="Save" class="buttonstyle"/>
      <input name="cancel" type="button" id="cancel" value="Cancel" class="buttonstyle" onclick="window.location = 'ProductTypeSetup.php'"/></td>
    </tr>
    
    <?php

$producttype=$_POST['txtproducttype'];

if( isset($form) ) 
{
	if(isset($producttype) &&  $producttype !== '') 
	{
	$sql="INSERT INTO producttype (ProductType)VALUES(\"$producttype\")";
		if (!mysql_query($sql,$conn))
  		{
  		die('Error: ' . mysql_error());
  		}
		$errormsg="Product Type has been added successfully";
	}
	else
	{
	$errormsg="Please provide the required details";

	}
}
mysql_close($conn);

?>
    
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
<td class="required">* All fields Required</td>    </tr>
    <tr>
<td colspan="3"class="error"><?php echo $errormsg;?></td>    </tr>
  </table>
</form>
</body>
</html>