<?php require 'header.php';?>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<?php require 'sidebar.php'; ?>
	<div>
			<div class="card" style="margin-top:40px;">
				<div class="row">
					<div style="margin-right: 6px; margin-left: 6px;" class="col s12 m12 l12"><br><br>
						<div style="text-align: center; font-size: 22px; font-weight: bold;" class="card-header">Book Us</div><hr>
						<div class="card-content" style="height: 100%;">
							<a href="fav.php"><p style="font-size: 20px; padding: 10px; text-align: center;"><i style="float: left; height: 20px;margin-top: 5px;" class="material-icons">star</i>Favourite Beautician</p></a><hr>

							<a href="newbook.php"><p style="font-size: 20px; text-align: center; padding: 10px;"><i style="float: left;" class="material-icons">send</i> New Booking</p></a><hr>

							<a href="#"><p style="font-size: 20px; text-align: center; padding: 10px;"><i style="float: left;" class="material-icons">credit_card</i> Your Available Credit</p></a><hr>

							<a href="#"><p style="font-size: 20px; text-align: center; padding: 10px;"> <i class="material-icons" style="float: left;">shopping_cart</i> Buy Products</p></a><hr>

							
				</div>
				</div>
			</div>
		</div>
				</div>
			</div>
		</div>
	</div> 


	<!-- menu-js -->
	<script src="js/classie.js"></script>
	<script src="js/main.js"></script>
	
	<!-- //menu-js -->
	<!-- nice scroll-js -->
	<script src="js/jquery.nicescroll.min.js"></script> 
	<script>
		$(document).ready(function() {
	  
			var nice = $("html").niceScroll();  // The document page (body)
		
			$("#div1").html($("#div1").html()+' '+nice.version);
		
			$("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#00F",boxzoom:true}); // First scrollable DIV
		});
	</script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/js/mdb.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>


    <script src="js/bootstrap.js"></script>
   <!--  <script type="text/javascript">
$(".chosen-select").chosen({
  no_results_text: "Oops, nothing found!"
})
    </script>
 -->
</body>
</html>