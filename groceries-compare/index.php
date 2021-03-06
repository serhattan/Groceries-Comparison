<?php include "header.php" ?>
<style>
	@media screen and (max-width: 992px) {
		#square{
			margin-top: 4em;
		}
	}
	.parent {
		width: 100%;
		height: auto;
		overflow: hidden;
		position: relative;
		float: left;
		display: inline;
		cursor: pointer;
	}
	.child {
		width: 100%;
		height: auto;
		overflow: hidden;
		background-size: cover;
		background-repeat: no-repeat;
		-webkit-transition: all .5s;
		-moz-transition: all .5s;
		-o-transition: all .5s;
		transition: all .5s;
	}
	.child>a{
		display: none;
		font-size: 35px;
		color: #ffffff !important;
		font-family: sans-serif;
		text-align: center;
		margin: auto;
		position: absolute;
		top: 0;
		left: 0;
		bottom: 0;
		right: 0;
		height: 50px;
		cursor: pointer;
	}
	.child>img{
		width: 100%;
	}
	.parent:hover .child, .parent:focus .child {
		-ms-transform: scale(1.2);
		-moz-transform: scale(1.2);
		-webkit-transform: scale(1.2);
		-o-transform: scale(1.2);
		transform: scale(1.2);
	}
	.parent:hover .child:before, .parent:focus .child:before {
		display: block;
	}

	.parent:hover a, .parent:focus a {
		display: block;
		margin-top: 15%; 
	}

	.child:before {
		content: "";
		display: none;
		width: 100%;
		height: 100%;
		position: absolute;
		top: 0;
		left: 0;
		background-color: rgba(52,73,94,0.75);
	}
</style>
<div id="square">
	<div class="row">
		<div class="col s6 m4">
			<div class="parent">
				<div class="child">
					<img src="css/images/mbreakfast.jpg" class="responsive-img">
					<a href="#" onclick="indexRoute('breakfastSquare');"><img src="css/images/mbreakfast.png" class="responsive-img"></a>
				</div>
			</div>
		</div>
		<div class="col s6 m4">
			<div class="parent">
				<div class="child">
					<img src="css/images/mfruit.jpg" class="responsive-img">
					<a href="#"  onclick="indexRoute('fruitSquare');"><img src="css/images/mfruit.png" class="responsive-img"></a>
				</div>
			</div>
		</div>
		<div class="col s6 m4">
			<div class="parent">
				<div class="child">
					<img src="css/images/mfood.jpg" class="responsive-img">
					<a href="#" onclick="indexRoute('foodSquare');"><img src="css/images/mfood.png" class="responsive-img"></a>
				</div>
			</div>
		</div>
		<div class="col s6 m4">
			<div class="parent">
				<div class="child">
					<img src="css/images/mmeat.jpg" class="responsive-img">
					<a href="#" onclick="indexRoute('meatSquare');"><img src="css/images/mmeat.png" class="responsive-img"></a>
				</div>
			</div>
		</div>
		<div class="col s6 m4">
			<div class="parent">
				<div class="child">
					<img src="css/images/mbaverages.jpg" class="responsive-img">
					<a href="#" onclick="indexRoute('beveragesSquare');"><img src="css/images/mbaverages.png" class="responsive-img"></a>
				</div>
			</div>
		</div>
		<div class="col s6 m4">
			<div class="parent">
				<div class="child">
					<img src="css/images/mspray.jpg" class="responsive-img">
					<a href="#" onclick="indexRoute('spraySquare');"><img src="css/images/mspray.png" class="responsive-img"></a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include "footer.php" ?>