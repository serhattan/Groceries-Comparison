<?php include "header.php"; ?>
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
	.collection-item{
		padding-bottom: 1em;
	}
	.collection-item>div>img{
		width: 2em; 
		height: 2em; 
		float: left; 
		margin-right: 1em;
	}
</style>
<div id="square">
	<div class="row">
		<div class="col s6 m4">
			<div class="parent">
				<div class="child">
					<img src="css/images/migros-logo.jpg" class="responsive-img">
					<a href="#tab1" id="migrosDiv" onclick="groceriesToggle('tab1'); $('html, body').animate({ scrollTop: $('#tab1').offset().top }, 1000);">MİGROS</a>
				</div>
			</div>
		</div>
		<div class="col s6 m4">
			<div class="parent">
				<div class="child">
					<img src="css/images/bim_logo.jpg" class="responsive-img">
					<a href="#tab2" id="bimDiv" onclick="groceriesToggle('tab2'); $('html, body').animate({ scrollTop: $('#tab2').offset().top }, 1000);">BİM</a>
				</div>
			</div>
		</div>
		<div class="col s6 m4">
			<div class="parent">
				<div class="child">
					<img src="css/images/a101_logo.jpg" class="responsive-img">
					<a href="#tab3" id="a101Div" onclick="groceriesToggle('tab3'); $('html, body').animate({ scrollTop: $('#tab3').offset().top }, 1000);">A-101</a>
				</div>
			</div>
		</div>
		<div class="col s6 m4">
			<div class="parent">
				<div class="child">
					<img src="css/images/sok-market-logo.jpg" class="responsive-img">
					<a href="#tab4" id="sokDiv" onclick="groceriesToggle('tab4'); $('html, body').animate({ scrollTop: $('#tab4').offset().top }, 1000);">ŞOK</a>
				</div>
			</div>
		</div>
		<div class="col s6 m4">
			<div class="parent">
				<div class="child">
					<img src="css/images/kipa-logo.jpg" class="responsive-img">
					<a href="#tab5" id="kipaDiv" onclick="groceriesToggle('tab5'); $('html, body').animate({ scrollTop: $('#tab5').offset().top }, 1000);">KİPA</a>
				</div>
			</div>
		</div>
		<div class="col s6 m4">
			<div class="parent">
				<div class="child">
					<img src="css/images/migros-logo.jpg" class="responsive-img">
					<a href="#tab6" onclick="groceriesToggle('tab6'); $('html, body').animate({ scrollTop: $('#tab6').offset().top }, 1000);">MİGROS</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="tab1" style="display:none;">
	<hr>
	<div class="tab1Header" style="margin-top: 2em">
		<img src="css/images/migros-logo-min.jpg">
	</div>
	<div class="arrangeButton" style="margin-top: 1em;">
		<!-- Dropdown Trigger -->
		<div class="row">
			<div class="col s12 m6">
				<a class='dropdown-button btn btn-large cyan' href='#' data-activates='sort-migros-products' style="width: 100%;"><i class="fa fa-sort" aria-hidden="true"></i> Sırala</a>
			</div>
			<div class="col s12 m6">
				<a class='dropdown-button btn btn-large cyan' href='#' data-activates='filterpro-migros-duct' style="width: 100%;"><i class="fa fa-filter" aria-hidden="true"></i> Filtrele</a>
			</div>
		</div>
		<!-- Dropdown Structure -->
		<ul id='sort-migros-products' class='dropdown-content'>
			<li><a href="#!"><i class="fa fa-sort-alpha-asc" aria-hidden="true"></i>A'dan Z'ye</a></li>
			<li><a href="#!"><i class="fa fa-sort-alpha-desc" aria-hidden="true"></i>Z'den A'ya</a></li>
			<li><a href="#!"><i class="fa fa-usd" aria-hidden="true"></i>Fiyata Göre(Artan)<i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></li>
			<li><a href="#!"><i class="fa fa-usd" aria-hidden="true"></i>Fiyata Göre(Azalan)<i class="fa fa-long-arrow-down" aria-hidden="true"></i> </a></li> 
		</ul>
		<ul id='filterpro-migros-duct' class='dropdown-content'>
			<li><a href="#!">A-101</a></li>
			<li><a href="#!">Bim</a></li>
			<li><a href="#!">Migros</a></li>
			<li><a href="#!">Şok</a></li>
			<li><a href="#!">Süt & Kahvantılık</a></li>
			<li><a href="#!">Meyve & Sebze</a></li>
			<li><a href="#!">Gıda & Şekerleme</a></li>
			<li><a href="#!">Et & Balık</a></li>
			<li><a href="#!">Temizlik & Deterjan</a></li>
			<li><a href="#!">İçecekler</a></li>
		</ul>
	</div>
	<div class="tab1Body">
		<ul class="collection with-header">
			<li class="collection-header"><h4>Ürünler</h4></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
		</ul>
	</div>
