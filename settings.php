<?php require 'header.php'; ?>
<?php require 'sidebar.php'; ?>

<div class="content">
				
			<div class="row">
				<div class="col s12 l12 m12">
					<div class="card" style="margin-top:70px;">
						<br><div style="text-align: center; font-size: 22px;" class="card-header">[Username] Profile</div><hr>
						<div class="card-content">
							<form action="post">
								<!-- Pick the profile of logged-in user for update -->
							<small><div class=""  align="center"> [fetch login user profile]</div></small><br>
							<div class="md-form">
									<label style="font-size: 16px;" for="fullname" class="active">Full Name</label>
									<input style="font-size: 18px;" type="text" class="form-control" name="fullname">
								    	
									
								</div><br>
								<div class="md-form">
									<label style="font-size: 16px;" for="phone" class="active">Phone Number</label>
									<input style="font-size: 18px;" type="Number" class="form-control" name="phone" placeholder="phone number">
									
								</div><br>
								<div class="md-form">
									<label style="font-size: 16px;" for="username" class="active">Username</label>
									<input style="font-size: 18px;" type="text" class="form-control" name="username">
								    	
								
								</div><br>
								<div class="md-form">
									<label style="font-size: 16px;" for="password" class="active">Password</label>
								<input style="font-size: 18px;" type="password" class="form-control" name="password">
								    								
								    	
								</div><br>
								
								<a style="font-size: 20px; height: 50px;" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" href="profile.php">Update Profile</a>
   
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