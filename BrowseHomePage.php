<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Book Store::: Browse Products</title>
<link href="menu.css" rel="stylesheet" type="text/css" />
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script type="text/javascript">
	$(document).ready(
		function () {
			$("#subCategoryLoading").hide();
			populateProductCategoriesDropDownList();
		}
 	);
	
	function populateProductCategoriesDropDownList(){
		var items="";
		$.getJSON(
			"GetProductCategories.php",
			function(data){
				$.each(
					data,
					function(index, item) {
						items+="<option value='"+item.ProductTypeID+"'>"+item.ProductType+"</option>";
					}
				);
			 	$("#productsDropDown").html(items);
				onProductCategoryChanged(1);
		  	}
		);
		
	}
	
	function populateDropDownList(productCategoryId){
		var items="";
		$.getJSON(
			"GetProductSubCategories.php?ProductCategoryID="+productCategoryId,
			function(data){
				$.each(
					data,
					function(index, item) {
						items+="<option value='"+item.ProductSubCategoryID+"'>"+item.ProductSubCategory+"</option>";
					}
				);
			 	$("#subCategoryDropDown").html(items);
				//TODO: show subcategory dropdown
				$("#subCategoryLoading").hide();
				$("#subCategoryDropDown").show();
		  	}
		);
		
	}
		
	function onProductCategoryChanged(value){
		//TODO: hide subcategory dropdown
		$("#subCategoryDropDown").hide();
		$("#subCategoryLoading").show();
		populateDropDownList(value);
	}

	
</script>

<?php
error_reporting(E_ALL ^ E_NOTICE);
$self=$_SERVER['PHP_SELF'];
$errormsg="";
$form = $_POST['browseButton'];
?>
</head>
<body class="pgbkcolor">
<form id="browseproduct" name="browseproduct" method="post" action="<?php echo($self);?>">
<table width="239" border="0" class="tabledata">
  <tr>
    <td width="100" class="fieldheading">Products</td>
    <td width="9">&nbsp;</td>
    <td width="116" class="fieldheading"><select id="productsDropDown" onchange="onProductCategoryChanged(this.value)">
    </select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="fieldheading">Subcategory</td>
    <td>&nbsp;</td>
    <td class="fieldheading" ><div id="subCategoryLoading">Loading...</div><select id="subCategoryDropDown" name="subCategoryDropDown">
    </select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="browseButton" id="browseButton" value="Browse" class="buttonstyle"/></td>
  </tr>
</table>
<?php
include 'DbInfo.php';
$productsubcat = $_POST['subCategoryDropDown'];


if(isset($form))
{
	
	$query1 = mysql_query("Select I.ItemID, I.ISBN, I.Title, I.Author from items I, productsubcategory P 
		  where I.ProductSubCategoryID=P.ProductSubCategoryID AND P.ProductSubCategoryID=$productsubcat");
	
	echo '<table cellpadding="0" cellspacing="0" border="">';
 		echo'<BR><BR>';
   		echo '<th class="fieldheadingdisplay">ISBN/ASIN</th>';
  		echo '<th class="fieldheadingdisplay">Title</th>';
  		echo '<th class="fieldheadingdisplay">Author/Artist</th>';
		echo '<th class="fieldheadingdisplay">View More Details</th>';
		
	while($row=mysql_fetch_array($query1))
	{
	echo '<tr>';
	echo '<td class="fielddisplay">'.$row['ISBN'] . '</td>';
	echo '<td class="fielddisplay">'.$row['Title'] . '</td>';
    echo '<td class="fielddisplay">'.$row['Author'] . '</td>';
	echo "<td><a href='ProductDetails.php?id=".$row['ItemID']."'>Show Details</a></td>";
	echo '</tr>';
	}
}
?>
</table>
</form>
</body>
</html>