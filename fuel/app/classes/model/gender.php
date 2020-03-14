<?php
class Model_Gender extends Model_Crud
{
	protected static $_table_name = 'genders';
	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('name', 'Name', 'required|max_length[255]');

		return $val;
	}

}