</div>
<div id="tab2" style="display:none;">
	<hr>
	<div class="tab2Header" style="margin-top: 2em">
		<img src="css/images/bim-logo-min.jpg">
	</div>
	<div class="arrangeButton" style="margin-top: 1em;">
		<!-- Dropdown Trigger -->
		<div class="row">
			<div class="col s12 m6">
				<a class='dropdown-button btn btn-large cyan' href='#' data-activates='sort-bim-products' style="width: 100%;"><i class="fa fa-sort" aria-hidden="true"></i> Sırala</a>
			</div>
			<div class="col s12 m6">
				<a class='dropdown-button btn btn-large cyan' href='#' data-activates='filter-bim-product' style="width: 100%;"><i class="fa fa-filter" aria-hidden="true"></i> Filtrele</a>
			</div>
		</div>
		<!-- Dropdown Structure -->
		<ul id='sort-bim-products' class='dropdown-content'>
			<li><a href="#!"><i class="fa fa-sort-alpha-asc" aria-hidden="true"></i>A'dan Z'ye</a></li>
			<li><a href="#!"><i class="fa fa-sort-alpha-desc" aria-hidden="true"></i>Z'den A'ya</a></li>
			<li><a href="#!"><i class="fa fa-usd" aria-hidden="true"></i>Fiyata Göre(Artan)<i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></li>
			<li><a href="#!"><i class="fa fa-usd" aria-hidden="true"></i>Fiyata Göre(Azalan)<i class="fa fa-long-arrow-down" aria-hidden="true"></i> </a></li> 
		</ul>
		<ul id='filter-bim-product' class='dropdown-content'>
			<li><a href="#!">A-101</a></li>
			<li><a href="#!">Bim</a></li>
			<li><a href="#!">Migros</a></li>
			<li><a href="#!">Şok</a></li>
			<li><a href="#!">Süt & Kahvantılık</a></li>
			<li><a href="#!">Meyve & Sebze</a></li>
			<li><a href="#!">Gıda & Şekerleme</a></li>
			<li><a href="#!">Et & Balık</a></li>
			<li><a href="#!">Temizlik & Deterjan</a></li>
			<li><a href="#!">İçecekler</a></li>
		</ul>
	</div>
	<div class="tab2Body">
		<ul class="collection with-header">
			<li class="collection-header"><h4>Ürünler</h4></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
		</ul>
	</div>
</div>
<div id="tab3" style="display:none;">
	<hr>
	<div class="tab3Header" style="margin-top: 2em">
		<img src="css/images/a101-logo-min.jpg">
	</div>
	<div class="arrangeButton" style="margin-top: 1em;">
		<!-- Dropdown Trigger -->
		<div class="row">
			<div class="col s12 m6">
				<a class='dropdown-button btn btn-large cyan' href='#' data-activates='sort-a101-products' style="width: 100%;"><i class="fa fa-sort" aria-hidden="true"></i> Sırala</a>
			</div>
			<div class="col s12 m6">
				<a class='dropdown-button btn btn-large cyan' href='#' data-activates='filterp-a101-roduct' style="width: 100%;"><i class="fa fa-filter" aria-hidden="true"></i> Filtrele</a>
			</div>
		</div>
		<!-- Dropdown Structure -->
		<ul id='sort-a101-products' class='dropdown-content'>
			<li><a href="#!"><i class="fa fa-sort-alpha-asc" aria-hidden="true"></i>A'dan Z'ye</a></li>
			<li><a href="#!"><i class="fa fa-sort-alpha-desc" aria-hidden="true"></i>Z'den A'ya</a></li>
			<li><a href="#!"><i class="fa fa-usd" aria-hidden="true"></i>Fiyata Göre(Artan)<i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></li>
			<li><a href="#!"><i class="fa fa-usd" aria-hidden="true"></i>Fiyata Göre(Azalan)<i class="fa fa-long-arrow-down" aria-hidden="true"></i> </a></li> 
		</ul>
		<ul id='filterp-a101-roduct' class='dropdown-content'>
			<li><a href="#!">A-101</a></li>
			<li><a href="#!">Bim</a></li>
			<li><a href="#!">Migros</a></li>
			<li><a href="#!">Şok</a></li>
			<li><a href="#!">Süt & Kahvantılık</a></li>
			<li><a href="#!">Meyve & Sebze</a></li>
			<li><a href="#!">Gıda & Şekerleme</a></li>
			<li><a href="#!">Et & Balık</a></li>
			<li><a href="#!">Temizlik & Deterjan</a></li>
			<li><a href="#!">İçecekler</a></li>
		</ul>
	</div>
	<div class="tab3Body">
		<ul class="collection with-header">
			<li class="collection-header"><h4>Ürünler</h4></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
		</ul>
	</div>
