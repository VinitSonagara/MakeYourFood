<?php 
	session_start();
	if(!isset($_SESSION['username'])) {
		header('location:login.php');
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>MakeYourFood</title>


	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600|Quicksand" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">

	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="sidebar.css">
	<link rel="stylesheet" type="text/css" href="ham.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body>
	<span class="link">
		<a href="../login/logout.php">Logout <i class="fas fa-sign-out-alt"></i>
          </a>
	</span>
    <span class="link">
    	<p><b><?php echo $_SESSION['username']; ?> <i class="far fa-user"></i></b></p>
    </span>
	<div id="sidebar">
		<div class="icon">
			<div class="hamburger"></div>
		</div>
		<!-- <h1>Make Your Food</h1> -->

		
		<ul>
			<li>
				<div id="title">
					MakeYourFood
				</div>
			</li>
		<form name="form" method = "POST" id="foram" target="_blank" action = "recipe.php">


			<div id="wholeMainList">
				<li class="mainLis dropdown" id="grain">
					<img class="sizeIcons" src="Icons/sack.svg"> Grains & Cereals
					<img class="arrowIcons" src="Icons/arrow.svg">
					
					

				</li>
			<div class="dropContainer">
				<ul class="someUls">
					<li><input type="checkbox" name="rice" value="1"> Rice</li>
					<li><input type="checkbox" name="bread" value="1"> Bread</li>
					<li><input type="checkbox" name="pearl" value="1"> Pearl Millet (Bajra)</li>
					<li><input type="checkbox" name="wheat" value="1"> Wheat</li>
					<li><input type="checkbox" name="barley" value="1"> Barley</li>
					<li><input type="checkbox" name="corn" value="1"> Corn</li>
					<li><input type="checkbox" name="sorghum" value="1"> Sorghum Bicolor (Jowar)</li>
					<li><input type="checkbox" name="redGram" value="1"> Red Gram (Tur Dal)</li>
					<li><input type="checkbox" name="chickpeas" value="1"> Chickpeas (Chana)</li>
					<li><input type="checkbox" name="split" value="1"> Split Bengal Gram (Chana Dal)</li>
					<li><input type="checkbox" name="cowPeas" value="1"> Cow Peas (Lobhia)</li>
					<li><input type="checkbox" name="pea" value="1"> Pea (Matar)</li>
					<li><input type="checkbox" name="greenGram" value="1"> Green Gram (Mung Dal)</li>
					<li><input type="checkbox" name="kidney" value="1"> Kidney Beans (Rajma)</li>
					<li><input type="checkbox" name="sesame" value="1"> Sesame</li>
					<li><input type="checkbox" name="blackGram" value="1"> Black Gram (Urad Daal)</li>
				</ul>
			</div>
			<li class="mainLis dropdown" id="veges">
				<img class="sizeIcons" src="Icons/carrot.svg"> Vegetables 
				<img class="arrowIcons" src="Icons/arrow.svg">	
			</li>
			<div class="dropContainer">
				<ul class="someUls">
					<li><input type="checkbox" name="spinach" value="1"> Spinach</li>
					<li><input type="checkbox" name="cabbage" value="1"> Cabbage</li>
					<li><input type="checkbox" name="onion" value="1"> Onion</li>
					<li><input type="checkbox" name="tomato" value="1"> Tomato</li>
					<li><input type="checkbox" name="brinjal" value="1"> Brinjal</li>
					<li><input type="checkbox" name="capsicum" value="1"> Capsicum</li>
					<li><input type="checkbox" name="potato" value="1"> Potato</li>
					<li><input type="checkbox" name="carrot" value="1"> Carrot</li>
					<li><input type="checkbox" name="cauliflower" value="1"> Cauliflower</li>
					<li><input type="checkbox" name="bitter gourd" value="1"> Bitter Gourd</li>
				</ul>
			</div>

			<li class="mainLis dropdown" id="fruits">
				<img class="sizeIcons" src="Icons/apple.svg"> Fruits
				<img class="arrowIcons" src="Icons/arrow.svg">
			</li>
			<div class="dropContainer">
				<ul class="someUls">
					<li><input type="checkbox" name="apple" value="1"> Apple</li>
					<li><input type="checkbox" name="orange" value="1"> Orange</li>
					<li><input type="checkbox" name="banana" value="1"> Banana</li>
					<li><input type="checkbox" name="pomegranate" value="1"> Pomegranate</li>
					<li><input type="checkbox" name="coconut" value="1"> Coconut</li>
					<li><input type="checkbox" name="cherry" value="1"> Cherry</li>
					<li><input type="checkbox" name="mango" value="1"> Mango</li>
					<li><input type="checkbox" name="strawberry" value="1"> Strawberry</li>
					<li><input type="checkbox" name="pineapple" value="1"> Pineapple</li>
				</ul>
			</div>

			<li class="mainLis dropdown" id="dairy">
				<img class="sizeIcons" src="Icons/cow.svg"> Dairy Products 
				<img class="arrowIcons" src="Icons/arrow.svg">
			</li>
			<div class="dropContainer">
				<ul class="someUls">
					<li><input type="checkbox" name="milk" value="1"> Milk</li>
					<li><input type="checkbox" name="butter" value="1"> Butter</li>
					<li><input type="checkbox" name="ghee" value="1"> Ghee</li>
					<li><input type="checkbox" name="butterMilk" value="1"> Butter Milk</li>
					<li><input type="checkbox" name="curd" value="1"> Curd</li>
					<li><input type="checkbox" name="yogurt" value="1"> Yogurt</li>
					<li><input type="checkbox" name="cottage" value="1"> Cottage Cheese (Paneer)</li>
					<li><input type="checkbox" name="cheese" value="1"> Cheese</li>
				</ul>
			</div>

			<li class="mainLis dropdown" id="spice">
				<img class="sizeIcons" src="Icons/garlic.svg"> Spices 
				<img class="arrowIcons" src="Icons/arrow.svg">
			</li>
			<div class="dropContainer">
				<ul class="someUls">
					<li><input type="checkbox" name="cardamon" value="1"> Cardamon</li>
					<li><input type="checkbox" name="salt" value="1"> Salt</li>
					<li><input type="checkbox" name="clove" value="1"> Clove</li>
					<li><input type="checkbox" name="black pepper" value="1"> Black Pepper</li>
					<li><input type="checkbox" name="cumin" value="1"> Cumin</li>
					<li><input type="checkbox" name="coriander" value="1"> Coriander Powder</li>
					<li><input type="checkbox" name="nutmeg" value="1"> Nutmeg</li>
					<li><input type="checkbox" name="mustard" value="1"> Mustard Seeds</li>
					<li><input type="checkbox" name="fenugreek" value="1"> Fenugreek Leaves</li>
					<li><input type="checkbox" name="turmeric" value="1"> Turmeric Powder</li>
					<li><input type="checkbox" name="saffron" value="1"> Saffron</li>
					<li><input type="checkbox" name="redChilli" value="1"> Red Chilli</li>
					<li><input type="checkbox" name="ginger" value="1"> Ginger</li>
					<li><input type="checkbox" name="garlic" value="1"> Garlic</li>
					<li><input type="checkbox" name="bay" value="1"> Bay Leaf</li>
					<li><input type="checkbox" name="curryLeaf" value="1"> Curry Leaf</li>
				</ul>
			</div>

			<li class="mainLis dropdown" id="other">
				<img class="sizeIcons" src="Icons/olive-oil.svg"> Oils 
				<img class="arrowIcons" src="Icons/arrow.svg">
			</li>
			<div class="dropContainer">
				<ul class="someUls">
					<li><input type="checkbox" name="oil" value="1"> Olive Oil</li>
					<li><input type="checkbox" name="oil" value="1"> Mustard Oil</li>
					<li><input type="checkbox" name="oil" value="1"> Coconut Oil</li>
					<li><input type="checkbox" name="oil" value="1"> Rice Bran Oil</li>
					<li><input type="checkbox" name="oil" value="1"> Sunflower Oil</li>
					<li><input type="checkbox" name="oil" value="1"> Palm Oil</li>
					<li><input type="checkbox" name="oil" value="1"> Soyabean Oil</li>
				</ul>
			</div>

			<div id="btn">
				<button class="pure-button">Get Recipes</button>
			</div>


		</div>





	



	



	



	


	


	










	<script type="text/javascript" src="sidebar.js"></script>
	<script type="text/javascript" src="ham.js"></script>
</body>
</html>