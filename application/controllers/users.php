<?php

class Users_Controller extends Base_Controller {
	public $restful = true;
	public $layout = 'print';
	public function get_index() {
		
	}
	public function post_create() {
		$validation = USer::validate(Input::all());

		if($validation->passes()) {
			User::create(array(
				'username'=>Input::get('username'),
				'password'=>Hash::make(Input::get('password'))
			));
			return Redirect::to_route('home')
				->with('message','You be registered mon!');
		} else {
			return Redirect::to_route('register')
				->with_errors($validation)->with_input();
		}
	}
	public function get_show() {
		
	}
	public function get_edit() {
		
	}
	public function get_new() {
		return View::make('users.new')
			->with('title', ' - Register');
	}
	public function put_update() {
		
	}
	public function delete_destroy() {
		
	}
	public function get_login($type = '') {
		if($type==='print') {
   		$this->layout->nest('content', 'users.login');
   	} else {
			return View::make('users.login');
   	}
	}
	public function post_login() {
		$user = array(
			'username'=>Input::get('username'),
			'password'=>Input::get('password')
		);

		if(Auth::attempt($user)) {
			return Redirect::to_route('home')
				->with('message', 'Welcome ' .$user['username']. '!');
		} else {
			return Redirect::to_route('login')
				->with('message', 'Your username/password combination borked hard!')
				->with_input();
		}
	}
}