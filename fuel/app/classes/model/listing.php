<?php
class Model_Listing extends Model_Crud
{
	protected static $_table_name = 'listings';
	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('positon', 'Positon', 'required|max_length[255]');
		$val->add_field('company', 'Company', 'required|max_length[255]');
		$val->add_field('startdate', 'Startdate', 'required|max_length[255]');
		$val->add_field('additional_information', 'Additional Information', 'required|max_length[255]');

		return $val;
	}

}
