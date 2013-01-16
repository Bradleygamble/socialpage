<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data = array();

		$this->parser->parse('_header', $data);
		$this->parser->parse('home/index', $data);
		$this->parser->parse('_footer', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */