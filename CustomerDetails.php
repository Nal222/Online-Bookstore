<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Customer Details</title>
<link href="menu.css" rel="stylesheet" type="text/css" />
    

<script type="text/javascript">

 function doValidate(){
		var error = false;
		var myfield1 = document.getElementById("firstname");
		if(myfield1.value.length==0)
		{
    		document.getElementById("hiddentr1").innerHTML = "Please enter first name";
			var oldHTML = document.getElementById('hiddentr1').innerHTML;
			var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
			document.getElementById('hiddentr1').innerHTML = newHTML;
			error = true;
		}
		else{
			var alphabetExpression = /^[a-zA-Z]+$/;
			if(myfield1.value.match(alphabetExpression)){
				document.getElementById("hiddentr1").innerHTML = "";
			}
			else{
				document.getElementById("hiddentr1").innerHTML = "Please enter letters only";
				var oldHTML = document.getElementById('hiddentr1').innerHTML;
				var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
				document.getElementById('hiddentr1').innerHTML = newHTML;
				error = true;
			}
		}
		var myfield2 = document.getElementById("lastname");
		if(myfield2.value.length==0)
		{
    		document.getElementById("hiddentr2").innerHTML = "Please enter last name";
			var oldHTML = document.getElementById('hiddentr2').innerHTML;
			var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
			document.getElementById('hiddentr2').innerHTML = newHTML;
			error = true;
		}
		else{
			var alphabetExpression = /^[a-zA-Z]+$/;
			if(myfield2.value.match(alphabetExpression)){
				document.getElementById("hiddentr2").innerHTML = "";	
			}
			else{
				document.getElementById("hiddentr2").innerHTML = "Please enter letters only";
				var oldHTML = document.getElementById('hiddentr2').innerHTML;
				var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
				document.getElementById('hiddentr2').innerHTML = newHTML;
				error = true;
			}
		}
		var myfield3 = document.getElementById("permanentaddress");
		if(myfield3.value.length==0)
		{
    		document.getElementById("hiddentr3").innerHTML = "Please enter the first line of your permanent address";
			var oldHTML = document.getElementById('hiddentr3').innerHTML;
			var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
			document.getElementById('hiddentr3').innerHTML = newHTML;
			error = true;
		}
		else{
			document.getElementById("hiddentr3").innerHTML = "";	
		}
		var myfield4 = document.getElementById("city");
		if(myfield4.value.length==0)
		{
    		document.getElementById("hiddentr4").innerHTML = "Please enter your city";
			var oldHTML = document.getElementById('hiddentr4').innerHTML;
			var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
			document.getElementById('hiddentr4').innerHTML = newHTML;
			error = true;
		}
		else{
			document.getElementById("hiddentr4").innerHTML = "";	
		}
		var myfield5 = document.getElementById("country");
		if(myfield5.value.length==0)
		{
    		document.getElementById("hiddentr5").innerHTML = "Please enter your country";
			var oldHTML = document.getElementById('hiddentr5').innerHTML;
			var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
			document.getElementById('hiddentr5').innerHTML = newHTML;
			error = true;
		}
		else{
			document.getElementById("hiddentr5").innerHTML = "";	
		}
		var myfield6 = document.getElementById("postcode");
		if(myfield6.value.length==0)
		{
    		document.getElementById("hiddentr6").innerHTML = "Please enter your postcode";
			var oldHTML = document.getElementById('hiddentr6').innerHTML;
			var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
			document.getElementById('hiddentr6').innerHTML = newHTML;
			error = true;
		}
		else{
			document.getElementById("hiddentr6").innerHTML = "";	
		}
		var myfield7 = document.getElementById("phonenumber");
		if(myfield7.value.length==0)
		{
    		document.getElementById("hiddentr7").innerHTML = "Please enter your phone number";
			var oldHTML = document.getElementById('hiddentr7').innerHTML;
			var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
			document.getElementById('hiddentr7').innerHTML = newHTML;
			error = true;
		}
		else{
			var numericExpression = /^[0-9]+$/;
			if(myfield7.value.match(numericExpression)){
				document.getElementById("hiddentr7").innerHTML = "";	
			}
			else{
				document.getElementById("hiddentr7").innerHTML = "Please enter numbers only";
				var oldHTML = document.getElementById('hiddentr7').innerHTML;
				var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
				document.getElementById('hiddentr7').innerHTML = newHTML;
				error = true;
			}
		}
		var myfield8 = document.getElementById("emailaddress");
		if(myfield8.value.length==0)
		{
    		document.getElementById("hiddentr8").innerHTML = "Please enter your email address";
			var oldHTML = document.getElementById('hiddentr8').innerHTML;
			var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
			document.getElementById('hiddentr8').innerHTML = newHTML;
			error = true;
		}
		else{
			var x=document.forms["form1"]["emailaddress"].value;
			var atpos=x.indexOf("@");
			var dotpos=x.lastIndexOf(".");
			if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){
				document.getElementById("hiddentr8").innerHTML = "Not a valid email address";
				var oldHTML = document.getElementById('hiddentr8').innerHTML;
				var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
				document.getElementById('hiddentr8').innerHTML = newHTML;
				error = true;
			}
			else{
				document.getElementById("hiddentr8").innerHTML = "";	
			}
  		}
		
		var passwordfield1 = document.getElementById("customerpassword");
		var passwordreenterfield = document.getElementById("reenterpassword");
		
		var alphabetNumericExpression = /^[a-zA-Z0-9]+$/;
			
		if(passwordfield1.value.length==0){
    		document.getElementById("hiddentr9").innerHTML = "Please enter password";
			document.getElementById("hiddentr10").innerHTML = "";
			var oldHTML = document.getElementById('hiddentr9').innerHTML;
			var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
			document.getElementById('hiddentr9').innerHTML = newHTML;
			error = true;
		}
		else if(!passwordfield1.value.match(alphabetNumericExpression) || passwordfield1.value.length!=7){
			document.getElementById("hiddentr9").innerHTML = "Please enter 7 character password with letters and numbers only";
			document.getElementById("hiddentr10").innerHTML = "";
			var oldHTML = document.getElementById('hiddentr9').innerHTML;
			var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
			document.getElementById('hiddentr9').innerHTML = newHTML;
			error = true;		
		}
		else if(passwordreenterfield.value.length==0){
			document.getElementById("hiddentr9").innerHTML = "";
			document.getElementById("hiddentr10").innerHTML = "Please re-enter password";
			var oldHTML = document.getElementById('hiddentr10').innerHTML;
			var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
			document.getElementById('hiddentr10').innerHTML = newHTML;
			error = true;	
		}
		else if(passwordfield1.value!=passwordreenterfield.value){
			document.getElementById("hiddentr9").innerHTML = "";
			document.getElementById("hiddentr10").innerHTML = "Passwords are not matching";
			var oldHTML = document.getElementById('hiddentr10').innerHTML;
			var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
			document.getElementById('hiddentr10').innerHTML = newHTML;
			error = true;
		}
		else{
			document.getElementById("hiddentr9").innerHTML = "";
			document.getElementById("hiddentr10").innerHTML = "";
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

<body>
<?php
error_reporting (E_ALL ^ E_NOTICE); 
$self=$_SERVER['PHP_SELF'];
$errormsg1="";
$errormsg2="";
$form = $_POST['submit'];
include 'DbInfo.php';
?>

<form id="form1" name="form1" method="post" action="<?php echo($self);?>" onsubmit="return doValidate();">
<h1>Customer Registration</h1>
<table class="tabledata">
    <tr>
      <td colspan="3" class="heading">Customer Details</td>
    </tr>
   
    <tr>
      <td width="169" class="fieldheading">First Name</td>
      <td width="241"> <input type="text" name="firstname" id="firstname" class="inputfield" /></td>
      <td width="641" id="hiddentr1">&nbsp;</td>
    </tr>
    <tr>
      <td class="fieldheading">Last Name</td>
      <td width="241"><input type="text" name="lastname" id="lastname" class="inputfield"/></td>
      <td width="641" id="hiddentr2">&nbsp;</td>
    </tr>
  
    <tr>
      <td class="fieldheading">Permanent Address</td>
      <td width="241"><textarea name="permanentaddress" cols="45" rows="5" id="permanentaddress" class="textarea"></textarea></td>
      <td width="641" id="hiddentr3">&nbsp;</td>
    </tr>
    <tr>
      <td class="fieldheading">City</td>
      <td width="241"><input type="text" name="city" id="city" class="inputfield" /></td>
      <td width="641" id="hiddentr4">&nbsp;</td>
    </tr>
    <tr>
      <td class="fieldheading">Country</td>
      <td width="241"><input type="text" name="country" id="country"class="inputfield" /></td>
      <td width="641" id="hiddentr5">&nbsp;</td>
    </tr>
    <tr>
      <td class="fieldheading">Post Code</td>
      <td><input type="text" name="postcode" id="postcode"  class="inputfield"/></td>
      <td id="hiddentr6">&nbsp;</td>
    </tr>
    <tr>
      <td class="fieldheading">Phone Number</td>
      <td><input type="text" name="phonenumber" id="phonenumber"  class="inputfield" /></td>
      <td id="hiddentr7">&nbsp;</td>
    </tr>
    <tr>
      <td class="fieldheading">Email Address</td>
      <td><input type="text" name="emailaddress" id="emailaddress"  class="inputfield" /></td>
      <td id="hiddentr8" class="error">This will be your user ID for login</td>
    </tr>
    <tr>
      <td class="fieldheading" >Please enter a password</td>
      <td><input type="password" name="customerpassword" id="customerpassword" class="inputfield"/></td>
      <td id="hiddentr9" class="error">Password length should be 7 characters and contain only letters and numbers.</td>
    </tr>
    <tr>
      <td class="fieldheading">Re-enter password</td>
      <td><input type="password" name="reenterpassword" id="reenterpassword" class="inputfield"/></td>
      <td id="hiddentr10">&nbsp;</td>
    </tr>
    
    
  </table>
  
    
<?php

	
#$lastRowIndexPlusOne = $_GET["numberweareat"];

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$permanentaddress=$_POST['permanentaddress'];
$city=$_POST['city'];
$country=$_POST['country'];
$postcode=$_POST['postcode'];

$telephonenumber=$_POST['phonenumber'];
$emailaddress=$_POST['emailaddress'];
$passwordtwo=md5($_POST['reenterpassword']);
$passwordone=$_POST['customerpassword'];



/*$conn=@mysql_connect("localhost", "root", "");
if (!$conn){
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("onlinebook", $conn);*/

if( isset($form) ) {
	
	
	
	/*ensure values exist*/
	//echo "$firstname and $lastname and $permanentaddress and $city and $country and $postcode and $telephonenumber and $emailaddress";
	
	if($firstname and $lastname and $permanentaddress and $city and $country and $postcode and $telephonenumber and $emailaddress){
	
		/*$numberweareat=1;
		$lastRowIndexPlusOne = $numberweareat;
		$_SESSION['studentid'] = $studentid;
	
		*/
	
		#create the query
		$sql="insert into customer(FirstName, LastName, PermanentAddress, PhoneNumber, EmailAddress, City, Country, PostCode) values
		(\"$firstname\", \"$lastname\",\"$permanentaddress\", \"$phonenumber\", \"$emailaddress\", \"$city\", \"$country\", \"$postcode\")";
	
		#execute the query
		$rs=mysql_query($sql);
	
		//echo mysql_error($conn);
		$custid = mysql_insert_id();
	
		#confirm the added record details
		/*if($rs){
			echo("Record added:$firstname $lastname $permanentaddress $phonenumber $emailaddress $city $country $postcode");
			//$errormsg2="Student details have and.";
	
		}
		else{
			echo "Record not added";
		}*/
	}
	if($passwordone and $passwordtwo){
		$sql2="insert into user(UserTypeID, Password,UserCreationDate,Login,UserActive) values (2, \"$passwordtwo\", now(), \"$emailaddress\", 'Y')";
		$rs2=mysql_query($sql2);
		//echo mysql_error($conn);
		$userid = mysql_insert_id();
		
		$sql3= "insert into customerlogin(UserID, CustomerID) values ($userid,$custid)";
		$rs3=mysql_query($sql3);
		//echo mysql_error($conn);
		if($rs && $rs2 && $rs3){
			echo "<b>You are successfully registered</b>";
		}
		else{
			echo "<b>There was an error during registration. Please contact the site administrator to get it fixed.<b>";
		}
		
	}
}

?>
     
   
  </table>
  <p>
    <input type="submit" name="submit" value="Save" class="buttonstyle" /> 
    <input type="button" value="Cancel" class="buttonstyle" onclick="window.location = 'CustomerDetails.php'" />
    
</p>
</form>
<p>&nbsp;</p>
</body>
</html>