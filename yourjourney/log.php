<?php
    session_start();
 ?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>YourJourney</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script src="jquery.placeholder.js"></script>
		<script>
        $(function() {
         $('input').placeholder();
        });    
		</script>
	</head>

<body vlink="#F2F2F2" alink="#F2F2F2">
	<div id="container">
		<div id="navigation">	
			<div id="fieldforbutton4">
				<br><a href="index.php" ><left>YourJourney </left></a>
			</div>								
			<div id="fieldforbutton1">
				<section class="flat">
					<button> <a href="log.php">Log in </a></button>
				</section>
			</div>
			<div id="fieldforbutton2">
				<section class="flat">
					<button> <a href="reg.php"> Registration </a></button>
				</section>
			</div>
			<div id="fieldforbutton2">
				<section class="flat">
					<button> <a href=<help.php">Help </a></button>
				</section>
			</div>	
			<div id="fieldforbutton2">
				<section class="flat">								 
					<div class="droplink">
						<a href="#" align="center"><br>Menu</a>
						<ul>
						<li><a href="qwest.php" target="_blank">Questionnaire</a></li>
						<li><a href="photo.php" target="_blank">Photo</a></li>
						<li><a href="trav.php" target="_blank">Our travelers</a></li>
						<li><a href="proj.php" target="_blank">About our project</a></li>
						<li><a href="search.php" target="_blank">Search</a></li>
						<li><a href="shop.php" target="_blank">On-line shop</a></li>
						<li><a href="guest.php" target="_blank">Reviews</a></li>
						</ul>
					</div>								
				</section>
			</div>	
		</div>		
		<div id="placeforlog">										
			<form id="signup" action="testreg.php" method="post">
				<h1> To login to your personal account enter your username and password. </h1>
				<input placeholder="Email" required="" name="login" type="text" size="15" maxlength="15">
				<input placeholder="Password" required="" name="password" type="password" size="15" maxlength="15">			                
				<button type="submit">Log in</button>    
			</form>
			<br><br>
			<font color="black">If you are not registered, click on the link: </font>
			<a href="reg.php" color="black"><font color="#086A87"> Registration </font></a> 			
			<br>
		</div>	
		<div id="footer">
			VictoriaPosyagina, 2015
        </div>
	</div>
    <?php
    // Проверяем, пусты ли переменные логина и id пользователя
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
    
    }
    else
    {

    // Если не пусты, то мы выводим ссылку
    echo "You are logged in as ".$_SESSION['login']."<br>
	<a href='index.php'>Go to home page</a>";
    }
    ?>	 
</body>
</html>