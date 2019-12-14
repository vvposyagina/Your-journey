<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>YourJourney</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
 
<body vlink="#F2F2F2" alink="#F2F2F2"> 
	<div id="container">
		<div id="navigation">	
			<div id="fieldforbutton4">
				<br><a href="index.php"><left>YourJourney</left></a>
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
					<button> <a href="help.php">Help </a></button>
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
		<div id="qwest1">
			<form action="form.php" method="post" name="forma"> 
				<fieldset> 
				<legend><font size=5 color= "#B22222">Add new client</font></legend> 
				<label for="first_name">First name:</label><br/> 
				<input type="text" name="first_name" size="30"><br/> 

				<label for="last_name">Last name:</label><br/> 
				<input type="text" name="last_name" size="30"><br/> 

				<label for="last_name">Phone number:</label><br/> 
				<input type="text" name="tel_name" size="30"><br>

				<label for="ad">Address:</label><br/> 
				<input type="text" name="ad" size="30"><br/> 

				<label for="dat">Date of birthday:</label><br/> 
				<input name="dat" type="text" value="" size="30"> 
				</fieldset> <br/> 

				<fieldset> <!-- Браузеры для повышения наглядности отображают результат использования тега <fieldset> в виде рамки. -->
				<input id="submit" type="submit" value="Send data"><br/> 
				</fieldset> 
			</form> 
		</div>
		<div id="qwest1">
			<font size=5 color= "#B22222">Search data about clients</font><br><br>
				<fieldset> 
				<form method="post" action="select_user.php"> 
				<label for="first_name">First name for search:</label><br/> 
				<input type="text" name="first_name" size="30"><br/> 
				<label for="last_name">Last name for search:</label><br/> 
				<input type="text" name="last_name" size="30"><br/> 

				<input id="submit" type="submit" value="Find and output data">
				<br/> 
				</form> </fieldset> 
				<fieldset> 
				<form method="post" action="all_users.php"> 
				<input id="submit" type="submit" value="Output all clients">
				<br/> 
				</form> 
				</fieldset> 
				<a href="info_form.html">Add new client</a>
		</div>
		<div id="footer">
			VictoriaPosyagina, 2015
		</div>
	</div> 	
</body>
</html>