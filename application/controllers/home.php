<?php
class Home_Controller extends Base_Controller {
  public $layout = 'print';
	public function action_index($type = '') {
		if($type==='print') {
   		$this->layout->nest('content', 'home.index');
   	} else {
   		return View::make('home.index');
   	}
  }
  //hack b/c /(:any) intercepts all other routes
  public function action_print() {
   		$this->layout->nest('content', 'home.index');
  }
	public function action_about($type = '') {
		if($type==='print') {
   		$this->layout->nest('content', 'home.about');
   	} else {
   		return View::make('home.about');
   	}
	}
	public function action_contact($type = '') {
		if($type==='print') {
   		$this->layout->nest('content', 'home.contact');
   	} else {
   		return View::make('home.contact');
   	}
	}
	public function action_portfolio($type = '') {
		if($type==='print') {
   		$this->layout->nest('content', 'home.portfolio');
   	} else {
   		return View::make('home.portfolio');
   	}
	}
	public function action_technology($type = '') {
		if($type==='print') {
   		$this->layout->nest('content', 'home.technology');
   	} else {
   		return View::make('home.technology');
   	}
	}
	public function action_resume($type = '') {
		if($type==='print') {
   		$this->layout->nest('content', 'home.resume');
   	} else {
   		return View::make('home.resume');
   	}
	}
  public function action_tasks($type = '') {
    if($type==='print') {
      $this->layout->nest('content', 'home.tasks');
    } else {
      return View::make('home.tasks');
    }
  }
}