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
        body {
            background: radial-gradient(circle at top, rgba(15, 23, 42, 0.95) 0%, #0f172a 60%);
        }
    </style>
</head>
<body class="font-sans text-slate-200 antialiased min-h-screen flex items-center justify-center px-6">

    <div class="max-w-lg w-full text-center">
        <img src="logo/logo.jpeg" alt="ConectateYa Logo" class="h-16 w-auto mx-auto rounded-2xl shadow-xl mb-8">

        <div class="bg-white/5 border border-white/10 rounded-3xl p-10 backdrop-blur-md">
            <div class="w-16 h-16 bg-red-500/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                <i data-lucide="wifi-off" class="text-red-400 w-8 h-8"></i>
            </div>

            <h1 class="text-3xl font-bold text-white mb-4">Servicio Suspendido</h1>

            <p class="text-slate-400 leading-relaxed mb-8">
                Tu servicio de internet se encuentra temporalmente suspendido. Esto suele deberse a un pago pendiente.
                Regulariza tu situación con nosotros para reactivar tu conexión.
            </p>

            <a href="http://192.168.70.1/login.html?from=conectateya"
               class="inline-flex items-center justify-center gap-2 w-full bg-primary hover:bg-opacity-90 text-white px-8 py-4 rounded-2xl font-bold text-lg transition-all shadow-xl shadow-primary/20 hover:-translate-y-1">
                <i data-lucide="log-in" class="w-5 h-5"></i>
                Iniciar Sesión
            </a>

            <p class="text-slate-500 text-sm mt-8">
                ¿Necesitas ayuda? Escríbenos por
                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" class="text-primary hover:underline">WhatsApp</a>.
            </p>
        </div>
    </div>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
