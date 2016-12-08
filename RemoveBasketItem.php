<?php 

    if (isset($_GET["id"]) && (int)$_GET["id"] > 0) // remove product with productID == $remove 
    { 
        $i=0; 
        while ($i<count($_SESSION["gids"]) && $_SESSION["gids"][$i] != (int)$_GET["id"]) 
            $i++; 
        if ($i<count($_SESSION["gids"])) 
            $_SESSION["gids"][$i] = 0; 
    } 

?>