# A Nova tool to use Laravel Websockets

[![Latest Version on Packagist](https://img.shields.io/packagist/v/vemcogroup/nova-websockets.svg?style=flat-square)](https://packagist.org/packages/vemcogroup/nova-websockets)
[![Total Downloads](https://img.shields.io/packagist/dt/vemcogroup/nova-websockets.svg?style=flat-square)](https://packagist.org/packages/vemcogroup/nova-websockets)

This tool gives the possibiliy to create apps for [Laravel Websockets](https://github.com/beyondcode/laravel-websockets) and see analytics and debug.

## Installation

You can install the nova tool in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require vemcogroup/nova-websockets
```
This tool uses [Laravel Websockets](https://github.com/beyondcode/laravel-websockets) so you have to go through the [Installation](https://docs.beyondco.de/laravel-websockets/1.0/getting-started/installation.html) section to set it up.

Remember that Laravel Websockets is required through this tool, so no need for `composer require`. 

Next up, you must register the tool with Nova. This is typically done in the `tools` method of the `NovaServiceProvider`.

```php
// in app/Providers/NovaServiceProvder.php

// ...

public function tools()
{
   return [
        // ...
        new \Vemcogroup\Websockets\Websockets,
    ];
}
```
Next, run migration to add the new app table.

```bash
php artisan migrate
```

## Usage

You can now use the tool via the new menu item called "Websockets" 
