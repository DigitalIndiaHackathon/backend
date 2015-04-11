<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Application Debug Mode
	|--------------------------------------------------------------------------
	|
	| When your application is in debug mode, detailed error messages with
	| stack traces will be shown on every error that occurs within your
	| application. If disabled, a simple generic error page is shown.
	|
	*/

	'debug' => true,

	'url' => 'http://digitalindiahackathon.org',

	"providers" => append_config(array(
		'Way\Generators\GeneratorsServiceProvider',
		'Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider',
		'Barryvdh\Debugbar\ServiceProvider'
		)),

	"aliases" => append_config(array(
		'Debugbar' => 'Barryvdh\Debugbar\Facade'
		))
);
