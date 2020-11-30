<?php include 'header.php'; ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

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
  <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin6">
      <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin6">
          <!-- ============================================================== -->
          <!-- Logo -->
          <!-- ============================================================== -->
          <a class="navbar-brand ml-4" href="">
            <!-- Logo icon -->
            <b class="logo-icon">
              <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
              <!-- Dark Logo icon -->
              <img src="../assets/images/LOGO-RAKA.png" alt="homepage" height="25px" class="dark-logo" />

            </b>
            <!--End Logo icon -->
            <!-- Logo text -->
            <span class="logo-text">
              <!-- dark Logo text -->
              <!-- <img src="../assets/images/logo-light-text.png" alt="homepage" class="dark-logo" /> -->

            </span>
          </a>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- toggle and nav items -->
          <!-- ============================================================== -->
          <a class="nav-toggler waves-effect waves-light text-white d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
          <ul class="navbar-nav d-lg-none d-md-block ">
            <li class="nav-item">
              <a class="nav-toggler nav-link waves-effect waves-light text-white " href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            </li>
          </ul>
          <!-- ============================================================== -->
          <!-- toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav mr-auto mt-md-0 ">
            <!-- ============================================================== -->
          </ul>

          <!-- ============================================================== -->
          <!-- Right side toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav">
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/SITP.png" alt="user" style="height: 30px;margin-right: 20px" ><?php 

                    $email= $_SESSION['email'];
                    $data=mysqli_query($conn,"SELECT * FROM tbl_user WHERE email='$email' ");
                    while($tampil=mysqli_fetch_array($data))
                    { 
                      echo $tampil['nama'];
                    }
                ?></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <?php include 'sidebar.php'; ?>
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
      <div class="page-breadcrumb">
        <div class="row align-items-center">
          <div class="col-md-6 col-8 align-self-center">
            <h3 class="page-title mb-0 p-0">Halaman Kas Awal Transaksi</h3>
            <div class="d-flex align-items-center">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Kas Awal</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>

      `
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
        <div class="row justify-content-center">
          <!-- column -->
          <div class="col-sm-8">
            <div class="card">
              <div class="card-body">
                 <?php 

                    $tgl_kas_awal= date('Y-m-d');

                    $data=mysqli_query($conn,"SELECT * FROM tbl_kas_awal WHERE tgl_kas_awal='$tgl_kas_awal' ");
                    $tm = mysqli_fetch_array($data);

                    $tgl = $tm['tgl_kas_awal'];

                    if($tgl==$tgl_kas_awal){
                    ?>
                <form class="form-horizontal form-material" method="post" action="../control/pkasawal.php">
                  <div class="form-group">
                    <div class="row justify-content-center">
                     
                    </div>
                    <h2 class="text-center pt-4">Selamat Datang <br>Di</h2>
                    <h2 class="text-center pb-4">Sistem Informasi Transaksi Penjualan</h2>
                    <label class="col-md-12 mb-0">Kas Awal Transaksi</label>
                    <div class="input-group mt-2 pl-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Rp.</span>
                      </div>
                      <input type="text" name="kas_awal" value="<?= $tm['kas_awal'];?>" readonly class="form-control pl-2">
                      <input type="hidden" name="tgl_kas_awal" value="<?= date('Y-m-d'); ?>">
                    </div>
                  </div>
                  
                </form>
              <?php }else{ ?>
                <form class="form-horizontal form-material" method="post" action="../control/pkasawal.php">
                  <div class="form-group">
                    <div class="row justify-content-center">
                      <img src="../assets/images/logo3.png" alt="homepage" height="75px" class="justify-content-center dark-logo" />
                    </div>
                    <h2 class="text-center pt-4">Selamat datang di</h2>
                    <h2 class="text-center pb-4">Sistem Informasi Transaksi Penjualan</h2>
                    <label class="col-md-12 mb-0">Masukkan Kas Awal Transaksi</label>
                    <div class="input-group mt-2 pl-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Rp.</span>
                      </div>
                      <input type="text" name="kas_awal" class="form-control pl-2">
                      <input type="hidden" name="tgl_kas_awal" value="<?= date('Y-m-d'); ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12 d-flex">
                       <input type="submit" class="btn btn-info mb-3" name="simpan" value="Simpan Kas">
                    </div>
                  </div>
                </form>
              <?php } ?>
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
      <footer class="footer text-center"> © 2020 Sistem Informasi Transaksi Penjualan Pada CV. Rama'95 </a>
      </footer>
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
  <?php include 'footer.php';    ?>
</body>

</html>