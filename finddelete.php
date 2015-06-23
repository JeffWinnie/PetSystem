<?php include("conn.php"); 
echo '<br>';
session_start();



							
$id = $_POST['deleteid'];
$account =$_SESSION['account'];
$sql="SELECT id,name FROM find WHERE id = '$id'; ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
//echo $account;
if($row['id'] == $id && $row['name']==$account ){
	$sql = "DELETE FROM find WHERE id = '$id';" ;
		if($conn->query($sql)==true)
		{
		echo '<br>';
		echo '刪除編號：'; echo $id; echo'資料成功！<br>';
		echo '<meta http-equiv=REFRESH CONTENT=5;url=findinfo.php>';
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
	echo '無此編號！';
	echo '<meta http-equiv=REFRESH CONTENT=5;url=findinfo.php>';
	}
	elseif($row['name']!=$account)
	{
	echo '這不是你的資料！';
	echo '<meta http-equiv=REFRESH CONTENT=5;url=findinfo.php>';
	}
}

$conn->close();
?>