<?php
    include('include/config.php');
    
    
     
    $seo['title'] = "Paper Plane Design Studio";
    $seo['description'] = "";
    $seo['keywords'] = "";
    $seo['robots'] = 'noindex, nofollow';
    $seo['image'] = "{$global['base']}img/site.png";
    $seo['url'] = $global['url'];


    include('include/header.php');
    include 'view/usuarios.html';       
    include('include/footer.php');
?>