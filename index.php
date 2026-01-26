<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section id="inicio" class="relative min-h-screen flex items-center pt-20 overflow-hidden">
    <!-- Unsplash Hero Background -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1596282806627-18c7e6ec848a?q=80&w=2070&auto=format&fit=crop" 
             alt="Equipo de Fibra Óptica" 
             class="w-full h-full object-cover">
        <div class="absolute inset-0 hero-gradient"></div>
    </div>

    <div class="container mx-auto px-[5%] lg:px-[10%] relative z-10">
        <div class="max-w-3xl- space-y-8">
            <div class="inline-flex items-center gap-2 bg-primary/20 backdrop-blur-md px-4 py-2 rounded-full text-white border border-white/20 animate-fade-in">
                <span class="w-2 h-2 bg-primary rounded-full animate-pulse"></span>
                <span class="text-sm font-semibold tracking-wide uppercase">Internet de Fibra optica y Antena</span>
            </div>
            
            <h1 class="text-5xl lg:text-7xl font-bold text-white leading-tight ">
                <p> Bienvenido a <span class="text-primary">ConectateYa</span></p>
            </h1>
            
            <p class="text-xl text-slate-200 max-w-2xl leading-relaxed">
                Somos una empresa mexicana con años de experiencia en el mercado, dedicada a ofrecer servicios de internet a nuestros clientes.
            </p>

            <div class="flex flex-wrap gap-4 pt-4">
                <a href="#planes" class="bg-primary hover:bg-opacity-90 text-white px-8 py-4 rounded-2xl font-bold text-lg transition-all shadow-xl shadow-primary/20 hover:-translate-y-1">
                    Ver Planes Disponibles
                </a>
                <!-- <a href="#contacto" class="bg-white/10 hover:bg-white/20 backdrop-blur-md text-white border border-white/30 px-8 py-4 rounded-2xl font-bold text-lg transition-all hover:-translate-y-1">
                    Consultar Cobertura
                </a> -->
            </div>

            <!-- Stats -->
            <!-- <div class="grid grid-cols-2 md:grid-cols-3 gap-8 pt-12 border-t border-white/10">
                <div>
                    <p class="text-3xl font-bold text-white">99.9%</p>
                    <p class="text-slate-400 text-sm italic">Uptime Garantizado</p>
                </div>
                <div>
                    <p class="text-3xl font-bold text-white">100%</p>
                    <p class="text-slate-400 text-sm italic">Fibra Óptica</p>
                </div>
                <div class="hidden md:block">
                    <p class="text-3xl font-bold text-white">24/7</p>
                    <p class="text-slate-400 text-sm italic">Soporte Local</p>
                </div>
            </div> -->
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<!-- <section id="beneficios" class="py-24 bg-white">
    <div class="container mx-auto px-[5%] lg:px-[10%]">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-primary font-bold tracking-widest uppercase text-sm mb-4">¿Por qué nosotros?</h2>
            <p class="text-4xl font-bold text-secondary mb-6">Rediseñamos tu experiencia de navegación</p>
            <p class="text-slate-500 text-lg">Infraestructura propia y tecnología de vanguardia para asegurar que nunca pierdas la conexión.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            
            <div class="p-8 rounded-3xl bg-bglight border border-slate-100 hover:border-primary/30 transition-all group">
                <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center shadow-lg mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="zap" class="text-primary w-8 h-8"></i>
                </div>
                <h3 class="text-xl font-bold text-secondary mb-4">Alta Velocidad</h3>
                <p class="text-slate-500 leading-relaxed">Descargas y envíos de archivos pesados en cuestión de segundos, sin interrupciones.</p>
            </div>

            
            <div class="p-8 rounded-3xl bg-bglight border border-slate-100 hover:border-primary/30 transition-all group">
                <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center shadow-lg mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="shield-check" class="text-primary w-8 h-8"></i>
                </div>
                <h3 class="text-xl font-bold text-secondary mb-4">Estabilidad Total</h3>
                <p class="text-slate-500 leading-relaxed">Nuestra red está optimizada para streaming 4K y gaming competitivo con baja latencia.</p>
            </div>

            
            <div class="p-8 rounded-3xl bg-bglight border border-slate-100 hover:border-primary/30 transition-all group">
                <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center shadow-lg mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="headphones" class="text-primary w-8 h-8"></i>
                </div>
                <h3 class="text-xl font-bold text-secondary mb-4">Soporte Humano</h3>
                <p class="text-slate-500 leading-relaxed">Olvídate de los bots. Habla directamente con técnicos locales listos para ayudarte.</p>
            </div>

            
            <div class="p-8 rounded-3xl bg-bglight border border-slate-100 hover:border-primary/30 transition-all group">
                <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center shadow-lg mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="map-pin" class="text-primary w-8 h-8"></i>
                </div>
                <h3 class="text-xl font-bold text-secondary mb-4">Cobertura Local</h3>
                <p class="text-slate-500 leading-relaxed">Expandimos nuestra red constantemente para llegar a donde otros no pueden.</p>
            </div>
        </div>
    </div>
