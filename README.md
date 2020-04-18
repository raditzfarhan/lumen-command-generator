<p align="center"><img src="https://res.cloudinary.com/raditzfarhan/image/upload/v1586879750/lumen-command-generator_aqliwn.svg" width="640"></p>

<p align="center">
    <a href="https://packagist.org/packages/raditzfarhan/lumen-command-generator"><img src="https://img.shields.io/badge/License-MIT-yellow.svg?style=flat-square" alt="License"></a>
    <a href="https://packagist.org/packages/raditzfarhan/lumen-command-generator"><img src="https://img.shields.io/packagist/dt/raditzfarhan/lumen-command-generator?style=flat-square&color=red" alt="Total Downloads"></img></a>
    <a href="https://github.com/raditzfarhan/lumen-command-generator/releases"><img src="https://img.shields.io/github/v/tag/raditzfarhan/lumen-command-generator?style=flat-square&sort=semver" alt="Latest Version"></img></a>
    <a href="https://packagist.org/packages/raditzfarhan/lumen-command-generator"><img src="https://github.styleci.io/repos/7548986/shield?style=square" alt="styleci"></img></a>
</p>

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
generate:command        Create a new Artisan command
generate:controller     Create a new controller class
generate:event          Create a new event class        
generate:job            Create a new job class
generate:listener       Create a new event listener class
generate:middleware     Create a new middleware class
generate:model          Create a new Eloquent model class
generate:observer       Create a new observer class
generate:provider       Create a new service provider class
```

## Change log

Please see the [changelog](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Raditz Farhan](https://github.com/raditzfarhan)

## License

MIT. Please see the [license file](LICENSE) for more information.
