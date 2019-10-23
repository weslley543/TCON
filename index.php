<? php
    $pages = ['cmp_contDashboard','cmp_sidebar', 'cmp_topbar',"cmp_content_wrapper", 'cmp_logoutModal', 'cmp_scrollTopbutton','cmp_footer']
    $title = "CELLIJ";

    foreach($pages as $pages){
        include "View/components".$pages.".php";
    }

?>