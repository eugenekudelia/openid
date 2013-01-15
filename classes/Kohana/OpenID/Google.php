<?php defined('SYSPATH') OR die('No direct access allowed.');

abstract class Kohana_OpenID_Google extends OpenID {

	// Google does not require the username to be passed in the openID string.
	protected $_identity = 'https://www.google.com/accounts/o8/id';
	// Google ignores optional fields
	protected $_default_required = array('namePerson/friendly', 'contact/email', 'namePerson/last', 'namePerson/first');
}