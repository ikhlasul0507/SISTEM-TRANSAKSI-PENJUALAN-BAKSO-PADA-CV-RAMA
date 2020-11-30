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
            <h3 class="page-title mb-0 p-0">Halaman Transaksi Penjualan</h3>
            <div class="d-flex align-items-center">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Transaksi Penjualan</li>
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
        <div class="row justify-content-center">
          <!-- column -->
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body">
                <form class="form-horizontal form-material" method="post" action="../control/ptransaksi.php">
                  <div class="card-title" style="text-decoration: underline;">Transaksi Penjualan</div>
                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <label class="col-md-12 mb-3 ">Kas Awal Transaksi</label>
                        <label class="col-md-12 ">Tanggal Transaksi</label>
                      </div>
                    </div>
                    <!-- sebleha kanan -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="col-md-12">
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Rp.</span>
                            </div>
                             <?php 

                                $tgl_kas_awal= date('Y-m-d');
                                $data=mysqli_query($conn,"SELECT * FROM tbl_kas_awal WHERE tgl_kas_awal='$tgl_kas_awal' ");
                                $tm = mysqli_fetch_array($data);

                                ?>
                            <input readonly value="<?= $tm['kas_awal']; ?>" type="text" class="form-control form-control-line bg-light text-dark pl-2 font-weight-bold">
                          </div>

                          <input readonly name="tgl_transaksi" value="<?= date('Y-m-d'); ?>" type="text" class="form-control form-control-line pl-2 bg-light font-weight-bold">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card-title" style="text-decoration: underline; font-size:medium;">Data Transaksi</div>
                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <label for="menu" class="col-md-12">Menu</label>
                       
                          <select class="custom-select ml-1 text-black-70" id="menu" name="id_menu">
                            <option selected disabled>--Pilih Menu--</option>
                            <?php
                            include "../control/koneksi.php";
                            $gol=mysqli_query($conn,"SELECT * FROM tbl_menu ORDER BY nama_m ASC");
                            foreach ($gol as $g) : ?>

                              <option harga="<?= $g['harga_m'];?>" value="<?= $g['id_menu'];?>"><?= $g['nama_m'];?></option>

                            <?php endforeach; ?>
                          </select>
                        <script type="text/javascript">
                          $("#menu").on("change", function () {
                            //ambil nilai
                            var harga = $("#menu option:selected").attr("harga");
                            //pindahkan nilai
                            $("#hargamenu").val(harga);
                          });

                          $(document).ready(function(){
                            $("#jumlah , #hargamenu ").keyup(function(){
                              var harga = $("#hargamenu").val();
                              var jumlah = $("#jumlah").val();

                              var total = parseInt(harga) * parseInt(jumlah);
                              $("#total").val(total);
                            });
                          });
                        </script>
                      </div>
                      <div class="form-group">
                        <label for="menu" class="col-md-12">Jumlah</label>
                        <input type="number" id="jumlah" class="form-control form-control-line pl-2 bg-light font-weight-bold" placeholder="Masukan Jumlah" name="jumlah_menu">
                      </div>
                        <input type="submit" class="btn btn-success btn-md mt-1 mb-2 text-white" name="simpan" value="Tambah Transaksi">
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label for="menu" class="col-md-12">Harga</label>
                        <div class="col-md-12">
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Rp.</span>
                            </div>
                            <input readonly id="hargamenu" type="text" class="form-control form-control-line pl-2 " name="harga_m">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="menu" class="col-md-12">Sub-Total</label>
                        <div class="col-md-12">
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Rp.</span>
                            </div>
                            <input readonly id="total" type="text" class="form-control form-control-line pl-2 " name="total_transaksi">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                <form method="post" action="../control/pkashari.php">
                <table class="table table-hover">
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
                      $no = 1;
                      $tgl = date('Y-m-d');
                      $gj=mysqli_query($conn,"SELECT * FROM tbl_transaksi as a inner join tbl_menu as b on a.id_menu=b.id_menu  WHERE tgl_transaksi='$tgl' ORDER BY tgl_transaksi DESC");
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
                  <?php endforeach; ?>
                    
                    <tr>
                      <th scope="row" colspan="5" style="text-align: right">Total Transaksi</th>
                      <?php 
                        $tgl = date('Y-m-d');
                        $gj=mysqli_query($conn,"SELECT SUM(total_transaksi) AS Total FROM tbl_transaksi WHERE tgl_transaksi='$tgl'");
                        $tot = mysqli_fetch_array($gj);

                        $data=mysqli_query($conn,"SELECT * FROM tbl_kas_awal WHERE tgl_kas_awal='$tgl' ");
                        $tm = mysqli_fetch_array($data);

                        $kas = $tm['kas_awal'];

                        $laba = $tot['Total']-$kas;
                        $rugi = $kas - $tot['Total'];
                       ?>
                       <input type="hidden" name="tgl_kas_hari" value="<?= $tgl;?>">
                       <input type="hidden" name="kas_awal" value="<?= $kas;?>">
                       <input type="hidden" name="pemasukan" value="<?= $tot['Total'];?>">
                       <input type="hidden" name="laba" value="<?= $laba; ?>">
                       <input type="hidden" name="rugi" value="<?= $rugi; ?>">
                      <td colspan="2"><?= "Rp. ". number_format($tot['Total'], 0, ',', '.')?></td>
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
                 <input type="submit" class="btn btn-success btn-md mt-1 mb-2 text-white" name="simpan" value="Simpan Transaksi Hari Ini">
                 </form>
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