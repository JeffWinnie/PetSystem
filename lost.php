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
echo "Connected successfully";
?>

<!DOCTYPE html>
<html>
<head>
<title>Lost</title>
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
							 		<li><a href="lost.php"class="active">尋寵啟示</a></li>
								  	<li><a href="find.php">尋獲通報</a></li>
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
					<h3>Lost Pet</h3>
				</div>
		</div>

					<div class="contact-down">
						<div class="container">
							<div class="contact-right">
								<div class="col-md-6 contact-left">
									<h5>遺失通報 須知</h5>
										<p>請勿張貼不實資訊</p>

											 <ul>
											 	<li><font size=3>範例</font></li>
												<li>品種：貓</li>
												<li>寵物性別：母</li>
												<li>遺失地點：高雄市楠梓區創新路</li>
												<li>聯絡資訊：0911-111-111 何先生</li>
												<li>詳細資訊：黑色、銀色項圈...etc</li>												
											</ul>
								</div>
								<div class="col-md-6 contact-info">
											<form action="lostinsert.php" method="post">
												<input type="text" name="name" value="使用者名稱" onfocus="this.value='';" onblur="if (this.value == '') {this.value = '使用者名稱';}">	
												<input type="text" name="type" value="品種" onfocus="this.value='';" onblur="if (this.value == '') {this.value = '品種';}">				
												<input type="text" name="sex" value="寵物性別" onfocus="this.value='';" onblur="if (this.value == '') {this.value = '寵物性別';}">
												<input type="text" name="place" value="遺失地點" onfocus="this.value='';" onblur="if (this.value == '') {this.value = '尋獲/目擊地點';}">
												<input type="text" name="phone" value="聯絡資訊" onfocus="this.value='';" onblur="if (this.value == '') {this.value = '聯絡資訊';}">
												<textarea cols="70" rows="5" name="information" onfocus="this.value='';" onblur="if (this.value == '') {this.value = '詳細資訊';}" >詳細資訊 </textarea>
												<div class="clearfix"> </div>
												<input type="submit"value="SEND" />
												<div class="clearfix"> </div>
											</form>					
								</div>
								<div class="clearfix"> </div>
								</div>
														<div class="clearfix"> </div>
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