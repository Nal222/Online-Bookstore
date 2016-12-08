<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product Sub Category Setup</title>
<link href="menu.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">

function doValidateSubCategory(){
	var error = false;
		var myfield1 = document.getElementById("txtproductsubcategory");
		if(myfield1.value.length==0)
		{
			document.getElementById("hiddentr").style.display = '';
    		document.getElementById("hiddentr").innerHTML = "Please enter product subcategory";
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
$productsubcat=$_POST['txtproductsubcategory'];
$producttypeid=$_POST['ProductTypeID'];

#require_once('db_connect.php');
$conn=@mysql_connect("localhost", "root", "");
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }
$rs=@mysql_select_db("onlinebook", $conn)
?>

<form id="login" name="login" method="post" action="<?php echo($self);?>" onSubmit="return doValidateSubCategory()">
  <table class="tabledata">
    <tr>
      <td colspan="3" class="heading">Product Sub Category Setup</td>
    </tr>
    <tr>
      <td class="fieldheading">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="195" class="fieldheading">Product Type</td>
      <td width="10">&nbsp;</td>
      <td width="337"><select name="ProductTypeID">
        <option value="">Please Select</option>
        <?php  
	$sql="SELECT * from producttype";
	$res = mysql_query($sql);
	while ($row = mysql_fetch_array($res))
	{
	echo "<option value=".$row['ProductTypeID'].">" .$row['ProductType']."</option>";
	}
?>
      </select> 
          <label class="required">*</label></td>
    </tr>
    
    <tr>
      <td class="fieldheading">Product Sub Category</td>
      <td>&nbsp;</td>
      <td><input type="text" name="txtproductsubcategory" id="txtproductsubcategory" class="inputfield"/> 
        <label class="required">*</label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td id="hiddentr">&nbsp;</td>
    </tr> <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td class="error"><input name="submit" type="submit" id="btnSave" value="Save" class="buttonstyle"/>        <input name="cancel" type="button" id="btncancel" value="Cancel" class="buttonstyle" onclick="window.location = 'ProductSubCatSetup.php'"/></td>
    </tr>
  
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><label class="required">* All fields Required</label></td>
    </tr>
<?php
if( isset($form) ) 
{
		mysql_select_db("onlinebook", $conn);

	if( isset($productsubcat) && isset($producttypeid) && $productsubcat !== '' && $producttypeid !== '' ) 
	{
		$sql="INSERT INTO productsubcategory (ProductSubCategory, ProductTypeID)VALUES(\"$productsubcat\",\"$producttypeid\" )";
	
		if (!mysql_query($sql,$conn))
  		{
  			die('Error: ' . mysql_error());
  		}
		$errormsg="Product Sub Category has been added successfully";

	}
	else
	{
		$errormsg="Please provide the required details";
	}	
}
mysql_close($conn);

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