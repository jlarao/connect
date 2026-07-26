<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicio Suspendido | <?php echo SITE_NAME; ?></title>
    <meta name="robots" content="noindex, nofollow">

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
                        bglight: '<?php echo BG_COLOR; ?>',
                    },
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        html, body {
            overflow-x: hidden;
        }

        body {
            background: radial-gradient(circle at top, rgba(15, 23, 42, 0.95) 0%, #0f172a 60%);
        }

        .product-card:hover .product-image {
            transform: scale(1.08);
        }

        .product-image {
            transition: transform 0.4s ease;
        }
    </style>
</head>
<body class="font-sans text-slate-200 antialiased min-h-screen px-4 sm:px-6 py-8 sm:py-10">

    <!-- Logo -->
    <a href="index.php" class="fixed top-3 left-3 sm:top-4 sm:left-4 z-20 flex items-center gap-2 group">
        <img src="logo/logo.jpeg" alt="ConectateYa Logo" class="h-8 sm:h-9 w-auto rounded-lg shadow-md group-hover:scale-105 transition-transform">
    </a>

    <!-- Iniciar sesión -->
    <a href="http://192.168.70.1/login.html?from=conectateya"
       class="fixed top-3 right-3 sm:top-4 sm:right-4 z-20 inline-flex items-center gap-1.5 text-slate-400 hover:text-primary text-xs sm:text-sm font-medium transition-colors">
        <i data-lucide="log-in" class="w-3.5 h-3.5"></i>
        Iniciar sesión
    </a>

    <div class="max-w-5xl mx-auto flex flex-col items-center gap-10 sm:gap-14 pt-10 sm:pt-8">

        <div id="countdown-timer" class="flex items-center justify-center gap-2 text-xs sm:text-sm text-amber-400 bg-amber-400/10 border border-amber-400/20 rounded-full px-4 py-2 transition-opacity duration-500">
            <i data-lucide="clock" class="w-3.5 h-3.5"></i>
            Aviso de suspensión en <span id="countdown-number" class="font-bold">15</span>s
        </div>

        <div id="suspended-notice" class="max-w-lg w-full min-w-0 text-center hidden opacity-0 -translate-y-4 transition-all duration-700 ease-out">
            <div class="bg-white/5 border border-white/10 rounded-3xl p-6 sm:p-8 backdrop-blur-md">
                <div class="w-14 h-14 sm:w-16 sm:h-16 bg-red-500/10 rounded-2xl flex items-center justify-center mx-auto mb-4 sm:mb-5">
                    <i data-lucide="wifi-off" class="text-red-400 w-7 h-7 sm:w-8 sm:h-8"></i>
                </div>

                <h1 class="text-2xl sm:text-3xl font-bold text-white break-words">Servicio Suspendido</h1>
            </div>
        </div>

        <!-- Ofertas Banner -->
        <div class="w-full min-w-0">
            <div class="text-center mb-8 sm:mb-10 px-2">
                <span class="inline-flex items-center gap-2 bg-primary/10 text-primary text-xs font-bold uppercase tracking-widest px-4 py-1.5 rounded-full mb-4">
                    <i data-lucide="tag" class="w-3.5 h-3.5"></i>
                    Ofertas del mes
                </span>
                <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-white">Mientras tanto, mejora tu red</h2>
            </div>

            <div class="relative max-w-md mx-auto px-8 md:px-0">
                <div id="carousel-track" class="overflow-hidden rounded-3xl">
                    <div id="carousel-slides" class="flex transition-transform duration-500 ease-out">
                <?php
                $productos = [
                    [
                        'nombre' => 'Router TP-Link',
                        'titulo' => 'Adiós a los Puntos Ciegos de WiFi',
                        'descripcion' => '¿Hay cuartos de tu casa donde el WiFi simplemente no llega? Este router extiende tu señal a cada rincón en minutos, sin necesidad de técnico. Quedan pocas piezas en oferta esta semana.',
                        'cta' => 'Quiero Cobertura Total',
                        'precio' => '$250',
                        'precio_original' => '$300',
                        'imagen' => 'assets/images/productos/tplink-router.jpg',
                    ],
                    [
                        'nombre' => 'POE 24V Ubiquiti',
                        'titulo' => '¿Sin Internet? Puede Ser Solo el POE',
                        'descripcion' => 'El 90% de las fallas en antenas Ubiquiti no es el equipo, es el POE quemado por variaciones de luz. Ten uno de repuesto y resuelve la falla tú mismo en minutos. Stock limitado, se agota rápido.',
                        'cta' => 'Solucionar mi Falla Ahora',
                        'precio' => '$200',
                        'precio_original' => '$260',
                        'imagen' => 'assets/images/productos/poe-24v-ubnt.webp',
                    ],
                    [
                        'nombre' => 'LiteBeam 5AC',
                        'titulo' => 'Internet a 2 km, Sin Cables ni Excusas',
                        'descripcion' => '¿Tu negocio, bodega o casa está fuera del alcance del router? Este enlace lleva tu conexión hasta 2 km de distancia con la misma velocidad y estabilidad. Oferta válida solo por tiempo limitado.',
                        'cta' => 'Conectar mi Negocio Hoy',
                        'precio' => '$2,000',
                        'precio_original' => '$2,300',
                        'imagen' => 'assets/images/productos/litebeam-5ac.webp',
                    ],
                ];
                ?>
                <?php foreach ($productos as $producto): ?>
                <div class="carousel-slide w-full shrink-0 px-1">
                    <div class="product-card bg-white/5 border border-white/10 rounded-3xl overflow-hidden hover:border-primary/50 hover:shadow-2xl hover:shadow-primary/20 transition-all duration-300">
                        <div class="relative aspect-square bg-white/5 overflow-hidden">
                            <img src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>"
                                 class="product-image w-full h-full object-cover" loading="lazy">
                            <span class="absolute top-3 left-3 bg-primary text-white text-[11px] font-black px-3 py-1 rounded-full uppercase tracking-wider shadow-lg">
                                Oferta <?php echo $producto['precio']; ?>
                            </span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-white mb-2"><?php echo $producto['titulo']; ?></h3>
                            <p class="text-slate-400 text-sm mb-4 leading-relaxed"><?php echo $producto['descripcion']; ?></p>
                            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                                <div class="flex items-baseline gap-2">
                                    <span class="text-slate-500 text-sm line-through"><?php echo $producto['precio_original']; ?></span>
                                    <span class="text-2xl font-black text-primary"><?php echo $producto['precio']; ?></span>
                                </div>
                                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=<?php echo urlencode('Hola, me interesa el producto: ' . $producto['nombre']); ?>"
                                   class="inline-flex items-center justify-center gap-1.5 w-full sm:w-auto bg-white/10 hover:bg-primary text-white text-sm font-bold px-4 py-2.5 rounded-xl transition-all whitespace-nowrap">
                                    <i data-lucide="message-circle" class="w-4 h-4 shrink-0"></i>
                                    <?php echo $producto['cta']; ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                    </div>
                </div>

                <!-- Arrows -->
                <button id="carousel-prev" aria-label="Anterior"
                        class="absolute top-1/2 -translate-y-1/2 left-0 md:-left-14 bg-white/10 hover:bg-primary text-white w-9 h-9 sm:w-10 sm:h-10 rounded-full flex items-center justify-center transition-colors shadow-lg backdrop-blur-md">
                    <i data-lucide="chevron-left" class="w-5 h-5"></i>
                </button>
                <button id="carousel-next" aria-label="Siguiente"
                        class="absolute top-1/2 -translate-y-1/2 right-0 md:-right-14 bg-white/10 hover:bg-primary text-white w-9 h-9 sm:w-10 sm:h-10 rounded-full flex items-center justify-center transition-colors shadow-lg backdrop-blur-md">
                    <i data-lucide="chevron-right" class="w-5 h-5"></i>
                </button>

                <!-- Dots -->
                <div id="carousel-dots" class="flex items-center justify-center gap-2 mt-6">
                    <?php foreach ($productos as $i => $producto): ?>
                    <button class="carousel-dot w-2.5 h-2.5 rounded-full bg-white/20 transition-colors" data-index="<?php echo $i; ?>"></button>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>

    <!-- Floating WhatsApp -->
    <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=<?php echo urlencode(WHATSAPP_MESSAGE); ?>"
       class="fixed bottom-4 right-4 sm:bottom-8 sm:right-8 z-[60] bg-[#25D366] text-white p-4 sm:p-5 rounded-full shadow-2xl hover:scale-110 active:scale-95 transition-all group overflow-hidden"
       target="_blank">
        <div class="absolute inset-0 bg-white/20 translate-y-full group-hover:translate-y-0 transition-transform"></div>
        <i data-lucide="message-circle" class="relative z-10 w-6 h-6 sm:w-8 sm:h-8"></i>
    </a>

    <script>
        lucide.createIcons();

        // Carousel de ofertas
        const slides = document.getElementById('carousel-slides');
        const dots = document.querySelectorAll('.carousel-dot');
        const total = document.querySelectorAll('.carousel-slide').length;
        let current = 0;

        function goTo(index) {
            current = (index + total) % total;
            slides.style.transform = `translateX(-${current * 100}%)`;
            dots.forEach((dot, i) => {
                dot.classList.toggle('bg-primary', i === current);
                dot.classList.toggle('bg-white/20', i !== current);
            });
        }

        // Autoplay: cambia de producto cada 5 segundos
        let autoplayInterval;
        function startAutoplay() {
            autoplayInterval = setInterval(() => goTo(current + 1), 5000);
        }
        function resetAutoplay() {
            clearInterval(autoplayInterval);
            startAutoplay();
        }

        document.getElementById('carousel-prev').addEventListener('click', () => { goTo(current - 1); resetAutoplay(); });
        document.getElementById('carousel-next').addEventListener('click', () => { goTo(current + 1); resetAutoplay(); });
        dots.forEach((dot, i) => dot.addEventListener('click', () => { goTo(i); resetAutoplay(); }));

        // Swipe táctil
        let touchStartX = 0;
        slides.addEventListener('touchstart', (e) => {
            touchStartX = e.touches[0].clientX;
        }, { passive: true });
        slides.addEventListener('touchend', (e) => {
            const delta = e.changedTouches[0].clientX - touchStartX;
            if (delta > 40) { goTo(current - 1); resetAutoplay(); }
            else if (delta < -40) { goTo(current + 1); resetAutoplay(); }
        }, { passive: true });

        goTo(0);
        startAutoplay();

        // Countdown y aviso de suspensión
        let secondsLeft = 15;
        const countdownTimer = document.getElementById('countdown-timer');
        const countdownNumber = document.getElementById('countdown-number');

        const countdownInterval = setInterval(() => {
            secondsLeft--;
            countdownNumber.textContent = secondsLeft;

            if (secondsLeft <= 0) {
                clearInterval(countdownInterval);

                countdownTimer.classList.add('opacity-0');
                setTimeout(() => countdownTimer.remove(), 500);

                const notice = document.getElementById('suspended-notice');
                notice.classList.remove('hidden');
                requestAnimationFrame(() => {
                    requestAnimationFrame(() => {
                        notice.classList.remove('opacity-0', '-translate-y-4');
                        notice.classList.add('opacity-100', 'translate-y-0');
                    });
                });
            }
        }, 1000);
    </script>
</body>
</html>
