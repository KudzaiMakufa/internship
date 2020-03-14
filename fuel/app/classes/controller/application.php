<?php
class Controller_Application extends Controller_Template
{

	public function action_index()
	{
		$data['applications'] = Model_Application::find_all();
		$this->template->title = "Applications";
		$this->template->content = View::forge('application/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('application');

		$data['application'] = Model_Application::find_by_pk($id);

		$this->template->title = "Application";
		$this->template->content = View::forge('application/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{

			// process the uploaded files in $_FILES
			Upload::process();

			// if there are any valid files
			if (Upload::is_valid())
			{
			    // save them according to the config
			     //Upload::save();
				foreach (Upload::instance()->getValidFiles() as $file)
				{

					Debug::dump($file);
					Debug::dump($file->save());
					Debug::dump((array) $file);
					die;
					
				   
				}
				die;

			    //Debug::dump(Upload::get_files());die;

			    // call a model method to update the database
			    // $data = Model_Upload::forge(Upload::get_files());
			    // $data->save() ; 

			   
			}
			session::set_flash('error','invalid cv attached ,make sure its document format') ; 
			Response::redirect('application/create');

			// and process any errors
			foreach (Upload::get_errors() as $file)
			{
			    // $file is an array with all file information,
			    // $file['errors'] contains an array of all error occurred
			    // each array element is an an array containing 'error' and 'message'
			}

			die ;

			$val = Model_Application::validate('create');

			if ($val->run())
			{
				$application = Model_Application::forge(array(
					'name' => Input::post('name'),
					'registration_number' => Input::post('registration_number'),
					'phone_number' => Input::post('phone_number'),
					'email' => Input::post('email'),
					'brief_information' => Input::post('brief_information'),
					'gender' => Input::post('gender'),
					'school' => Input::post('school'),
					'programme' => Input::post('programme'),
					'duration' => Input::post('duration'),
					'curriculum_vitae' => Input::post('curriculum_vitae'),
				));



				if ($application and $application->save())
				{
					Session::set_flash('success', 'Added application #'.$application->id.'.');
					Response::redirect('application');
				}
				else
				{
					Session::set_flash('error', 'Could not save application.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Applications";
		$this->template->content = View::forge('application/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('application');

		$application = Model_Application::find_one_by_id($id);

		if (Input::method() == 'POST')
		{
			$val = Model_Application::validate('edit');

			if ($val->run())
			{
				$application->name = Input::post('name');
				$application->registration_number = Input::post('registration_number');
				$application->phone_number = Input::post('phone_number');
				$application->email = Input::post('email');
				$application->brief_information = Input::post('brief_information');
				$application->gender = Input::post('gender');
				$application->school = Input::post('school');
				$application->programme = Input::post('programme');
				$application->duration = Input::post('duration');
				$application->curriculum_vitae = Input::post('curriculum_vitae');

				if ($application->save())
				{
					Session::set_flash('success', 'Updated application #'.$id);
					Response::redirect('application');
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

		$this->template->set_global('application', $application, false);
		$this->template->title = "Applications";
		$this->template->content = View::forge('application/edit');

	}

	public function action_delete($id = null)
	{
		if ($application = Model_Application::find_one_by_id($id))
		{
			$application->delete();

			Session::set_flash('success', 'Deleted application #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete application #'.$id);
		}

		Response::redirect('application');

	}

}
