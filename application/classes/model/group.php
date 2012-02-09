<?php defined('SYSPATH') or die('No direct script access.');

class Model_Group extends ORM {
protected $_has_many = array('student');
protected $_belong_to = array('fac');
}
