<?php 
//hapus
include "koneksi.php";
$id_kas = $_GET['id_kas'];
$delete = mysqli_query($conn, "DELETE FROM tbl_kas where id_kas='$id_kas'");
if($delete){
    ?>
    <script type="text/javascript">
                alert ("Data Berhasil Di Hapus");
                window.location.href="../admin/kas.php";
            </script>
    <?php
    }
    else
    {
    ?>
        <script type="text/javascript">
                alert ("Data Gagal Di Hapus");
                window.location.href="../admin/kas.php";
            </script>
    <?php
    }
?>
