<?php
load_view("Template/top.php",$inp);
load_view("Template/navbar.php",$inp);

$defopen="otpwindow";
$defopen="signupwindow";

?>
  <main>
    <div class="container">
    <br>
      <div class="row">
        <div class="col s12 l10 offset-l1">
          <div class="card-panel">
            <?php
              load_view('Template/form_errors.php',array("msg"=>$signupmsg));
            ?>
            <div class="row">
              <div class="col s12">
                <h4 class="teal-text text-darken-1 center">Sign Up</h4>
              </div>
            </div>
            <div class="row center">
              <form class="col s12 l10 offset-l1" method="post" onsubmit='return ms.signupform(this,<?php echo tf($_ginfo["needsignupotp"]); ?>);' <?php if($_ginfo["needsignupotp"]) { ?>  data-action='signupotp' data-params='{"phone":$("#signupwindow").find("input[name=phone]").val()}' data-res='hideshowdown("signupwindow","otpwindow");'  <?php }else{ ?>  <?php } ?>  autocomplete="off" >
                <div id="signupwindow" style='<?php dit($defopen=="signupwindow"); ?>' >
                  <div class="row">
                    <div class="input-field col s12 l6">
                      <input id="fullname" name="name" type="text"  data-condition='simple' >
                      <label for="fullname">Full Name</label>
                    </div>
                    <div class="input-field col s12 l6">
                      <input id="email" name="email" type="text"  data-condition='email' >
                      <label for="email">Email</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12 l6">
                      <input id="password" name="password" type="password"  data-condition="simple"  >
                      <label for="password">Password</label>
                    </div>
                    <div class="input-field col s12 l6">
                      <input id="confirm_password" name="cpassword" type="password" data-condition="password"  >
                      <label for="confirm_password">Confirm Password</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="phone" name="phone" type="text" data-condition="phone"  >
                      <label for="phone">Mobile Number</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <button class="btn waves-effect waves-light" name="signup" type="submit" id="submit_button">Submit</button>
                      <button class="btn grey waves-effect waves-light" type="reset">Reset</button>
                    </div>
                  </div>
                </div>
                <div id="otpwindow" style='<?php dit($defopen=="otpwindow"); ?>' >

                  <div class="col s12">
                    Please confirm your number
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="otp" name="otp" type="text" data-condition="simple" class="validate" >
                      <label for="otp">One Time Password</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <button class="btn waves-effect waves-light"  name="signup" type="submit" >Submit
                        <i class="mdi-content-send right"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    <br><br>
    </div>
  </main>

<?php
load_view("Template/footer.php",$inp);
load_view("Template/bottom.php",Fun::mergeifunset($inp,array("needbody"=>false)));
?>

<!-- 
  <script src="js/signup.js"></script>
-->

</body>
</html>