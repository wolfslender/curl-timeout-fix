<?php
/*
Plugin Name: cURL Timeout Fix
Plugin URI:  https://oliverodev.com
Description: Aumenta el tiempo de espera de las solicitudes cURL para evitar el error "Operation timed out".
Version: 1.1
Author: Alexis Olivero
Author URI: https://oliverodev.com
 * License: GPL-3.0-or-later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/

// Aumentar el tiempo de espera (timeout) para las solicitudes HTTP
function custom_curl_timeout_fix($timeout) {
    return 30; // Aumenta el tiempo de espera a 30 segundos
}
add_filter('http_request_timeout', 'custom_curl_timeout_fix');

// Aumentar el número de reintentos en caso de fallas
function custom_curl_retries($retries) {
    return 3; // Intenta 3 veces antes de fallar
}
add_filter('http_request_args', 'custom_curl_retry_logic', 10, 2);

function custom_curl_retry_logic($r, $url) {
    if (!isset($r['timeout'])) {
        $r['timeout'] = 30; // Aumenta el tiempo de espera si no está definido
    }
    return $r;
}

?>
