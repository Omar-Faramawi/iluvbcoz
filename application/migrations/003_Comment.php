<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Comment extends CI_Migration {

	public function up()
	{

		/**
		*
		* Expression Table
		*/
		$this->dbforge->add_field(array(
			'comment_id' 	 => array(
				'type' 			 => 'INT',
				'constraint' 	 => '11',
				'unsigned'	 	 => TRUE,
				'auto_increment' => TRUE
			),
			'comment' 			 	 => array(
				'type'		     => 'VARCHAR',
				'constraint'     => '500',
			),
			'expression_id'		=> array(
				'type'			=> 'INT',
				'constraint'	=> '11',
				'unsigned'		=> TRUe
			),
			'user_id' 	    	 => array(
				'type' 			 => 'INT',
				'constraint' 	 => '11',
				'unsigned'	 	 => TRUE,
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

		$this->dbforge->add_field('CONSTRAINT FOREIGN KEY (user_id) REFERENCES User(user_id)');
		$this->dbforge->add_field('CONSTRAINT FOREIGN KEY (expression_id) REFERENCES Expression(expression_id)');
		$this->dbforge->add_key('comment_id', TRUE);
		$this->dbforge->create_table('Comment');
	}

	public function down()
	{
		$this->dbforge->drop_table('Comment');
	}

}