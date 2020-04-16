<?php require('header.php'); ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<?php require 'sidebar.php' ?>

			<div class="content">
				
			<div class="row">
				<div class="col s12 l12 m12">
					<div class="card" style="margin-top:70px;">
					<!-- Fetch the beautician profile from the database and display it -->
						<div class="card-content" style="margin-left: 30px;"><br>
							<h4  align="center" style="margin-top: 10px;">Beautician Profile</h4><hr>
							<p style="font-size: 20px;"><img style="height: 60px; width: 60px; border-radius: 50%;" src="images/woman.jpg"> [Beautician Name]</p><br>
							<p style="font-size: 20px;">Phone No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :+254 [Beautician phone]</p>
							<p style="font-size: 20px;">Gender  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;[Beautician Gender]</p>
							<p style="font-size: 20px;">Rating &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;[Beautician rating] <span style="color: limegreen;"><i class="material-icons">star</i></span></p>
							<p style="font-size: 20px;">Sucessful jobs   :&nbsp; [Beautician job count]</p><br>

							<p class="breadcrumb-item active" ><a style="font-family: monospace; font-weight: bolder; font-size: 20px;" href="#"><i class=""></i>  Service fee&nbsp; : Ksh 300<br> Delivery fee : ksh 100<br><span style="color: green"> Total fees &nbsp;&nbsp;: ksh 400</span></a></p><br>

							<a class="btn btn-block btn-info" style=" width: 80%; float: left; font-size: 21px; height: 50px;" href="#">Confirm Booking</a>
							<hr>							
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
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript">
    	$(document).ready(function() {
$('.mdb-select').materialSelect();
});
    </script>
</body>
</html>