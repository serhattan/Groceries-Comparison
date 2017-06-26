</div><!--container-->
<footer class="page-footer cyan" style="bottom:">
	<div class="container">
		<div class="row">
			<div class="col l6 s12">
				<h5 class="white-text">Groceries Product Compare</h5>
				<p class="grey-text text-lighten-4">You can use our email addresses to contact with us and leave a feedback.</p>
			</div>
			<div class="col l4 offset-l2 s12">
				<h5 class="white-text">Info</h5>
				<ul>
					<li><a class="grey-text text-lighten-3" href="#!">test@gmail.com</a></li>
					<li><a class="grey-text text-lighten-3" href="#!">test2@gmail.com</a></li>
					<li><a class="grey-text text-lighten-3" href="#!">test3@gmail.com</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			© 2017 All rights reserved
			<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
		</div>
	</div>
</footer>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.js"></script>

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

//fromindex.php redirected page show div script
var sPageURL = window.location.hash;
var result = sPageURL.substring(1);
document.getElementById(result).style.display="block";

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

//index.php categories route script
function indexRoute(divId){
	document.location.href ="http://localhost/Groceries-Compare/groceries-compare/products.php#"+divId;
}
</script>
<script>
	$( document ).ready(function(){

		//sidenav initialization
		$(".button-collapse").sideNav();

		//navbar color initialization
		$('.navbarButton').on('click', function(){
			$('.navbarButton').addClass('white grey-text')
			$(this).removeClass('white grey-text');
			$(this).addClass('orange white-text');
		});

		//Carousel Slider Initialization
		$('.carousel').carousel();		
	})
</script>
</body>