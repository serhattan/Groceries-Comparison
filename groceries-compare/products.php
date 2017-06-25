<?php include "header.php" ?>
<style>
	.carousel-item{
		text-align: center;
		text-decoration: none;
		font-weight: bold;
		cursor:pointer;
		font-size: 1.5em;
		color: #ef5350;
	}
	.carousel-item>img{
		cursor:pointer;
	}
</style>
<div class="products">
	<div class="carousel">
		<a class="carousel-item" href="#breakfastSquare" onclick="productsToggle('breakfastSquare'); $('html, body').animate({ scrollTop: $('#breakfastSquare').offset().top }, 1000);"><img src="css/images/mbreakfast.jpg">Süt & Kahvaltılık</a>
		<a class="carousel-item" href="#fruitSquare" onclick="productsToggle('fruitSquare'); $('html, body').animate({ scrollTop: $('#fruitSquare').offset().top }, 1000);"><img src="css/images/mfruit.jpg">Meyve & Sebze</a>
		<a class="carousel-item" href="#foodSquare" onclick="productsToggle('foodSquare'); $('html, body').animate({ scrollTop: $('#foodSquare').offset().top }, 1000);"><img src="css/images/mfood.jpg">Gıda & Şekerleme</a>
		<a class="carousel-item" href="#meatSquare" onclick="productsToggle('meatSquare'); $('html, body').animate({ scrollTop: $('#meatSquare').offset().top }, 1000);"><img src="css/images/mmeat.jpg">Et & Balık</a>
		<a class="carousel-item" href="#beveragesSquare" onclick="productsToggle('beveragesSquare'); $('html, body').animate({ scrollTop: $('#beveragesSquare').offset().top }, 1000);"><img src="css/images/mbaverages.jpg">İçecekler</a>
		<a class="carousel-item" href="#spraySquare" onclick="productsToggle('spraySquare'); $('html, body').animate({ scrollTop: $('#spraySquare').offset().top }, 1000);"><img src="css/images/mspray.jpg">Deterjan & Temizlik</a>
	</div>
</div>

<div id="breakfastSquare" style="display:none;">
	<h3 class="red-text">Süt & Kahvaltılık</h3>
	<div class="row">
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mbreakfast.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mfruit.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mfood.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mmeat.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mbaverages.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mspray.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mspray.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mspray.jpg" class="responsive-img">
				</div>
			</div>
		</div>
	</div>
</div>
<div id="fruitSquare" style="display:none;">
	<h3 class="red-text">Meyve & Sebze</h3>
	<div class="row">
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mbreakfast.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mfruit.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mfood.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mmeat.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mbaverages.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mspray.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mspray.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mspray.jpg" class="responsive-img">
				</div>
			</div>
		</div>
	</div>
</div>
<div id="foodSquare" style="display:none;">
	<h3 class="red-text">Gıda & Şekerleme</h3>
	<div class="row">
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mbreakfast.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mfruit.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mfood.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mmeat.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mbaverages.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mspray.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mspray.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mspray.jpg" class="responsive-img">
				</div>
			</div>
		</div>
	</div>
</div>
<div id="meatSquare" style="display:none;">
	<h3 class="red-text">Et & Balık</h3>
	<div class="row">
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mbreakfast.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mfruit.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mfood.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mmeat.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mbaverages.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mspray.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mspray.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mspray.jpg" class="responsive-img">
				</div>
			</div>
		</div>
	</div>
</div>
<div id="beveragesSquare" style="display:none;">
	<h3 class="red-text">İçecekler</h3>
	<div class="row">
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mbreakfast.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mfruit.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mfood.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mmeat.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mbaverages.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mspray.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mspray.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mspray.jpg" class="responsive-img">
				</div>
			</div>
		</div>
	</div>
</div>
<div id="spraySquare" style="display:none;">
	<h3 class="red-text">Deterjan & Temizlik</h3>
	<div class="row">
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mbreakfast.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mfruit.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mfood.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mmeat.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mbaverages.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mspray.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mspray.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<img src="css/images/mspray.jpg" class="responsive-img">
				</div>
			</div>
		</div>
	</div>
</div>
<script>
//products show hide categories script
function productsToggle(divId){
	document.getElementById("breakfastSquare").style.display="none";
	document.getElementById("fruitSquare").style.display="none";
	document.getElementById("foodSquare").style.display="none";
	document.getElementById("beveragesSquare").style.display="none";
	document.getElementById("meatSquare").style.display="none";
	document.getElementById("spraySquare").style.display="none";

	var x = document.getElementById(divId);
	if (x.style.display === 'none') {
		x.style.display = 'block';
	}else{
		x.style.display = 'none';
	}
}
</script>
<?php include "footer.php" ?>