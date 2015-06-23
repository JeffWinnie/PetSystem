<?php include("conn.php"); 
echo '<br>';
session_start();



							
$id = $_POST['deleteid'];
$account =$_SESSION['account'];
$sql="SELECT id,name FROM lost WHERE id = '$id'; ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
//echo $account;
if($row['id'] == $id && $row['name']==$account ){
	$sql = "DELETE FROM lost WHERE id = '$id';" ;
		if($conn->query($sql)==true)
		{
		echo '<br>';
		echo '刪除編號：'; 
		echo $id; 
		echo '資料成功！3秒後跳回刊登頁面';
		echo '<br>';
		echo '<meta http-equiv=REFRESH CONTENT=5;url=lostinfo.php>';
		}
		else
		{
			echo '<br>';
			echo '刪除失敗！';
		}
			}
else{
	if($row['id'] != $id)
	{
	echo '無此編號！3秒後跳回刊登頁面';
	echo '<meta http-equiv=REFRESH CONTENT=5;url=lostinfo.php>';
	}
	elseif($row['name']!=$account)
	{
	echo '這不是你的資料！3秒後跳回刊登頁面';
	echo '<meta http-equiv=REFRESH CONTENT=5;url=lostinfo.php>';
	}
}

$conn->close();
?>