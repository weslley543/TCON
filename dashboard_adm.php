<?php
     session_start();
     if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){
         unset($_SESSION['email']);
         unset($_SESSION['senha']);
         header('location:index.php');
     }
  
     $logado = $_SESSION['email'];
     $cod_logado = $_SESSION['dados']['cod_usuario'];
     $nome_usuario= $_SESSION['dados']['nome_usuario'];
      include "View/components/DashboardHeader.php";

      $pages_adm = ["cmp_sidebar_1","cmp_content_wrapper_2","cmp_scrool_top_button_7","cmp_logout_modal_8"];
     
      foreach($pages_adm as $pages_adm)
           include "View/components/adm/".$pages_adm.".php";
          
?>



<?php
 include "View/components/DashboardFooter.php"; 
?>