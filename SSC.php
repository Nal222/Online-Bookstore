<?php
$prod_id=$_GET['prod_id'];
$conn=@mysql_connect("localhost", "root", "");
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("onlinebook", $conn);

$q=mysql_query("SELECT ProductSubCategory FROM productsubcategory  where ProductTypeID = $prod_id'");

echo mysql_error();
$myarray=array();
$str="";
while($nt=mysql_fetch_array($q))
{
$str=$str . "\"$nt[ProductSubCategory]\"".",";

}
$str=substr($str,0,(strLen($str)-1)); // Removing the last char , from the string
echo "new Array($str)";
?>