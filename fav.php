<?php require 'header.php';  ?>
<?php require 'sidebar.php'; ?>

			<div class="content">
				
			<div class="row">
				<div class="col s12 l12 m12">
					<div class="card" style="margin-top:70px;">
					
						<div class="card-content" style="margin-left: 30px;">
							<br><h3  align="center" style="margin-top: 15px;">Favourites</h3><hr>

							<!-- fetch the beauticians liked by the user and display them here. When clicked, it takes the user to 
							the beautician's schedule  -->
							<a href="schedule.php"><p style="font-size: 20px;"><img style="height: 60px; width: 60px; border-radius: 50%;" src="images/woman.jpg"> [Beautician Name]<span><i style="color: red; float: right; margin-right: 20px; margin-top: 12px;" class="glyphicon glyphicon-heart"></i></span></p></a><hr>
							<!--  -->
						
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