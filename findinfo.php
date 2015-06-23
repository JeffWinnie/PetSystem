<?php session_start(); ?>
<?php
include "conn.php";
?>

<!DOCTYPE html>
<html>
<head>

<title>Lost Info</title>
<!--bootstarp-css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--/bootstarp-css -->
<!--css-->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--/css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="SITENAME Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Philosopher:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,100italic,300italic' rel='stylesheet' type='text/css'>
<!--/fonts-->
<!--js-->
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
 <!---- start-smoth-scrolling---->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		 <!---- start-smoth-scrolling---->
<!--/js-->
</head>
<body>
<!--header-->
<div class="header">
	<div class="container">
		<div class="header-in">
		<div class="header-info">
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" class="img-responsive" alt=""/></a>
			</div>
					<div class="header-right">
						<div class="menu">
							<span class="menu"> </span>
								<ul class="navigatoin">
								 	<li><a href="index.php" >首頁</a></li>   <!--上面的標籤-->
									<li><a href="about.php" >關於</a></li>
							 		<li><a href="lost.php">尋寵刊登</a></li>
							 		<li><a href="lostinfo.php">尋寵資訊</a></li>
								  	<li><a href="find.php">尋獲刊登</a></li>
								  	<li><a href="findinfo.php" class="active">尋獲資訊</a></li>
								</ul>
						</div>		
													<!--script-nav -->	
			<script>
					$("span.menu").click(function(){
						$("ul.navigatoin").slideToggle("slow" , function(){
						});
					});
					</script>
					<script type="text/javascript">
							jQuery(document).ready(function($) {
								$(".scroll").click(function(event){		
									event.preventDefault();
									$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
								});
							});
							</script>
						<div class="clearfix"> </div>
					<!-- /script-nav -->
					</div>
											<div class="clearfix"> </div>
		</div>
		</div>
	</div>

<div class="contact">
	<div class="contacs">
		<div class="container">
				<div class="contacf">
					<h3>Find Pet</h3>
				</div>
		</div>

					<div class="contact-down">
						<div class="container">
							<div class="contact-right">
								<div class="col-md-6 contact-left">
								</br>

									<table border="1" width="999" align="center">
										<tr>
											<td width="50">資料編號</td>
										    <td width="100">通報人</td>
										    <td width="100">寵物種類</td>
										    <td width="100">寵物性別</td>
										    <td width="100">地點</td>
										    <td width="100">連絡電話</td>
										    <td width="200">詳細資料</td>
										</tr>
									</table>
										<?php										
										$sql = "SELECT * FROM find";
										$result = $conn->query($sql);
										if ($result->num_rows > 0) {
											while($row = $result->fetch_assoc()) {
												?>
										<table border="1" width="999" align="center">		
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
								<?php
								if(@$_SESSION['account'] != null){
								?>
								<form action="finddelete.php" method="POST">
										<div align="center">
										 <font size="6"><b>若要取消刊登，請輸入編號&nbsp;:&nbsp;</b></font><input type="textbox" name="deleteid">									 					
										&nbsp;&nbsp;<input type="submit" value="刪除刊登">	
										 </div>
										 </form>
								<?php
									}
								?>

								</div>
								<div class="clearfix"> </div>
								</div>

						</div>
					</div>
</div>		

<!--/header-->
<!--footer-->
<div class="footer">
	<div class="copy-rights">
		<p>Made by NeetTeam</a></p>
	</div>
			<div class="clearfix"> </div>
</div>
<!--footer-->
	</div>		
	</div>
</body>
</html>