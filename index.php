<?php
session_start();
include"config/koneksi.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(!empty($_SESSION['username'])){
  @$user = $_SESSION['username'];
  @$level= $_SESSION['level'];
  @$nama_user=$_SESSION['nama_user'];
  @$idUser=$_SESSION['idUser'];
  
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Yahalose
      
    </title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dist/css/navbar-fixed-top.css" rel="stylesheet">
    

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Fixed navbar -->

           
    <?php 
     if(!empty($_SESSION['username'])){
       $user = $_SESSION['username'];   
      //  if(isset($_GET['pages'])){
        @$page = $_GET['pages'];
 
		switch ($page) {
			case 'login':
				include "pages/login.php";
        break;
        case 'home':
          include "pages/home.php";
          break;
			case 'list_masakan':
				include "pages/list_masakan.php";
				break;
			case 'tambah_masakan':
				include "pages/tambah_masakan.php";
        break;
      case 'edit_masakan':
        include "pages/edit_masakan.php";
        break;
      case 'transaksi':
        include "pages/transaksi.php";
        break;
        case 'pesan':
          include "pages/pesan.php";
          break;			
      case 'detail_transaksi':
        include "pages/detail_transaksi.php";
        break;
      default:
      include 'pages/login.php';
				break;
		}
	}else{
		include "pages/login.php";
	}

	 ?>

    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
