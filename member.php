<?php
include 'header.php';

// ambil data dari tabel dengan function 
$members = read("SELECT * FROM member ");


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
          <h3 class="box-title">Data Member</h3>
          <!-- <p class="text-muted">Add class <code>.table</code></p> -->
          <a href="functions/create-member.php">
            <button type="button" class="btn btn-primary mb-4">
              Add Member
            </button>
          </a>
          <div class="table-responsive">
            <table class="table table-bordered" id="table-data">
              <thead>
                <tr>
                  <th class="border-top-0">#</th>
                  <th class="border-top-0">Name</th>
                  <th class="border-top-0">Phone</th>
                  <th class="border-top-0">Email</th>
                  <th class="border-top-0">Post</th>
                  <th class="border-top-0">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($members as $member) : ?>
                  <tr>
                    <td><?= $i ?></td>
                    <td><?= $member['name']; ?></td>
                    <td><?= $member['phone']; ?></td>
                    <td><?= $member['email']; ?></td>
                    <td><?= $member['post']; ?></td>
                    <td class="py-2">
                      <button type="button" class="btn btn-primary pt-1 mr-1">
                        History
                      </button>
                      <button class="btn btn-danger dropdown-toggle my-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Info
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="functions/update-member.php?uid=<?= $member['id'] ?>">Edit</a>
                        <a class="dropdown-item" href="functions/delete-member.php?uid=<?= $member['id'] ?>" onclick=" return confirm('Are you sure you want to delete .. ?')">Delete</a>
                      </div>
                    </td>
                  </tr>
                  <?php $i++ ?>
                <?php endforeach; ?>

              </tbody>
            </table>
          </div>

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