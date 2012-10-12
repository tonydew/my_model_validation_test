<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mymodel_m extends MY_Model {

	public $_table = 'validation';

	public $validate = array(
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
}

/* End of file mymodel_m.php */
/* Location: ./application/models/mymodel_m.php */