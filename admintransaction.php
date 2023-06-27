<?php
// session_start();

// if (!isset($_SESSION['admin_id'])) {
//     header("Location: yh.php");
//     exit();
// }

require __DIR__ . "/dbcon.php";

$stmt = $mysqli->prepare("SELECT transactions.*, users.email FROM transactions INNER JOIN users ON transactions.user_id = users.id ORDER BY date DESC");
$stmt->execute();
$result = $stmt->get_result();
$transactions = $result->fetch_all(MYSQLI_ASSOC);
$stmt->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Transactions</title>
</head>
<body>
	
</body>
</html>
<?php


// Check if admin is logged in, redirect to login page if not


// Rest of the admin page code goes here
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tables / General</title>
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
        <span class="d-none d-lg-block">Apex Cheif</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

   

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

         

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <!-- <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li> -->
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <!-- <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div> -->
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <!-- <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div> -->
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <!-- <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div> -->
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <!-- <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div> -->
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <!-- <a href="#">Show all notifications</a> -->
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <!-- <i class="bi bi-chat-left-text"></i> -->
            <!-- <span class="badge bg-success badge-number">3</span> -->
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <!-- <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div> -->
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <!-- <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle"> -->

              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <!-- <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle"> -->

              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>





            <!-- <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li> -->

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
>

  <main id="main" class="main">

    <div class="pagetitle">
      <a href="view.php" class="btn btn-primary">Dashboard</a>
      <a href="updateform.html" class="btn btn-primary">Add Funds</a>
      <a href="updateform.html" class="btn btn-primary">Log out</a>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Admin Transactions</h5>
              <table class="table">
                <thead>

                <!-- <h1></h1> -->
	<table>
		<thead>
			<tr>
				
				<th>User Email</th>
				<th>Receiver Name</th>
				<th>Account Number</th>
				<th>Bank Name</th>
				<th>Swift Code</th>
				<th>Amount</th>
				<th>Date</th>
				<th>Country</th>
				<th>Transaction ID</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($transactions as $transaction) { ?>
				<tr>
                     <td><?php echo $transaction['transaction_id']; ?></td>
					<td><?php echo $transaction['email']; ?></td>
					<td><?php echo $transaction['receiver_name']; ?></td>
					<td><?php echo $transaction['account_number']; ?></td>
					<td><?php echo $transaction['bank_name']; ?></td>
					<td><?php echo $transaction['swift_code']; ?></td>
					<td><?php echo $transaction['amount']; ?></td>
					<td><?php echo $transaction['date']; ?></td>
					<td><?php echo $transaction['country']; ?></td>
					
				</tr>
			<?php } ?>
		</tbody>
	</table>

                  <!-- Default Table -->

               
              <!-- End Default Table Example -->
            </div>
          </div>



        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <!-- <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div> -->
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
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