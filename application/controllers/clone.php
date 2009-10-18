<?php defined('SYSPATH') OR die('No direct access allowed.');

class Test_Controller extends Controller {
    public function __construct()
    {
        parent::__construct(); // This must be included

        $this->session = Session::instance();
		$this->profiler = new Profiler;
    }



	public function index()
	{

			$this->session->set('session_test','test');
			echo 'session set test';

			echo 'clone test';

			echo 'title bob'
	}

	public function get()
	{

			$result	= $this->session->get('session_test');
			echo $result;
	}
} 
