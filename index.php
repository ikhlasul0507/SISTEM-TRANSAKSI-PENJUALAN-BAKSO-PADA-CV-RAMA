<?php 

include "control/koneksi.php";

  session_start();
  if(isset($_POST['login'])){
      $sql=mysqli_query($conn,"select * from tbl_user where email='$_POST[email]' and password='$_POST[password]' and level='$_POST[level]'");
      if(mysqli_num_rows($sql)>0){
        $login=mysqli_fetch_array($sql);

          $_SESSION['email']=$login['email'];  
          $_SESSION['level']=$login['level'];

            echo"
            <script>alert('Login Berhasil');
            document.location='admin'</script>
        ";
      }else{
         echo"
            <script>alert('Login Gagal, Data Yang Dimasukan Salah !');document.location='#'</script>
        "; 
      }
  }

 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Halaman Login</title>

  </head>
  <body>
    <style>
      body {
        background-color: #EBEAEF
    }
    
    .container {
        flex-wrap: wrap
    }
    
    .card {
        border: none;
        border-radius: 10px;
        background-color: #1E88E5;
        width: 350px;
        margin-top: -60px
    }
    
    p.mb-1 {
        font-size: 25px;
        color: #9FB7FD
    }
    
    .btn-primary {
        border: none;
        background: #5777DE;
        margin-bottom: 60px
    }
    
    .btn-primary small {
        color: #9FB7FD
    }
    
    .btn-primary span {
        font-size: 13px
    }
    
    .card.two {
        border-top-right-radius: 60px;
        border-top-left-radius: 0
    }
    
    .form-group {
        position: relative;
        margin-bottom: 2rem
    }
    
    .form-control {
        border: none;
        border-radius: 0;
        outline: 0;
        border-bottom: 1.5px solid #E6EBEE
    }
    
    .form-control:focus {
        box-shadow: none;
        border-radius: 0;
        border-bottom: 2px solid #8A97A8
    }
    
    .form-control-placeholder {
        position: absolute;
        top: 15px;
        left: 10px;
        transition: all 200ms;
        opacity: 0.5;
        font-size: 80%
    }
    
    .form-control:focus+.form-control-placeholder,
    .form-control:valid+.form-control-placeholder {
        font-size: 80%;
        transform: translate3d(0, -90%, 0);
        opacity: 1;
        top: 10px;
        color: #8B92AC
    }
    
    .btn-block {
        border: none;
        border-radius: 8px;
        background-color: #1E88E5;
        padding: 10px 0 12px
    }
    
    .btn-block:focus {
        box-shadow: none
    }
    
    .btn-block span {
        font-size: 15px;
        color: #D0E6FF
    }
    </style>
    <div class="container d-flex justify-content-center">
    <div class="d-flex flex-column justify-content-between">
        <div class="card mt-5 p-5 ">
            <!-- <div class="logo mb-3"><img src="https://imgur.com/zydrQCr.png"></div> -->
            <div>
                <p class="mb-1 text-white-90" >Halaman Login Sitem</p>
                <h4 class="mb- text-white">Transaksi Penjualan</h4>
                <h4 class="mb-5 text-white">CV. Rama'95</h4>
            </div> 
        </div>
         <form method="post" action="">
            <div class="card two bg-white px-5 py-4 mb-3">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" id="mail" required><label class="form-control-placeholder" for="mail">Email</label></div>
                
                <div class="form-group">
                <input type="password" name="password" class="form-control" id="password" required>
                <label class="form-control-placeholder" for="password">Password</label></div> 

               
                    <div class="form-group">
                    <label class="text-dark text-black-50" for="lvl">Level</label>
                    <select class="custom-select mr-sm- 2 form-control text-black-50" name="level" id="lvl">
                        <option selected value="0">Admin</option>
                        <option value="1">Pimpinan</option>
                    </select>
                    </div>
               

                <button class="btn btn-primary btn-block btn-lg mt-1 mb-2" name="login" type="submit"><span>Login<i class="fas fa-long-arrow-alt-right ml-2"></i></span></button>
            </div>
         </form>
    </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
   
  </body>
</html>



