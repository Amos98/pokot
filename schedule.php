<?php require 'header.php'; ?> 
<?php require 'sidebar.php'; ?>
			<div class="content">
				
			<div class="row">
				<div class="col s12 l12 m12">
					<div class="card" style="margin-top:70px;">
					
						<div class="card-content" style="margin-left: 30px; margin-top:15px;">

							<!-- fetch the specified schedule of the favourite beautician and display it to the user -->

							<br><h4  align="center" style="margin-top: 10px;">[Beautician Name] Schedule</h4><hr>
							<p style="font-size: 20px;"><img style="height: 60px; width: 60px; border-radius: 50%;" src="images/woman.jpg"> Beautician Name</p><br>
							<p style="font-size: 20px;">Active Hours&nbsp; : &nbsp;8am - 9pm</p>
							<p style="font-size: 20px;">Active Days &nbsp; : &nbsp;Monday - Saturday</p>
							<p style="font-size: 20px;">Status &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;:&nbsp; <span style="color: limegreen;">Active</span></p><br>
							<!-- end -->

							<a class="btn btn-block btn-info" style=" width: 80%; float: left; height: 50px; font-size: 21px;" href="book.php">Book Me</a>
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