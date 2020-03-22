<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* load the MX_Router class */
require APPPATH . "third_party/MX/Controller.php";

class MY_Controller extends MX_Controller
{	

	function __construct() 
	{
		parent::__construct();
		$this->_hmvc_fixes();

		$this->_method	=	$this->router->method;
		$this->_class		=	$this->router->class;
		$this->_title		= isset($this->_class) && $this->_class ?	ucwords(strtolower(implode(' ', explode( '_', $this->_class)))) : '';

		$this->template->title('REMS',$this->_title);

		// set default theme and layout
		$this->template->set_theme('default');
		$this->template->set_layout('default');

		// set partials

	}
	
	function _hmvc_fixes()
	{		
		//fix callback form_validation		
		//https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc
		$this->load->library('form_validation');
		$this->form_validation->CI =& $this;
	}

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */
