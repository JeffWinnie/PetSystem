<?php
include "conn.php";
?>
<table border="1" width="999" align="center" >
                                        <tr>
                                            <td width="50">資料編號</td>
                                            <td width="100">通報人</td>
                                            <td width="100">寵物類別</td>
                                            <td width="100">寵物性別</td>
                                            <td width="100">地點</td>
                                            <td width="100">連絡電話</td>
                                            <td width="200">詳細資料</td>
                                        </tr>
                                    </table>
<?php

$sql = "SELECT * FROM lost";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		?>
<table border="1" width="999" align="center" >		
	<tr>
	<td width="50"> <?php echo $row['id'];?> </td>
    <td width="100"> <?php echo $row['name'];?> </td>
    <td width="100"> <?php echo $row['type'];?> </td>
    <td width="100"> <?php echo $row['sex'];?> </td>
    <td width="100"> <?php echo $row['place'];?> </td>
    <td width="100"> <?php echo $row['phone'];?> </td>
    <td width="200"> <?php echo $row['information'];?> </td>
</tr>
<?php
}
}
$conn->close();
?>
</table>
