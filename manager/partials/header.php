<?php
require_once 'prepared/prepared.php';
ACCESS_USING_SESSION('administrator', 'login');

// For Price - Header
$res = EXECUTE_QUERY(SELECT_WHERE("price", "price_id", 1));
foreach ($res as $price) {
  $current_price = $price['current'];
  $last_updated = $price['updated_at'];
}

// For Recent Requests - Sidebar
$request_sidebars = EXECUTE_QUERY(SELECT_ALL_LIMIT("requests", "request_id", 0, 7));

// For Recent Requests - Index page
$requests = EXECUTE_QUERY(SELECT_ALL("requests", "request_id"));

// fOR Pending Requests - Pending-requests page
$pending_requests = EXECUTE_QUERY(SELECT_WHERE_ORDER("requests", "status", "0", "request_id", "DESC"));

// fOR All Requests that have been resolved - Requets page
$resolved_requests = EXECUTE_QUERY(SELECT_WHERE_ORDER("requests", "status", "1", "request_id", "DESC"));

// For All Messages - Contact page
$messages = EXECUTE_QUERY(SELECT_ALL("messages", "message_id"));

// For All Messages - Contact page
$clients = EXECUTE_QUERY(SELECT_ALL("clients", "client_id"));

// For getting admin details - Header & Profile
$admins = EXECUTE_QUERY(SELECT_WHERE("admins", "admin_id", $_SESSION['administrator']));
foreach ($admins as $admin) {
  extract($admin);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Nadice Oil &amp; Gas</title>
  <meta content="This is the admin dashboard for Nadice Oil and Gas" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../images/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Toastify CSS File -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

</head>

<body>

  <!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="../images/logo.png" alt="">
        <span class="d-none d-lg-block">Nadice</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number"><?= GET_TOTAL_WHERE("requests", "status", "0"); ?></span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have <?= GET_TOTAL_WHERE("requests", "status", "0"); ?> new requests
              <a href="./pending-requests"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number"><?= GET_TOTAL('messages'); ?></span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have <?= GET_TOTAL('messages'); ?> new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../images/logo.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?= $fullname; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?= $fullname; ?></h6>
              <span><?= $email; ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="./profile">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="./logout">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header>