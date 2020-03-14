<?php
class Controller_Gender extends Controller_Template
{

	public function action_index()
	{
		$data['genders'] = Model_Gender::find_all();
		$this->template->title = "Genders";
		$this->template->content = View::forge('gender/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('gender');

		$data['gender'] = Model_Gender::find_by_pk($id);

		$this->template->title = "Gender";
		$this->template->content = View::forge('gender/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Gender::validate('create');

			if ($val->run())
			{
				$gender = Model_Gender::forge(array(
					'name' => Input::post('name'),
					'created_at'=>time(),
					'updated_at'=>time(),
				));

				if ($gender and $gender->save())
				{
					Session::set_flash('success', 'Added gender #'.$gender->id.'.');
					Response::redirect('gender');
				}
				else
				{
					Session::set_flash('error', 'Could not save gender.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Genders";
		$this->template->content = View::forge('gender/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('gender');

		$gender = Model_Gender::find_one_by_id($id);

		if (Input::method() == 'POST')
		{
			$val = Model_Gender::validate('edit');

			if ($val->run())
			{
				$gender->name = Input::post('name');

				if ($gender->save())
				{
					Session::set_flash('success', 'Updated gender #'.$id);
					Response::redirect('gender');
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

		$this->template->set_global('gender', $gender, false);
		$this->template->title = "Genders";
		$this->template->content = View::forge('gender/edit');

	}

	public function action_delete($id = null)
	{
		if ($gender = Model_Gender::find_one_by_id($id))
		{
			$gender->delete();

			Session::set_flash('success', 'Deleted gender #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete gender #'.$id);
		}

		Response::redirect('gender');

	}

}
