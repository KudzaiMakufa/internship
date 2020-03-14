<?php
class Controller_Programme extends Controller_Template
{

	public function action_index()
	{
		$data['programmes'] = Model_Programme::find_all();
		$this->template->title = "Programmes";
		$this->template->content = View::forge('programme/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('programme');

		$data['programme'] = Model_Programme::find_by_pk($id);

		$this->template->title = "Programme";
		$this->template->content = View::forge('programme/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Programme::validate('create');

			if ($val->run())
			{
				$programme = Model_Programme::forge(array(
					'name' => Input::post('name'),
					'created_at'=>time(),
					'updated_at'=>time(),
				));

				if ($programme and $programme->save())
				{
					Session::set_flash('success', 'Added programme #'.$programme->id.'.');
					Response::redirect('programme');
				}
				else
				{
					Session::set_flash('error', 'Could not save programme.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Programmes";
		$this->template->content = View::forge('programme/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('programme');

		$programme = Model_Programme::find_one_by_id($id);

		if (Input::method() == 'POST')
		{
			$val = Model_Programme::validate('edit');

			if ($val->run())
			{
				$programme->name = Input::post('name');

				if ($programme->save())
				{
					Session::set_flash('success', 'Updated programme #'.$id);
					Response::redirect('programme');
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

		$this->template->set_global('programme', $programme, false);
		$this->template->title = "Programmes";
		$this->template->content = View::forge('programme/edit');

	}

	public function action_delete($id = null)
	{
		if ($programme = Model_Programme::find_one_by_id($id))
		{
			$programme->delete();

			Session::set_flash('success', 'Deleted programme #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete programme #'.$id);
		}

		Response::redirect('programme');

	}

}
