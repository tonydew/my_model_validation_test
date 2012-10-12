<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_validation_table extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field('id');
		$this->dbforge->add_field(array(
			'integer' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
			),
			'shorttext' => array(
				'type' => 'VARCHAR',
				'constraint' => '10',
			),
			'longtext' => array(
				'type' => 'TEXT',
			),
		));

		$this->dbforge->create_table('validation');
	}

	public function down()
	{
		$this->dbforge->drop_table('validation');
	}
}