</div>
<div id="tab4" style="display:none;">
	<hr>
	<div class="tab4Header" style="margin-top: 2em">
		<img src="css/images/sok-market-logo-min.jpg">
	</div>
	<div class="arrangeButton" style="margin-top: 1em;">
		<!-- Dropdown Trigger -->
		<div class="row">
			<div class="col s12 m6">
				<a class='dropdown-button btn btn-large cyan' href='#' data-activates='sort-sok-products' style="width: 100%;"><i class="fa fa-sort" aria-hidden="true"></i> Sırala</a>
			</div>
			<div class="col s12 m6">
				<a class='dropdown-button btn btn-large cyan' href='#' data-activates='filter-sok-product' style="width: 100%;"><i class="fa fa-filter" aria-hidden="true"></i> Filtrele</a>
			</div>
		</div>
		<!-- Dropdown Structure -->
		<ul id='sort-sok-products' class='dropdown-content'>
			<li><a href="#!"><i class="fa fa-sort-alpha-asc" aria-hidden="true"></i>A'dan Z'ye</a></li>
			<li><a href="#!"><i class="fa fa-sort-alpha-desc" aria-hidden="true"></i>Z'den A'ya</a></li>
			<li><a href="#!"><i class="fa fa-usd" aria-hidden="true"></i>Fiyata Göre(Artan)<i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></li>
			<li><a href="#!"><i class="fa fa-usd" aria-hidden="true"></i>Fiyata Göre(Azalan)<i class="fa fa-long-arrow-down" aria-hidden="true"></i> </a></li> 
		</ul>
		<ul id='filter-sok-product' class='dropdown-content'>
			<li><a href="#!">A-101</a></li>
			<li><a href="#!">Bim</a></li>
			<li><a href="#!">Migros</a></li>
			<li><a href="#!">Şok</a></li>
			<li><a href="#!">Süt & Kahvantılık</a></li>
			<li><a href="#!">Meyve & Sebze</a></li>
			<li><a href="#!">Gıda & Şekerleme</a></li>
			<li><a href="#!">Et & Balık</a></li>
			<li><a href="#!">Temizlik & Deterjan</a></li>
			<li><a href="#!">İçecekler</a></li>
		</ul>
	</div>
	<div class="tab4Body">
		<ul class="collection with-header">
			<li class="collection-header"><h4>Ürünler</h4></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
		</ul>
	</div>
