<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $pageTitle = $pageTitle ?? META_TITLE;
    $pageDescription = $pageDescription ?? META_DESCRIPTION;
    $pageUrl = rtrim(SITE_URL, '/') . strtok($_SERVER['REQUEST_URI'], '?');
    $pageImage = rtrim(SITE_URL, '/') . '/assets/images/hero-fiber.jpg';
    ?>
    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <link rel="canonical" href="<?php echo $pageUrl; ?>">

    <!-- Open Graph / Twitter Card -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?php echo SITE_NAME; ?>">
    <meta property="og:locale" content="es_MX">
    <meta property="og:url" content="<?php echo $pageUrl; ?>">
    <meta property="og:title" content="<?php echo $pageTitle; ?>">
    <meta property="og:description" content="<?php echo $pageDescription; ?>">
    <meta property="og:image" content="<?php echo $pageImage; ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $pageTitle; ?>">
    <meta name="twitter:description" content="<?php echo $pageDescription; ?>">
    <meta name="twitter:image" content="<?php echo $pageImage; ?>">

    <!-- Datos estructurados -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "ConectateYa",
        "url": "<?php echo rtrim(SITE_URL, '/'); ?>/",
        "logo": "<?php echo rtrim(SITE_URL, '/'); ?>/logo/logo.jpeg",
        "image": "<?php echo rtrim(SITE_URL, '/'); ?>/logo/logo.jpeg",
        "email": "<?php echo CONTACT_EMAIL; ?>",
        "telephone": "<?php echo WHATSAPP_NUMBER; ?>",
        "priceRange": "$350 - $500 MXN",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "<?php echo BUSINESS_ADDRESS_LOCALITY; ?>",
            "addressRegion": "<?php echo BUSINESS_STATE; ?>",
            "postalCode": "<?php echo BUSINESS_POSTAL_CODE; ?>",
            "addressCountry": "<?php echo BUSINESS_COUNTRY; ?>"
        },
        "areaServed": {
            "@type": "City",
            "name": "<?php echo BUSINESS_CITY; ?>, <?php echo BUSINESS_STATE; ?>"
        },
        "sameAs": [
            "https://www.facebook.com/zona.net.378/"
        ],
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "<?php echo WHATSAPP_NUMBER; ?>",
            "contactType": "sales",
            "email": "<?php echo CONTACT_EMAIL; ?>"
        }
    }
    </script>

    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="logo/logo.jpeg">
    <link rel="apple-touch-icon" href="logo/logo.jpeg">
    
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo GOOGLE_ANALYTICS_ID; ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?php echo GOOGLE_ANALYTICS_ID; ?>');
    </script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Tailwind CSS (compilado localmente, ver package.json > build:css) -->
    <link rel="stylesheet" href="assets/css/tailwind.min.css?v=<?php echo filemtime(__DIR__ . '/../assets/css/tailwind.min.css'); ?>">
</head>
<body class="bg-bglight font-sans text-slate-700 antialiased overflow-x-hidden">
    <nav id="navbar" class="fixed top-0 w-full z-50 transition-all duration-500 py-4 px-[5%] lg:px-[10%] flex justify-between items-center glass-nav">
        <a href="index.php" class="flex items-center gap-3 group">
            <img src="logo/logo.jpeg" alt="ConectateYa Logo" class="h-10 w-auto rounded-lg shadow-sm group-hover:scale-105 transition-transform duration-300">
            <span class="text-2xl font-bold text-secondary tracking-tight">
                Conectate<span class="text-primary">Ya</span>
            </span>
        </a>

        <ul class="hidden md:flex items-center gap-8 list-none">
            <li><a href="index.php#inicio" class="nav-link text-secondary font-medium hover:text-primary">Inicio</a></li>
            <li><a href="index.php#planes" class="nav-link text-secondary font-medium hover:text-primary">Planes</a></li>
            <!-- <li><a href="index.php#beneficios" class="nav-link text-secondary font-medium hover:text-primary">Beneficios</a></li> -->
            <!-- <li><a href="index.php#contacto" class="nav-link text-secondary font-medium hover:text-primary">Contacto</a></li> -->
            <li><a href="legal.php" class="nav-link text-secondary font-medium hover:text-primary">Legal</a></li>
        </ul>

        <div class="flex items-center gap-4">
            <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" class="hidden sm:inline-flex bg-primary hover:bg-opacity-90 text-white px-6 py-2.5 rounded-full font-semibold transition-all shadow-lg hover:shadow-primary/20 hover:-translate-y-0.5 items-center gap-2">
                <i data-lucide="message-circle" class="w-4 h-4"></i>
                Soporte
            </a>
            <button class="md:hidden text-secondary" id="mobile-menu-btn">
                <i data-lucide="menu" class="w-8 h-8"></i>
            </button>
        </div>
    </nav>
    
    <!-- Mobile Menu Container -->
    <div id="mobile-menu" class="fixed inset-0 z-[45] bg-secondary/95 backdrop-blur-xl translate-x-full transition-transform duration-500 flex flex-col items-center justify-center gap-8 md:hidden">
        <a href="index.php#inicio" class="text-white text-3xl font-bold hover:text-primary transition-colors mobile-link">Inicio</a>
        <a href="index.php#planes" class="text-white text-3xl font-bold hover:text-primary transition-colors mobile-link">Planes</a>
        <a href="index.php#contacto" class="text-white text-3xl font-bold hover:text-primary transition-colors mobile-link">Contacto</a>
        <a href="legal.php" class="text-white text-3xl font-bold hover:text-primary transition-colors mobile-link">Legal</a>
        <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" class="bg-primary text-white px-8 py-3 rounded-full font-bold text-xl mt-4">Soporte</a>
    </div>
