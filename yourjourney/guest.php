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
		<div id="content1">
			<?php include("read.php"); ?>
			<br/>
			<form name="" action="add.php" method="post" align="center">
				<table align="center">
					<tr> <td><font color="#000000"> Your name:</font></td>
					<td> <input name="data[0]" type="text" value=""></td>
					</tr>
					<tr><td><font color="#000000">Your e-mail:</font></td>
					<td> <input name="data[1]" type="text" value=""> </td>
					</tr>
					<tr><td> <font color="#000000">Text of your message:</font></td>
					<td> <textarea name="data[2]" rows=5 cols=20 wrap="off"></textarea> </td> </tr>
				</table>
			<br/><br>
				<input type="submit" name="add" value="Добавить комментарий"> <br/>		
			</form>			
		</div>	
		<div id="footer">
			VictoriaPosyagina, 2015
		</div>			
	</div>
</body>
</html>
