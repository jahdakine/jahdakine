<?php

class Home_Controller extends Base_Controller {
	//public restful = true; for restful controller - use verbs instead of action
	public function action_index()
	{
		return View::make('home.index');
	}
	public function action_about()
	{
		return View::make('home.about');
	}
	public function action_contact()
	{
		return View::make('home.contact');
	}
	public function action_portfolio()
	{
		return View::make('home.portfolio');
	}
}