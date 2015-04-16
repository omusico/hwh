<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class LTDCServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//parent::register();
        //load files to be used in application
        require base_path() . '/app/LTDC/Common/ltdc_functions.php';
        //require base_path() . '/app/LTDC/Common/form_macros.php';
        require base_path() . '/app/LTDC/Extensions/Html/FormBuilder.php';
	}

}
