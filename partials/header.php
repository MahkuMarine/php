<?php
    ob_start();
    include_once 'components/nav.php';
    include_once 'components/banner.php';
    $header_section = ob_get_clean();
    
    
    echo $header_section;