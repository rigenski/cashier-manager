<?php
include 'header.php';

if ($_SESSION['login'] == true) {
  if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
  } else {
    $id = $_SESSION['id'];
  }

  // ambil data dari tabel dengan function 
  $admin = read("SELECT * FROM admin WHERE id = $id")[0];
}

if (isset($_POST['update'])) {
  if (updateProfile($_POST) > 0) {
    echo "<script>alert('data berhasil diubah!');
    window.location.reload()</script>";
  }
}

?>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title text-uppercase font-medium font-14">
          Profile page
        </h4>
      </div>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- ============================================================== -->
  <!-- End Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Container fluid  -->
  <!-- ============================================================== -->
  <div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">
      <!-- Column -->
      <div class="col-lg-4 col-xlg-3 col-md-12">
        <div class="white-box">
          <div class="user-bg">
            <img width="100%" alt="user" src="plugins/images/bg-login.jpg" />
            <div class="overlay-box">
              <div class="user-content">
                <a href="javascript:void(0)"><img src="plugins/images/users/5.jpg" class="thumb-lg img-circle" alt="img" /></a>
                <h4 class="text-white mt-2">
                  <?= $admin['username'] ?>

                </h4>
                <h5 class="text-white mt-2"><?= $admin['email'] ?></h5>
              </div>
            </div>
          </div>
          <!-- <div class="user-btm-box mt-5 d-md-flex">
            <div class="col-md-4 col-sm-4 text-center">
              <h1>258</h1>
            </div>
            <div class="col-md-4 col-sm-4 text-center">
              <h1>125</h1>
            </div>
            <div class="col-md-4 col-sm-4 text-center">
              <h1>556</h1>
            </div>
          </div> -->
        </div>
      </div>
      <!-- Column -->
      <!-- Column -->
      <div class="col-lg-8 col-xlg-9 col-md-12">
        <div class="card">
          <div class="card-body">
            <form class="form-horizontal form-material" action="" method="post">
              <!-- INPUT HIDDEN -->
              <input type="hidden" value="<?= $admin['id'] ?>" name="id">
              <!-- INPUT HIDDEN -->
              <div class="form-group mb-4">
                <label for="name" class="col-md-12 p-0">Full Name</label>
                <div class="col-md-12 border-bottom p-0">
                  <input type="text" class="form-control p-0 border-0" value="<?= $admin['name'] ?>" name="name" id="name" />
                </div>
              </div>
              <div class="form-group mb-4">
                <label for="email" class="col-md-12 p-0">Email</label>
                <div class="col-md-12 border-bottom p-0">
                  <input type="email" class="form-control p-0 border-0" name="email" id="email" value="<?= $admin['email'] ?>" />
                </div>
              </div>
              <div class="form-group mb-4">
                <label class="col-md-12 p-0" for="phone">Phone</label>
                <div class="col-md-12 border-bottom p-0">
                  <input type="text" class="form-control p-0 border-0" value="<?= $admin['phone'] ?>" name="phone" id="phone" />
                </div>
              </div>
              <div class="form-group mb-4 text-center">
                <div class="col-sm-12">
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#updateModal">Update Profile</button>
                </div>
              </div>
              <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Update Profile</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      Are you sure you want to change your profile?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" name="update" class="btn btn-primary">Save Changes</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            <div class=" col-sm-12 text-center">
              <a href="logout.php"><button class="btn btn-danger">Logout</button></a>
            </div>
          </div>

        </div>
      </div>
      <!-- Column -->
    </div>
    <!-- Row -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
  </div>
  <!-- ============================================================== -->
  <!-- End Container fluid  -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- footer -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- End footer -->
  <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
<script src="plugins/bower_components/jquery-datatables/jquery.dataTables.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="plugins/bower_components/popper.js/dist/umd/popper.min.js"></script>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<script src="js/app-style-switcher.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!--Menu sidebar -->
<script src="js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="js/custom.js"></script>
<script src="js/jquery.js"></script>
</body>

</html>