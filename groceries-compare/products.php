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
	.child>span{
		color: #ef5350;
		font-weight: bold;
		font-size: 1em;
	}
</style>
<div class="products">
	<div class="carousel">
		<a class="carousel-item" href="#" onclick="productsToggle('breakfastSquare'); $('html, body').animate({ scrollTop: $('#breakfastSquare').offset().top }, 1000);"><img src="css/images/mbreakfast.jpg">Süt & Kahvaltılık</a>
		<a class="carousel-item" href="#" onclick="productsToggle('fruitSquare'); $('html, body').animate({ scrollTop: $('#fruitSquare').offset().top }, 1000);"><img src="css/images/mfruit.jpg">Meyve & Sebze</a>
		<a class="carousel-item" href="#" onclick="productsToggle('foodSquare'); $('html, body').animate({ scrollTop: $('#foodSquare').offset().top }, 1000);"><img src="css/images/mfood.jpg">Gıda & Şekerleme</a>
		<a class="carousel-item" href="#" onclick="productsToggle('meatSquare'); $('html, body').animate({ scrollTop: $('#meatSquare').offset().top }, 1000);"><img src="css/images/mmeat.jpg">Et & Balık</a>
		<a class="carousel-item" href="#" onclick="productsToggle('beveragesSquare'); $('html, body').animate({ scrollTop: $('#beveragesSquare').offset().top }, 1000);"><img src="css/images/mbaverages.jpg">İçecekler</a>
		<a class="carousel-item" href="#" onclick="productsToggle('spraySquare'); $('html, body').animate({ scrollTop: $('#spraySquare').offset().top }, 1000);"><img src="css/images/mspray.jpg">Deterjan & Temizlik</a>
	</div>
</div>

<div id="breakfastSquare" style="display:none;">
	<h3 class="red-text">Süt & Kahvaltılık</h3>
	<div class="row">
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<span>Peynir</span>
					<img src="css/images/mbreakfast.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<span>Tereyağı</span>
					<img src="css/images/mfruit.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<span>Yoğurt</span>
					<img src="css/images/mfood.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<span>Yumurta</span>
					<img src="css/images/mmeat.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<span>TEST</span>
					<img src="css/images/mbaverages.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<span>TEST</span>
					<img src="css/images/mspray.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<span>TEST</span>
					<img src="css/images/mspray.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
					<span>TEST</span>
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
				<span>TEST</span>
					<img src="css/images/mbreakfast.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
					<img src="css/images/mfruit.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
					<img src="css/images/mfood.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
					<img src="css/images/mmeat.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
					<img src="css/images/mbaverages.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
					<img src="css/images/mspray.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
					<img src="css/images/mspray.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
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
				<span>TEST</span>
					<img src="css/images/mbreakfast.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
					<img src="css/images/mfruit.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
					<img src="css/images/mfood.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
					<img src="css/images/mmeat.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
					<img src="css/images/mbaverages.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
					<img src="css/images/mspray.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
					<img src="css/images/mspray.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
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
				<span>TEST</span>
					<img src="css/images/mbreakfast.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
					<img src="css/images/mfruit.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
					<img src="css/images/mfood.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
					<img src="css/images/mmeat.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
					<img src="css/images/mbaverages.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
					<img src="css/images/mspray.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
					<img src="css/images/mspray.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
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
				<span>TEST</span>
					<img src="css/images/mbreakfast.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
					<img src="css/images/mfruit.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
					<img src="css/images/mfood.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
					<img src="css/images/mmeat.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
					<img src="css/images/mbaverages.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
					<img src="css/images/mspray.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
					<img src="css/images/mspray.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
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
				<span>TEST</span>
					<img src="css/images/mbreakfast.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
					<img src="css/images/mfruit.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
					<img src="css/images/mfood.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
					<img src="css/images/mmeat.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
					<img src="css/images/mbaverages.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
					<img src="css/images/mspray.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
					<img src="css/images/mspray.jpg" class="responsive-img">
				</div>
			</div>
		</div>
		<div class="col s4 m3">
			<div class="parent">
				<div class="child">
				<span>TEST</span>
					<img src="css/images/mspray.jpg" class="responsive-img">
				</div>
			</div>
		</div>
	</div>
</div>

<?php include "footer.php" ?>