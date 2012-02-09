<?php defined('SYSPATH') or die('No direct script access.');

class Appcont extends Controller_Template {

	public $template = 'basic';
	
     public function before()
      {
         parent::before();
         $auth=Auth::instance();
         if($auth->logged_in() == 0) Request::initial()->redirect('');
         
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
          }
      }
      
     public function after()
      {
         if($this->auto_render)
          {
             $styles = array('css/style.css' => 'screen');
             $scripts = array('http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js');
 
             $this->template->styles  = array_reverse(array_merge($this->template->styles, $styles));
             $this->template->scripts = array_reverse(array_merge($this->template->scripts, $scripts));
           }
 
         parent::after();
      }
}
