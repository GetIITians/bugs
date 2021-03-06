<?php
load_view("Template/top.php");
load_view("Template/navbarnew.php");
?>

<main>
	<div class="container">
	<br>
	  <div class="row">
	  	<div class="col s12 l6">
	  		<div class="card-panel" style="height:520px;">
	  		  <div class="row">
            <div class="col s12">
              <h3 class="teal-text text-darken-1 center">Contact Us</h3>
            </div>
          </div>
          <div class="row">
            <div class="col s12">
              <h5 class="teal-text text-darken-1">Address <i class="mdi-communication-location-on"></i></h5>
              <div class="grey-text">
                B-178<br>
                Shivalik<br>
                Malviya Nagar<br>
                New Delhi - 110017<br>
                India
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col s12">
              <h5 class="teal-text text-darken-1">Mail <i class="mdi-content-mail"></i></h5>
              <div class="grey-text">
                info@getiitians.com
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col s12">
              <h5 class="teal-text text-darken-1">Call <i class="mdi-maps-local-phone"></i></h5>
              <div class="grey-text">
                +91 987 654 3210
              </div>
            </div>
          </div>
	  		</div>
	  	</div>
	  	<div class="col s12 l6">
        <div class="card-panel" style="height:520px;">
	    		<div class="row">
		    		<?php
					    if(!empty($msg)) {
            ?>
            <div class="col s12">
					    <div class="light-blue card-panel">
                <h6 class="white-text"><?php echo $msg;?></h6>
              </div>
            </div>
					  <?php
              }
					    else {
					  ?>
	    		  <form id="contact-form" class="col s12" method="post">
	    		  	<div class="row">
	    		  	  <div class="col s12">
	    		  	  	<h5 class="teal-text">How can we help you?</h5><br>
	    		  	  </div>
	    		  	  <div class="input-field col s12">
	    		  	  	<input id="name" name="name" type="text" class="validate" required>
	    		  	  	<label for="name">Name</label>
	    		  	  </div>
	    		  	  <div class="input-field col s12">
	    		  	  	<input id="email" name="email" type="email" class="validate" required>
	    		  	  	<label for="email">Email</label>
	    		  	  </div>
	    		  	  <div class="input-field col s12">
	    		  	  	<input id="phone_number" name="phone" type="text" class="validate" required>
	    		  	  	<label for="phone_number">Phone Number</label>
	    		  	  </div>
	    		  	  <div class="input-field col s12">
	    		  	  	<textarea id="message" name="msg" class="materialize-textarea" required></textarea>
          				<label for="message">Your Message</label>
	    		  	  </div>
	    		  	  <div class="col s12">
	    		  	  	<button type="submit" class="btn waves-light waves-effect blue">Send
	    		  	  	  <i class="mdi-content-send right"></i>
	    		  	  	</button>
	    		  	  </div>
	    		  	</div>
	    		  </form>
	    		  <?php
				      }
			      ?>
	    		</div>
	    	</div>
	  	</div>
	  </div>
	  <div class="row">
	    <div class="col s12">
	    	<div class="card">
					<div id="map-canvas" style="height: 400px;"></div>
				</div>
	    </div>
	  </div>
	</div>
</main>

<?php
load_view("Template/footer.php");
load_view("Template/bottom.php",Fun::mergeifunset($inp,array("needbody"=>false)));
?>
  <script src="https://maps.googleapis.com/maps/api/js"></script>
  <script src="js/contactus.js"></script>
</body>
</html>