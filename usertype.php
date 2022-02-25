

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Health-Tech</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="corona-free-dark-bootstrap-admin-template-1.0.0/template/assets/vendors/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="corona-free-dark-bootstrap-admin-template-1.0.0/template/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="corona-free-dark-bootstrap-admin-template-1.0.0/template/assets/css/style.css">
    <!-- End layout styles -->
    
  </head>
  <body>

    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Select who you are?</h3>
                
        <form action="usertype_.php" method="post">
        <input type="radio" id="doctor" name="fav_language" value="Doctor">
        <label for="doctor">Doctor</label><br>
        <input type="radio" id="individual" name="fav_language" value="Individual">
        <label for="individual">Individual</label><br>
        <input type="radio" id="hospital" name="fav_language" value="Hospital">
        <label for="hospital">Hospital</label>
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" value="continue">
        </div>
        <?php
 include "usertype_.php"
 ?>

    </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>