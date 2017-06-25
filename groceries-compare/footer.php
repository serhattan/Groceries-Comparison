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
<script type="text/javascript" src="js/materialize.min.js"></script>
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