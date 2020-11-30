<?php 
include "koneksi.php";



if($_POST['simpan'])
{
    $kas_awal =$_POST['kas_awal'];
    $tgl_kas_awal =$_POST['tgl_kas_awal'];
  

    $sql = "INSERT INTO tbl_kas_awal SET kas_awal='$kas_awal',tgl_kas_awal='$tgl_kas_awal'";



	    if (mysqli_query($conn, $sql)) 
	    { 
	    ?>
	        <script type="text/javascript">
	            alert ("Data Berhasil Disimpan");
	            window.location.href="../admin/admin-transaksipenjualan.php";
	        </script>
	    <?php
	    }
	    else
	    { 
	    ?>
	        <script type="text/javascript">
	            alert ("Gagal");
	            window.location.href="../admin/";
	        </script>
	    <?php
	    }

}

?>