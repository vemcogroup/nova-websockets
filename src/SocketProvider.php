<?php

namespace Vemcogroup\Websockets;

use BeyondCode\LaravelWebSockets\Apps\App;
use Vemcogroup\Websockets\Models\App as DatabaseApp;
use BeyondCode\LaravelWebSockets\Apps\AppProvider;

class SocketProvider implements AppProvider
{
    /**
     * @return array
     */
    public function all(): array
    {
        return DatabaseApp::orderBy('name')->get()->map(function (DatabaseApp $app) {
            return $this->instantiate($app->toArray());
        })->toArray();
    }

    /**
     * @param $appId
     * @return App|null
     */
    public function findById($appId): ?App
    {
        $app = DatabaseApp::find($appId);

        return $this->instantiate($app ? $app->toArray() : null);
    }

    /**
     * @param string $appKey
     * @return App|null
     */
    public function findByKey(string $appKey): ?App
    {
        $app = DatabaseApp::where('key', $appKey)->first();

        return $this->instantiate($app ? $app->toArray() : null);
    }

    /**
     * @param string $appSecret
     * @return App|null
     */
    public function findBySecret(string $appSecret): ?App
    {
        $app = DatabaseApp::where('secret', $appSecret)->first();

        return $this->instantiate($app ? $app->toArray() : null);
    }

    /**
     * @param array|null $appAttributes
     * @return App|null
     */
    protected function instantiate(?array $appAttributes): ?App
    {
        if (! $appAttributes) {
            return null;
        }

        $app = new App($appAttributes['id'], $appAttributes['key'], $appAttributes['secret']);

        if (isset($appAttributes['name'])) {
            $app->setName($appAttributes['name']);
        }

        if (isset($appAttributes['host'])) {
            $app->setHost($appAttributes['host']);
        }

        $app->enableClientMessages($appAttributes['client_messages'])
            ->enableStatistics($appAttributes['statistics']);

        return $app;
    }
}
