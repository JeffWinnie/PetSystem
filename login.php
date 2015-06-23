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

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
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
							 		<li><a href="lost.php"class="active">尋寵刊登</a></li>
							 		<li><a href="lostinfo.php">尋寵資訊</a></li>
								  	<li><a href="find.php">尋獲刊登</a></li>
								  	<li><a href="findinfo.php">尋獲資訊</a></li>
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
					<h3>Login</h3>
				</div>
		</div>

					<div class="contact-down">
						<div class="container">
							<div class="contact-right">
								<div class="col-md-6 contact-left">
									<h5>登入系統</h5>
										<p>登入即可使用刊登功能！</p><br>
										<p>若無帳號請先註冊！</p>

								</div>
								<div class="col-md-6 contact-info">
									<?php
								if(@$_SESSION['account'] != null){
								?>
								<form action="logout.php" method="post">
												<font  face="微軟正黑體">帳號:</font><br>
												<input disabled="disabled" type="text" name="account" value="目前為登入狀態">
												<br />
												<font face="微軟正黑體">密碼:</font><br>
												<input disabled="disabled" type="password" name="password" >
												<br />
												<div class="clearfix"> </div>
												<input  type="submit" value="請先登出"/>
												<div class="clearfix"> </div>
											</form>		
								<?php
									}
							else
							{
								?>
								<form action="connect.php" method="POST">
									<font face="微軟正黑體">帳號:</font><br>
									<input type="text" name="account">
									<br />
									<font face="微軟正黑體">密碼:</font><br>
									<input type="password" name="password" >
									<br />
									<input type="submit" name="submit" value="Login">
									<input type="hidden" name="refer" value="<?php echo (isset($_GET['refer'])) ? $_GET['refer'] : 'index.php'; ?>">
									</form>	
									<form action="reg.php">
										<input type="submit" name="reg" value="註冊">
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