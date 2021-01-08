<?php
include 'header.php';

// ketika tombol submit ditekan
if (isset($_POST['submit'])) {
  if (createProduct($_POST) > 0) {
    echo "<script>alert('data berhasil ditambahkan!')
    document.location.href = '../product.php'</script>";
  } else {
    echo "<script>alert('data gagal ditambahkan!')
    document.location.href = '../product.php'</script>";
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
          Product
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
          <h3 class="box-title">Add Product</h3>
          <!-- <p class="text-muted">Add class <code>.table</code></p> -->
          <form method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
              <?php
              $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
              $charactersLength = strlen($characters);
              $randomString = '';
              for ($i = 0; $i < 2; $i++) {
                $randomString .=  $characters[rand(0, $charactersLength - 1)];
              }
              $strip = '-';
              $date = date("d");
              $minute     = date("i");
              $second     = date("s");
              $idProduct = $randomString . $strip . $date . $minute . $second;
              ?>
              <label for="id_product">ID-Product</label>
              <input type="text" class="form-control" disabled id="id_product" value="<?= $idProduct ?>" />
              <input type="hidden" class="form-control" value="<?= $idProduct ?>" name="id_product" />
            </div>
            <div class="form-group">
              <label for="name">Name</label>
              <input type=" text" class="form-control" id="name" name="name" />
            </div>
            <div class="form-row">
              <div class="form-group col-md-8">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price" />
              </div>
              <div class="form-group col-md-4">
                <label for="stock">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" />
              </div>
            </div>
            <div class="form-group">
              <label for="iamge">Image</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="image-product" name="image">
                <label class="custom-file-label" id="label-image-product" for="image">Choose file</label>
              </div>
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
<script src="../js/jquery.js"></script>
</body>

</html>