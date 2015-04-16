<?php
/**
 * Created by LYNX Technology Development
 * User: LYNXTDC
 * Date: 1/15/2015
 * Time: 9:43 PM
 * http://lynxtdc.com
 */

namespace LTDC\Extensions\Html;

use Illuminate\Html\HtmlBuilder;
use Illuminate\Support\ServiceProvider;


class HtmlServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerHtmlBuilder();
        $this->registerFormBuilder();
    }

    /**
     * Register the HTML builder instance.
     *
     * @return void
     */
    protected function registerHtmlBuilder()
    {
        $this->app->bindShared('html', function($app)
        {
            return new HtmlBuilder($app['url']);
        });
    }

    /**
     * Register the form builder instance.
     *
     * @return void
     */
    protected function registerFormBuilder()
    {
        $this->app->bindShared('form', function($app)
        {
            //return new FormBuilder($app['html'], $app['url'], $app['session.store']->getToken());
            $form = new FormBuilder($app['html'], $app['url'], $app['session.store']->getToken());
            return $form->setSessionStore($app['session.store']);
        });
    }

    public function provides()
    {
        return array('html', 'form');
    }
} 