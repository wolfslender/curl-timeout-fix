# cURL Timeout Fix Plugin

## Description

The **cURL Timeout Fix** plugin is a simple solution to resolve the error `cURL error 28: Operation timed out after X milliseconds with 0 bytes received` that occurs when WordPress tries to connect to external services and the timeout is exceeded. This plugin adjusts the cURL timeout to a higher value to avoid this error.

## Features

- Adjusts the cURL timeout to 30 seconds.
- Retries failed requests up to 3 times.
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

This plugin is available under the GPL-3.0-or-later License. For more details, please refer to the [LICENSE](LICENSE) file.

For support, bug reports, and feature requests, please use the GitHub Issues page or contact us through our support channels.

## Changelog

### 1.1

- Adjusted the cURL timeout to 30 seconds.
- Added retry logic for failed requests (up to 3 retries).

### 1.0

- Initial release with basic timeout adjustment functionality.

## Credits

Developed by Alexis Olivero

## Privacy Policy

This plugin does not collect any personal data from your visitors or send any data to external services.

[![FOSSA Status](https://app.fossa.com/api/projects/git%2Bgithub.com%2Fwolfslender%2Fcurl-timeout-fix.svg?type=shield&issueType=license)](https://app.fossa.com/projects/git%2Bgithub.com%2Fwolfslender%2Fcurl-timeout-fix?ref=badge_shield&issueType=license)
[![FOSSA Status](https://app.fossa.com/api/projects/git%2Bgithub.com%2Fwolfslender%2Fcurl-timeout-fix.svg?type=shield&issueType=security)](https://app.fossa.com/projects/git%2Bgithub.com%2Fwolfslender%2Fcurl-timeout-fix?ref=badge_shield&issueType=security)
