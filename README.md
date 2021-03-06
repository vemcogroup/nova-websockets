# A Nova tool to use Laravel Websockets

[![Latest Version on Packagist](https://img.shields.io/packagist/v/vemcogroup/nova-websockets.svg?style=flat-square)](https://packagist.org/packages/vemcogroup/nova-websockets)
[![Total Downloads](https://img.shields.io/packagist/dt/vemcogroup/nova-websockets.svg?style=flat-square)](https://packagist.org/packages/vemcogroup/nova-websockets)

This tool gives the possibiliy to create apps for [Laravel Websockets](https://github.com/beyondcode/laravel-websockets) and see analytics and debug.

![screenshot 2019-01-31 at 12 56 20](https://user-images.githubusercontent.com/283184/52053383-7bbfdf80-2559-11e9-875a-63158b755f90.png)

![screenshot 2019-01-31 at 12 56 35](https://user-images.githubusercontent.com/283184/52053417-8bd7bf00-2559-11e9-9bd5-383540ad28bb.png)

## Installation

You can install the nova tool in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require vemcogroup/nova-websockets
```
This tool uses [Laravel Websockets](https://github.com/beyondcode/laravel-websockets) so you have to go through the [Installation](https://docs.beyondco.de/laravel-websockets/1.0/getting-started/installation.html) section to set it up.

Remember that Laravel Websockets is required through this tool, so no need for `composer require`. 

Next up, you must register the tool with Nova. This is typically done in the `tools` method of the `NovaServiceProvider`.

```php
// in app/Providers/NovaServiceProvider.php

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
 
If you want websockets to use the apps you create via this tool, change the `app_provider` in `config\websockets.php` to use the tools SocketProvider  

```php
'app_provider' => \Vemcogroup\Websockets\SocketProvider::class,
```

To use the Analytics/Debug menu item to analyse your websocket connections you have to change `path` on `config\websockets.php` to use the same path

```php
'path' => 'sockets',
``` 

