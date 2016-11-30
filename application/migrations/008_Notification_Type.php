<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Notification_Type extends CI_Migration {

	public function up()
	{

		/**
		*
		* Expression Table
		*/
		$this->dbforge->add_field(array(
			'type_id' 	     => array(
				'type' 			 => 'INT',
				'constraint' 	 => '11',
				'unsigned'	 	 => TRUE,
				'auto_increment' => TRUE
			),
			'handler' => array(
				'type' => 'TEXT',
			),
			'layout' => array(
				'type' => 'TEXT',
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			),
			'icon' => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
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
		
		
		$this->dbforge->add_key('type_id', TRUE);
		$this->dbforge->create_table('Notification_Type');
	}

	public function down()
	{
		$this->dbforge->drop_table('Notification_Type');
	}

}