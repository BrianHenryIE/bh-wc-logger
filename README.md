# BH WC Logger

A [PSR-3](https://www.php-fig.org/psr/psr-3/) compliant logger for WooCommerce plugins.

A light shim on `WC_Logger` / `wc_get_logger()` that implements `Psr\Log\LoggerInterface`.



Currently just supports psr/log 1.x, i.e. compatible with PHP 5.3+. It has incomplete type hinting. psr/log 2.x+ requires PHP 8.0+. It will be an easy change to make but at the time of writing, WooCommerce (8.2) requires PHP 7.4