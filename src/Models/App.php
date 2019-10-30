<?php

namespace Vemcogroup\Websockets\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class App extends Model
{
    use SoftDeletes;

    protected $guarded = [
        'id',
        'key',
        'secret',
    ];
    protected $casts = [
        'client_messages' => 'bool',
        'statistics' => 'bool',
    ];

    protected static function boot() :void
    {
        parent::boot();

        static::creating(function (App $app) {
            $app->key = Str::random(40);
            $app->secret = Str::random(40);
        });
    }
}
