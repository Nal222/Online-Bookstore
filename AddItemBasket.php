<?php 

$conn=@mysql_connect("localhost", "root", "")or die("Err:Conn");

$rs=@mysql_select_db("onlinebook", $conn) or die("Err:Db");

session_start();
$qty = $_SESSION['qty'];
 //$_SESSION["counts"][] = $qty; 

    if (isset($_GET["id"]) && (int)$_GET["id"]>0) //add product to cart with productID=$id 
    { 
        //$q = db_query("Select I.ItemID, ITS.QuantityInStock,ITS.UnitPrice from items I, item_stock ITS where I.ItemID = ITS.ItemID and I.ItemID = '$id'") or die (db_error()); 
		
        //$is = db_fetch_row($q); 
		
		//$is = $is[0]; 

        //$_SESSION['itemid'] contains product IDs 
        //$_SESSION['counts'] contains item quantities ($_SESSION['counts'][$i] corresponds to $_SESSION['itemid'][$i]) 
        //$_SESSION['itemid'][$i] == 0 means $i-element is 'empty' (does not refer to any product)
		
        if (!isset($_SESSION["itemid"])) 
        { 
            $_SESSION["itemid"] = array(); 
            $_SESSION["counts"] = array(); 
        } 
        //check for current product in visitor's shopping cart content 
        $i = 0; 
        while ($i<count($_SESSION["itemid"]) && $_SESSION["itemid"][$i] != $_GET["id"]) 
		
		$i++; 
        
		if ($i < count($_SESSION["itemid"])) //increase current product's item quantity 
        { 
            $_SESSION["counts"][$i]++; 
        } 
        else //no such product in the cart - add it 
        { 
            $_SESSION["itemid"][] = $_GET["id"]; 
            $_SESSION["counts"][] = 1; 
        } 
    } 
		header('Location: ViewBasket.php?);
			exit;
?>

