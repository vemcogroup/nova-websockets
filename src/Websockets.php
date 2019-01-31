<?php

namespace Vemcogroup\Websockets;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class Websockets extends Tool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('websockets', __DIR__.'/../dist/js/tool.js');
        Nova::style('websockets', __DIR__.'/../dist/css/tool.css');

        Nova::resources([
            App::class,
        ]);
    }

    /**
     * Build the view that renders the navigation links for the tool.
     *
     * @return \Illuminate\View\View
     */
    public function renderNavigation()
    {
        return view('websockets::navigation');
    }
}
