# cURL Timeout Fix Plugin

## Description

The **cURL Timeout Fix** plugin is a simple solution to resolve the error `cURL error 28: Operation timed out after X milliseconds with 0 bytes received` that occurs when WordPress tries to connect to external services and the timeout is exceeded. This plugin adjusts the cURL timeout to a higher value to avoid this error.

## Features

- Adjusts the cURL timeout to 20 seconds.
- Quick solution for connection issues in WordPress with external APIs or third-party services.
- No additional configuration required; simply activate it and you're good to go.

## Requirements

- WordPress 4.0 or higher.
- PHP 5.6 or higher.

## Installation

1. Download the `curl-timeout-fix.php` file.
2. Upload the file to the `/wp-content/plugins/` directory of your WordPress installation.
3. Activate the plugin through the **Plugins** menu in the WordPress admin panel.

## Usage

Once activated, the plugin will automatically adjust the cURL timeout for WordPress requests. No additional configuration is needed.

## Uninstallation

To uninstall the plugin:

1. Deactivate the plugin from the **Plugins** menu in WordPress.
2. Remove the `curl-timeout-fix.php` file from the `/wp-content/plugins/` directory.

## Notes

This plugin can be particularly useful for WordPress installations on servers with slow network configurations or when making requests to external services with high latency.

## Contributions

If you would like to improve this plugin or report any issues, you can do so on [GitHub](https://github.com/wolfslender/curl-timeout-fix).

## License

This plugin is available under the MIT License. For more details, please refer to the [LICENSE](LICENSE) file.

