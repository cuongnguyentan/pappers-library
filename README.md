pappers-library
===============

[![Build Status](https://img.shields.io/github/actions/workflow/status/webeweb/pappers-library/build.yml?style=flat-square)](https://github.com/webeweb/pappers-library/actions)
[![Coverage Status](https://img.shields.io/coveralls/github/webeweb/pappers-library/master.svg?style=flat-square)](https://coveralls.io/github/webeweb/pappers-library?branch=master)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/quality/g/webeweb/pappers-library/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/webeweb/pappers-library/?branch=master)
[![Latest Stable Version](https://img.shields.io/packagist/v/webeweb/pappers-library.svg?style=flat-square)](https://packagist.org/packages/webeweb/pappers-library)
[![License](https://img.shields.io/packagist/l/webeweb/pappers-library.svg?style=flat-square)](https://packagist.org/packages/webeweb/pappers-library)
[![composer.lock](https://img.shields.io/badge/.lock-uncommited-important.svg?style=flat-square)](https://packagist.org/packages/webeweb/pappers-library)

Integrate Pappers API with your projects.

> IMPORTANT NOTICE: This package is still under development. Any changes will be
> done without prior notice to consumers of this package. Of course this code
> will become stable at a certain point, but for now, use at your own risk.

If you like this package, pay me a beer (or a coffee)
[![paypal.me](https://img.shields.io/badge/paypal.me-webeweb-0070ba.svg?style=flat-square&logo=paypal)](https://www.paypal.me/webeweb)

## Compatibility

[![PHP](https://img.shields.io/packagist/php-v/webeweb/pappers-library.svg?style=flat-square)](http://php.net)

## Installation

Open a command console, enter your project directory and execute the following
command to download the latest stable version of this package:

```bash
$ composer require webeweb/pappers-library
```

This command requires you to have Composer installed globally, as explained in
the [installation chapter](https://getcomposer.org/doc/00-intro.md) of the
Composer documentation.

## Usage

Read the [documentation](doc/index.md).
You can also consult or execute sample scripts into dev folder.

## Testing

To test the package, is better to clone this repository on your computer.
Open a command console and execute the following commands to download the latest
stable version of this package:

```bash
$ git clone https://github.com/webeweb/pappers-library.git
$ cd pappers-library
$ composer install
```

Once all required libraries are installed then do:

```bash
$ vendor/bin/phpunit
```

> IMPORTANT NOTICE: To test the package with your API key, pastes it into a
> `.token` file at the root of this package.

## License

`pappers-library` is released under the MIT License. See the bundled [LICENSE](LICENSE)
file for details.

Please note that the Pappers API is free for use, see their
[API page](https://www.pappers.fr/api) for details.

## Donate

If you like this work, please consider donating at
[![paypal.me](https://img.shields.io/badge/paypal.me-webeweb-0070ba.svg?style=flat-square&logo=paypal)](https://www.paypal.me/webeweb)
