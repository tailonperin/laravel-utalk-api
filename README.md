# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/tailonperin/laravel-utalk-api.svg?style=flat-square)](https://packagist.org/packages/tailonperin/laravel-utalk-api)
[![Build Status](https://img.shields.io/travis/tailonperin/laravel-utalk-api/master.svg?style=flat-square)](https://travis-ci.org/tailonperin/laravel-utalk-api)
[![Quality Score](https://img.shields.io/scrutinizer/g/tailonperin/laravel-utalk-api.svg?style=flat-square)](https://scrutinizer-ci.com/g/tailonperin/laravel-utalk-api)
[![Total Downloads](https://img.shields.io/packagist/dt/tailonperin/laravel-utalk-api.svg?style=flat-square)](https://packagist.org/packages/tailonperin/laravel-utalk-api)

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors.

## Installation

You can install the package via composer:

```bash
composer require tailonperin/laravel-utalk-api
```

## Usage

``` php
// Simple Message (Plain Text)
$response = (new \Tailonperin\LaravelUtalkApi\Message\PlainTextMessage('chat code'))
        ->to('Phone Number')
        ->setMsg('Simple Text sended via API')
        ->enviar();

// Media Message
$return = (new \Tailonperin\LaravelUtalkApi\Message\MediaMessage('u4m5of2'))
        ->to('Phone Number')
        ->setMsg('Text below media')
        ->addMedia('https://www.imagescanada.ca/wp-content/uploads/2018/09/Best-nature-spots-to-take-photos-in-Canada.jpg')
        ->enviar();

// Link Message (with custom thumnail)
$return = (new \Tailonperin\LaravelUtalkApi\Message\LinkMessage('u4m5of2'))
        ->to('Phone Number')
        ->addLink('https://www.youtube.com/watch?v=IpgJYibsi-4')
        ->addThumbnail('https://i.imgur.com/vHlPnjS.jpg')
        ->addTitle('Test with thumbnail')
        ->addDescription('Description of link')
        ->enviar();
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email tailonedson@gmail.com instead of using the issue tracker.

## Credits

- [Tailon Perin](https://github.com/tailonperin)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
