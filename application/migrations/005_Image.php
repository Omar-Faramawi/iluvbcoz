<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Image extends CI_Migration {

	public function up()
	{

		/**
		*
		* Expression Table
		*/
		$this->dbforge->add_field(array(
			'image_id' 	 => array(
				'type' 			 => 'INT',
				'constraint' 	 => '11',
				'unsigned'	 	 => TRUE,
				'auto_increment' => TRUE
			),
			'image_name' 		 => array(
				'type'		     => 'VARCHAR',
				'constraint'     => '500',
			),
			'image_extention' 	 => array(
				'type'		     => 'VARCHAR',
				'constraint'     => '5',
			),
			'image_size' 		 => array(
				'type'		     => 'INT',
				'constraint'     => '5',
			),
			'image_width' 		 => array(
				'type'		     => 'INT',
				'constraint'     => '5',
			),
			'image_height' 		 => array(
				'type'		     => 'INT',
				'constraint'     => '5',
			),
			'expression_id'		=> array(
				'type'			=> 'INT',
				'constraint'	=> '11',
				'unsigned'		=> TRUe
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
		$this->dbforge->add_field('CONSTRAINT FOREIGN KEY (expression_id) REFERENCES Expression(expression_id)');
		$this->dbforge->add_key('image_id', TRUE);
		$this->dbforge->create_table('Image');
	}

	public function down()
	{
		$this->dbforge->drop_table('Image');
	}

}