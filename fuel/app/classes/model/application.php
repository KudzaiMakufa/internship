<?php
class Model_Application extends Model_Crud
{
	protected static $_table_name = 'applications';
	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('registration_number', 'Registration Number', 'required|max_length[255]');
		$val->add_field('phone_number', 'Phone Number', 'required|max_length[255]');
		$val->add_field('email', 'Email', 'required|valid_email|max_length[255]');
		$val->add_field('brief_information', 'Brief Information', 'required|max_length[255]');
		$val->add_field('gender', 'Gender', 'required|max_length[255]');
		$val->add_field('school', 'School', 'required|max_length[255]');
		$val->add_field('programme', 'Programme', 'required|max_length[255]');
		$val->add_field('duration', 'Duration', 'required|max_length[255]');
		$val->add_field('curriculum_vitae', 'Curriculum Vitae', 'required|max_length[255]');

		return $val;
	}

}
