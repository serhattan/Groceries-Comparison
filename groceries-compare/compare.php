<? include "header.php"; ?>
<style>
	.collection-item{
		padding-bottom: 1em;
	}
	.collection-item>div>img{
		width: 2em; 
		height: 2em; 
		float: left; 
		margin-right: 1em;
	}
	.collection-header>img{
		width: 10em;
		height: 5em;
	}
</style>
<div class="comparesquare">
	<div class="compareHeader" style="margin-top: 2em">
		<img src="css/images/eggsCompare.png" class="responsive-img">
	</div>
	<div class="arrangeButton" style="margin-top: 1em;">
		<!-- Dropdown Trigger -->
		<div class="row">
			<div class="col s12 m4">
				<a class='dropdown-button btn btn-large cyan' href='#' data-activates='sort-products' style="width: 100%;"><i class="fa fa-sort" aria-hidden="true"></i> Sırala</a>
			</div>
			<div class="col s12 m4">
				<a class='dropdown-button btn btn-large cyan' href='#' data-activates='filter-category' style="width: 100%;"><i class="fa fa-filter" aria-hidden="true"></i> Kategori</a>
			</div>
			<div class="col s12 m4">
				<a class='dropdown-button btn btn-large cyan' href='#' data-activates='filter-type' style="width: 100%;"><i class="fa fa-filter" aria-hidden="true"></i> Ürün</a>
			</div>
		</div>
		<!-- Dropdown Structure -->
		<ul id='sort-products' class='dropdown-content'>
			<li><a href="#!"><i class="fa fa-sort-alpha-asc" aria-hidden="true"></i>A'dan Z'ye</a></li>
			<li><a href="#!"><i class="fa fa-sort-alpha-desc" aria-hidden="true"></i>Z'den A'ya</a></li>
			<li><a href="#!"><i class="fa fa-usd" aria-hidden="true"></i>Fiyata Göre(Artan)<i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></li>
			<li><a href="#!"><i class="fa fa-usd" aria-hidden="true"></i>Fiyata Göre(Azalan)<i class="fa fa-long-arrow-down" aria-hidden="true"></i> </a></li> 
		</ul>
		<ul id='filter-category' class='dropdown-content'>
			<li><a href="#!">Süt & Kahvantılık</a></li>
			<li><a href="#!">Meyve & Sebze</a></li>
			<li><a href="#!">Gıda & Şekerleme</a></li>
			<li><a href="#!">Et & Balık</a></li>
			<li><a href="#!">Temizlik & Deterjan</a></li>
			<li><a href="#!">İçecekler</a></li>
		</ul>
		<ul id='filter-type' class='dropdown-content'>
			<li><a href="#!">Süt</a></li>
			<li><a href="#!">Tereyağı</a></li>
			<li><a href="#!">Peynir</a></li>
			<li><a href="#!">Yoğurt</a></li>
			<li><a href="#!">Yumurta</a></li>
			<li><a href="#!">Zeytin</a></li>
			<li><a href="#!">test1</a></li>
			<li><a href="#!">test2</a></li>
			<li><a href="#!">test3</a></li>
			<li><a href="#!">test4</a></li>
		</ul>
	</div>
	<div class="tab1Body">
		<ul class="collection with-header">
			<li class="collection-header"><img src="css/images/migros-logo-min.jpg"></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sade Boyoz<a href="#!" class="secondary-content">2.99₺</a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Çikolatalı Boyoz<a href="#!" class="secondary-content">2.99₺</a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sütlü Boyoz<a href="#!" class="secondary-content">2.99₺</a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Ballı Boyoz<a href="#!" class="secondary-content">2.99₺</a></div></li>
		</ul>
		<ul class="collection with-header">
			<li class="collection-header"><img src="css/images/sok-market-logo-min.jpg"></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sade Boyoz<a href="#!" class="secondary-content">2.99₺</a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Çikolatalı Boyoz<a href="#!" class="secondary-content">2.99₺</a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sütlü Boyoz<a href="#!" class="secondary-content">2.99₺</a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Ballı Boyoz<a href="#!" class="secondary-content">2.99₺</a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sade Boyoz<a href="#!" class="secondary-content">2.99₺</a></div></li>
		</ul>
		<ul class="collection with-header">
			<li class="collection-header"><img src="css/images/bim-logo-min.jpg"></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Çikolatalı Boyoz<a href="#!" class="secondary-content">2.99₺</a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sütlü Boyoz<a href="#!" class="secondary-content">2.99₺</a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Ballı Boyoz<a href="#!" class="secondary-content">2.99₺</a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sade Boyoz<a href="#!" class="secondary-content">2.99₺</a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Çikolatalı Boyoz<a href="#!" class="secondary-content">2.99₺</a></div></li>
		</ul>
		<ul class="collection with-header">
			<li class="collection-header"><img src="css/images/a101-logo-min.jpg"></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sade Boyoz<a href="#!" class="secondary-content">2.99₺</a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sade Boyoz<a href="#!" class="secondary-content">2.99₺</a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sade Boyoz<a href="#!" class="secondary-content">2.99₺</a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Sütlü Boyoz<a href="#!" class="secondary-content">2.99₺</a></div></li>
			<li class="collection-item"><div><img src="css/images/eggs.png">Ballı Boyoz<a href="#!" class="secondary-content">2.99₺</a></div></li>
		</ul>
	</div>
</div>

<? include "footer.php"; ?>