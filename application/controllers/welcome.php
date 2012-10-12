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

		if ($this->form_validation->run())
		{
			$this->load->model('standard_m');
			$this->standard_m->insert($this->input->post());
			echo 'Success!';
		}
		else
		{
			echo validation_errors();
		}

		echo form_open();
		echo '<br />' . form_input('integer', set_value('integer')) . ' - Integer';
		echo '<br />' . form_input('shorttext', set_value('shorttext')) . ' - Short Text';
		echo '<br />' . form_input('longtext', set_value('longtext')) . ' - Long Text';
		echo '<br />' . form_submit('', 'submit');
		echo form_close();
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
				echo 'Success!';
			}
			else
			{
				echo validation_errors();
			}
		}

		echo form_open();
		echo '<br />' . form_input('integer', set_value('integer')) . ' - Integer';
		echo '<br />' . form_input('shorttext', set_value('shorttext')) . ' - Short Text';
		echo '<br />' . form_input('longtext', set_value('longtext')) . ' - Long Text';
		echo '<br />' . form_submit('', 'submit');
		echo form_close();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */