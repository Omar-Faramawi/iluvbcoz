<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Location extends CI_Migration {

	public function up()
	{

		/**
		*
		* Expression Table
		*/
		$this->dbforge->add_field(array(
			'location_id' 	 => array(
				'type' 			 => 'INT',
				'constraint' 	 => '11',
				'unsigned'	 	 => TRUE,
				'auto_increment' => TRUE
			),
			'location_lat' 		 => array(
				'type'		     => 'VARCHAR',
				'constraint'     => '20',
			),
			'location_long' 	 => array(
				'type'		     => 'VARCHAR',
				'constraint'     => '20',
			),
			'location_country' 		 => array(
				'type'		     => 'VARCHAR',
				'constraint'     => '100',
				'null'			 => TRUE
			),
			'location_city' 	 => array(
				'type'		     => 'VARCHAR',
				'constraint'     => '100',
				'null'			 => TRUE
			),
			'location_name'		 => array(
				'type'			 => 'TEXT',
				'null'			 => TRUE
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
		$this->dbforge->add_key('location_id', TRUE);
		$this->dbforge->create_table('Location');
	}

	public function down()
	{
		$this->dbforge->drop_table('Location');
	}

}