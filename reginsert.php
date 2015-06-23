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
$sql = "SELECT account FROM users";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if($_POST["account"]!= null && $_POST["password"]!=null&& $_POST["account"] != $row['account'])
{
			$sql = 
		"INSERT INTO users(account,password) 
		VALUES( '".$_POST["account"]."', '".$_POST["password"]."')";

		if ($conn->query($sql) === TRUE) {
			echo '<div class="alert alert-success" role="alert">註冊成功！3秒後回首頁</div>';
			header("Refresh: 3; url=index.php");
		}else{
			echo "Error: " . $sql . "<br>" . $conn->error;
			echo '<a href="index.php" class="btn btn-info">回首頁</a>';
		}
}
else
{
		echo '註冊失敗！請重新再試！以下為可能原因：<br>';
		echo '帳號已被使用！<br>';
		echo '帳號或者密碼為空值！<br>';
        echo '<meta http-equiv=REFRESH CONTENT=5;url=reg.php>';

}

	$conn->close();
?>