</div>
<div id="tab5" style="display:none;">
	<hr>
	<div class="tab5Header" style="margin-top: 2em">
		<img src="css/images/kipa-logo-min.jpg">
	</div>
	<div class="arrangeButton" style="margin-top: 1em;">
		<!-- Dropdown Trigger -->
		<div class="row">
			<div class="col s12 m6">
				<a class='dropdown-button btn btn-large cyan' href='#' data-activates='sort-kipa-products' style="width: 100%;"><i class="fa fa-sort" aria-hidden="true"></i> Sırala</a>
			</div>
			<div class="col s12 m6">
				<a class='dropdown-button btn btn-large cyan' href='#' data-activates='filterp-kipa-roduct' style="width: 100%;"><i class="fa fa-filter" aria-hidden="true"></i> Filtrele</a>
			</div>
		</div>
		<!-- Dropdown Structure -->
		<ul id='sort-kipa-products' class='dropdown-content'>
			<li><a href="#!"><i class="fa fa-sort-alpha-asc" aria-hidden="true"></i>A'dan Z'ye</a></li>
			<li><a href="#!"><i class="fa fa-sort-alpha-desc" aria-hidden="true"></i>Z'den A'ya</a></li>
			<li><a href="#!"><i class="fa fa-usd" aria-hidden="true"></i>Fiyata Göre(Artan)<i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></li>
			<li><a href="#!"><i class="fa fa-usd" aria-hidden="true"></i>Fiyata Göre(Azalan)<i class="fa fa-long-arrow-down" aria-hidden="true"></i> </a></li> 
		</ul>
		<ul id='filterp-kipa-roduct' class='dropdown-content'>
			<li><a href="#!">A-101</a></li>
			<li><a href="#!">Bim</a></li>
			<li><a href="#!">Migros</a></li>
			<li><a href="#!">Şok</a></li>
			<li><a href="#!">Süt & Kahvantılık</a></li>
			<li><a href="#!">Meyve & Sebze</a></li>
			<li><a href="#!">Gıda & Şekerleme</a></li>
			<li><a href="#!">Et & Balık</a></li>
			<li><a href="#!">Temizlik & Deterjan</a></li>
			<li><a href="#!">İçecekler</a></li>
		</ul>
	</div>
	<div class="tab5Body">
		<ul class="collection with-header">
			<li class="collection-header"><h4>Ürünler</h4></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
		</ul>
	</div>
</div>
<div id="tab6" style="display:none;">
	<hr>
	<div class="tab6Header" style="margin-top: 2em">
		<img src="css/images/migros-logo-min.jpg">
	</div>
	<div class="arrangeButton" style="margin-top: 1em;">
		<!-- Dropdown Trigger -->
		<div class="row">
			<div class="col s12 m6">
				<a class='dropdown-button btn btn-large cyan' href='#' data-activates='sort-migros-products' style="width: 100%;"><i class="fa fa-sort" aria-hidden="true"></i> Sırala</a>
			</div>
			<div class="col s12 m6">
				<a class='dropdown-button btn btn-large cyan' href='#' data-activates='filterpro-migros-duct' style="width: 100%;"><i class="fa fa-filter" aria-hidden="true"></i> Filtrele</a>
			</div>
		</div>
		<!-- Dropdown Structure -->
		<ul id='sort-migros-products' class='dropdown-content'>
			<li><a href="#!"><i class="fa fa-sort-alpha-asc" aria-hidden="true"></i>A'dan Z'ye</a></li>
			<li><a href="#!"><i class="fa fa-sort-alpha-desc" aria-hidden="true"></i>Z'den A'ya</a></li>
			<li><a href="#!"><i class="fa fa-usd" aria-hidden="true"></i>Fiyata Göre(Artan)<i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></li>
			<li><a href="#!"><i class="fa fa-usd" aria-hidden="true"></i>Fiyata Göre(Azalan)<i class="fa fa-long-arrow-down" aria-hidden="true"></i> </a></li> 
		</ul>
		<ul id='filterpro-migros-duct' class='dropdown-content'>
			<li><a href="#!">A-101</a></li>
			<li><a href="#!">Bim</a></li>
			<li><a href="#!">Migros</a></li>
			<li><a href="#!">Şok</a></li>
			<li><a href="#!">Süt & Kahvantılık</a></li>
			<li><a href="#!">Meyve & Sebze</a></li>
			<li><a href="#!">Gıda & Şekerleme</a></li>
			<li><a href="#!">Et & Balık</a></li>
			<li><a href="#!">Temizlik & Deterjan</a></li>
			<li><a href="#!">İçecekler</a></li>
		</ul>
	</div>
	<div class="tab6Body">
		<ul class="collection with-header">
			<li class="collection-header"><h4>Ürünler</h4></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
		</ul>
	</div>
</div>
<script>
//groceries content show-hide script
function groceriesToggle(divId){
	console.log(divId);
	document.getElementById("tab1").style.display="none";
	document.getElementById("tab2").style.display="none";
	document.getElementById("tab3").style.display="none";
	document.getElementById("tab4").style.display="none";
	document.getElementById("tab5").style.display="none";
	document.getElementById("tab6").style.display="none";

	var x = document.getElementById(divId);
	if (x.style.display === 'none') {
		x.style.display = 'block';
	}else{
		x.style.display = 'none';
	}
}
</script>
<?php include "footer.php" ?>