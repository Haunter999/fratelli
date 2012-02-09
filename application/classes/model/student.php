<?php defined('SYSPATH') or die('No direct script access.');

class Model_Student extends ORM {
protected $_belong_to = array('group');
protected $_has_many = array('muster');
}
