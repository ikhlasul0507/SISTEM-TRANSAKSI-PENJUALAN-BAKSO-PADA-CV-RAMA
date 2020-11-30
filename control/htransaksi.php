<?php 
//hapus
include "koneksi.php";
$id_transaksi = $_GET['id_transaksi'];
$delete = mysqli_query($conn, "DELETE FROM tbl_transaksi where id_transaksi='$id_transaksi'");
if($delete){
    ?>
    <script type="text/javascript">
                alert ("Data Berhasil Di Hapus");
                window.location.href="../admin/admin-transaksi.php";
            </script>
    <?php
    }
    else
    {
    ?>
        <script type="text/javascript">
                alert ("Data Gagal Di Hapus");
                window.location.href="../admin/admin-transaksi.php";
            </script>
    <?php
    }
?>
