<?php
namespace Model;

class ConferenceModel extends \W\Model\Model {
	public function __construct(){
		parent::__construct();
		$this->setPrimaryKey('con_id');
	}

	public function getAllTeamsAndDivisions ($conferenceId){
		$sql = '
			SELECT *
			FROM team
			INNER JOIN division ON division.div_id = team.div_id
			WHERE con_id = :id
		';

		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(':id', $conferenceId, \PDO::PARAM_INT);
		$sth->execute();
		return $sth->fetchAll();
	}
}