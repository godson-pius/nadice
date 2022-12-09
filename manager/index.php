<?php require_once './partials/header.php'; ?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php require_once './partials/sidebar.php'; ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Messages</h6>
                    </li>

                    <li><a class="dropdown-item" href="./contacts">View messages</a></li>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Messages</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-chat-square-text"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= GET_TOTAL('messages'); ?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">
              <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Diesel Price</h6>
                    </li>

                    <li><a class="dropdown-item" href="./set-price">Set Price</a></li>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Diesel <span>| Current Price</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="">₦</i>
                    </div>
                    <div class="ps-3">
                      <h6><?= number_format($current_price); ?></h6>
                      <!-- <span class="text-muted small pt-2 ps-1">Nadice Oil &amp; Gas</span> -->
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Customers</h6>
                    </li>
                    <li><a class="dropdown-item" href="./customers">View all clients</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Customers <span>| Nadice Oil &amp; Gas Limited</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= GET_TOTAL('clients'); ?></h6>
                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">

            <div class="card-body">
              <h5 class="card-title">Recent Request</h5>

              <div class="activity">

                <?php 
                  if ($request_sidebars) {
                    foreach ($request_sidebars as $request_sidebar) {
                      extract($request_sidebar); ?>

                      <div class="activity-item d-flex">
                        <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                        <div class="activity-content">
                          <?= $company; ?>
                        </div>
                      </div><!-- End activity item-->
                <?php } } else { echo "<i class='text-secondary'>No request</i>"; } ?>

              </div>

            </div>
          </div><!-- End Recent Activity -->

        </div><!-- End Right side columns -->

      </div>
    </section>

    <section>
      <section class="row">
                    <!-- Recent Sales -->
                    <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <h5 class="card-title">Recent Request <span>| Nadice Oil &amp; Gas Limited</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Company</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Liters</th>
                        <th scope="col">Price</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php 
                      if ($requests) {
                        foreach ($requests as $request) {
                          extract($request); ?>

                      <tr>
                        <th scope="row"><a href="#">#<?= $request_id; ?></a></th>
                        <td><?= $company; ?></td>
                        <td><a href="#" class="text-primary"><?= $phone; ?></a></td>
                        <td><?= $liter; ?></td>
                        <td><span class="badge bg-success"><?= $current_price; ?></span></td>
                      </tr>

                      <?php } } ?>

                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->
      </section>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php require_once './partials/footer.php'; ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>