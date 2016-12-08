<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Item Setup</title>
<link href="menu.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function doValidateItem(){
	var error = false;
		var myfield1 = document.getElementById("txtitemname");
		if(myfield1.value.length==0)
		{
			document.getElementById("hiddentr1").style.display = '';
    		document.getElementById("hiddentr1").innerHTML = "Enter item description";
			var oldHTML = document.getElementById('hiddentr1').innerHTML;
			var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
			document.getElementById('hiddentr1').innerHTML = newHTML;
			error = true;
		}
		else if(myfield1.value.length!=0){
			document.getElementById("hiddentr1").style.display = '';
		}
		else{
			var alphabetNumericExpression = /^[a-zA-Z0-9]+$/;
			if(myfield1.value.match(alphabetNumericExpression)){
				
				
			}
			else{
				document.getElementById("hiddentr1").style.display = '';
				document.getElementById("hiddentr1").innerHTML = "Enter letters and numbers only";
				var oldHTML = document.getElementById('hiddentr1').innerHTML;
				var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
				document.getElementById('hiddentr1').innerHTML = newHTML;
				error = true;
			}
		}
		var myfield2 = document.getElementById("txtauthor");
		if(myfield2.value.length==0)
		{
			document.getElementById("hiddentr2").style.display = '';
    		document.getElementById("hiddentr2").innerHTML = "Enter Author/Artist";
			var oldHTML = document.getElementById('hiddentr2').innerHTML;
			var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
			document.getElementById('hiddentr2').innerHTML = newHTML;
			error = true;
		}
		else{
			var alphabetExpression = /^[a-zA-Z]+$/;
			if(myfield2.value.match(alphabetExpression)){
				
				
			}
			else{
				document.getElementById("hiddentr2").style.display = '';
				document.getElementById("hiddentr2").innerHTML = "Enter letters only";
				var oldHTML = document.getElementById('hiddentr2').innerHTML;
				var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
				document.getElementById('hiddentr2').innerHTML = newHTML;
				error = true;
			}
		}
	var myfield3 = document.getElementById("txttitle");
		if(myfield3.value.length==0)
		{
			document.getElementById("hiddentr3").style.display = '';
    		document.getElementById("hiddentr3").innerHTML = "Enter item title";
			var oldHTML = document.getElementById('hiddentr3').innerHTML;
			var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
			document.getElementById('hiddentr3').innerHTML = newHTML;
			error = true;
		}
		else{
			var alphabetNumericSpecialCharacterExpression = /^[a-zA-Z0-9?.,]+$/;
			if(myfield1.value.match(alphabetNumericSpecialCharacterExpression)){
				
				
			}
			else{
				document.getElementById("hiddentr3").style.display = '';
				document.getElementById("hiddentr3").innerHTML = "Enter letters only";
				var oldHTML = document.getElementById('hiddentr3').innerHTML;
				var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
				document.getElementById('hiddentr3').innerHTML = newHTML;
				error = true;
			}
		}
		var myfield4 = document.getElementById("txtpublisher");
		if(myfield4.value.length==0)
		{
			document.getElementById("hiddentr4").style.display = '';
    		document.getElementById("hiddentr4").innerHTML = "Enter Publisher";
			var oldHTML = document.getElementById('hiddentr4').innerHTML;
			var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
			document.getElementById('hiddentr4').innerHTML = newHTML;
			error = true;
		}
		else{
			var alphabetExpression = /^[a-zA-Z]+$/;
			if(myfield4.value.match(alphabetExpression)){
				
				
			}
			else{
				document.getElementById("hiddentr4").style.display = '';
				document.getElementById("hiddentr4").innerHTML = "Enter letters only";
				var oldHTML = document.getElementById('hiddentr4').innerHTML;
				var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
				document.getElementById('hiddentr4').innerHTML = newHTML;
				error = true;
			}
		}
		var myfield5= document.getElementById("txtvolume");
		var alphabetNumericExpression = /^[a-zA-Z0-9]+$/;
			if(myfield5.value.match(alphabetNumericExpression)){
				
				
			}
			else{
				document.getElementById("hiddentr5").style.display = '';
				document.getElementById("hiddentr5").innerHTML = "Enter letters and numbers only";
				var oldHTML = document.getElementById('hiddentr5').innerHTML;
				var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
				document.getElementById('hiddentr5').innerHTML = newHTML;
				error = true;
			}
			var myfield6 = document.getElementById("txtisbn");
		if(myfield6.value.length==0)
		{
			document.getElementById("hiddentr6").style.display = '';
    		document.getElementById("hiddentr6").innerHTML = "Enter ISBN/SBIN";
			var oldHTML = document.getElementById('hiddentr6').innerHTML;
			var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
			document.getElementById('hiddentr6').innerHTML = newHTML;
			error = true;
		}
		else{
			var numericExpression = /^[0-9]+$/;
			if(myfield6.value.match(alphabetExpression)){
				
				
			}
			else{
				document.getElementById("hiddentr6").style.display = '';
				document.getElementById("hiddentr6").innerHTML = "Enter numbers only";
				var oldHTML = document.getElementById('hiddentr6').innerHTML;
				var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
				document.getElementById('hiddentr6').innerHTML = newHTML;
				error = true;
			}
		}
	var myfield7= document.getElementById("txtedition");
		var alphabetNumericExpression = /^[a-zA-Z0-9]+$/;
			if(myfield7.value.match(alphabetNumericExpression)){
				
				
			}
			else{
				document.getElementById("hiddentr7").style.display = '';
				document.getElementById("hiddentr7").innerHTML = "Enter letters and numbers only";
				var oldHTML = document.getElementById('hiddentr7').innerHTML;
				var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
				document.getElementById('hiddentr7').innerHTML = newHTML;
				error = true;
			}
			var myfield8= document.getElementById("txtversion");
		var alphabetNumericExpression = /^[a-zA-Z0-9]+$/;
			if(myfield8.value.match(alphabetNumericExpression)){
				
				
			}
			else{
				document.getElementById("hiddentr8").style.display = '';
				document.getElementById("hiddentr8").innerHTML = "Enter letters and numbers only";
				var oldHTML = document.getElementById('hiddentr8').innerHTML;
				var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
				document.getElementById('hiddentr8').innerHTML = newHTML;
				error = true;
			}
			var myfield9 = document.getElementById("txtyrpublisher");
		if(myfield9.value.length==0)
		{
			document.getElementById("hiddentr9").style.display = '';
    		document.getElementById("hiddentr9").innerHTML = "Enter year published";
			var oldHTML = document.getElementById('hiddentr9').innerHTML;
			var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
			document.getElementById('hiddentr9').innerHTML = newHTML;
			error = true;
		}
		else{
			var numericExpression = /^[0-9]+$/;
			if(myfield9.value.match(alphabetExpression)){
				
				
			}
			else{
				document.getElementById("hiddentr9").style.display = '';
				document.getElementById("hiddentr9").innerHTML = "Enter numbers only";
				var oldHTML = document.getElementById('hiddentr9').innerHTML;
				var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
				document.getElementById('hiddentr9').innerHTML = newHTML;
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

#require_once('db_connect.php');
$conn=@mysql_connect("localhost", "root", "");
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }
$rs=@mysql_select_db("onlinebook", $conn)
?>

<form id="AddItem" name="AddItem" method="post" action="<?php echo($self);?>" onSubmit="return doValidateItem()">
  <table class="tabledata">
    <tr>
      <td colspan="4" class="heading">Item Setup</td>
    </tr>
    <tr>
      <td width="195" class="fieldheading">&nbsp;</td>
      <td width="10">&nbsp;</td>
      <td width="337">&nbsp;</td>
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
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td class="fieldheading">Item Description</td>
      <td>&nbsp;</td>
      <td><input type="text" name="txtitemname" id="txtitemname" class="inputfield"/> 
        <label class="required">*</label></td>
      <td id="hiddentr1">&nbsp;</td>
    </tr>
    <tr>
      <td class="fieldheading">Author/Artist</td>
      <td>&nbsp;</td>
      <td><input type="text" name="txtauthor" id="txtauthor" class="inputfield"/>
        <label class="required">*</label></td>
      <td id="hiddentr2">&nbsp;</td>
    </tr>
    <tr>
      <td class="fieldheading">Title</td>
      <td>&nbsp;</td>
      <td><input type="text" name="txttitle" id="txttitle" class="inputfield"/>
        <label class="required">*</label></td>
      <td id="hiddentr3">&nbsp;</td>
    </tr>
    <tr>
      <td class="fieldheading">Publisher</td>
      <td>&nbsp;</td>
      <td><input type="text" name="txtpublisher" id="txtpublisher" class="inputfield"/>
        <label class="required">*</label></td>
      <td id="hiddentr4">&nbsp;</td>
    </tr>
    <tr>
      <td class="fieldheading">Volume</td>
      <td>&nbsp;</td>
      <td><input type="text" name="txtvolume" id="txtvolume" class="inputfield"/></td>
      <td id="hiddentr5">&nbsp;</td>
    </tr>
    <tr>
      <td class="fieldheading">ISBN / SBIN</td>
      <td>&nbsp;</td>
      <td><input type="text" name="txtisbn" id="txtisbn" class="inputfield"/>
        <label class="required">*</label></td>
      <td id="hiddentr6">&nbsp;</td>
    </tr>
    <tr>
      <td class="fieldheading">Edition</td>
      <td>&nbsp;</td>
      <td><input type="text" name="txtedition" id="txtedition" class="inputfield"/></td>
      <td id="hiddentr7">&nbsp;</td>
    </tr>
    <tr>
      <td class="fieldheading">Version</td>
      <td>&nbsp;</td>
      <td><input type="text" name="txtversion" id="txtversion" class="inputfield"/></td>
      <td id="hiddentr8">&nbsp;</td>
    </tr>
    <tr>
      <td class="fieldheading">Year Published</td>
      <td>&nbsp;</td>
      <td><input type="text" name="txtyrpublisher" id="txtyrpublisher" class="inputfield"/>
        <label class="required">*</label></td>
      <td id="hiddentr9">&nbsp;</td>
    </tr>
    
    <td><input name="submit" type="submit" id="btnSave" value="Save" class="buttonstyle"/>      <input name="cancel" type="button" id="btncancel" value="Cancel" class="buttonstyle" onclick="window.location = 'AddItemSetup.php'"/></td>
    </tr>
  
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><label class="required">* All fields Required</label></td>
      <td>&nbsp;</td>
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

if ($edition == '') {$edition= "NULL";}
	 
if ($version == '') {$version="NULL"; }

if ($volume == ''){	$volume = "NULL";}


if( isset($form) ) 
{
mysql_select_db("onlinebook", $conn);

If( isset($producttypeid) && isset($itemname) && isset($title) && isset($publisher) && isset($isbn)&& isset($yrpublisher)&& $producttypeid !== '' && $itemname !== ''  && $title !== '' && $publisher !== ''  && $isbn !== '' && $yrpublisher !== '' )														 																								 
	{
		$sql="INSERT INTO ITEMS (ProductSubCategoryID, ItemName,Author,Title,Publisher,Volume,ISBN,Edition,Version,YearPublished)
		VALUES(\"$producttypeid\",\"$itemname\",\"$author\",\"$title\",\"$publisher\",\"$volume\",\"$isbn\",\"$edition\",\"$version\",\"$yrpublisher\")";
	
		if (!mysql_query($sql,$conn))
  		{
  			die('Error: ' . mysql_error());
  		}
		$errormsg="Item has been added successfully";

	}
	else
	{
		$errormsg="Please provide the required details";
	}	
}
mysql_close($conn);
?>

  <tr>
  <td colspan="4" class="error"><?php echo $errormsg;?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>

</body>
</html>