<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Template {

public $template = 'admin';


	public function action_index()
	{

		$data = array();
		$auth = Auth::instance();

		if(isset($_POST['logsbmt']))
		{
			$login=Arr::get($_POST,'login','');
			$pass=Arr::get($_POST,'pass','');
		
			if($auth->login($login,$pass)) 
			{
				Request::initial()->redirect('admin/main');
			}
			else
			{
				$data['error']='Ошибка в логине или пароле';
			}
		}

		$this->template->title   = 'Fratelli - административная панель';
		$this->template->content = View::factory('adindex', $data);
	}

	public function action_exit()
	{
		$auth = Auth::instance();
		if($auth->logout()) Request::initial()->redirect('admin');
	}
}
