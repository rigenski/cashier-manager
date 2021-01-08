<?php
session_start();


// REGISTRASI //

// if (isset($_POST['login'])) {

//   if (registration($_POST) > 0) {
//     echo "<script>
//     alert('user baru berhasil ditambahkan !');
//     </script>";
//   } else {
//     echo "Gagal Registration";
//   }
// }

// REGISTRASI //

// LOGIN //
//  cek cookie 
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];

  // ambil username berdasarkan id
  $result = mysqli_query($conn, "SELECT username FROM admin WHERE id = $id");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username
  if ($key === hash('sha256', $row['username'])) {
    $_SESSION['login'] = true;
  }
}

// cek session
if (isset($_SESSION["login"])) {
  // redirect / pindah halaman
  header("Location: dashboard.php");
  exit;
}

include 'functions/functions.php';

// jika belum login
// klik login
if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");

  //cek username
  if (mysqli_num_rows($result) === 1) {
    // cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {

      // set session
      $_SESSION["login"] = true;

      // cek remember me
      if (isset($_POST["remember"])) {
        // set cookie 
        setcookie('id', $row['id'], time() + 600);
        setcookie('key', hash('sha256', $row['username']), time() + 600);
      } else {
        // set session
        $_SESSION['id'] = $row['id'];
      }

      header("Location: dashboard.php");
      exit;
    } else {
      // saat username atau password yang dimasukkan salah
      // $alert = "<div class='alert alert-danger mx-2 col-md-12 mt-3' role='alert'>Username atau password salah !</div>";
      echo "<script>alert('Username atau password salah !')</script>";
    }
  };

  $error = true;
}


// LOGIN //
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, Ample lite admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, Ample admin lite dashboard bootstrap 4 dashboard template" />
  <meta name="description" content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
  <meta name="robots" content="noindex,nofollow" />
  <title>Coffe Dashboard</title>
  <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png" />
  <!-- Custom CSS -->
  <link href="css/style.min.css" rel="stylesheet" />
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <!-- <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full"> -->
  <!-- ============================================================== -->
  <!-- Topbar header - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- End Left Sidebar - style you can find in sidebar.scss  -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Page wrapper  -->
  <!-- ============================================================== -->
  <div class="page-wrapper " style="height: 100vh">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container " style="height: 100vh">
      <!-- ============================================================== -->
      <!-- Start Page Content -->
      <!-- ============================================================== -->
      <!-- Row -->
      <div class="row justify-content-center my-auto align-content-center" style="height: 100vh">
        <!-- Column -->
        <div class="col-lg-6 col-xlg-6 col-md-8 col-sm-12">
          <div class="white-box shadow-lg ">
            <div class="user-bg">
              <img width="100%" alt="user" src="plugins/images/bg-login.jpg" />
              <div class="overlay-box">
                <div class="user-content">
                  <a href="javascript:void(0)"><img src="plugins/images/users/5.jpg" class="thumb-lg img-circle" alt="img" /></a>
                  <h2 class="text-white mt-3 "><b>LOGIN</b></h2>
                  <h4 class="text-white ">WELCOME TO CASHIER MANAGER</h4>
                  </h5>
                </div>
              </div>
            </div>
            <div class="user-btm-box mt-5">
              <div class="card">
                <div class="card-body">
                  <form class="form-horizontal form-material " action="" method="post">
                    <div class="form-group mb-4">
                      <label for="username" class="col-md-12 p-0">username</label>
                      <div class="col-md-12 border-bottom p-0">
                        <input type="text" autofocus placeholder="Enter your username" class="form-control p-0 border-0" name="username" id="username" />
                      </div>
                    </div>
                    <div class="form-group mb-4">
                      <label for="password" class="col-md-12 p-0">Password</label>
                      <div class="col-md-12 border-bottom p-0">
                        <input type="password" placeholder="Enter your password" class="form-control p-0 border-0" name="password" id="password" />
                      </div>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="remember" name="remember">
                      <label class="custom-control-label" for="remember">Remember me</label>
                    </div>
                    <div id="wrong-login">

                    </div>
                    <div class="form-group mb-4 text-center mt-3">
                      <button class="btn btn-success mx-2 col-md-12" name="login">Login</button>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
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