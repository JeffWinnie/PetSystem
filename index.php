<?php session_start(); ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pet";

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
<title>NKFUST MIS HandsomeBoy Team - Pet System</title> <!-- 標籤顯示-->
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
								 	<li><a href="index.php" class="active">首頁</a></li>   <!--上面的標籤-->
									<li><a href="about.php">關於</a></li>
							 		<li><a href="lost.php">尋寵刊登</a></li>
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
					<div class="header-info-down">
							<div class="header-info-coe">
								<a href="#"><img src="images/logo-1.png" class="img-responsive" alt=""/></a>
								<h2>尋找/通報/遺失寵物</h2>
								<h1>PET SYSTEM</h1>
								<p> 認養代替購買 </p>
								<?php
								if(@$_SESSION['account'] != null){
								?>
								<a class="laorrent" href="logout.php">Logout</a>
								<?php
									}
							else
							{
								?>
								<a class="laorrent" href="login.php">Login</a>
								<?php
							}
							?>
							</div>
					</div>
	</div>	
</div>			
<!--/header-->
<div class="content">
	<div class="container">
		<div class="about">
			<div class="about-info">
				<div class="col-md-6 info">
					<h3>起源</h3>
					<a href="#"><img src="images/bg.jpg" class="img-responsive" alt=""/></a>
							<p>一群大學生，<br>
								為了愛、希望、勇氣，<br>
								充滿汗水、淚水、口水，<br>
								的故事。</p>
								
				</div>
									<div class="col-md-6 intro">
										<h3>團隊成員</h3>
											
												<div class="lorem"><span> 0224043 韋辰 </span></div>
												<p>- 網頁前端、php撰寫、資料庫建置</p>
												<div class="lorem"><span> 0224046 佑任 </span></div>
												<p>- php撰寫、進度規劃、除錯</p>
												<div class="lorem"><span> 0224090 宇晟 </span></div>
												<p>- 網頁前端、除錯、資料整理</p>
												<div class="lorem"><span> 0224091 紀憲 </span></div>
												<p>- php撰寫、進度規劃、除錯</p>
													
									</div>
																			<div class="clearfix"> </div>
				</div>
			</div>
<div class="sevices">
	<div class="service-info">
		<div class="col-md-8 sed">
			<div class="sed-intro">
				<h4>新公告</h4>
					<p>【2015/06/23】天氣晴</p><br>
						<a class="sed-info-top" href="#">More</a>
			</div>
							<div class="sed-info">
								<h4>近期消息</h4>
								    <p>	【2015/06/23】會員系統開放註冊<br>
								    	【2015/06/22】刊登資訊頁面完成<br>
								    	【2015/06/20】前端整體架構設計完成<br>
								    	【2015/06/15】前端整體架構設計完成<br>
								    </p>
									
										<a class="sed-info-bottom" href="https://github.com/JeffWinnie/PetSystem">More</a>
							</div>
			</div>
											<div class="col-md-4 nibh">
												<h4>相關連結</h4>
													<ul class="g-navgation">
														<li class="g-navgation-left">
															
														</li>
														<li class="g-navgation-right">
															<p> 高第一動保社 </p>
															<a href="https://www.facebook.com/nkfust.apc?pnref=lhc">+Read More</a>
														</li>
														<li class="g-navgation-left">
																
														</li>
														<li class="g-navgation-right">
																<p> 楠梓的獸醫院 </p>
																<a href="https://www.facebook.com/pages/%E4%BD%91%E5%BA%B7%E5%8B%95%E7%89%A9%E9%86%AB%E9%99%A2/216811425012676">+Read More</a>
														</li>
														<li class="g-navgation-left">
																
														</li>
														<li class="g-navgation-right">
																<p> 猴子的FB </p>
																<a href="https://www.facebook.com/alan.liu.50309?fref=ts">+Read More</a>
														</li>
														<li class="g-navgation-left">
																
														</li>
														<li class="g-navgation-right">
																<p> 獸獸的粉專 </p>
																<a href="https://www.facebook.com/pages/%E7%8D%B8%E7%8D%B8/229447847103115?fref=ts">+Read More</a>
															</li>
																<div class="clearfix"> </div>
													</ul>
											</div>						
	</div>
</div>
<div class="footer">
	<div class="copy-rights">
		<p>Made by NeetTeam</a></p>
	</div>
															<div class="clearfix"> </div>
</div>
	</div>
</div>			
</body>
</html>