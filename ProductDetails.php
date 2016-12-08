
<html>
<head>
<link href="menu.css" rel="stylesheet" type="text/css" />
<title class="heading">Search Product</title>
</head>

<body class="pgbkcolor">
<?php 
error_reporting(E_ALL ^ E_NOTICE);
$self=$_SERVER['PHP_SELF'];
$errormsg="";
$form = $_POST['submit'];
session_start();
$conn=@mysql_connect("localhost", "root", "")or die("Err:Conn");
$rs=@mysql_select_db("onlinebook", $conn) or die("Err:Db");

$id=$_GET['id'];

$query1=mysql_query("Select I.ItemID, I.Title, I.ItemName,I.ISBN, I.Publisher, I.Author, ITS.QuantityInStock from items I, item_stock ITS where I.ItemID = ITS.ItemID and I.ItemID = $id");

$row=mysql_fetch_array($query1);
$totalqty = $_POST['qty'];
$_SESSION['qty'] = $totalqty ;


?>
<form id="form1" method="post" action="AddItemBasket.php?id=<?php echo $row['ItemID']?>">
  <table width="923" height="256" border="0">
    <tr>
      <td height="32" colspan="7" class="heading">Product Details</td>
    </tr>
    <tr>
      <td width="164" class="fieldheading">ISBN/SBIN</td>
      <td width="170"><label class="fielddisplay"><?php echo $row['ISBN']; ?></label></td>
      <td width="94" class="fieldheading">Item Title</td>
      <td colspan="3"><label class="fielddisplay"><?php echo $row['Title']; ?></label></td>
      <td width="25">&nbsp;</td>
    </tr>
    <tr>
      <td height="48" ><label class="fieldheading">Item Description</label>
      <td class="fieldheading"><label class="fielddisplay"><?php echo $row['ItemName']; ?></label></td>
      <td class="fieldheading">Author/Artist</td>    
      <td width="214" class="fieldheading"><label class="fielddisplay"><?php echo $row['Author']; ?></label></td>
      <td width="134">&nbsp;</td>
      <td width="92">&nbsp;</td>
    </tr>
    <tr>
      <td height="32" class="fieldheading">Publisher</td>
      <td><label class="fielddisplay"><?php echo $row['Publisher']; ?></label></td>
      <td class="fieldheading">Qty</td>
      <td>  <select name="qty">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  
  </select>
      <td class="fieldheading"><label class="fielddisplay"><?php echo $row['QuantityInStock']; ?> In Stock</label></td>
      <td><input name="txtitemid" type="hidden" id="txtitemid" class="inputfield" value="<?php echo $row['ItemID']; ?>"/></td>
      <td width="25">&nbsp;</td>
    </tr>
    <tr>
      <td height="32" class="fieldheading"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="32">   <input name="submit" type="submit"  value="Add to Cart" class="buttonstyle"/>
    </td>
      <td><input name="cancel" type="button" id="btnadvsearch" value="Cancel" class="buttonstyle" onClick="window.location = 'SearchProduct.php'"/></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    </table>
 <?php

mysql_close($conn);

  
  ?>
  <tr>
  <td height="32" colspan="2" class="error"></td>
  </tr>
  
    
  </table>
</form>
  
  
</body>
</html>