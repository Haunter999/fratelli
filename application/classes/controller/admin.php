<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Appadmin {

public $template = 'admin';

	public function action_main()
	{

		$data = array();
		

		$this->template->title   = 'Fratelli - Администратор';
		$this->template->content = View::factory('admain', $data);
	}

}
