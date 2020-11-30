<?php 
include "koneksi.php";



if($_POST['simpan'])
{
    $nama =$_POST['nama'];
    $level =$_POST['level'];
    $email =$_POST['email'];
    $password =$_POST['password'];
  

    $sql = "INSERT INTO tbl_user SET nama='$nama',email='$email',password='$password',level='$level'";



	    if (mysqli_query($conn, $sql)) 
	    { 
	    ?>
	        <script type="text/javascript">
	            alert ("Data Berhasil Disimpan");
	            window.location.href="../admin/admin-datauser.php";
	        </script>
	    <?php
	    }
	    else
	    { 
	    ?>
	        <script type="text/javascript">
	            alert ("Gagal, Gunakan Email Berbeda");
	            window.location.href="../admin/admin-datauser.php";
	        </script>
	    <?php
	    }

}

?>