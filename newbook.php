<?php require 'header.php'; ?>
<?php require 'sidebar.php'; ?>
			<div class="content">
				
			<div class="row">
				<div class="col s12 l12 m12">
					<div class="card" style="margin-top:70px;">
						<div style="text-align: center; font-size: 22px;" class="card-header">Make a Booking</div><hr>
						<div class="card-content">
							<form action="post">
								<!-- Pick the full name and phone number of the logged-in user -->
							
								<div class="md-form">
									<input style="font-size: 18px;" type="hidden" type="number" name="fullname" class="form-control" lenth="10">
									
								</div>
								<div class="md-form">
									<input style="font-size: 18px;" type="hidden" type="number" name="phone" class="form-control" lenth="10">
									
								</div>

								<!-- service in dropdown list accompanied by price -->
								
								<div class="form-group">
									<label style="font-size: 16px;" for="service">Service(drop-down)</label>
									<input style="font-size: 18px;" type="text" name="service" class="form-control">
									
								</div><br>
								<div class="md-form">
									<label style="font-size: 16px;" for="price">Price</label>
									<input style="font-size: 18px;" disabled="" type="number" name="phone" class="form-control">
									
								</div><br>
								<div class="md-form">
									<label style="font-size: 16px;" for="booking_date" class="active">Booking Date</label>
									<input style="font-size: 18px;" type="Date" name="booking_date" class="form-control">
									
								</div><br>
								<div class="md-form">
									<label style="font-size: 16px;" for="booking_time" class="active">Booking Time</label>
									<input style="font-size: 18px;" type="Time" name="booking_time" class="form-control">
									
								</div><br>

								
								<div><hr>
									<a href="newbookprofile.php"><p style="font-size: 18px;"><img style="height: 40px; width: 40px; border-radius: 50%;" src="images/woman.jpg">&nbsp;Beautician pops up based on inputs</p></a><hr><br>
								</div>
   
							</form><br>
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