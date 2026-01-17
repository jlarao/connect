<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo META_TITLE; ?></title>
    <meta name="description" content="<?php echo META_DESCRIPTION; ?>">
    
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
    
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '<?php echo PRIMARY_COLOR; ?>',
                        secondary: '<?php echo SECONDARY_COLOR; ?>',
                        accent: '<?php echo ACCENT_COLOR; ?>',
                        info: '<?php echo INFO_COLOR; ?>',
                        bglight: '<?php echo BG_COLOR; ?>',
                    },
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap');
        
        .glass-nav {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .nav-link {
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: <?php echo PRIMARY_COLOR; ?>;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .hero-gradient {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.85) 0%, rgba(0, 174, 239, 0.4) 100%);
        }
    </style>
</head>
<body class="bg-bglight font-sans text-slate-700 antialiased overflow-x-hidden">
    <nav id="navbar" class="fixed top-0 w-full z-50 transition-all duration-500 py-4 px-[5%] lg:px-[10%] flex justify-between items-center glass-nav">
        <a href="#" class="flex items-center gap-3 group">
            <img src="logo/logo.jpeg" alt="ConectateYa Logo" class="h-10 w-auto rounded-lg shadow-sm group-hover:scale-105 transition-transform duration-300">
            <span class="text-2xl font-bold text-secondary tracking-tight">
                Conectate<span class="text-primary">Ya</span>
            </span>
        </a>

        <ul class="hidden md:flex items-center gap-8 list-none">
            <li><a href="#inicio" class="nav-link text-secondary font-medium hover:text-primary">Inicio</a></li>
            <li><a href="#planes" class="nav-link text-secondary font-medium hover:text-primary">Planes</a></li>
            <li><a href="#beneficios" class="nav-link text-secondary font-medium hover:text-primary">Beneficios</a></li>
            <li><a href="#contacto" class="nav-link text-secondary font-medium hover:text-primary">Contacto</a></li>
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
        <a href="#inicio" class="text-white text-3xl font-bold hover:text-primary transition-colors mobile-link">Inicio</a>
        <a href="#planes" class="text-white text-3xl font-bold hover:text-primary transition-colors mobile-link">Planes</a>
        <a href="#beneficios" class="text-white text-3xl font-bold hover:text-primary transition-colors mobile-link">Beneficios</a>
        <a href="#contacto" class="text-white text-3xl font-bold hover:text-primary transition-colors mobile-link">Contacto</a>
        <a href="legal.php" class="text-white text-3xl font-bold hover:text-primary transition-colors mobile-link">Legal</a>
        <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" class="bg-primary text-white px-8 py-3 rounded-full font-bold text-xl mt-4">Soporte</a>
    </div>
