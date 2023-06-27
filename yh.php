<?php
session_start();

if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] == true) {
    header("Location: view.php");
    exit();
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    

    if ($username == "cheif" && $password == "cheif") {
        $_SESSION['admin_logged_in'] = true;
        header("Location: view.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>







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

<title>Admin Login</title>
</head>

<body>

    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <!-- <img src="assets/img/logo.png" alt=""> -->
                                    <!-- <span class="d-none d-lg-block">NiceAdmin</span> -->
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Appex Admin</h5>

                                    </div>



                                   

                                    <form method="post" class="row g-3 needs-validation">

                                        <div class="col-12">
                                            <?php if (isset($error)): ?>
                                                <p class="text-center text-danger">
                                                    <?php echo $error; ?>
                                                </p>
                                            <?php endif; ?>
                                            <label for="yourUsername" class="form-label">username</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" id="username" name="username" class="form-control"
                                                    required>
                                                <div class="invalid-feedback">input username</div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">password</label>
                                            <!-- <span class="input-group-text" id="inputGroupPrepend">$</span> -->
                                            <input type="password" id="password" name="password" class="form-control"
                                                required>
                                            <div class="invalid-feedback">Please password</div>
                                        </div>


                                        <div class="col-12">
                                            <button id="update-btn" class="btn btn-primary w-100" type="submit"
                                                name="submit">login</button>
                                        </div>

                                    </form>

                                </div>
                            </div>



                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

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