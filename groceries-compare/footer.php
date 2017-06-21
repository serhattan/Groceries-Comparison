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
 		})

 	</script>
