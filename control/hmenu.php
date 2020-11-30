<?php 
//hapus
include "koneksi.php";
$id_menu = $_GET['id_menu'];
$delete = mysqli_query($conn, "DELETE FROM tbl_menu where id_menu='$id_menu'");
if($delete){
    ?>
    <script type="text/javascript">
                alert ("Data Berhasil Di Hapus");
                window.location.href="../admin/admin-menumakanan.php";
            </script>
    <?php
    }
    else
    {
    ?>
        <script type="text/javascript">
                alert ("Data Gagal Di Hapus");
                window.location.href="../admin/admin-menumakanan.php";
            </script>
    <?php
    }
?>
