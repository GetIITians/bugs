<?php
load_view("Template/top.php",$inp);
load_view("Template/navbarnew.php",$inp);
?>
  <main>
    <div class="container">
    <br>
      <div class="card-panel">
      <br>
        <div class="row">
          <div class="col s12 l4 offset-l1 center">
            <img class="materialboxed" height="100" width="100" src="photo/human1.png">
            <br>
            <!-- Change Profile Picture -->
            <a href="#pic_upload" class="modal-trigger" style="cursor:pointer;">Change Profile Picture</a>
            <div id="pic_upload" class="modal">
              <div class="modal-content">
                <h6 class="teal-text">Change Profile Picture</h6>
              </div>
              <div class="row">
                <form action="#" class="col s12 l8 offset-l2">
                  <div class="row">
                    <div class="file-field input-field col s12">
                      <input class="file-path validate" type="text">
                      <div class="btn waves-effect waves-light blue">
                        <span>Open</span>
                        <input type="file">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col s12">
                      <button type="submit" class="btn waves-effect waves-light white grey-text">Change</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- End -->
          </div>
          <div class="col s12 l7">
            <div class="row">
              <div class="col s12">
                <h5 class="green-text left">Shivam Mamgain</h5>
              </div>
              <div class="col s12">
                <h6 class="grey-text left">shivammamgain47@gmail.com</h6>                
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-panel">
        <div class="row">
          <div class="col s12">
            <ul class="tabs">
              <li class="tab col s3"><a class="active" href="#tab_profile">Profile</a></li>
              <li class="tab col s3"><a href="#tab_classes">Classes</a></li>
              <li class="tab col s3"><a href="#tab_reviews">Reviews</a></li>
              <li class="tab col s3"><a href="#tab_account">Account</a></li>
            </ul>
          </div>
          <div id="tab_profile" class="col s12 offset-l2">
          <?php
            load_view("Template/studentprofile_about.php");
          ?>
          </div>

          <div id="tab_classes" class="col s12">
          <?php
            load_view("Template/studentprofile_classes.php");
          ?>
          </div>
          <div id="tab_reviews" class="col s12">
          <?php
            load_view("Template/studentprofile_reviews.php");
          ?>
          </div>
          <div id="tab_account" class="col s12">
          <?php
            load_view("Template/studentprofile_account.php");
          ?>
          </div>
        </div>
      </div>
    </div>
  </main>

<?php
load_view("Template/footer.php",$inp);
load_view("Template/bottom.php",Fun::mergeifunset($inp,array("needbody"=>false)));
?>
  <script src="js/studentprofile.js"></script>
</body>
</html>