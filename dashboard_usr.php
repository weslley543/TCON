<?php
    if (!isset($_SESSION))
  {
    session_start();
  }
?>

<?php if(  (isset($_SESSION)) && isset($_GET['ref']) && $_GET['ref'] == 'logout'): ?>
    <?php 
    echo 'destruiu sessao';
    include "index.php";
          session_destroy();
    ?>
<?php elseif(isset($_SESSION)): ?>
     <?php

               if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){
                    unset($_SESSION['email']);
                    unset($_SESSION['senha']);
                    header('location:index.php');
               }
          
               $logado = $_SESSION['email'];
               $cod_logado = $_SESSION['dados']['cod_usuario'];
               $nome_usuario= $_SESSION['dados']['nome_usuario'];
               
               include "View/components/DashboardHeader.php";
               $pages_usr = ["usr_cmp_sidebar_1","usr_cmp_content_wrapper_2","usr_cmp_scrool_top_button_7","usr_cmp_logout_modal_8"];
               
               foreach($pages_usr as $pages_usr){
                    include "View/components/usr/".$pages_usr.".php";
               }            
          ?>
<?php endif ?>        


<?php
 include "View/components/DashboardFooter.php"; 
?>
