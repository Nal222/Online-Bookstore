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
				document.getElementById("hiddencell").style.display = '';
				document.getElementById("hiddencell").innerHTML = "Please enter letters and numbers only";
				var oldHTML = document.getElementById('hiddencell').innerHTML;
				var newHTML = "<span style='color:#ff0000'>" + oldHTML + "</span>";
				document.getElementById('hiddencell').innerHTML = newHTML;
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
      <td width="135" height="32" class="fieldheading">Advanced Search</td>
      <td width="244">&nbsp;</td>
      <td width="121" class="fieldheading">&nbsp;</td>
      <td width="330">&nbsp;</td>
      <td width="19" class="fieldheading">&nbsp;</td>
      <td width="17">&nbsp;</td>
      <td width="20">&nbsp;</td>
    </tr>
    <tr>
      <td height="32" class="fieldheading">  <select name="fieldselection">
  <option value="">Any Field</option>
  <option value="A">AUTHOR</option>
  <option value="T">TITLE</option>
  <option value="S">SUBJECT</option>
  
</select>
      <span class="required">*</span></td>
      <td class="fieldheading"><input name="txtsearch" type="text" class="inputfield" id="txtsearch"/></td>
      <td class="fieldheading">
        <select name="criteria">
  <option value="AND">AND</option>
  <option value="OR">OR</option>
  </select>
      </span>    
      <td class="fieldheading">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="135" class="fieldheading">&nbsp;</td>
      <td id="hiddencell" width="244">&nbsp;</td>
      <td width="121">&nbsp;</td>
    </tr>
    
    <tr>
      <td height="32" colspan="2" class="fieldheading">&nbsp;</td>
      <td>&nbsp;</td>
      <td class="fieldheading">&nbsp;</td>
      <td>
      <td class="fieldheading">&nbsp;</td>
      <td>&nbsp;</td>
      <td width="3">&nbsp;</td>
    </tr>
    <tr>
      <td height="32" colspan="2"><input name="submit" type="submit"  value="Search" class="buttonstyle" onClick="return validate()"/>
      <input name="cancel" type="button" value="Cancel" class="buttonstyle" onClick="window.location = 'AdvancedSearchProduct.php'"/></td>
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
$selfield = $_POST['fieldselection'];
$searchcriteria = $_POST['criteria'];

if( isset($form) ) 
{
	if(isset($search) && $search !== '') 
	{
  		if ($selfield = 'keyword') 
		{
			$query1 = mysql_query("Select * from Items where Title LIKE '%$search%' OR ItemName LIKE '%$search%' OR Publisher LIKE '%$search%'  OR Author LIKE '%$search%'");
			$searchcriteria = "";
		}
		elseif ($selfield = 'T') 
		{
			$query1 = mysql_query("Select * from Items where Title LIKE '%$search%'");
			$searchcriteria = "";
		}
		elseif ($selfield = 'A') 
		{
			$query1 = mysql_query("Select * from Items where Author LIKE '%$search%'");
		}
		elseif ($selfield = 'S') 
		{
			$query1 = mysql_query("Select * from Items where Title LIKE '%$search%'");
		}
		if ($row=mysql_fetch_array($query1)!=0)
		{
	
		echo '<table cellpadding="0" cellspacing="0" border="1">';
 		echo '<th class="fieldheadingdisplay">Item Name</th>';
		echo '<th class="fieldheadingdisplay">Author</th>';
		echo '<th class="fieldheadingdisplay">Title</th>';
		echo '<th class="fieldheadingdisplay">Publisher</th>';
		echo '<th class="fieldheadingdisplay">Volume</th>';
		echo '<th class="fieldheadingdisplay">ISBN</th>';
		echo '<th class="fieldheadingdisplay">Edition</th>';
		echo '<th class="fieldheadingdisplay">Ver</th>';
		echo '<th class="fieldheadingdisplay">Year</th>';
		echo '<th class="fieldheadingdisplay">Add to Shopping list</th>';
		
  				
	while($row=mysql_fetch_array($query1))
	{
		echo '<tr>';
		echo '<td class="fielddisplay">'.$row['ItemName'] . '</td>';
		echo '<td class="fielddisplay">'.$row['Author'] . '</td>';
		echo '<td class="fielddisplay">'.$row['Title'] . '</td>';
		echo '<td class="fielddisplay">'.$row['Publisher'] . '</td>';
		echo '<td class="fielddisplay">'.$row['Volume'] . '</td>';
		echo '<td class="fielddisplay">'.$row['ISBN'] . '</td>';
		echo '<td class="fielddisplay">'.$row['Edition'] . '</td>';
		echo '<td class="fielddisplay">'.$row['Version'] . '</td>';
		echo '<td class="fielddisplay">'.$row['YearPublished'] . '</td>';
		echo "<td><a href='CustomerLogin.php?id=".$row['ItemID']."'>Add to Cart</a></td>";
		echo '</tr>';
	}
	echo '</table>';
	}
	else{
		echo "There are no products under your search";
	}
	
}
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