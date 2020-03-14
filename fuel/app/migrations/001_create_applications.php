<?php

namespace Fuel\Migrations;

class Create_applications
{
	public function up()
	{
		\DBUtil::create_table('applications', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => '11'),
			'name' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'registration_number' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'phone_number' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'email' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'brief_information' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'gender' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'school' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'programme' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'duration' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'curriculum_vitae' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'created_at' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
			'updated_at' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('applications');
	}
}