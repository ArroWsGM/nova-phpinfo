<?php

namespace Arrowsgm\NovaPhpinfo;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class NovaPhpinfo extends Tool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('nova-phpinfo', __DIR__.'/../dist/js/tool.js');
        Nova::style('nova-phpinfo', __DIR__.'/../dist/css/tool.css');

        Nova::provideToScript([
            'nova-phpinfo' => $this->phpInfo(),
        ]);
    }

    /**
     * Build the view that renders the navigation links for the tool.
     *
     * @return \Illuminate\View\View
     */
    public function renderNavigation()
    {
        return view('nova-phpinfo::navigation');
    }

    public function phpInfo()
    {
        ob_start();
        phpinfo();
        $pinfo = ob_get_contents();
        ob_end_clean();
        $pinfo = preg_replace( '%^.*<body>(.*)</body>.*$%ms','$1',$pinfo);
        return $pinfo;
    }
}
