<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Exp_Location extends CI_Migration {

	public function up()
	{

		/**
		*
		* Expression Table
		*/
		$this->dbforge->add_field(array(
			'id' 	     => array(
				'type' 			 => 'INT',
				'constraint' 	 => '11',
				'unsigned'	 	 => TRUE,
				'auto_increment' => TRUE
			),
			'expression_id' 	    	 => array(
				'type' 			 => 'INT',
				'constraint' 	 => '11',
				'unsigned'	 	 => TRUE,
			),
			'location_id'		         => array(
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

		$this->dbforge->add_field('CONSTRAINT FOREIGN KEY (expression_id) REFERENCES Expression(expression_id)');
		$this->dbforge->add_field('CONSTRAINT FOREIGN KEY (location_id) REFERENCES Location(location_id)');
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('Exp_Location');
	}

	public function down()
	{
		$this->dbforge->drop_table('Exp_Location');
	}

}