<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function index()
	{
		$this->template->title('Dashboard');

		// overwrite default theme and layout if needed
		$this->template->set_theme('default');
		$this->template->set_layout('default');

		$this->template->build('dashboard');
	}
}
