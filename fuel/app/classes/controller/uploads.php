<?php
class Controller_Uploads extends Controller_Template
{

	public function action_index()
	{
		$data['Uploads'] = Model_Upload::find_all();
		$this->template->title = "Uploads";
		$this->template->content = View::forge('uploads/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('uploads');

		$data['Upload'] = Model_Upload::find_by_pk($id);

		$this->template->title = "Upload";
		$this->template->content = View::forge('uploads/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Upload::validate('create');

			if ($val->run())
			{
				$Upload = Model_Upload::forge(array(
					'field' => Input::post('field'),
					'saved_as' => Input::post('saved_as'),
					'name' => Input::post('name'),
					'type' => Input::post('type'),
					'file' => Input::post('file'),
					'error' => Input::post('error'),
					'size' => Input::post('size'),
					'extension' => Input::post('extension'),
					'basename' => Input::post('basename'),
					'mimetype' => Input::post('mimetype'),
					'error' => Input::post('error'),
				));

				if ($Upload and $Upload->save())
				{
					Session::set_flash('success', 'Added Upload #'.$Upload->id.'.');
					Response::redirect('uploads');
				}
				else
				{
					Session::set_flash('error', 'Could not save Upload.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Uploads";
		$this->template->content = View::forge('uploads/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('uploads');

		$Upload = Model_Upload::find_one_by_id($id);

		if (Input::method() == 'POST')
		{
			$val = Model_Upload::validate('edit');

			if ($val->run())
			{
				$Upload->field = Input::post('field');
				$Upload->saved_as = Input::post('saved_as');
				$Upload->name = Input::post('name');
				$Upload->type = Input::post('type');
				$Upload->file = Input::post('file');
				$Upload->error = Input::post('error');
				$Upload->size = Input::post('size');
				$Upload->extension = Input::post('extension');
				$Upload->basename = Input::post('basename');
				$Upload->mimetype = Input::post('mimetype');
				$Upload->error = Input::post('error');

				if ($Upload->save())
				{
					Session::set_flash('success', 'Updated Upload #'.$id);
					Response::redirect('uploads');
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

		$this->template->set_global('Upload', $Upload, false);
		$this->template->title = "Uploads";
		$this->template->content = View::forge('uploads/edit');

	}

	public function action_delete($id = null)
	{
		if ($Upload = Model_Upload::find_one_by_id($id))
		{
			$Upload->delete();

			Session::set_flash('success', 'Deleted Upload #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete Upload #'.$id);
		}

		Response::redirect('uploads');

	}

}
