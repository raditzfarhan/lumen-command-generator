<p align="center"><img src="https://res.cloudinary.com/raditzfarhan/image/upload/v1586879750/lumen-command-generator_aqliwn.svg" width="640"></p>

<p align="center">
    <a href="https://packagist.org/packages/raditzfarhan/lumen-command-generator"><img src="https://img.shields.io/badge/License-MIT-yellow.svg?style=flat-square" alt="License"></a>
    <a href="https://packagist.org/packages/raditzfarhan/lumen-command-generator"><img src="https://img.shields.io/packagist/dt/raditzfarhan/lumen-command-generator?style=flat-square&color=red" alt="Total Downloads"></img></a>
    <a href="https://github.com/raditzfarhan/lumen-command-generator/releases"><img src="https://img.shields.io/github/v/tag/raditzfarhan/lumen-command-generator?style=flat-square&sort=semver" alt="Latest Version"></img></a>
    <a href="https://packagist.org/packages/raditzfarhan/lumen-command-generator"><img src="https://github.styleci.io/repos/7548986/shield?style=square" alt="styleci"></img></a>
</p>

# Lumen Command Generator

This is a simple package that includes some of the missing Laravel artisan command into Lumen.

## Installation

You can install the package via composer:

```bash
composer require raditzfarhan/lumen-command-generator
```

## Configuration

Edit the `bootstrap/app.php` file and add the following line to register the service provider:

```php
...
$app->register(RaditzFarhan\LumenCommandGenerator\ServiceProvider::class);
...
```

## Available Commands

``` bash
make:command        Create a new Artisan command
make:controller     Create a new controller class
make:event          Create a new event class        
make:job            Create a new job class
make:listener       Create a new event listener class
make:middleware     Create a new middleware class
make:model          Create a new Eloquent model class
make:observer       Create a new observer class
make:provider       Create a new service provider class
make:resource       Create a new resource
make:rule           Create a new validation rule
route:list          List all registered routes
storage:link        Create the symbolic links configured for the application
```

## Change log

Please see the [changelog](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Raditz Farhan](https://github.com/raditzfarhan)

## License

MIT. Please see the [license file](LICENSE) for more information.
