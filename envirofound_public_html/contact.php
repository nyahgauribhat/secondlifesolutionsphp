<?php

include('header.php');

?>
<h1 id="sls101">Reach Out To Us <hr></h1> 
<p class="tr" id = "contactline"> With questions, suggestions and feedback!</p>
  <div>
    <!-- <div class="container"> -->
    <!-- <div class="row">
			<h1>Contact Us</h1>
	</div>
	<div class="row">
			<h4 style="text-align:center">For any questions you may have!</h4>
	</div>
	<div class="row input-container">
			<div class="col-xs-12">
				<div class="styled-input wide">
					<input type="text" required />
					<label>Name</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input">
					<input type="text" required />
					<label>Email</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input" style="float:right;">
					<input type="text" required />
					<label>Phone Number</label> 
				</div>
			</div>
			<div class="col-xs-12">
				<div class="styled-input wide">
					<textarea required></textarea>
					<label>Message</label>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="btn-lrg submit-btn">Send Message</div>
			</div>
	</div>
</div> -->
<!-- <div id = "form">
  <iframe 
  src="https://docs.google.com/forms/d/e/1FAIpQLSeEW8rXEvF4i5UCSvwkAGOqgmmJRf50AtPOkgOaWYjXcb2QzQ/viewform?embedded=true"
  width="640" height="824" frameborder="0" marginheight="0" marginwidth="0">Loading… </iframe>
</div> -->
<form id ="cform" action = "first.php" method = "post"> 
	<div class = "entireform"> <h4 class = "inputtypes">  First Name:</h4> <input type = "text" class = "contactinput" name = "fname"> </div>
	<div class = "entireform"><h4 class = "inputtypes">Email: </h4>  <input type = "email"class = "contactinput" name = "emailid"></div>
	<div class = "entireform"><h4 class = "inputtypes">Mobile Number: </h4> <input type = "number"class = "contactinput" name = "mob"></div>
	<div class = "entireform"><h4 class = "inputtypes">Message:</h4> <input type = "text"class = "contactinput" name = "message"></div>
	<div id = "submitbtn"> <input type = "submit" name= "save" id = "contactsubmit">  </div>
</form>
  </div>
  <?php

include('footer.php');

?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/18824d66d9.js" crossorigin="anonymous"></script>




</body>

</html>