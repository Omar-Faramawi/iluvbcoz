<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Relation extends CI_Migration {

	public function up()
	{

		/**
		*
		* Expression Table
		*/
		$this->dbforge->add_field(array(
			'relation_id' 	     => array(
				'type' 			 => 'INT',
				'constraint' 	 => '11',
				'unsigned'	 	 => TRUE,
				'auto_increment' => TRUE
			),
			'request_date' 	     => array(
				'type' 		     => 'timestamp',
				'null' 			 => FALSE
			),
			'confirmation_date'  => array(
				'type' 		     => 'timestamp',
				'null' 			 => FALSE
			),
			'part1' 	    	 => array(
				'type' 			 => 'INT',
				'constraint' 	 => '11',
				'unsigned'	 	 => TRUE,
			),
			'part2'		         => array(
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

		$this->dbforge->add_field('CONSTRAINT FOREIGN KEY (part1) REFERENCES User(user_id)');
		$this->dbforge->add_field('CONSTRAINT FOREIGN KEY (part2) REFERENCES User(user_id)');
		$this->dbforge->add_key('relation_id', TRUE);
		$this->dbforge->create_table('Relation');
	}

	public function down()
	{
		$this->dbforge->drop_table('Relation');
	}

}