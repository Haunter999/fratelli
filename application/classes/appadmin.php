<?php defined('SYSPATH') or die('No direct script access.');

class Appadmin extends Controller_Template {

	public $template = 'admin';
	
     public function before()
      {
        parent::before();
        $auth=Auth::instance();
        if($auth->logged_in() != 1) Request::initial()->redirect('admin');

        if($this->auto_render)
          {
            $this->template->title            = '';
            $this->template->meta_keywords    = '';
            $this->template->meta_description = '';
            $this->template->meta_copywrite   = '';
            $this->template->header           = '';
            $this->template->content          = '';
            $this->template->footer           = '';
            $this->template->styles           = array();
            $this->template->scripts          = array();
            $this->template->main_menu        = array();
            $this->template->exit_link        = '';
          }
      }
      
     public function after()
      {
        if($this->auto_render)
          {
            
            //определяем стили
            //$styles = array('css/style.css' => 'screen');
            //$this->template->styles  = array_reverse(array_merge($this->template->styles, $styles));


            $auth=Auth::instance();
            if($auth->logged_in() == 1)
            {
              $main_menu=array('/about' => 'О ресторане', '/menu' => 'Меню', '/wine' => 'Карта вин', '/gallery' => 'Галерея', '/contacts' => 'Контактная информация');
              $this->template->main_menu  = array_merge($this->template->main_menu, $main_menu);

              $this->template->exit_link = '<a href="/admin/exit" title="Выйти">Выйти</a>';
            }
            
            //если у нас меню будет в виде картинок-ссылок
            //$main_menu=array('/about' => array('opis' =>'О ресторане', 'pic' => '<img src="pics/fratelli.png" />'));
            //$this->template->main_menu  = array_merge($this->template->main_menu, $main_menu);
          }
        parent::after();
      }
}
