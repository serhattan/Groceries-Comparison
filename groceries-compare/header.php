 <html>
 <head>
 	<?php
 	//clearing cache
 	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
 	header("Cache-Control: post-check=0, pre-check=0", false);
 	header("Pragma: no-cache");
 	?>
 	<!--Import Google Icon Font-->
 	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 	<!--Import materialize.css-->
 	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
 	<link type="text/css" rel="stylesheet" href="css/custom.css">

 	<!--Font Awesome-->
 	<script src="https://use.fontawesome.com/724b0a3112.js"></script>
 	<!--Let browser know website is optimized for mobile-->
 	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 	<title>Groceries Comparison</title>
 </head>
 <body>
 	<style>
 		.navbarButtons{
 			margin-top: 0.2em;
 		}
 		.fixed-action-btn{
 			position: fixed;
 			bottom:45px;
 			right:24px;
 		}
 		#updatedInfo{
 			font-weight: bold;
 		}
 	</style>
 	<div class="container">
 		<nav class="cyan">
 			<div class="nav-wrapper">
 				<a href="#" class="brand-logo hide-on-med-and-down right">Groceries Comparison</a>
 				<a href="#" data-activates="slide-out" class="button-collapse right"><i class="material-icons">menu</i></a>
 				<form>
 					<div class="input-field">
 						<input id="search" type="search" required>
 						<label class="label-icon" id="searchButton" for="search"><i class="material-icons">search</i></label>
 					</div>
 				</form>
 			</div>
 		</nav>
 		<!--SIDE NAV MENU-->
 		<div class="sidenav">
 			<ul id="slide-out" class="side-nav">
 				<li>
 					<div class="userView">
 						<div class="background">
 							<img src="https://cdn.pixabay.com/photo/2017/02/15/11/05/background-2068283__340.jpg">
 						</div>
 						<a href="#!user"><img class="circle" src="http://materializecss.com/images/sample-1.jpg"></a>
 						<a href="#!name"><span class="white-text name">Groceries Compare</span></a>
 						<a href="#!email"><span class="white-text email">info@groceriescompare.com</span></a>
 					</div>
 				</li>
 				<li><a href="index.php" class="waves-effect waves-orange">Anasayfa</a></li>
 				<li><a href="groceries.php" class="waves-effect waves-orange">Marketler</a></li>
 				<li><a href="products.php" class="waves-effect waves-orange">Ürünler</a></li>
 				<li><a href="compare.php" class="waves-effect waves-orange">Karşılaştırma</a></li>
 			</ul>
 		</div>
 		<!--NAVBAR MENU-->
 		<div class="row">
 			<div class="navbarButtons center-align hide-on-med-and-down">
 				<div class="col m3">
 					<a href="index.php" class="white grey-text text-darken-1 z-depth-0 waves-effect waves-yellow btn-large navbarButton" style="width: 100%;"><strong>Anasayfa     </strong></a>
 				</div>
 				<div class="col m3">
 					<a href="groceries.php" class="white grey-text text-darken-1 z-depth-0 waves-effect waves-yellow btn-large navbarButton" style="width: 100%;"><strong>Marketler</strong></a>
 				</div>
 				<div class="col m3">
 					<a href="products.php" class="white grey-text text-darken-1 z-depth-0 waves-effect waves-yellow btn-large navbarButton" style="width: 100%;"><strong>Ürünler   </strong></a>
 				</div>
 				<div class="col m3">
 					<a href="compare.php" class="white grey-text text-darken-1 z-depth-0 waves-effect waves-yellow btn-large navbarButton" style="width: 100%;"><strong>Karşılaştırma</strong></a>
 				</div>
 			</div>
 		</div>

 		<!--TAP TARGET-->
 		<div class="fixed-action-btn">
 			<a href="#" id="menu" onclick="$('.tap-target').tapTarget('open')" class="waves-effect waves-light btn btn-floating  red lighten-1"><i class="material-icons">menu</i></a>
 		</div>
 		<!--TAP TARGET CONTENT-->
 		<div class="tap-target cyan" data-activates="menu">
 			<div class="tap-target-content white-text">
 				<h5>Ürünlerin Son<br> Güncellenme Tarihi</h5>
 				<h5 class=" red-text lighten-1" id="updatedInfo">20.6.2017</h5>
 			</div>
 		</div>