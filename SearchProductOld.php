<?php 

error_reporting (E_ALL ^ E_NOTICE); 

$self=$_SERVER['PHP_SELF'];
$form = $_POST['submit'];
$conn=@mysql_connect("localhost", "root", "")or die("Err:Conn");
$rs=@mysql_select_db("onlinebook", $conn) or die("Err:Db");
?>

<html>
<head>
<link href="menu.css" rel="stylesheet" type="text/css" />
<title class="heading">Search Product</title>
<script type="text/javascript">
function validate(){
	var error=false;
	var myfield = document.getElementById("txtsearch");
	var alphabetNumericExpression = /^[a-zA-Z0-9]+$/;
			if(myfield.value.match(alphabetNumericExpression)){
				
				
			}
			else{
				document.getElementById("hiddentr").style.display = '';
				document.getElementById("hiddentr").innerHTML = "Please enter letters and numbers only";
				var oldHTML = document.getElementById('hiddentr').innerHTML;
				var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
				document.getElementById('hiddentr').innerHTML = newHTML;
				error = true;
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
<?
//error_reporting(E_ALL ^ E_NOTICE);
//$self=$_SERVER['PHP_SELF'];
$errormsg="";
//$form = $_POST['submit'];

?>
<form id="form1" method="post" action="<?php echo($self);?>">
  <table width="923" height="240" border="0">
    <tr>
      <td height="32" colspan="7" class="heading">Search Product</td>
    </tr>
    <tr>
      <td width="164" height="32" class="fieldheading">Quick Search</td>
      <td width="271">&nbsp;</td>
      <td width="29" class="fieldheading">&nbsp;</td>
      <td width="373">&nbsp;</td>
      <td width="19" class="fieldheading">&nbsp;</td>
      <td width="17">&nbsp;</td>
      <td width="20">&nbsp;</td>
    </tr>
    <tr>
      <td height="32" colspan="2" class="fieldheading">
      <input name="searchfield" type="radio" id="searchfield2" value="keyword" />
Keywords
<input name="searchfield" type="radio" id="searchfield" value="aut"/> Author 
	  <input name="searchfield" type="radio" id="searchfield" value="title" /> Title
	  <input name="searchfield" type="radio" id="searchfield" value="pub" />Publisher </td>
      <td class="fieldheading">&nbsp;</td>
      <td>    
      <td class="fieldheading">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="32" colspan="2" class="fieldheading"><input name="txtsearch" type="text" class="inputfield" id="txtsearch"/></td>
      <td id="hiddentr">&nbsp;</td>
      <td class="fieldheading">&nbsp;</td>
      <td>
      <td class="fieldheading">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="32" colspan="2"><input name="submit" type="submit"  value="Search" class="buttonstyle" onClick="return validate()"/>
      <input name="cancel" type="button" id="btnadvsearch" value="Advanced Search" class="buttonstyle" onClick="window.location = 'AdvancedSearchProduct.php'"/></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="32" colspan="2"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    </table>
  <?php
 
$search=TRIM($_POST['txtsearch']);
$searchcriteria = $_POST['searchfield'];

if( isset($form) ) 
{
	if(isset($search) && $search !== '') 
	{
  		if ($searchcriteria = 'keyword') 
		{
			$query1 = mysql_query("Select * from Items where Title LIKE '%$search%' OR ItemName LIKE '%$search%' OR Publisher LIKE '%$search%'  OR Author LIKE '%$search%'");
			$searchcriteria = "";
		}
		elseif ($searchcriteria = 'pub') 
		{
			$query1 = mysql_query("Select * from Items where Publisher LIKE '%$search%'");
			$searchcriteria = "";
		}
		elseif ($searchcriteria = 'aut') 
		{
			$query1 = mysql_query("Select * from Items where Author LIKE '%$search%'");
		}
		elseif ($searchcriteria = 'title') 
		{
			$query1 = mysql_query("Select * from Items where Title LIKE '%$search%'");
		}
	
	//$result = mysql_query($conn, $query1) or die ("Error in query: $query " . mysql_error());

		echo '<table cellpadding="0" cellspacing="0" border="1">';
 		echo '<th class="fieldheadingdisplay">Item Name</th>';
		echo '<th class="fieldheadingdisplay">Author</th>';
		echo '<th class="fieldheadingdisplay">Title</th>';
		echo '<th class="fieldheadingdisplay">View More Details</th>';
	
  				
	while($row=mysql_fetch_array($query1))
	{
		if ($row ==0)
		{
			
			echo "There are no products under your search";
		
		}
		else
		{
			echo '<tr>';
			echo '<td class="fielddisplay">'.$row['ItemName'] . '</td>';
			echo '<td class="fielddisplay">'.$row['Author'] . '</td>';
			echo '<td class="fielddisplay">'.$row['Title'] . '</td>';
			echo "<td><a href='ProductDetails.php?id=".$row['ItemID']."'>Show Details</a></td>";
			echo '</tr>';
		}
	
	echo '</table>';
 	}
}
	
	
	else
	{
		 $errormsg="Please provide the required details";
	}
		



 mysql_close($conn);

  
  ?>  
  <tr>
  <td height="32" colspan="2" class="error"><?php echo $errormsg;?></td>
  </tr>
  
    
  </table>
</form>
  
  
</body>
</html>