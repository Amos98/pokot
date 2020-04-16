<?php require 'header.php'; ?>
<?php require 'sidebar.php'; ?>
			<div class="content">
			<div class="card" style="margin-top:40px;">
				<div class="row">
					<div style="margin-right: 6px; margin-left: 6px;" class="col s12 m12 l12"><br><br>
						<div style="text-align: center; font-size: 22px;" class="card-header"> [Username] booking history</div><hr>
						<div class="card-content">
						<form action="history.php" method="post">
                        <div class="form-group">
                        	
								<div class="md-form">
										<label style="font-size: 18px;" for="phone_no" class="active">Phone Number</label>
									<input style="font-size: 18px;" type="number"class="form-control" name="book_phone" placeholder="Enter phone number...">
								
									
								</div><br>

								<input style="font-size: 20px; height: 45px; width: 100%; border-radius: 6px; background-color: lightblue;" name="view" type="submit" value="View">
                      
</form>


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