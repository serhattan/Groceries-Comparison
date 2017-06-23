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
</style>
<div id="square">
	<div class="row">
		<div class="col s6 m4">
			<div class="parent">
				<div class="child">
					<img src="css/images/migros-logo.jpg" class="responsive-img">
					<a href="#Migros" id="migrosDiv">MİGROS</a>
				</div>
			</div>
		</div>
		<div class="col s6 m4">
			<div class="parent">
				<div class="child">
					<img src="css/images/bim_logo.jpg" class="responsive-img">
					<a href="#Bim" id="bimDiv">BİM</a>
				</div>
			</div>
		</div>
		<div class="col s6 m4">
			<div class="parent">
				<div class="child">
					<img src="css/images/a101_logo.jpg" class="responsive-img">
					<a href="#A101" id="a-101Div">A-101</a>
				</div>
			</div>
		</div>
		<div class="col s6 m4">
			<div class="parent">
				<div class="child">
					<img src="css/images/sok-market-logo.jpg" class="responsive-img">
					<a href="#Sok" id="sokDiv">ŞOK</a>
				</div>
			</div>
		</div>
		<div class="col s6 m4">
			<div class="parent">
				<div class="child">
					<img src="css/images/kipa-logo.jpg" class="responsive-img">
					<a href="#Kipa" id="kipaDiv">KİPA</a>
				</div>
			</div>
		</div>
		<div class="col s6 m4">
			<div class="parent">
				<div class="child">
					<img src="css/images/migros-logo.jpg" class="responsive-img">
					<a href="#Migros">MİGROS</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="tab1" style="display: none;">
	<hr>
	<div class="tab1Header" style="margin-top: 2em">
		<img src="css/images/migros-logo-min.jpg">
	</div>
	<div class="arrangeButton">
		<!-- Dropdown Trigger -->
		<a class='dropdown-button btn btn-large' href='#' data-activates='sort-migros-products' style="width: 20em;"><i class="fa fa-sort" aria-hidden="true"></i> Sırala</a>
		<a class='dropdown-button btn btn-large' href='#' data-activates='filterpro-migros-duct' style="width: 20em;"><i class="fa fa-filter" aria-hidden="true"></i> Filtrele</a>

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
			<li class="collection-item"><div>Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
		</ul>
	</div>
</div>
<div class="tab2" style="display: none;">
	<hr>
	<div class="tab2Header" style="margin-top: 2em">
		<img src="css/images/bim-logo-min.jpg">
	</div>
	<div class="arrangeButton" style="margin-top: 20px;">
		<!-- Dropdown Trigger -->
		<a class='dropdown-button btn btn-large' href='#' data-activates='sort-bim-products' style="width: 20em;"><i class="fa fa-sort" aria-hidden="true"></i> Sırala</a>
		<a class='dropdown-button btn btn-large' href='#' data-activates='filter-bim-product' style="width: 20em;"><i class="fa fa-filter" aria-hidden="true"></i> Filtrele</a>

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
			<li class="collection-item"><div>Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
		</ul>
	</div>
</div>
<div class="tab3" style="display: none;">
	<hr>
	<div class="tab3Header" style="margin-top: 2em">
		<img src="css/images/a101-logo-min.jpg">
	</div>
	<div class="arrangeButton">
		<!-- Dropdown Trigger -->
		<a class='dropdown-button btn btn-large' href='#' data-activates='sort-a101-products' style="width: 20em;"><i class="fa fa-sort" aria-hidden="true"></i> Sırala</a>
		<a class='dropdown-button btn btn-large' href='#' data-activates='filterp-a101-roduct' style="width: 20em;"><i class="fa fa-filter" aria-hidden="true"></i> Filtrele</a>

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
			<li class="collection-item"><div>Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
		</ul>
	</div>
</div>
<div class="tab4" style="display: none;">
	<hr>
	<div class="tab4Header" style="margin-top: 2em">
		<img src="css/images/sok-market-logo-min.jpg">
	</div>
	<div class="arrangeButton">
		<!-- Dropdown Trigger -->
		<a class='dropdown-button btn btn-large' href='#' data-activates='sort-sok-products' style="width: 20em;"><i class="fa fa-sort" aria-hidden="true"></i> Sırala</a>
		<a class='dropdown-button btn btn-large' href='#' data-activates='filter-sok-product' style="width: 20em;"><i class="fa fa-filter" aria-hidden="true"></i> Filtrele</a>

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
			<li class="collection-item"><div>Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
		</ul>
	</div>
</div>
<div class="tab5" style="display: none;">
	<hr>
	<div class="tab5Header" style="margin-top: 2em">
		<img src="css/images/kipa-logo-min.jpg">
	</div>
	<div class="arrangeButton">
		<!-- Dropdown Trigger -->
		<a class='dropdown-button btn btn-large' href='#' data-activates='sort-kipa-products' style="width: 20em;"><i class="fa fa-sort" aria-hidden="true"></i> Sırala</a>
		<a class='dropdown-button btn btn-large' href='#' data-activates='filterp-kipa-roduct' style="width: 20em;"><i class="fa fa-filter" aria-hidden="true"></i> Filtrele</a>

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
			<li class="collection-item"><div>Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sade Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Çikolatalı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Sütlü Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
			<li class="collection-item"><div>Ballı Boyoz<a href="#!" class="secondary-content"><i class="material-icons">add</i></a></div></li>
		</ul>
	</div>
</div>

</div><!--container-->
<?php include "footer.php" ?>