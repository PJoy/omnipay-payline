# Omnipay Payline

**[Payline](http://www.payline.com/index.php/en/) gateway for the Omnipay PHP payment processing library**


[Omnipay](https://github.com/thephpleague/omnipay) is a framework agnostic, multi-gateway payment
processing library for PHP 5.3+. This package implements payline support for Omnipay.

This is a fork of [ck-developer](https://github.com/ck-developer/omnipay-payline) implementing direct payment 

## Install

Via Composer

``` bash
$ composer require ck-developer/omnipay-payline
```

## Usage

The following gateways are provided by this package:

 * Payline_Web (Payline Web Payment API)
 * Payline_Direct (Payline Direct Payment API) 
 * Payline_Mass (Payline Mass Payment API) - \[**Coming Soon**\]
 * Payline_Extend (Payline Extend API) - \[**Coming Soon**\]

For general usage instructions, please see the main [Omnipay](https://github.com/thephpleague/omnipay) repository.

## Support

If you are having general issues with Omnipay, we suggest posting on
[Stack Overflow](http://stackoverflow.com/). Be sure to add the
[omnipay tag](http://stackoverflow.com/questions/tagged/omnipay) so it can be easily found.

If you want to keep up to date with release anouncements, discuss ideas for the project,
or ask more detailed questions, there is also a [mailing list](https://groups.google.com/forum/#!forum/omnipay) which
you can subscribe to.

If you believe you have found a bug, please report it using the [GitHub issue tracker](https://github.com/ck-developer/omnipay-payline/issues),
or better yet, fork the library and submit a pull request.

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Claude Khedhiri](https://github.com/ck-developer)
- [Pierre Portejoie](https://github.com/PJoy)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
