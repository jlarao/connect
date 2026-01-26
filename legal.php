<?php include 'includes/header.php'; ?>

<!-- Legal Hero Section -->
<section class="relative pt-32 pb-16 overflow-hidden">
    <div class="absolute inset-0 z-0 bg-gradient-to-br from-secondary via-secondary to-primary/20"></div>
    <div class="container mx-auto px-[5%] lg:px-[10%] relative z-10">
        <div class="max-w-3xl">
            <h1 class="text-4xl lg:text-5xl font-bold text-white mb-4">Información Legal</h1>
            <p class="text-slate-300 text-lg">Transparencia y cumplimiento normativo para tu tranquilidad.</p>
        </div>
    </div>
</section>

<!-- Legal Content Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-[5%] lg:px-[10%]">
        <div class="max-w-4xl mx-auto">
            <div class="bg-bglight rounded-3xl p-8 lg:p-12 border border-slate-100 mb-12">
                <h2 class="text-2xl font-bold text-secondary mb-6 flex items-center gap-3">
                    <i data-lucide="shield" class="text-primary w-7 h-7"></i>
                    ConectateYa
                </h2>
                <div class="prose prose-slate max-w-none text-slate-600 leading-relaxed space-y-4">
                    <p>
                        Nos encanta recibir a nuestros clientes, así que ven en cualquier momento durante las horas de oficina.
                    </p>
                    
                    <div class="bg-white rounded-2xl p-6 border border-slate-200 mt-6">
                        <h3 class="font-bold text-secondary mb-4"></h3>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <i data-lucide="building-2" class="text-primary w-5 h-5 mt-0.5 shrink-0"></i>
                                <span><strong>Legal</strong></span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="map-pin" class="text-primary w-5 h-5 mt-0.5 shrink-0"></i>
                                <span><strong>Domicilio:</strong> José Ma. Pino Suarez C.P. 34324, Durango, Durango.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="phone" class="text-primary w-5 h-5 mt-0.5 shrink-0"></i>
                                <span><strong>Número telefónico:</strong> <?php echo WHATSAPP_NUMBER; ?></span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="mail" class="text-primary w-5 h-5 mt-0.5 shrink-0"></i>
                                <span><strong>Correo electrónico:</strong><?php echo CONTACT_EMAIL; ?></span>
                            </li>
                        </ul>
                    </div>

                    <p class="mt-6 text-sm text-slate-500 italic">
                    </p>
                </div>
            </div>

            <!-- Horario -->
             <div class="bg-bglight rounded-3xl p-8 lg:p-12 border border-slate-100 mb-12">
                <h2 class="text-2xl font-bold text-secondary mb-6 flex items-center gap-3">
                    <i data-lucide="shield" class="text-primary w-7 h-7"></i>
                    Horario de Atención
                </h2>
                <div class="prose prose-slate max-w-none text-slate-600 leading-relaxed space-y-4">
                    <p>
                    </p>
                    
                    <div class="bg-white rounded-2xl p-6 border border-slate-200 mt-6">
                        <h3 class="font-bold text-secondary mb-4"></h3>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <i data-lucide="building-2" class="text-primary w-5 h-5 mt-0.5 shrink-0"></i>
                                <span><strong>Lunes a Viernes:</strong> 9:00 AM - 2:00 PM y 4:00 PM - 7:00 PM</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="map-pin" class="text-primary w-5 h-5 mt-0.5 shrink-0"></i>
                                <span><strong>Sábado:</strong> 9:00 AM - 2:00 PM</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="phone" class="text-primary w-5 h-5 mt-0.5 shrink-0"></i>
                                <span><strong>Domingo y días festivos:</strong> Cerrado</span>
                            </li>
                        </ul>
                    </div>

                    <p class="mt-6 text-sm text-slate-500 italic">
                    </p>
                </div>
            </div>

            <!-- contacto -->
              <div class="bg-bglight rounded-3xl p-8 lg:p-12 border border-slate-100 mb-12">
                <h2 class="text-2xl font-bold text-secondary mb-6 flex items-center gap-3">
                    <i data-lucide="shield" class="text-primary w-7 h-7"></i>
                    Contacto
                </h2>
                <div class="prose prose-slate max-w-none text-slate-600 leading-relaxed space-y-4">
                    <p>
                    </p>
                    
                    <div class="bg-white rounded-2xl p-6 border border-slate-200 mt-6">
                        <h3 class="font-bold text-secondary mb-4"></h3>
                        <ul class="space-y-3">
                            <li class="">
                                El Centro de Contacto, estará disponible para la atención a dudas, aclaraciones y quejas de nuestros clientes las 24 horas del día a través del formulario de nuestro sitio web y del correo electrónico: 
                                    <a class="text-primary hover:underline" href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a> 
                                    Por medio telefónico WhatsApp al número: <?php echo WHATSAPP_NUMBER; ?>
                            </li>
                            <li class="">
                                En caso de que exista alguna falla, el Suscriptor deberá reportarla mediante una llamada, mensaje de texto o vía WhatsApp al número telefónico y se le asignará un número de seguimiento mediante el cual, el Suscriptor podrá verificar la atención que se le esté dando a la falla reportada.
                            </li>
                        </ul>
                    </div>

                    <p class="mt-6 text-sm text-slate-500 italic">
                    </p>
                </div>
            </div>

            <!-- en caso de falla -->
            <div class="bg-bglight rounded-3xl p-8 lg:p-12 border border-slate-100 mb-12">
                <h2 class="text-2xl font-bold text-secondary mb-6 flex items-center gap-3">
                    <i data-lucide="shield" class="text-primary w-7 h-7"></i>
                    En caso de falla
                </h2>
                <div class="prose prose-slate max-w-none text-slate-600 leading-relaxed space-y-4">
                    <p></p>
                    
                    <div class="bg-white rounded-2xl p-6 border border-slate-200 mt-6">
                        <h3 class="font-bold text-secondary mb-4">El procedimiento será el siguiente:</h3>
                        <ol class="list-decimal list-inside">
                            <li>El Suscriptor levantará el reporte ante el Centro de Contacto y le será asignado un número de seguimiento. </li>
                            <li>El Área de Servicio al Cliente, junto con el responsable técnico, darán seguimiento al reporte presentado. </li>
                            <li>El  técnico verificará las causas que motivaron la falla y, en su caso, la corregirá, de acuerdo con  el Contrato de Servicio. </li>
                            <li>El  técnico informará al Centro de Contacto acerca de la reparación de la falla. Este notificará al suscriptor las razones de la falla y la procedencia o no de su reporte, ratificando que la falla reportada se hubiera corregido.</li>
                            
                        </ol>
                    </div>

                    <p class="mt-6 text-sm text-slate-500 italic">
                    </p>
                </div>
            </div>

            <!-- form -->
            <div class="bg-bglight rounded-3xl p-8 lg:p-12 border border-slate-100 mb-12">
                <h2 class="text-2xl font-bold text-secondary mb-6 flex items-center gap-3">
                    <i data-lucide="shield" class="text-primary w-7 h-7"></i>
                    Comunícate con nosotros.
                </h2>
                <div class="prose prose-slate max-w-none text-slate-600 leading-relaxed space-y-4">
                    <p></p>
                    
                    <div class="bg-white rounded-2xl p-6 border border-slate-200 mt-6">
                        <h3 class="font-bold text-secondary mb-4"></h3>
                        <?php if (isset($_GET['success'])): ?>
                            <div class="bg-primary/20 border border-primary/30 rounded-2xl p-6 mb-8 flex items-center gap-4 animate-fade-in">
                                <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center shrink-0">
                                    <i data-lucide="check-circle" class="text-white"></i>
                                </div>
                                <div>
                                    <h4 class="text-white font-bold">¡Solicitud Enviada!</h4>
                                    <!-- <p class="text-slate-400 text-sm">Un asesor validará tu zona y te contactará en breve.</p> -->
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
                                <label class="text-slate-400 text-xs font-bold uppercase tracking-wider">Número</label>
                                <input type="tel" name="phone" required placeholder="Ej. 55 1234 5678" 
                                    class="w-full bg-white/5 border border-white/10 rounded-xl px-5 py-4 text-white focus:outline-none focus:border-primary transition-all">
                            </div>

                            <div class="md:col-span-2 space-y-2">
                                <label class="text-slate-400 text-xs font-bold uppercase tracking-wider">Mensaje</label>
                                <textarea name="message" required rows="4" placeholder="Escribe tu mensaje" 
                                        class="w-full bg-white/5 border border-white/10 rounded-xl px-5 py-4 text-white focus:outline-none focus:border-primary transition-all resize-none"></textarea>
                            </div>
                            <div class="md:col-span-2 pt-4">
                                <button type="submit" class="w-full bg-primary hover:bg-opacity-90 text-white font-black py-5 rounded-2xl transition-all shadow-xl shadow-primary/20 hover:-translate-y-1 uppercase tracking-widest">
                                    Enviar
                                </button>
                            </div>
                        </form>
                    </div>

                    <p class="mt-6 text-sm text-slate-500 italic">
                    </p>
                </div>
            </div>

            <!-- Documents Section -->
            <h2 class="text-2xl font-bold text-secondary mb-8 flex items-center gap-3">
                <i data-lucide="file-text" class="text-primary w-7 h-7"></i>
                Documentos Legales
            </h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Carta de Derechos -->
                <a href="legal/CartadeDerechos.pdf" target="_blank" class="group bg-bglight hover:bg-white rounded-2xl p-6 border border-slate-100 hover:border-primary/30 hover:shadow-xl hover:shadow-primary/10 transition-all">
                    <div class="w-12 h-12 bg-white group-hover:bg-primary/10 rounded-xl flex items-center justify-center mb-4 transition-colors">
                        <i data-lucide="scroll-text" class="text-primary w-6 h-6"></i>
                    </div>
                    <h3 class="font-bold text-secondary mb-2 group-hover:text-primary transition-colors">Carta de Derechos</h3>
                    <p class="text-slate-500 text-sm">Conoce tus derechos como usuario.</p>
                </a>

                <!-- Titulo de Concesión -->
                <a href="legal/TitulodeConcesion.pdf" target="_blank" class="group bg-bglight hover:bg-white rounded-2xl p-6 border border-slate-100 hover:border-primary/30 hover:shadow-xl hover:shadow-primary/10 transition-all">
                    <div class="w-12 h-12 bg-white group-hover:bg-primary/10 rounded-xl flex items-center justify-center mb-4 transition-colors">
                        <i data-lucide="award" class="text-primary w-6 h-6"></i>
                    </div>
                    <h3 class="font-bold text-secondary mb-2 group-hover:text-primary transition-colors">Título de Concesión</h3>
                    <p class="text-slate-500 text-sm">Documento oficial del IFT.</p>
                </a>

                <!-- Código de Practica -->
                <!-- <a href="legal/CodigodePractica.pdf" target="_blank" class="group bg-bglight hover:bg-white rounded-2xl p-6 border border-slate-100 hover:border-primary/30 hover:shadow-xl hover:shadow-primary/10 transition-all">
                    <div class="w-12 h-12 bg-white group-hover:bg-primary/10 rounded-xl flex items-center justify-center mb-4 transition-colors">
                        <i data-lucide="book-open" class="text-primary w-6 h-6"></i>
                    </div>
                    <h3 class="font-bold text-secondary mb-2 group-hover:text-primary transition-colors">Código de Práctica</h3>
                    <p class="text-slate-500 text-sm">Estándares de servicio.</p>
                </a> -->

                <!-- Aviso de Privacidad -->
                <a href="legal/AvisodePrivacidad.pdf" target="_blank" class="group bg-bglight hover:bg-white rounded-2xl p-6 border border-slate-100 hover:border-primary/30 hover:shadow-xl hover:shadow-primary/10 transition-all">
                    <div class="w-12 h-12 bg-white group-hover:bg-primary/10 rounded-xl flex items-center justify-center mb-4 transition-colors">
                        <i data-lucide="lock" class="text-primary w-6 h-6"></i>
                    </div>
                    <h3 class="font-bold text-secondary mb-2 group-hover:text-primary transition-colors">Aviso de Privacidad</h3>
                    <p class="text-slate-500 text-sm">Protección de tus datos personales.</p>
                </a>

                <!-- Términos y Condiciones -->
                <!-- <a href="legal/TerminosyCondiciones.pdf" target="_blank" class="group bg-bglight hover:bg-white rounded-2xl p-6 border border-slate-100 hover:border-primary/30 hover:shadow-xl hover:shadow-primary/10 transition-all">
                    <div class="w-12 h-12 bg-white group-hover:bg-primary/10 rounded-xl flex items-center justify-center mb-4 transition-colors">
                        <i data-lucide="file-check" class="text-primary w-6 h-6"></i>
                    </div>
                    <h3 class="font-bold text-secondary mb-2 group-hover:text-primary transition-colors">Términos y Condiciones</h3>
                    <p class="text-slate-500 text-sm">Condiciones del servicio.</p>
                </a> -->

                <!-- Contrato ante PROFECO -->
                <a href="legal/contrato.pdf" target="_blank" class="group bg-bglight hover:bg-white rounded-2xl p-6 border border-slate-100 hover:border-primary/30 hover:shadow-xl hover:shadow-primary/10 transition-all">
                    <div class="w-12 h-12 bg-white group-hover:bg-primary/10 rounded-xl flex items-center justify-center mb-4 transition-colors">
                        <i data-lucide="stamp" class="text-primary w-6 h-6"></i>
                    </div>
                    <h3 class="font-bold text-secondary mb-2 group-hover:text-primary transition-colors">Contrato</h3>
                    <p class="text-slate-500 text-sm">Contrato registrado oficialmente.</p>
                </a>

                <!-- Tarifas Registradas ante IFETEL -->
                <!-- <a href="legal/TarifasRegistradasanteIFETEL.pdf" target="_blank" class="group bg-bglight hover:bg-white rounded-2xl p-6 border border-slate-100 hover:border-primary/30 hover:shadow-xl hover:shadow-primary/10 transition-all">
                    <div class="w-12 h-12 bg-white group-hover:bg-primary/10 rounded-xl flex items-center justify-center mb-4 transition-colors">
                        <i data-lucide="receipt" class="text-primary w-6 h-6"></i>
                    </div>
                    <h3 class="font-bold text-secondary mb-2 group-hover:text-primary transition-colors">Tarifas Registradas ante IFETEL</h3>
                    <p class="text-slate-500 text-sm">Tarifas oficiales registradas.</p>
                </a> -->
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
