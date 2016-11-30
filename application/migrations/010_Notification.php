<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Notification extends CI_Migration {

	public function up()
	{

		/**
		*
		* Expression Table
		*/
		$this->dbforge->add_field(array(
			'notification_id' 	     => array(
				'type' 			 => 'INT',
				'constraint' 	 => '11',
				'unsigned'	 	 => TRUE,
				'auto_increment' => TRUE
			),
			'notification_type_id' => array(
				'type' 			 => 'INT',
				'constraint' 	 => '11',
				'unsigned'	 	 => TRUE,
			),
			'from_user' => array(
				'type' 			 => 'INT',
				'constraint' 	 => '11',
				'unsigned'	 	 => TRUE,
			),
			'to_user' => array(
				'type' 			 => 'INT',
				'constraint' 	 => '11',
				'unsigned'	 	 => TRUE,
			),
			'status' => array(
				'type' => 'TINYINT',
				'constraint' => '1'
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
		$this->dbforge->add_field('CONSTRAINT FOREIGN KEY (notification_type_id) REFERENCES Notification_Type(type_id)');
		$this->dbforge->add_field('CONSTRAINT FOREIGN KEY (from_user) REFERENCES User(user_id)');
		$this->dbforge->add_field('CONSTRAINT FOREIGN KEY (to_user) REFERENCES User(user_id)');
		$this->dbforge->add_key('notification_id', TRUE);
		$this->dbforge->create_table('Notification');
	}

	public function down()
	{
		$this->dbforge->drop_table('Notification');
	}

}