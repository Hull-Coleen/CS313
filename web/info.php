<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Info Page</title>
</head>
<body>
	
<?php
//$_SESSION["item"] = $_POST["name"];
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$_SESSION["item"] = $_POST["item"];
	$_SESSION["num"] = $_POST["num"];

 echo $_SESSION["item"];
 echo $_SESSION["num"];

?>

</body>
</html>