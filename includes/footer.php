    <footer class="bg-secondary text-slate-400 py-16 lg:py-24 border-t border-white/5">
        <div class="container mx-auto px-[5%] lg:px-[10%]">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8 mb-16">
                <!-- Brand -->
                <div class="space-y-6">
                    <a href="index.php" class="flex items-center gap-3 group">
                        <img src="logo/logo.jpeg" alt="ConectateYa Logo" class="h-8 w-auto rounded-md shadow-sm">
                        <span class="text-xl font-bold text-white tracking-tight">
                            Conectate<span class="text-primary">Ya</span>
                        </span>
                    </a>
                    <p class="text-sm leading-relaxed max-w-xs">
                        Lideramos la revolución digital con conexiones de alta fidelidad. Internet real para gente real.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 bg-white/5 hover:bg-primary/20 rounded-full flex items-center justify-center transition-colors">
                            <i data-lucide="facebook" class="w-5 h-5"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/5 hover:bg-primary/20 rounded-full flex items-center justify-center transition-colors">
                            <i data-lucide="instagram" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>

                <!-- Navigation -->
                <div>
                    <h4 class="text-white font-bold mb-8 uppercase text-xs tracking-[0.2em]">Empresa</h4>
                    <ul class="space-y-4">
                        <li><a href="index.php#inicio" class="hover:text-primary transition-colors">Inicio</a></li>
                        <li><a href="index.php#beneficios" class="hover:text-primary transition-colors">Nosotros</a></li>
                        <li><a href="index.php#planes" class="hover:text-primary transition-colors">Planes de Venta</a></li>
                        <li><a href="index.php#contacto" class="hover:text-primary transition-colors">Cobertura</a></li>
                    </ul>
                </div>

                <!-- Support -->
                <div>
                    <h4 class="text-white font-bold mb-8 uppercase text-xs tracking-[0.2em]">Servicios</h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="hover:text-primary transition-colors">Internet Fibra</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Internet Inalámbrico</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Soporte Técnico</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Pagos en Línea</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="text-white font-bold mb-8 uppercase text-xs tracking-[0.2em]">Contacto Directo</h4>
                    <ul class="space-y-6">
                        <li class="flex items-start gap-4">
                            <i data-lucide="mail" class="text-primary w-5 h-5 mt-1"></i>
                            <div>
                                <p class="text-xs font-bold text-white uppercase mb-1">Escríbenos</p>
                                <a href="mailto:<?php echo CONTACT_EMAIL; ?>" class="hover:text-primary transition-colors"><?php echo CONTACT_EMAIL; ?></a>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <i data-lucide="phone" class="text-primary w-5 h-5 mt-1"></i>
                            <div>
                                <p class="text-xs font-bold text-white uppercase mb-1">WhatsApp Ventas</p>
                                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" class="hover:text-primary transition-colors">+<?php echo WHATSAPP_NUMBER; ?></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom -->
            <div class="pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4 text-xs">
                <p>&copy; <?php echo date('Y'); ?> ConectateYa. Hecho con <i data-lucide="heart" class="inline w-3 h-3 text-red-500"></i> para México.</p>
                <div class="flex gap-8">
                    <a href="legal.php" class="hover:text-white transition-colors">Legal</a>
                    <a href="legal/AvisodePrivacidad.pdf" target="_blank" class="hover:text-white transition-colors">Privacidad</a>
                    <a href="legal/TerminosyCondiciones.pdf" target="_blank" class="hover:text-white transition-colors">Términos</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp -->
    <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=<?php echo urlencode(WHATSAPP_MESSAGE); ?>" 
       class="fixed bottom-8 right-8 z-[60] bg-[#25D366] text-white p-5 rounded-full shadow-2xl hover:scale-110 active:scale-95 transition-all group overflow-hidden"
       target="_blank">
        <div class="absolute inset-0 bg-white/20 translate-y-full group-hover:translate-y-0 transition-transform"></div>
        <i data-lucide="message-circle" class="relative z-10 w-8 h-8"></i>
    </a>

    <script>
        // Initialize Lucide Icons
        lucide.createIcons();

        // Navbar scroll effect
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                navbar.classList.add('shadow-xl', 'py-3');
                navbar.classList.replace('py-4', 'py-3');
                navbar.style.background = 'rgba(255, 255, 255, 0.9)';
            } else {
                navbar.classList.remove('shadow-xl');
                navbar.classList.replace('py-3', 'py-4');
                navbar.style.background = 'rgba(255, 255, 255, 0.7)';
            }
        });

        // Mobile Menu logic
        const mobileBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileLinks = document.querySelectorAll('.mobile-link');

        const toggleMenu = () => {
            mobileMenu.classList.toggle('translate-x-full');
            const icon = mobileBtn.querySelector('i');
            if (mobileMenu.classList.contains('translate-x-full')) {
                icon.setAttribute('data-lucide', 'menu');
            } else {
                icon.setAttribute('data-lucide', 'x');
            }
            lucide.createIcons();
        };

        mobileBtn.addEventListener('click', toggleMenu);
        mobileLinks.forEach(link => link.addEventListener('click', toggleMenu));
    </script>
    
    <?php require_once 'includes/cookie-banner.php'; ?>
</body>
</html>
