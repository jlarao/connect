<?php
/**
 * Configuración Global - ConectateYa
 * 
 * Las variables sensibles se cargan desde el archivo .env
 * Asegúrate de copiar .env.example a .env y configurar tus valores
 */

// Cargar variables de entorno desde .env
$envFile = __DIR__ . '/.env';
if (file_exists($envFile)) {
    $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        // Ignorar comentarios
        if (strpos(trim($line), '#') === 0) continue;
        
        // Parsear KEY=VALUE
        if (strpos($line, '=') !== false) {
            list($key, $value) = explode('=', $line, 2);
            $key = trim($key);
            $value = trim($value);
            
            // Establecer como variable de entorno
            if (!empty($key)) {
                putenv("$key=$value");
                $_ENV[$key] = $value;
            }
        }
    }
}

// Helper para obtener variables de entorno con valor por defecto
function env($key, $default = null) {
    $value = getenv($key);
    return $value !== false ? $value : $default;
}

// ===========================================
// Configuración del Entorno
// ===========================================
$isProduction = env('APP_ENV', 'development') === 'production';

// Configuración de Errores
if ($isProduction) {
    error_reporting(0);
    ini_set('display_errors', 0);
} else {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}

// ===========================================
// Identidad Visual (Público - OK para Git)
// ===========================================
define('PRIMARY_COLOR', '#00AEEF');   // Cian vibrante del logo
define('SECONDARY_COLOR', '#0f172a'); // Slate oscuro para contraste profesional
define('ACCENT_COLOR', '#38bdf8');    // Cian claro para hovers/detalles
define('INFO_COLOR', '#34d399');      // Esmeralda para estados positivos
define('BG_COLOR', '#f8fafc');        // Fondo slate muy claro

// ===========================================
// Información del Sitio (Cargado desde .env)
// ===========================================
define('SITE_NAME', 'ConectateYa');
define('SITE_URL', env('SITE_URL', 'http://localhost/conectateya'));
define('CONTACT_EMAIL', env('CONTACT_EMAIL', 'conectateya.dgo@gmail.com'));
define('WHATSAPP_NUMBER', env('WHATSAPP_NUMBER', '+526183716515'));
define('WHATSAPP_MESSAGE', '¡Hola! Me interesa conocer más sobre los planes de ConectateYa.');

// ===========================================
// SEO (Público - OK para Git)
// ===========================================
define('META_TITLE', 'ConectateYa | Internet de Fibra Óptica e Inalámbrico de Alta Velocidad');
define('META_DESCRIPTION', 'Conexión ultrarrápida y estable para tu hogar o empresa. Planes de Fibra Óptica y Radioenlace con soporte técnico local y especializado.');

// ===========================================
// Analytics (Cargado desde .env)
// ===========================================
define('GOOGLE_ANALYTICS_ID', env('GOOGLE_ANALYTICS_ID', ''));

// ===========================================
// Configuración de Planes (Público - OK para Git)
// ===========================================
define('PLANS', [
    'fibra' => [
        [
            'name' => 'Fibra Residencial 25',
            'speed' => '25 Mbps',
            'price' => '$350',
            'features' => ['Internet Ilimitado', 'WiFi'],
            'featured' => false
        ],
        [
            'name' => 'Fibra Residencial 40',
            'speed' => '40 Mbps',
            'price' => '$500',
            'features' => ['Internet Ilimitado', 'WiFi'],
            'featured' => true
        ],
        [
            'name' => 'Fibra Negocio 25',
            'speed' => '25 Mbps',
            'price' => '$500',
            'features' => ['Internet Ilimitado', 'WiFi'],
            'featured' => false
        ]
    ],
    'inalambrico' => [
        [
            'name' => 'Básico Casa',
            'speed' => '7 Mbps',
            'price' => '$350',
            'features' => ['Internet Ilimitado', 'WiFi'],
            'featured' => false
        ],
        [
            'name' => 'Pyme Enlace',
            'speed' => '15 Mbps',
            'price' => '$500',
            'features' => ['Internet Ilimitado', 'WiFi'],
            'featured' => false
        ]
    ]
]);
?>
