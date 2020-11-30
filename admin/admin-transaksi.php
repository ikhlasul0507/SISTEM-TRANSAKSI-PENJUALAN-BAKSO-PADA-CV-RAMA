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
            <h3 class="page-title mb-0 p-0">Transaksi</h3>
            <div class="d-flex align-items-center">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Transaksi</li>
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
                  <h4 class="card-title"><u>Filter Data Transaksi </u></h4>
                </form>
                <div class="row pb-12">
                  <div class="col-2">
                    <h6 class="d-inline">Pilih Tanggal</h6>
                  </div>
                  <div class="col-4">
                    <form action="" method="get">
                    <input type="date" name="tgl" value="filter"><br><br>
                    <button type="submit" name="cari" class="btn btn-info">Tampilkan</button>
                    <a href="admin-transaksi.php" class="btn btn-info">Reset</a>
                    </form>
                  </div>
                  <div class="col-4">
                    <form action="" method="get">
                    <select name="bulan" required>
                      <option disabled selected>--Pilih Bulan--</option>
                      <option value="01">Januari</option>
                      <option value="02">Februari</option>
                      <option value="03">Maret</option>
                      <option value="04">April</option>
                      <option value="05">Mei</option>
                      <option value="06">Juni</option>
                      <option value="07">Juli</option>
                      <option value="08">Agustus</option>
                      <option value="09">September</option>
                      <option value="10">Oktober</option>
                      <option value="11">November</option>
                      <option value="12">Desember</option>
                    </select>
                    <select name="tahun" required>
                      <option disabled selected>--Pilih Tahun--</option>
                      <option value="2000">2000</option>
                      <option value="2001">2001</option>
                      <option value="2002">2002</option>
                      <option value="2003">2003</option>
                      <option value="2004">2004</option>
                      <option value="2005">2005</option>
                      <option value="2006">2006</option>
                      <option value="2007">2007</option>
                      <option value="2008">2008</option>
                      <option value="2009">2009</option>
                      <option value="2010">2010</option>
                      <option value="2011">2011</option>
                      <option value="2012">2012</option>
                      <option value="2013">2013</option>
                      <option value="2014">2014</option>
                      <option value="2015">2015</option>
                      <option value="2016">2016</option>
                      <option value="2017">2017</option>
                      <option value="2018">2018</option>
                      <option value="2019">2019</option>
                      <option value="2020">2020</option>
                      <option value="2021">2021</option>
                      <option value="2022">2022</option>
                      <option value="2023">2023</option>
                      <option value="2024">2024</option>
                      <option value="2025">2025</option>
                    </select>
                    <br><br>
                    <button type="submit" name="caribulan" class="btn btn-info">Tampilkan</button>
                    <a href="admin-transaksi.php" class="btn btn-info">Reset</a>
                    </form>
                  </div>
                </div>

                <a class="btn mb-3" href="excel/etransaksi.php" style="background-color: mediumseagreen; color:white;"><em class="fa fa-file-excel"></em> Eksport Excel</a>
                <a href="cetak/ctransaksi.php" target="_blank" class="btn btn-danger mb-3"><em class="fa fa-print"></em> Cetak Laporan</a>

                <table class="table table-hover" id="table_id">
                  <thead>
                    <tr class="table-info">
                      <th scope="col">No</th>
                      <th scope="col">Kode Transaksi</th>
                      <th scope="col">Nama Menu</th>
                      <th scope="col">Waktu</th>
                      <th scope="col">Harga (Rp)</th>
                      <th scope="col">Jumlah</th>
                      <th scope="col">Sub Total (Rp)</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if(isset($_GET['cari'])){
                      $tgl = $_GET['tgl'];
                      $no = 1;
                      $gj=mysqli_query($conn,"SELECT * FROM tbl_transaksi as a inner join tbl_menu as b on a.id_menu=b.id_menu WHERE tgl_transaksi='$tgl' ORDER BY tgl_transaksi DESC");
                      foreach ($gj as $g) : ?>
                    <tr>
                      <th scope="row"><?= $no++; ?></th>
                      <td>TR<?= date('m-d').$g['id_transaksi'].date('y');?></td>
                      <td><?= $g['nama_m'];?></td>
                      <td><?= $g['tgl_transaksi'];?></td>
                      <td><?= "Rp. ". number_format($g['harga_m'], 0, ',', '.')?></td>
                      <td><?= $g['jumlah_menu'];?></td>
                      <td><?= "Rp. ". number_format($g['total_transaksi'], 0, ',', '.')?></td>
                      <td><a href="../control/htransaksi.php?id_transaksi=<?= $g['id_transaksi']?>" onclick="return confirm('yakin Hapus ?')"><i class="fas fa-trash-alt "></i></a></td>
                    </tr>
                  <?php endforeach;}elseif(isset($_GET['caribulan'])){
                      $bulan = $_GET['bulan'];
                      $tahun = $_GET['tahun'];
                      $no = 1;
                      $gj=mysqli_query($conn,"SELECT * FROM tbl_transaksi as a inner join tbl_menu as b on a.id_menu=b.id_menu WHERE tgl_transaksi LIKE '%$tahun-$bulan%' ORDER BY tgl_transaksi DESC");
                      foreach ($gj as $g) : ?>
                    <tr>
                      <th scope="row"><?= $no++; ?></th>
                      <td>TR<?= date('m-d').$g['id_transaksi'].date('y');?></td>
                      <td><?= $g['nama_m'];?></td>
                      <td><?= $g['tgl_transaksi'];?></td>
                      <td><?= "Rp. ". number_format($g['harga_m'], 0, ',', '.')?></td>
                      <td><?= $g['jumlah_menu'];?></td>
                      <td><?= "Rp. ". number_format($g['total_transaksi'], 0, ',', '.')?></td>
                      <td><a href="../control/htransaksi.php?id_transaksi=<?= $g['id_transaksi']?>" onclick="return confirm('yakin Hapus ?')"><i class="fas fa-trash-alt "></i></a></td>
                    </tr>
                  <?php endforeach;}else{  
                      $no = 1;
                      $gj=mysqli_query($conn,"SELECT * FROM tbl_transaksi as a inner join tbl_menu as b on a.id_menu=b.id_menu ORDER BY tgl_transaksi DESC");
                      foreach ($gj as $g) : ?>
                    <tr>
                      <th scope="row"><?= $no++; ?></th>
                      <td>TR<?= date('m-d').$g['id_transaksi'].date('y');?></td>
                      <td><?= $g['nama_m'];?></td>
                      <td><?= $g['tgl_transaksi'];?></td>
                      <td><?= "Rp. ". number_format($g['harga_m'], 0, ',', '.')?></td>
                      <td><?= $g['jumlah_menu'];?></td>
                      <td><?= "Rp. ". number_format($g['total_transaksi'], 0, ',', '.')?></td>
                      <td><a href="../control/htransaksi.php?id_transaksi=<?= $g['id_transaksi']?>" onclick="return confirm('yakin Hapus ?')"><i class="fas fa-trash-alt "></i></a></td>
                    </tr>

                   <?php endforeach;}?> 
                    
                    <tr>
                      <th scope="row" colspan="5" style="text-align: right">Total Transaksi</th>
                      <?php 
                        $gj=mysqli_query($conn,"SELECT SUM(total_transaksi) AS Total FROM tbl_transaksi");
                        $tot = mysqli_fetch_array($gj);
                        $total = $tot['Total'];

                        $data=mysqli_query($conn,"SELECT SUM(kas_awal) AS Total FROM tbl_kas_awal");
                        $tm = mysqli_fetch_array($data);
                        $kas = $tm['Total'];

                        $laba = $total-$kas;
                        $rugi = $kas - $tot['Total'];
                       ?>
                      <td colspan="2"><?= "Rp. ". number_format($total, 0, ',', '.')?></td>
                    </tr>
                    <tr>
                      <th scope="row" colspan="5" style="text-align: right">Laba</th>
                      <td colspan="2"><?= "Rp. ". number_format($laba, 0, ',', '.')?></td>
                    </tr>
                    <tr>
                      <th scope="row" colspan="5" style="text-align: right">Rugi</th>
                      <td colspan="2"><?= "Rp. ". number_format($rugi, 0, ',', '.')?></td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
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