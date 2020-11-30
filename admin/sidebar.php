
<aside class="left-sidebar" data-sidebarbg="skin6">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
      <ul id="sidebarnav">
        <!-- User Profile-->
         <?php 
                    $email= $_SESSION['email'];
                    $data=mysqli_query($conn,"SELECT * FROM tbl_user WHERE email='$email' ");
                    $t=mysqli_fetch_array($data);
                    $level = $t['level'];

                    if($level==0){
                    ?>
        <li class="nav-small-cap"><span class="hide-menu">Menu Karyawan</span></li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false"><i class="mdi mr-2 mdi-gauge"></i><span class="hide-menu">Dashboard</span></a></li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="admin-transaksipenjualan.php" aria-expanded="false"><i class="mdi mr-2 mdi-chart-areaspline"></i><span class="hide-menu">Transaksi Penjualan</span></a>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="admin-datauser.php" aria-expanded="false"><i class="mdi mr-2 mdi-account"></i><span class="hide-menu">Data User</span></a></li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="admin-menumakanan.php" aria-expanded="false">
            <i class="mdi mr-2 mdi-clipboard-text"></i><span class="hide-menu">Menu Makanan</span></a>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="admin-transaksi.php" aria-expanded="false"><i class="mdi mr-2  mdi-account-switch"></i><span class="hide-menu">Transaksi</span></a></li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="kas.php" aria-expanded="false"><i class="mdi mr-2 mdi-cash-multiple"></i><span class="hide-menu">Kas</span></a></li>
         <?php }
                    $email= $_SESSION['email'];
                    $data=mysqli_query($conn,"SELECT * FROM tbl_user WHERE email='$email' ");
                    $t=mysqli_fetch_array($data);
                    $level = $t['level'];

                    if($level==1){
                    ?>
        <li class="nav-small-cap"><span class="hide-menu">Menu Pimpinan</span></li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pimpinan-laporan.php" aria-expanded="false"><i class="mdi mr-2 mdi-book-open-variant"></i><span class="hide-menu">Laporan</span></a>
        </li>
      <?php } ?>

      </ul>

    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
  <div class="sidebar-footer">
    <div class="row justify-content-center">
      <div class="col-4 link-wrap">

        <!-- item-->
        <a href="../control/logout.php" class="link" onclick="return confirm('Yakin Keluar ?')" data-toggle="tooltip" title="" data-original-title="Logout"><i class="mdi mdi-power"></i></a>
      </div>
    </div>
  </div>
</aside>