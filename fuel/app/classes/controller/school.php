<?php
class Controller_School extends Controller_Template
{

	public function action_index()
	{
		$data['schools'] = Model_School::find_all();
		$this->template->title = "Schools";
		$this->template->content = View::forge('school/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('school');

		$data['school'] = Model_School::find_by_pk($id);

		$this->template->title = "School";
		$this->template->content = View::forge('school/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_School::validate('create');

			if ($val->run())
			{
				$school = Model_School::forge(array(
					'name' => Input::post('name'),
					'created_at'=>time(),
					'updated_at'=>time(),
				));

				if ($school and $school->save())
				{
					Session::set_flash('success', 'Added school #'.$school->id.'.');
					Response::redirect('school');
				}
				else
				{
					Session::set_flash('error', 'Could not save school.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Schools";
		$this->template->content = View::forge('school/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('school');

		$school = Model_School::find_one_by_id($id);

		if (Input::method() == 'POST')
		{
			$val = Model_School::validate('edit');

			if ($val->run())
			{
				$school->name = Input::post('name');

				if ($school->save())
				{
					Session::set_flash('success', 'Updated school #'.$id);
					Response::redirect('school');
				}
				else
				{
					Session::set_flash('error', 'Nothing updated.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->set_global('school', $school, false);
		$this->template->title = "Schools";
		$this->template->content = View::forge('school/edit');

	}

	public function action_delete($id = null)
	{
		if ($school = Model_School::find_one_by_id($id))
		{
			$school->delete();

			Session::set_flash('success', 'Deleted school #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete school #'.$id);
		}

		Response::redirect('school');

	}

}
