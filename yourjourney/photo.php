<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>YourJourney</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
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
		<div id="header1">
			Our user always try to share impressions from his travels, laying out stunning photos of the places visited, thanks to our advice.
		</div>
		<div id="gallery">
			<div id="panel">			
				<img id="largeImage" src="image_01_large.jpg"/>									
			<div id="description">Ruins Kerkyra</div>
		</div>
		<div id="thumbs">
			<img src="image_01_thumb.jpg" alt="Ruins Kerkyra" />
			<img src="image_02_thumb.jpg" alt="Reserved China" />
			<img src="image_03_thumb.jpg" alt="After the kayak" />
			<img src="image_04_thumb.jpg" alt="The Roman road" />
			<img src="image_05_thumb.jpg" alt="Nonfreezing Yenisei" />
		</div>				
		<script>
		$('#thumbs').delegate('img','click', function(){ $('#largeImage').attr('src',$(this).attr('src').replace('thumb','large')); $('#description').html($(this).attr('alt')); });
		</script>
		<div id="thumbs">
			<form name='form' enctype='multipart/form-data' method='post' action='add_images.php'>
			<p>
			<label class='label'>Choose image</label>
			<br>
			<input type='file' name='myfile' id='myfile' class='input'/>
			</p><br><p>
			<table>
			<tr><td>
			<input type='image' title='Save'> 
			</td>
			<td>
			<a href='indeximg.php' class='add_images'>
			<div class='add_images_text'>Back</div></a>
			</td></tr></table>
			</p>
			</form>
		</div>	
		<div id="footer">
			VictoriaPosyagina, 2015
		</div>	
	</div>
</body>
</html>