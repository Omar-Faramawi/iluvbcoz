<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_User extends CI_Migration {

	public function up()
	{
		/**
		*
		* User Table
		*/
		$this->dbforge->add_field(array(
			'user_id' => array(
				'type' 			 => 'INT',
				'constraint' 	 => '11',
				'unsigned'	 	 => TRUE,
				'auto_increment' => TRUE
			),
			'email'	  => array(
				'type'       => 'VARCHAR',
				'constraint' => '255',
				'unique'	 => TRUE
			),
			'password'=> array(
				'type'       => 'VARCHAR',
				'constraint' => '255',
			),
			'username'=> array(
				'type' => 'VARCHAR',
				'constraint' => '20',
				'unique'	 => TRUE
			),
			'topic'   => array(
				'type' => 'TEXT',
				'null' => TRUE
			),
			'birthday'=> array(
				'type' => 'Date',
				'null' => TRUE
			),
			'locaion' => array(
				'type' => 'TEXT',
				'null' => TRUE
			),
			'url'	  => array(
				'type' => 'TEXT',
				'null' => TRUE
			),
			'confirmed' => array(
				'type' => 'TINYINT',
				'constraint' => '1'
			),
			'active' => array(
				'type' => 'TINYINT',
				'constraint' => '1'
			),
			'created_at' 	     => array(
				'type' 		     => 'timestamp',
				'null' 			 => FALSE
			),
			'updated_at' 	     => array(
				'type' 		     => 'timestamp',
				'null' 			 => TRUE
			),
			'last_login' 	     => array(
				'type' 		     => 'timestamp',
				'null' 			 => FALSE
			),
			'remember_token' => array(
				'type' => 'TEXT',
				'null' => TRUE
			),
		));

		$this->dbforge->add_key('user_id', TRUE);
		$this->dbforge->create_table('User');

	}

	public function down()
	{
		$this->dbforge->drop_table('User');
	}

}