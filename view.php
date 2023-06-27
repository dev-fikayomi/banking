<?php
session_start();

// Check if admin is logged in, redirect to login page if not
// if (!isset($_SESSION['admin_id'])) {
//     header("Location: yh.php");
//     exit();
// }

// Rest of the admin page code goes here
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  
  <link href="NiceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="NiceAdmin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="NiceAdmin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="NiceAdmin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="NiceAdmin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="NiceAdmin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="NiceAdmin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="NiceAdmin/assets/css/style.css" rel="stylesheet">


</head>



<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Appex Cheif</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

       

       
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
 <main id="main" class="main">

    <div class="pagetitle">
      <h1>Oya Run am</h1>
      <nav>
       
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-6 col-md-12">
              <div class="card info-card sales-card">

                <div class="filter">
                  
                 
                </div>

                <div class="card-body">
                  <h5 class="card-title">Activities </h5>

                  <div class="d-flex align-items-center">
                   
                    <div class="ps-3">
                    <a href="tables-general.php" class="btn btn-primary">View Users</a>

                    </div>
                    <div class="ps-3">
                    <a href="updateform.html" class="btn btn-primary">Add  funds</a>

                    </div>
                    <!-- <a href="updateform.html" class="btn btn-primary">Add  funds</a> -->

<!-- </div> -->
                    <div class="ps-3">
                    <a href="admintransaction.php" class="btn btn-primary">View Transactions</a>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Customers Card -->
                  <!-- Reports -->
             <!-- Recent Sales -->
            <!-- Top Selling -->
         </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">
           

             </div><!-- End Recent Activity -->

          <!-- Website Traffic -->
           <!-- News & Updates Traffic -->
        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <footer id="footer" class="footer">
    <!-- <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div> -->
    <div class="credits">
      
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="NiceAdmin/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="NiceAdmin/assets/vendor/chart.js/chart.min.js"></script>
  <script src="NiceAdmin/assets/vendor/echarts/echarts.min.js"></script>
  <script src="NiceAdmin/assets/vendor/quill/quill.min.js"></script>
  <script src="NiceAdmin/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="NiceAdmin/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="NiceAdmin/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="NiceAdmin/assets/js/main.js"></script>

</body>

</html>