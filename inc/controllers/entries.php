<?php

namespace controllers;

class entries extends \controllers\controller {
	public function add() {
		$date = explode('.', $this->get('REQUEST.date'));
		$dateconv = $date[2].'-'.$date[1].'-'.$date[0];

		$ax = new \Axon('entries');
		$ax->date = strtotime($dateconv);
		$ax->starttime = strtotime($dateconv.' '.$this->get('REQUEST.starttime'));
		$ax->endtime = strtotime($dateconv.' '.$this->get('REQUEST.endtime'));
		$ax->save();
		
		\misc\alert::set('Work time added.');
		$this->reroute('/');
	}
	
	public static function getEntries() {
		$ax = new \Axon('entries');
		return $ax->afind();
	}
}