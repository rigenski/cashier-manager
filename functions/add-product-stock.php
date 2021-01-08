<?php
include 'header.php';

$id = $_GET['pid'];

// ambil data dari tabel berdasarkan id dengan menjalankan function dari functions.php
$product = read("SELECT * FROM product WHERE id = $id")[0];

// ketika tombol submit di tekan
if (isset($_POST['submit'])) {
  if (addProductStock($_POST) > 0) {
    echo "<script>alert('stock berhasil ditambahkan!')
    document.location.href = '../product.php'</script>";
  } else {
    echo "<script>alert('stock gagal ditambahkan!')
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
          <form method="post" action="">
            <!-- HIDDEN PRODUCT -->

            <input type="hidden" class="form-control" value="<?= $product['id'] ?>" name="id" />

            <!-- HIDDEN PRODUCT -->
            <div class="form-row ">
              <div class="form-group col-md-4">
                <label for="id_product">ID-Product</label>
                <input type="text" class="form-control" disabled id="id_product" value="<?= $product['id_product'] ?>" />
              </div>
              <div class="form-group col-md-8">
                <label for="name">Name</label>
                <input type="text" class="form-control" disabled value="<?= $product['name'] ?>" id="name" />
              </div>
            </div>



            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="price">Add Stock</label>
                <input type="number" class="form-control" id="stock-add" />
              </div>
              <div class="form-group col-md-4">
                <label for="stock">Stock Old</label>
                <input type="number" class="form-control" disabled id="stock-old" value="<?= $product['stock'] ?>" />
              </div>
              <div class="form-group col-md-4">
                <label for="stock">Stock Now</label>
                <input type="number" class="form-control" id="stock-now" name="stock" />
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
<script src="../js/jquery.js"></script>
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