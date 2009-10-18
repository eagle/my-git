<?php defined('SYSPATH') OR die('No direct access allowed.');
$config	 = array
(
	'_default'		 => 'welcome',
	'test1'			 => 'examples',
	'test2'          => 'welcome',
); 



Kohana::config_set('routes',$config);