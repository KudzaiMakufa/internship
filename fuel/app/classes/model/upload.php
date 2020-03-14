<?php
class Model_Upload extends Model_Crud
{
	protected static $_table_name = 'uploads';
	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('field', 'Field', 'required|max_length[255]');
		$val->add_field('saved_as', 'Saved As', 'required|max_length[255]');
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('type', 'Type', 'required|max_length[255]');
		$val->add_field('file', 'File', 'required|max_length[255]');
		$val->add_field('error', 'Error', 'required|max_length[255]');
		$val->add_field('size', 'Size', 'required');
		$val->add_field('extension', 'Extension', 'required|max_length[255]');
		$val->add_field('basename', 'Basename', 'required|max_length[255]');
		$val->add_field('mimetype', 'Mimetype', 'required|max_length[255]');
		

		return $val;
	}

}
