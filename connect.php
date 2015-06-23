<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("conn.php");
$account = $_POST['account'];
$password = $_POST['password'];
	
//搜尋資料庫資料
$sql = "SELECT * FROM users where account = '$account'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($account != null && $password != null && $row['account'] == $account && $row['password'] == $password)
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['account'] = $account;
        echo '登入成功!即將返回主頁！';
        echo '<meta http-equiv=REFRESH CONTENT=5;url=index.php>';
}
else
{
		
        echo '登入失敗!即將跳回登入頁！';
        echo '<meta http-equiv=REFRESH CONTENT=5;url=login.php>';
}
?>