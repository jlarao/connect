<?php
/**
 * Cookie Consent Banner Component
 * Compliant with Mexican data protection regulations (LFPDPPP)
 */
?>
<div id="cookie-consent-banner" class="fixed bottom-0 left-0 w-full z-[100] p-4 lg:p-6 translate-y-full transition-transform duration-500 ease-in-out pointer-events-none">
    <div class="container mx-auto max-w-5xl pointer-events-auto">
        <div class="bg-secondary/95 backdrop-blur-xl border border-white/10 p-6 md:p-8 rounded-[2rem] shadow-2xl flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="flex-grow space-y-3">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-primary/20 rounded-xl flex items-center justify-center">
                        <i data-lucide="cookie" class="text-primary w-6 h-6"></i>
                    </div>
                    <h5 class="text-white font-bold text-lg">Aviso de Cookies</h5>
                </div>
                <p class="text-slate-300 text-sm leading-relaxed max-w-2xl">
                    Utilizamos cookies para mejorar su experiencia, analizar el tráfico y personalizar el contenido. 
                    Al continuar navegando, usted acepta el uso de cookies de acuerdo con nuestro 
                    <a href="legal/AvisodePrivacidad.pdf" target="_blank" class="text-primary hover:underline font-medium">Aviso de Privacidad</a>.
                </p>
            </div>
            
            <div class="flex flex-col sm:flex-row items-center gap-4 shrink-0 w-full md:w-auto">
                <button id="decline-cookies" class="w-full sm:w-auto px-8 py-3 rounded-2xl text-slate-300 hover:text-white hover:bg-white/5 transition-all text-sm font-semibold border border-white/5">
                    Rechazar
                </button>
                <button id="accept-cookies" class="w-full sm:w-auto px-8 py-3 rounded-2xl bg-primary hover:bg-opacity-90 text-white font-bold transition-all shadow-xl shadow-primary/20 hover:-translate-y-0.5 text-sm uppercase tracking-wide">
                    Aceptar
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    (function() {
        const banner = document.getElementById('cookie-consent-banner');
        const acceptBtn = document.getElementById('accept-cookies');
        const declineBtn = document.getElementById('decline-cookies');
        const cookieKey = 'conectateya_cookies_consent';

        // Check for existing consent
        const hasConsent = localStorage.getItem(cookieKey);

        if (!hasConsent) {
            // Show banner after a short delay
            setTimeout(() => {
                banner.classList.remove('translate-y-full');
            }, 1000);
        }

        const hideBanner = () => {
            banner.classList.add('translate-y-full');
        };

        acceptBtn.addEventListener('click', () => {
            localStorage.setItem(cookieKey, 'accepted');
            hideBanner();
            // You can trigger GA or other cookie-dependent scripts here if needed
        });

        declineBtn.addEventListener('click', () => {
            localStorage.setItem(cookieKey, 'declined');
            hideBanner();
        });
    })();
</script>
