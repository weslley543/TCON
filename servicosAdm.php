<?php
include "View/components/DashboardHeader.php"; 
$pages_adm = ["cmp_sidebar_1","cmp_form_cadastros","cmp_scrool_top_button_7","cmp_logout_modal_8"];

foreach($pages_adm as $pages_adm){
    include "View/components/adm/".$pages_adm.".php";
}
include "View/components/DashboardFooter.php"; 
?>