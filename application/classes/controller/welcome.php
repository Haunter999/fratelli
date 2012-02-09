<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Appcont {

public $template = 'basic';


	public function action_index()
	{
	
		//$_result = '';
		//$_result->response->body(View::factory('welcome'));
		//$_result = new View('welcome');
		$this->template->title   = 'Fratelli - ресторан';
		$this->template->content = View::factory('welcome');
	}

	public function action_about()
	{
		
		$data = array();
		
		$_result = '';
		$_facs = array();
		$faculties = ORM::factory('fac')->find_all();
		foreach($faculties as $l)
		{
		    $_tmp = new View('about');
		    $_tmp->id = $l->id;
		    $_tmp->name = $l->name_fac;
		    $_facs[] = $_tmp;
		}

		    
		$_result = new View('about');
		$_result->facs = $_facs;
		
		$this->template->title   = 'Fratelli - О ресторане';
		$this->template->content = $_result;
		//$this->template->content = View::factory('about');
	}
} // End Welcome
