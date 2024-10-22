# cURL Timeout Fix Plugin

## Descripción

El plugin **cURL Timeout Fix** es una solución simple para resolver el error `cURL error 28: Operation timed out after X milliseconds with 0 bytes received` que ocurre cuando WordPress intenta conectarse a servicios externos y se agota el tiempo de espera. Este plugin ajusta el tiempo de espera (`timeout`) de cURL a un valor más alto para evitar este error.

## Características

- Ajusta el tiempo de espera de cURL a 20 segundos.
- Solución rápida para problemas de conexión en WordPress con APIs externas o servicios de terceros.
- No requiere configuración adicional, simplemente activarlo y listo.

## Requisitos

- WordPress 4.0 o superior.
- PHP 5.6 o superior.

## Instalación

1. Descarga el archivo `curl-timeout-fix.php`.
2. Sube el archivo al directorio `/wp-content/plugins/` de tu instalación de WordPress.
3. Activa el plugin a través del menú **Plugins** en el administrador de WordPress.

## Uso

Una vez activado, el plugin automáticamente ajustará el tiempo de espera de cURL en las solicitudes de WordPress. No se requiere ninguna configuración adicional.

## Desinstalación

Para desinstalar el plugin:

1. Desactiva el plugin desde el menú **Plugins** en WordPress.
2. Elimina el archivo `curl-timeout-fix.php` del directorio `/wp-content/plugins/`.

## Notas

Este plugin puede ser especialmente útil para instalaciones de WordPress en servidores con configuraciones de red lentas o cuando se realizan solicitudes a servicios externos con alta latencia.

## Contribuciones

Si deseas mejorar este plugin o reportar algún problema, puedes hacerlo en [GitHub](https://github.com/wolfslender/curl-timeout-fix).

## Licencia

Este plugin está disponible bajo la licencia MIT. Para más detalles, consulta el archivo [LICENSE](LICENSE).
