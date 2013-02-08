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

}