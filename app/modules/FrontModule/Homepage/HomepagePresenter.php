<?php

namespace App\FrontModule\Presenters;

use Nittro;

class HomepagePresenter extends Nittro\Bridges\NittroUI\Presenter
{
	/** @var \MailManager @inject */
	public $mailManager;

	/** @var \RegistrationManager @inject */
	public $registrationManager;


	public function renderDefault()
	{
		$this->template->count = $this->registrationManager->getCampUsersCount();
		$this->template->users = $this->registrationManager->getCampUsers();
	}
}