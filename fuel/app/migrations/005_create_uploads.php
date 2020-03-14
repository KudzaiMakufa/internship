<?php

namespace Fuel\Migrations;

class Create_uploads
{
	public function up()
	{
		\DBUtil::create_table('uploads', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => '11'),
			'field' => array('constraint' => '255', 'null' => false, 'type' => 'varchar', 'string' => true),
			'saved_as' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'name' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'type' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'file' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'error' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'size' => array('null' => false, 'type' => 'double'),
			'extension' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'basename' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'mimetype' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'created_at' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
			'updated_at' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('uploads');
	}
}