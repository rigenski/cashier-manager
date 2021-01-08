<?php

include 'header.php';

// ketika tombol submit ditekan
if (isset($_POST['submit'])) {
  if (createMember($_POST) > 0) {
    echo "<script>alert('data berhasil ditambahkan!')
    document.location.href = '../member.php'</script>";
  } else {
    echo "<script>alert('data gagal ditambahkan!')
    document.location.href = '../member.php'</script>";
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
          Member
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
    <div class="row">
      <div class="col-sm-12">
        <div class="white-box">
          <h3 class="box-title">Add Member</h3>
          <!-- <p class="text-muted">Add class <code>.table</code></p> -->
          <form method="post" action="">
            <div class="form-group">
              <label for="inputAddress">Name</label>
              <input type="text" class="form-control" id="inputAddress" name="name" />
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="email" />
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Number Phone</label>
                <input type="number" class="form-control" id="inputPassword4" name="phone" />
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-8">
                <label for="inputCity">Address</label>
                <input type="text" class="form-control" id="inputCity" name="address" />
              </div>
              <div class="form-group col-md-4">
                <label for="inputZip">Post</label>
                <input type="text" class="form-control" id="inputZip" name="post" />
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress2">Status</label>
              <input type="text" class="form-control" disabled id="inputAddress2" value="Member" name="status">
              <input type="hidden" class="form-control" value="Member" name="status">
            </div>
            <button type="submit" name="submit" class="btn btn-primary col-12">
              CREATE
            </button>
          </form>
        </div>
      </div>
    </div>
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
<script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="../plugins/bower_components/popper.js/dist/umd/popper.min.js"></script>
<script src="../bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../js/app-style-switcher.js"></script>
<!--Wave Effects -->
<script src="../js/waves.js"></script>
<!--Menu sidebar -->
<script src="../js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="../js/custom.js"></script>
</body>

</html>