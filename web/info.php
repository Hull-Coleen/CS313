<?php
session_start();
$test;
$_SESSION["item"] = $_POST["item"];
$f = $_SESSION["item"];
if($f = "Red Small") {
	$img = "Ashley.jpg";
	
}
else if ($f = "Blue Small") {
	$img = "Kristine.jpg";
}
else {
	$img = "world.jpg";
}
	
?>
<!DOCTYPE html>
<html>
<head>
<title>Info Page</title>
</head>
<body>
<a href="/Prove03.php">Continue Shopping</a>
<a href="/cart.php">Cart</a>
	<img src=$img style="margin:0px auto;display:block" alt="World"> 
<?php

	
	//$_SESSION["num"] = $_POST["num"];

 echo $_SESSION["item"];
 echo $_SESSION["num"];
 $t =$_SESSION["item"];
 $test = array($_SESSION["item"] => $_SESSION["num"]);
 $result = array_merge($test, $_SESSION["cart"]);
 foreach ($test as $key => $value) {
	 echo $key;
	 echo $value;
	 
 }
 echo count($result);
 $_SESSION["cart"]['$t'] = $_SESSION['num'];
$_SESSION["cart"] = $result;
echo count($_SESSION["cart"]);
	foreach ($_SESSION["cart"] as $fl => $value)
{
	echo htmlspecialchars($fl);
	echo "<br>";
    echo htmlspecialchars($value);
	
}
 //$_SESSION["cart"] = array_push_assoc($_SESSION["cart"], $_SESSION["item"] , $_SESSION["num"]);
 //$_SESSION["cart"]_push($$_SESSION["item"], $_SESSION["num"]);
 //array_push($data,$question);

?>

</body>
</html>