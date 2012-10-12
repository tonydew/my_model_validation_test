<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	/**
	 * Uses standard CI_Model based model
	 */
	public function standard()
	{
		$config = array(
			array(
				'field' => 'integer',
				'label' => 'Integer',
				'rules' => 'required|trim|integer|max_length[11]'
			),
			array(
				'field' => 'shorttext',
				'label' => 'Short Text',
				'rules' => 'strip_tags|required|trim|max_length[10]'
			),
			array(
				'field' => 'longtext',
				'label' => 'Long Text',
				'rules' => 'strip_tags|required|trim'
			),
		);

		$this->form_validation->set_rules($config);

		if ($this->input->post() && $this->form_validation->run())
		{
			$this->load->model('standard_m');

			if ($this->standard_m->insert($this->input->post()))
			{
				// Successfully inserted
				redirect('welcome/woot');
			}
		}
		else
		{
			$this->load->view('form_v');
		}
	}

	/**
	 * Uses Jamie Rumbelow's MY_Model based model.
	 */
	public function mymodel()
	{
		$this->load->model('mymodel_m');

		if ($this->input->post())
		{
			if ($this->mymodel_m->insert($this->input->post()))
			{
				// Successfully inserted
				redirect('welcome/woot');
			}
		}
		$this->load->view('form_v');
	}

	public function woot()
	{
		$this->load->view('woot_v');
	}

	public function boo()
	{
		$this->load->view('boo_v');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */