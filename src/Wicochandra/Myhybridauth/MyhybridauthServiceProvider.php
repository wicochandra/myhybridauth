<?php namespace Wicochandra\Myhybridauth;

use Illuminate\Support\ServiceProvider;

class MyhybridauthServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
    	$this->package('wicochandra/myhybridauth');

    }
	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('myhybridauth', function($app){
			return new MyHybridAuth($app['config']->get('myhybridauth::config'));
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('myhybridauth');
	}

}
