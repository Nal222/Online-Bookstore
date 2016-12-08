<?php 
	include 'DbInfo.php';
	
	$result = mysql_query("SELECT * FROM producttype");
	
	$data = array();
	while ( $row = mysql_fetch_assoc($result) )
	{
		$data[] = $row;
	}
	print json_encode( $data );



?>