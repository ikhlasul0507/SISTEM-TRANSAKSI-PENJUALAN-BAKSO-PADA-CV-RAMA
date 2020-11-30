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
            <h3 class="page-title mb-0 p-0">Kas</h3>
            <div class="d-flex align-items-center">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Kas</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
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
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <form action="get">
                  <h4 class="card-title"><u>Filter Data Kas </u></h4>
                </form>
                <div class="row pb-2">
                  <div class="col-2">
                    <h6 class="d-inline">Pilih Tanggal</h6>
                  </div>
                  <div class="col-7">
                    <form action="" method="get">
                    <input type="date" name="tgl" value="filter"><br><br>
                    <button type="submit" name="cari" class="btn btn-info">Tampilkan</button>
                    <a href="kas.php" class="btn btn-info">Reset</a>
                    </form>
                  </div>
                </div>

                <a class="btn mb-3" href="excel/ekashari.php" style="background-color: mediumseagreen; color:white;"><em class="fa fa-file-excel"></em> Eksport Excel</a>
                <a href="cetak/ckashari.php" target="_blank" class="btn btn-danger mb-3"><em class="fa fa-print"></em> Cetak Laporan</a>

                <table class="table table-hover">
                  <thead>
                    <tr class="table-info">
                      <th scope="col">No</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Kas Perhari (Rp)</th>
                      <th scope="col">Kas Masuk (Rp)</th>
                      <th scope="col">Laba (Rp)</th>
                      <th scope="col">Rugi (Rp)</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      if(isset($_GET['cari'])){
                      $tgl = $_GET['tgl'];
                      $no = 1;
                      $gj=mysqli_query($conn,"SELECT * FROM tbl_kas WHERE tgl_kas_hari='$tgl' ORDER BY tgl_kas_hari DESC");
                      foreach ($gj as $g) : ?>
                    <tr>
                      <th scope="row"><?= $no++; ?></th>
                      <td><?= $g['tgl_kas_hari'];?></td>
                      <td><?= "Rp. ". number_format($g['kas_awal'], 0, ',', '.')?></td>
                      <td><?= "Rp. ". number_format($g['pemasukan'], 0, ',', '.')?></td>
                      <td><?= "Rp. ". number_format($g['laba'], 0, ',', '.')?></td>
                      <td><?= "Rp. ". number_format($g['rugi'], 0, ',', '.')?></td>
                      <td> <a href="../control/hkas_hari.php?id_kas=<?= $g['id_kas']?>" onclick="return confirm('yakin Hapus ?')"><i class="fas fa-trash-alt "></i></a></td>
                    </tr>
                  <?php endforeach;}else{ 
                      $no = 1;
                      $gj=mysqli_query($conn,"SELECT * FROM tbl_kas ORDER BY tgl_kas_hari DESC");
                      foreach ($gj as $g) : ?>
                    <tr>
                      <th scope="row"><?= $no++; ?></th>
                      <td><?= $g['tgl_kas_hari'];?></td>
                      <td><?= "Rp. ". number_format($g['kas_awal'], 0, ',', '.')?></td>
                      <td><?= "Rp. ". number_format($g['pemasukan'], 0, ',', '.')?></td>
                      <td><?= "Rp. ". number_format($g['laba'], 0, ',', '.')?></td>
                      <td><?= "Rp. ". number_format($g['rugi'], 0, ',', '.')?></td>
                      <td> <a href="../control/hkas_hari.php?id_kas=<?= $g['id_kas']?>" onclick="return confirm('yakin Hapus ?')"><i class="fas fa-trash-alt "></i></a></td>
                    </tr>
                  <?php endforeach; }?>
                  </tbody>
                </table>
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
      <footer class="footer"> © 2020 Sistem Informasi Transaksi Penjualan Pada CV. Rama'95 </a>
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