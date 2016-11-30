<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Tag extends CI_Migration {

	public function up()
	{

		/**
		*
		* Expression Table
		*/
		$this->dbforge->add_field(array(
			'tag_id' 	 => array(
				'type' 			 => 'INT',
				'constraint' 	 => '11',
				'unsigned'	 	 => TRUE,
				'auto_increment' => TRUE
			),
			'expression_id' 	 => array(
				'type' 			 => 'INT',
				'constraint' 	 => '11',
				'unsigned'	 	 => TRUE,
			),
			'tagged_id'		     => array(
				'type'			 => 'INT',
				'constraint'	 => '11',
				'unsigned'		 => TRUe
			),
			'created_at' 		 => array(
				'type' 		     => 'timestamp',
				'null' 			 => FALSE
			),
			'updated_at' 		 => array(
				'type' 		     => 'timestamp',
				'null' 			 => TRUE
			),
			'deleted_at' 		 => array(
				'type' 		     => 'timestamp',
				'null' 			 => TRUE
			),
			'deleted'			 => array(
				'type' 			 => 'TINYINT',
				'CONSTRAINT'	 => '1'
			)
		));

		$this->dbforge->add_field('CONSTRAINT FOREIGN KEY (tagged_id) REFERENCES User(user_id)');
		$this->dbforge->add_field('CONSTRAINT FOREIGN KEY (expression_id) REFERENCES Expression(expression_id)');
		$this->dbforge->add_key('tag_id', TRUE);
		$this->dbforge->create_table('Tag');
	}

	public function down()
	{
		$this->dbforge->drop_table('Tag');
	}

}