<?php

class Base_Controller extends Controller {

	public function __construct() {
	    //Assets
	    Asset::add('jquery', 'js/jquery-1.8.2.js');
	    Asset::add('style', 'css/style.css');
	    Asset::add('javascript', 'js/jquery.carouFredSel.js');
	    parent::__construct();
	}

	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */
	public function __call($method, $parameters)
	{
		return Response::error('404');
	}


	
	/**!!!JC
	 * set config/application.php url to the base url of the application. 
	 * Gets rid of the incorrect guessing of baseurl by the Symfony 
	 * components
	 *
	 * @return base
	 */	
	public static function base()
	{
		if (isset(static::$base)) return static::$base;

		$base = 'http://localhost';

		// If the application's URL configuration is set, we will just use that
		// instead of trying to guess the URL from the $_SERVER array's host
		// and script variables as this is a more reliable method.
		if (($url = Config::get('application.url')) !== '')
		{
			$base = $url;
		}
		else
		{
			$base = Request::foundation()->getRootUrl();
		}

		return static::$base = $base;
	}
}