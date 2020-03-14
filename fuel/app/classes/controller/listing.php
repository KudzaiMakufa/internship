<?php
class Controller_Listing extends Controller_Template
{

	public function action_index()
	{
		$data['listings'] = Model_Listing::find_all();
		$this->template->title = "Listings";
		$this->template->content = View::forge('listing/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('listing');

		$data['listing'] = Model_Listing::find_by_pk($id);

		$this->template->title = "Listing";
		$this->template->content = View::forge('listing/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Listing::validate('create');

			if ($val->run())
			{
				$listing = Model_Listing::forge(array(
					'positon' => Input::post('positon'),
					'company' => Input::post('company'),
					'startdate' => Input::post('startdate'),
					'additional_information' => Input::post('additional_information'),
					'created_at'=>0,
					'updated_at'=>0
				));

				if ($listing and $listing->save())
				{
					Session::set_flash('success', 'Added listing #'.$listing->id.'.');
					Response::redirect('listing/create');
				}
				else
				{
					Session::set_flash('error', 'Could not save listing.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Listings";
		$this->template->content = View::forge('listing/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('listing');

		$listing = Model_Listing::find_one_by_id($id);

		if (Input::method() == 'POST')
		{
			$val = Model_Listing::validate('edit');

			if ($val->run())
			{
				$listing->positon = Input::post('positon');
				$listing->company = Input::post('company');
				$listing->startdate = Input::post('startdate');
				$listing->additional_information = Input::post('additional_information');

				if ($listing->save())
				{
					Session::set_flash('success', 'Updated listing #'.$id);
					Response::redirect('listing');
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

		$this->template->set_global('listing', $listing, false);
		$this->template->title = "Listings";
		$this->template->content = View::forge('listing/edit');

	}

	public function action_delete($id = null)
	{
		if ($listing = Model_Listing::find_one_by_id($id))
		{
			$listing->delete();

			Session::set_flash('success', 'Deleted listing #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete listing #'.$id);
		}

		Response::redirect('listing');

	}

}
