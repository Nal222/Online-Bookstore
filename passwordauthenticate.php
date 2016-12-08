<?php 
error_reporting(E_ALL ^ E_NOTICE);
$error="";
$form = $_POST['submit'];
session_start();
//$form = $_POST['submit'];
$login = $_POST['txtuserid'];
//$password = md5($_POST['txtpassword']);

$password = $_POST['txtpassword'];
$password = md5($password);

$_SESSION['userid']="";

$conn=@mysql_connect("localhost", "root", "");

if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }
$rs=@mysql_select_db("onlinebook", $conn);


function Getfield($id)
{
$sql="Select UserType from usertype where Active='Y' and UserTypeID = $id";
$result = mysql_query ($sql);
$row = mysql_fetch_array($result);
$type = $row['UserType'];
return $type;
}

function GetfieldCustomer($id)
{
$sql="SELECT C.CUSTOMERID, U.USERID FROM CUSTOMERLOGIN C, USER U WHERE C.USERID = U.USERID and U.USERID = $id";
$result = mysql_query ($sql);
$row = mysql_fetch_array($result);
$custid = $row['CustomerID'];
return $custid;
}


if( isset($form) ) 
{

	if( isset($login) && isset($password) && $login !== '' && $password !== '' ) 
	{
		$sql = "SELECT * FROM user WHERE Login= '$login' and Password='$password' and UserActive='Y'";
		$result = mysql_query ($sql);
	    $row = mysql_fetch_array($result);
    	$usertypeid = $row['UserTypeID'];
		$userid = $row['UserID'];
		$usertype=Getfield($usertypeid);
		$_SESSION['usertype'] = $usertype;
		$_SESSION['usertypeid'] = $usertypeid;
		

	
	if( $usertypeid != 0 ) 
	{ //user name and password verified
			$_SESSION['logged-in'] = true;
			$_SESSION['userid'] = $login;
				
			#get user type
			# Admin User
			if ($usertypeid==1 || $usertypeid==3 )
			{
			header('Location: Index.html');
			exit;
			}
			# Student User
			else if ($usertypeid==2)
			{
				$custid=GetfieldCustomer($userid);
				$_SESSION['custid'] = $custid;
				header('Location: ShoppingCart.php?id="$custid"');
				exit;
			}
	} 
	else 
	{ 
		$error = "Required details are incorrect, please try again"; 
		echo "$error";
	}
}
else 
	{ 
			$error = 'All information is not filled out correctly';
	
	header('Location: Login.php');
			exit;
	echo "$error";
	
	}
}
?>