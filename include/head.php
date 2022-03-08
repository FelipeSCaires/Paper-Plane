<head>
	
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-5MP6QZM');</script>
	<!-- End Google Tag Manager -->
	
    <!-- metatags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="author" content="VEGA I.T.">
    <meta name="theme-color" content="<?= $client['color'] ?>"/>

    <!-- css -->
    <link rel="stylesheet" href="<?php $global['base'] ?>Assets/css/style.min.css" media="print" onload="this.media='all'">
    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- search engine -->
    <title><?= $seo['title'] ?></title>
    <meta name="description" content="<?= $seo['description'] ?>">
    <meta name="keywords" content="<?= $seo['keywords'] ?>">
    <meta name="robots" content="<?= $global['published'] ? $seo['robots'] : 'noindex, nofollow' ?>">

    <!-- schema.org for google -->
    <meta itemprop="name" content="<?=$client['nomeFantasia'] ?>">
    <meta itemprop="description" content="<?= $seo['description'] ?>">
    <meta itemprop="image" content="<?= $seo['image'] ?>">

    <!-- twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:creator" content="">
    <meta name="twitter:url" content="<?= $seo['url'] ?>">
    <meta name="twitter:title" content="<?= $seo['title'] ?>">
    <meta name="twitter:description" content="<?= $seo['description'] ?>">
    <meta name="twitter:image" content="<?= $seo['image'] ?>">

    <!-- open graph general (facebook & pinterest) -->
    <meta name="og:type" content="website">
    <meta name="og:url" content="<?= $seo['url'] ?>">
    <meta name="og:title" content="<?= $seo['title'] ?>">
    <meta name="og:image" content="<?= $seo['image'] ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta name="og:description" content="<?= $seo['description'] ?>">
    <meta name="og:siteName" content="<?=$client['nomeFantasia'] ?>">
    <meta name="og:locale" content="pt_BR">

    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php $global['base']?>Assets/img/icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php $global['base']?>Assets/img/icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php $global['base']?>Assets/img/icon.png">
    <link rel="mask-icon" href="./svg/safari-pinned-tab.svg" color="#da2128">
    <link rel="shortcut icon" href="<?php $global['base']?>Assets/img/icon.png">

    <!-- windows tiles -->
    <meta name="application-name" content="<?=$client['nomeFantasia'] ?>">
    <meta name="msapplication-TileColor" content="<?= $client['color'] ?>">
    <meta name="msapplication-config" content="<?= $global['base'] ?>xml/browserconfig.xml">

    <!-- preconnect -->
    <link rel="preconnect" href="<?= $config['apiBaseUrl'] ?>" crossorigin>
    <link rel="dns-prefetch" href="<?= $config['apiBaseUrl'] ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com" media="print" onload="this.media='all'">

    <!-- canonical -->
    <link rel="canonical" href="<?= $seo['url'] ?>">

    <!-- app manifest -->
    <link rel="manifest" href="<?= $global['base'] ?>json/manifest.json">

   


   

    
   
</head>