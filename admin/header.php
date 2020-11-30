<?php
  include "../control/koneksi.php";
  session_start();
  if(!isset($_SESSION['email']))
    {
        echo"
            <script>alert('Silahkan Login Terlebih Dahulu ! !');document.location='../'</script>
        "; 
    }
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, materialpro admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, materialpro admin lite design, materialpro admin lite dashboard bootstrap 4 dashboard template">
  <meta name="description" content="Material Pro Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
  <meta name="robots" content="noindex,nofollow">
  <title>SITP | CV.RAMA'95</title>
  <link rel="canonical" href="https://www.wrappixel.com/templates/materialpro-lite/" />
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/sitp.png">
  <!-- chartist CSS -->
  <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
  <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
  <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
  <!--This page css - Morris CSS -->
  <link href="../assets/plugins/c3-master/c3.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="css/style.min.css" rel="stylesheet">

    <script src="../assets/plugins/jquery/dist/jquery.min.js"></script>

</head>