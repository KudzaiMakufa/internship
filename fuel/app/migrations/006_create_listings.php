<?php

namespace Fuel\Migrations;

class Create_listings
{
	public function up()
	{
		\DBUtil::create_table('listings', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => '11'),
			'positon' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'company' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'startdate' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'additional_information' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'created_at' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
			'updated_at' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('listings');
	}
}