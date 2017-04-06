<?php

namespace Controller;

use \W\Controller\Controller;
use Model\ConferenceModel;


class ConferenceController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function east()
	{
		$this->allowTo('user', 'admin');

		$conferenceModel = new ConferenceModel();
		$all = $conferenceModel->getAllTeamsAndDivisions(2);

		$single = $conferenceModel->find(2);


		$this->show('default/conference/east', array(
			'conferenceName' => $single['con_name'],
			'allTeams' => $all
			));
	}

	public function west()
	{
		$this->show('default/conference/west');
	}

}