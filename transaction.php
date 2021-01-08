<?php
include 'header.php';

// ambil data dari tabel dengan function 
$products = read("SELECT * FROM product");

// if (isset($_GET['plus-cart']))
?>


<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper" style="min-height: 250px">
  <!-- ============================================================== -->
  <!-- Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title text-uppercase font-medium font-14">
          Transaction
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
      <div class="col-md-12">
        <div class="white-box">
          <h3 class="box-title">Order</h3>
          <div class="table-responsive">
            <table class="table table-bordered" id="table-data">
              <thead>
                <tr>
                  <th class="border-top-0">#</th>
                  <th class="border-top-0">Image</th>
                  <th class="border-top-0">Name</th>
                  <th class="border-top-0">ID-Product</th>
                  <th class="border-top-0">Price</th>
                  <th class="border-top-0">Stock</th>
                  <th class="border-top-0">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($products as $product) : ?>
                  <tr>
                    <td><?= $i ?></td>
                    <td><img src="img/<?= $product['image'] ?>" width="60px" alt=""></td>
                    <td><?= $product['name']; ?></td>
                    <td><?= $product['id_product']; ?></td>
                    <td><?= $product['price']; ?></td>
                    <td><?= $product['stock']; ?></td>
                    <td class="py-2">
                      <!-- <input type="text" class="order-value<?= $product['id'] ?>" value="2"> -->
                      <button type="button" class="btn btn-danger mx-3 " onclick="minCart(<?= $product['id'] ?>);">
                        <i class="fas fa-minus p-1" aria-hidden="true"></i>
                      </button>
                      <span class="font-bold ">
                        0
                      </span>
                      <button type="button" class="btn btn-primary mx-3 " onclick="plusCart(<?= $product['id'] ?>);">
                        <i class="fas fa-plus p-1" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <?php $i++ ?>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <!-- <h3 class="box-title mt-4">Cart</h3>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th class="border-top-0">#</th>
                  <th class="border-top-0">Image</th>
                  <th class="border-top-0">Name</th>
                  <th class="border-top-0">ID-Product</th>
                  <th class="border-top-0">Price</th>
                  <th class="border-top-0">Value</th>
                  <th class="border-top-0">Total</th>
                  <th class="border-top-0">Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($products as $product) : ?>
                  <tr>
                    <td><?= $i ?></td>
                    <td><img src="img/<?= $product['image'] ?>" width="60px" alt=""></td>
                    <td><?= $product['name']; ?></td>
                    <td><?= $product['id_product']; ?></td>
                    <td><?= $product['price']; ?></td>
                    <td><?= $product['stock']; ?></td>
                    <td><?= $product['price'] * $product['stock']; ?></td>
                    <td class="py-1">
                      <button type="button" class="btn btn-danger mx-3 mt-1">
                        <i class="fas fa-trash-alt p-1" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <?php $i++ ?>
                <?php endforeach; ?>

              </tbody>
            </table>
          </div> -->

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
<!-- <script src="js/script.js"></script> -->
</body>

</html>