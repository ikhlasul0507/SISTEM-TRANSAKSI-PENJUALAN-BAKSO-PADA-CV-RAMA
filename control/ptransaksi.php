<?php 
include "koneksi.php";



if($_POST['simpan'])
{
    $id_menu =$_POST['id_menu'];
    $tgl_transaksi =$_POST['tgl_transaksi'];
    $harga_m =$_POST['harga_m'];
    $jumlah_menu =$_POST['jumlah_menu'];
    $total_transaksi =$_POST['total_transaksi'];
  

    $sql = "INSERT INTO tbl_transaksi SET id_menu='$id_menu',tgl_transaksi='$tgl_transaksi',harga_m='$harga_m',jumlah_menu='$jumlah_menu',total_transaksi='$total_transaksi'";



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
	            window.location.href="../admin/admin-transaksipenjualan.php";
	        </script>
	    <?php
	    }

}

?>