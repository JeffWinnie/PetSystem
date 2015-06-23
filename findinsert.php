<?php session_start(); ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pet";
header("Content-Type:text/html; charset=utf-8");
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>

<?php
$name = $_SESSION['account'];

$sql = 
"INSERT INTO find(name,type,sex,place,phone,information) 
VALUES('".$name."', '".$_POST["type"]."', '".$_POST["sex"]."', '".$_POST["place"]."', '".$_POST["phone"]."', '".$_POST["information"]."')";
if ($conn->query($sql) === TRUE) {
	echo '<div class="alert alert-success" role="alert">輸入成功！3秒後跳至尋獲頁面</div>';
	header("Refresh: 3; url=findinfo.php");
}else{
	echo "Error: " . $sql . "<br>" . $conn->error;
	echo '<a href="find.php" class="btn btn-info">回尋獲刊登頁面</a>';
}
	$conn->close();
?>