<?php 
include "koneksi.php";



if($_POST['simpan'])
{
	$tgl_kas_hari = $_POST['tgl_kas_hari'];
    $kas_awal =$_POST['kas_awal'];
    $pemasukan =$_POST['pemasukan'];
    $laba =$_POST['laba'];
    $rugi =$_POST['rugi'];


    $sql = "INSERT INTO tbl_kas SET tgl_kas_hari='$tgl_kas_hari',kas_awal='$kas_awal',pemasukan='$pemasukan',laba='$laba',rugi='$rugi'";



	    if (mysqli_query($conn, $sql)) 
	    { 
	    ?>
	        <script type="text/javascript">
	            alert ("Data Berhasil Disimpan");
	            window.location.href="../admin/kas.php";
	        </script>
	    <?php
	    }
	    else
	    { 
	    ?>
	        <script type="text/javascript">
	            alert ("Gagal");
	            window.location.href="../admin/admin-transaksipenjualan.php";
	        </script>
	    <?php
	    }

}

?>