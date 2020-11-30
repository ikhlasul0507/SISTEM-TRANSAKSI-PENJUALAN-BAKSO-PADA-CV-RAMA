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
            <h3 class="page-title mb-0 p-0">Halaman Menu</h3>
            <div class="d-flex align-items-center">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Menu</li>
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

                <!-- button ==> modal -->
                <button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#bs-example-modal-lg">Tambah Menu</button>
                <!--  Modal content for the above example -->
                <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">Form Tambah Data Menu</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-sm-12 col-md-6 col-lg-12">
                            <div class="card">
                              <form class="mt-2" action="../control/pmenu.php" method="post">
                              <div class="card-body">
                                
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Nama Menu</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="nama_m" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Harga</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="harga_m" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Kategori</label>
                                    <form>
                                      <select name="kategori_m" class="custom-select ml-1 text-black-70 " id="lvl">
                                        <option selected value="Makanan">Makanan</option>
                                        <option value="Minuman">Minuman</option>
                                        <option value="Lainnya">Lainnya</option>
                                      </select>
                                    </form>
                                  </div>
                                 <input type="submit" class="btn btn-info mb-3" name="simpan" value="Simpan">
                                
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div>
                <?php
                                $kar=mysqli_query($conn,"SELECT * FROM tbl_menu");
                                foreach ($kar as $kk) :
                                    $id_menu= $kk['id_menu'];
                                    $nama_m= $kk['nama_m'];
                                    $harga_m= $kk['harga_m'];
                                    $kategori_m= $kk['kategori_m'];
                                 ?>
                <!--  Modal-ubah -->
                <div class="modal fade" id="modal-edit<?= $kk['id_menu'];?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <!-- isi -->
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">Form Ubah Data menu</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-sm-12 col-md-6 col-lg-12">
                            <div class="card">
                              <div class="card-body">
                                <form class="mt-2" action="../control/pmenu.php" method="post">
                              <div class="card-body">
                                
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Nama Menu</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="nama_m" value="<?= $nama_m; ?>" required>
                                    <input type="hidden" name="id_menu" value="<?= $id_menu; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Harga</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="harga_m" value="<?= $harga_m; ?>" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Kategori</label>
                                    <form>
                                      <select name="kategori_m" class="custom-select ml-1 text-black-70 " id="lvl">
                                        <?php if($kategori_m=='Makanan'){ ?>
                                        <option selected value="Makanan">Makanan</option>
                                        <option value="Minuman">Minuman</option>
                                        <option value="Lainnya">Lainnya</option>
                                        <?php }elseif($kategori_m=='Minuman'){ ?>
                                        <option value="Makanan">Makanan</option>
                                        <option selected value="Minuman">Minuman</option>
                                        <option value="Lainnya">Lainnya</option>
                                        <?php }else{ ?>
                                        <option value="Makanan">Makanan</option>
                                        <option  value="Minuman">Minuman</option>
                                        <option  selected value="Lainnya">Lainnya</option>
                                        <?php }?>
                                      </select>
                                    </form>
                                  </div>
                                 <input type="submit" class="btn btn-info mb-3" name="edit" value="Edit">
                                
                              </div>
                              </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div>
              <?php endforeach; ?>
                <table class="table table-hover">
                  <thead>
                    <tr class="table-info">
                      <th scope="col">No</th>
                      <th scope="col">Nama Menu</th>
                      <th scope="col">Harga (Rp)</th>
                      <th scope="col">Kategori</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no = 1;
                      $kar=mysqli_query($conn,"SELECT * FROM tbl_menu");
                      foreach ($kar as $k) : ?>
                    <tr>
                      <th scope="row"><?= $no++; ?></th>
                      <td><?= $k['nama_m']; ?></td>
                      <td><?= "Rp. ". number_format($k['harga_m'], 0, ',', '.')?></td>
                      <td><?= $k['kategori_m'];?></td>
                      <td>
                         <a href="../control/hmenu.php?id_menu=<?= $k['id_menu']?>" onclick="return confirm('yakin Hapus ?')"><i class="fas fa-trash-alt "></i></a> |
                        <a type="button" style="color: #1E88E5;" data-toggle="modal" data-target="#modal-edit<?= $k['id_menu'];?>" type="button"><i class="fas fa-edit"></i></a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                   
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