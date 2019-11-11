<?php
    session_start();
    if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('location:index.php');
  }
 
$logado = $_SESSION['email'];
  echo 'logou irmao';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TCON - Condominios Inteligentes</title>

  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
   <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">;


  <!-- Responsividade para Tabela -->
  <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top" style="margin-top: -25px;">
 <!-- Page Wrapper -->
  <div id="wrapper">

    <?php
        $pages_adm = ["cmp_sidebar_1","cmp_content_wrapper_2"];
        $pages_usr = ["usr_cmp_sidebar_1","usr_cmp_content_wrapper_2"];

 /*
        foreach($pages_adm as $pages_adm){
            include "View/components_adm/".$pages_adm.".php";
        }
*/
              
        foreach($pages_usr as $pages_usr)
          include "View/components_user/".$pages_usr.".php";
        
  
    ?>

    </div>
    <!-- End of Page Wrapper -->

    <!-- Ajustes Funcionais :  -->
    <?php
        $pages_adm = ["cmp_scrool_top_button_7","cmp_logout_modal_8" ];
        $pages_usr = ["usr_cmp_scrool_top_button_7","usr_cmp_logout_modal_8"];

/*
       foreach($pages_adm as $pages_adm){
            include "View/components_adm/".$pages_adm.".php";
        }
*/
        
        foreach($pages_usr as $pages_usr)
           include "View/components_user/".$pages_usr.".php";

    ?>


    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/chart-area-demo.js"></script>
    <script src="assets/js/demo/chart-pie-demo.js"></script>


     <!-- Page level plugins -->
     <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
      <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
            
  <!-- Page level custom scripts -->
  <script src="assets/js/demo/datatables-demo.js"></script>

  <!-- Scripts - criados BD2 -->

  <script src="assets/js/js_user.js"> </script>

</body>

</html>