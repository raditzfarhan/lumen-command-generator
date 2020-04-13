# Lumen Command Generator

This is a simple package that includes some of the missing Laravel artisan command into Lumen.

## Configuration

Edit the `bootstrap/app.php` file and add the following line to register the service provider:

```php
...
$app->register(RaditzFarhan\LumenCommandGenerator\ServiceProvider::class);
...
```

## Available Commands

``` bash
$ php artisan generate:model
```

## Change log

Please see the [changelog](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Raditz Farhan][https://github.com/raditzfarhan]

## License

MIT. Please see the [license file](LICENSE) for more information.
