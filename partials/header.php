<?php
    ob_start();
    include 'components/nav.php';
    include 'components/banner.php';
    $header_section = ob_get_clean();
    
    
    echo $header_section;