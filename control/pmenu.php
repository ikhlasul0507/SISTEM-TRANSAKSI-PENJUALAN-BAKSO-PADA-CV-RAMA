<?php 
include "koneksi.php";


if($_POST['simpan'])
{
    $nama_m =$_POST['nama_m'];
    $harga_m =$_POST['harga_m'];
    $kategori_m =$_POST['kategori_m'];

    $sql = "INSERT INTO tbl_menu SET nama_m='$nama_m',harga_m='$harga_m',kategori_m='$kategori_m'";

	    if (mysqli_query($conn, $sql)) 
	    { 
	    ?>
	        <script type="text/javascript">
	            alert ("Data Berhasil Disimpan");
	            window.location.href="../admin/admin-menumakanan.php";
	        </script>
	    <?php
	    }
	    else
	    { 
	    ?>
	        <script type="text/javascript">
	            alert ("Gagal");
	            window.location.href="../admin/admin-menumakanan.php";
	        </script>
	    <?php
	    }

}elseif($_POST['edit'])
{
	$id_menu = $_POST['id_menu'];
	$nama_m =$_POST['nama_m'];
    $harga_m =$_POST['harga_m'];
    $kategori_m =$_POST['kategori_m'];

    $sql = "UPDATE tbl_menu SET nama_m='$nama_m',harga_m='$harga_m',kategori_m='$kategori_m' WHERE id_menu='$id_menu'";

	    if (mysqli_query($conn, $sql)) 
	    { 
	    ?>
	        <script type="text/javascript">
	            alert ("Data Berhasil Di Edit");
	            window.location.href="../admin/admin-menumakanan.php";
	        </script>
	    <?php
	    }
	    else
	    { 
	    ?>
	        <script type="text/javascript">
	            alert ("Gagal");
	            window.location.href="../admin/admin-menumakanan.php";
	        </script>
	    <?php
	    }

}

?>