</section> -->

<!-- Plans Sections -->
<section id="planes" class="py-24 bg-bglight">
    <div class="container mx-auto px-[5%] lg:px-[10%]">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-secondary mb-4">Nuestros Planes</h2>
            <p class="text-slate-500 text-lg">Elige la conexión que mejor se adapte a tus necesidades.</p>
        </div>

        <!-- Fiber Plans Grid -->
        <h3 class="text-2xl font-bold text-secondary mb-8 flex items-center gap-3">
            <i data-lucide="cable" class="text-primary"></i> Fibra Óptica
        </h3>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
            <?php foreach (PLANS['fibra'] as $plan): ?>
            <div class="relative bg-white rounded-[2.5rem] p-10 shadow-sm border border-slate-100 transition-all hover:shadow-2xl hover:shadow-primary/10 flex flex-col <?php echo $plan['featured'] ? 'ring-2 ring-primary scale-105 z-10' : ''; ?>">
                <?php if ($plan['featured']): ?>
                    <span class="absolute -top-4 left-1/2 -translate-x-1/2 bg-primary text-white text-xs font-black px-4 py-1.5 rounded-full tracking-widest uppercase shadow-lg">Más Popular</span>
                <?php endif; ?>

                <div class="mb-8">
                    <p class="text-slate-400 font-bold uppercase text-xs tracking-widest mb-2"><?php echo $plan['name']; ?></p>
                    <div class="flex items-baseline gap-1">
                        <span class="text-5xl font-black text-secondary"><?php echo $plan['speed']; ?></span>
                    </div>
                </div>

                <div class="mb-8 flex items-baseline gap-1">
                    <span class="text-3xl font-bold text-secondary"><?php echo $plan['price']; ?></span>
                    <span class="text-slate-400">/ mes</span>
                </div>

                <ul class="space-y-4 mb-10 flex-grow">
                    <?php foreach ($plan['features'] as $feature): ?>
                    <li class="flex items-center gap-3 text-slate-600 font-medium">
                        <div class="w-5 h-5 bg-primary/10 rounded-full flex items-center justify-center">
                            <i data-lucide="check" class="text-primary w-3 h-3"></i>
                        </div>
                        <?php echo $feature; ?>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <!-- <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" 
                   class="w-full text-center py-4 rounded-2xl font-bold transition-all <?php echo $plan['featured'] ? 'bg-primary text-white shadow-lg shadow-primary/30 hover:bg-opacity-90' : 'bg-slate-100 text-secondary hover:bg-primary hover:text-white'; ?>">
                    Contratar Ahora
                </a> -->
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Wireless Enlace Grid -->
        <h3 class="text-2xl font-bold text-secondary mb-8 flex items-center gap-3">
            <i data-lucide="radio" class="text-primary"></i> Internet Inalámbrico (Radioenlace)
        </h3>
        <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-8 max-w-4xl">
            <?php foreach (PLANS['inalambrico'] as $plan): ?>
            <div class="bg-white rounded-[2.5rem] p-10 shadow-sm border border-slate-100 transition-all hover:shadow-xl flex flex-col">
                <div class="flex justify-between items-start mb-8">
                    <div>
                        <p class="text-slate-400 font-bold uppercase text-xs tracking-widest mb-2"><?php echo $plan['name']; ?></p>
                        <h4 class="text-4xl font-black text-secondary"><?php echo $plan['speed']; ?></h4>
                    </div>
                    <div class="text-4xl font-bold text-primary"><?php echo $plan['price']; ?></div>
                </div>

                <ul class="grid grid-cols-2 gap-4 mb-10">
                    <?php foreach ($plan['features'] as $feature): ?>
                    <li class="flex items-center gap-3 text-sm text-slate-600 font-medium">
                        <i data-lucide="check-circle-2" class="text-primary w-4 h-4"></i>
                        <?php echo $feature; ?>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <!-- <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" 
                   class="w-full text-center py-4 rounded-xl bg-slate-900 text-white font-bold hover:bg-primary transition-all">
                    Solicitar Información
                </a> -->
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contacto" class="py-24 bg-white relative overflow-hidden">
    <!-- Decor -->
    <div class="absolute -right-20 -top-20 w-80 h-80 bg-primary/5 rounded-full blur-3xl"></div>
    <div class="absolute -left-20 -bottom-20 w-80 h-80 bg-accent/5 rounded-full blur-3xl"></div>

    <div class="container mx-auto px-[5%] lg:px-[10%] relative z-10">
        <div class="bg-secondary rounded-[3rem] overflow-hidden shadow-2xl flex flex-col lg:flex-row">
            <!-- Info Side -->
            <div class="lg:w-1/2 p-12 lg:p-16 bg-primary/10 flex flex-col justify-between border-b lg:border-b-0 lg:border-r border-white/10">
                <div>
                    <h2 class="text-4xl font-bold text-white mb-6">Sobre nuestros paquetes</h2>
                    <p class="text-slate-400 text-lg mb-10">Los precios incluyen IVA</p>
                    
                    <div class="space-y-6">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-white/10 rounded-xl flex items-center justify-center">
                                <i data-lucide="user-cog" class="text-primary"></i>
                            </div>
                            <div>
                                <p class="text-slate-500 text-xs font-bold uppercase">Instalación</p>
                                <p class="text-white font-semibold">Costo para fibra de $1,500.00 </p>
                                <p class="text-white font-semibold">Costo para antena de  $1,000.00 </p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-white/10 rounded-xl flex items-center justify-center">
                                <i data-lucide="credit-card" class="text-primary"></i>
                            </div>
                            <div>
                                <p class="text-slate-500 text-xs font-bold uppercase">Forma de pago</p>
                                <p class="text-white font-semibold">Efectivo directo en nuestra sucursal o mediante transferencia bancaria</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-white/10 rounded-xl flex items-center justify-center">
                                <i data-lucide="copyright" class="text-primary"></i>
                            </div>
                            <div>
                                <p class="text-slate-500 text-xs font-bold uppercase">Tarifas registradas ante IFT</p>
                                <p class="text-white font-semibold">En tramite</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="mt-12 p-6 bg-white/5 rounded-2xl border border-white/5">
                    <p class="text-white italic opacity-80 mb-4 cursor-default">"El cambio a Fibra con ConectateYa fue increíble. El ping en mis juegos bajó a la mitad."</p>
                    <p class="text-primary font-bold text-sm">- Ricardo M., Cliente Fibra Gamer</p>
                </div> -->
            </div>

            <!-- Image Side -->
            <div class="lg:w-1/2 p-8 lg:p-12 flex items-center justify-center">
                <div class="relative w-full h-full min-h-[300px] rounded-2xl overflow-hidden">
                    <picture>
                        <source srcset="assets/images/connectivity_packages.webp" type="image/webp">
                        <img src="assets/images/connectivity_packages.png" 
                             alt="Familia disfrutando de internet de fibra óptica en diferentes dispositivos" 
                             class="w-full h-full object-cover rounded-2xl shadow-lg"
                             width="800" 
                             height="800"
                             loading="lazy"
                             decoding="async">
                    </picture>
                    <div class="absolute inset-0 bg-gradient-to-t from-secondary/50 to-transparent rounded-2xl"></div>
                </div>
                
                <!-- <?php if (isset($_GET['success'])): ?>
                    <div class="bg-primary/20 border border-primary/30 rounded-2xl p-6 mb-8 flex items-center gap-4 animate-fade-in">
                        <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center shrink-0">
                            <i data-lucide="check-circle" class="text-white"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-bold">¡Solicitud Enviada!</h4>
                            <p class="text-slate-400 text-sm">Un asesor validará tu zona y te contactará en breve.</p>
                        </div>
                    </div>
                <?php endif; ?>
                
                <form action="contact-handler.php" method="POST" class="grid md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-slate-400 text-xs font-bold uppercase tracking-wider">Nombre Completo</label>
                        <input type="text" name="name" required placeholder="Ej. Juan Pérez" 
                               class="w-full bg-white/5 border border-white/10 rounded-xl px-5 py-4 text-white focus:outline-none focus:border-primary transition-all">
                    </div>
                    <div class="space-y-2">
                        <label class="text-slate-400 text-xs font-bold uppercase tracking-wider">WhatsApp</label>
                        <input type="tel" name="phone" required placeholder="Ej. 55 1234 5678" 
                               class="w-full bg-white/5 border border-white/10 rounded-xl px-5 py-4 text-white focus:outline-none focus:border-primary transition-all">
                    </div>
                    <div class="md:col-span-2 space-y-2">
                        <label class="text-slate-400 text-xs font-bold uppercase tracking-wider">Dirección / Colonia</label>
                        <input type="text" name="location" required placeholder="¿Dónde necesitas el servicio?" 
                               class="w-full bg-white/5 border border-white/10 rounded-xl px-5 py-4 text-white focus:outline-none focus:border-primary transition-all">
                    </div>
                    <div class="md:col-span-2 space-y-2">
                        <label class="text-slate-400 text-xs font-bold uppercase tracking-wider">Mensaje (Opcional)</label>
                        <textarea name="message" rows="4" placeholder="¿Tienes alguna duda?" 
                                  class="w-full bg-white/5 border border-white/10 rounded-xl px-5 py-4 text-white focus:outline-none focus:border-primary transition-all resize-none"></textarea>
                    </div>
                    <div class="md:col-span-2 pt-4">
                        <button type="submit" class="w-full bg-primary hover:bg-opacity-90 text-white font-black py-5 rounded-2xl transition-all shadow-xl shadow-primary/20 hover:-translate-y-1 uppercase tracking-widest">
                            Enviar Solicitud de Cobertura
                        </button>
                    </div>
                </form> -->
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
