<?php

namespace controllers;

class entries extends \controllers\controller {
	public function add() {		
		$f3 = $this->framework;
		
		$date = explode('.', $f3->get('REQUEST.date'));
		$dateconv = $date[2].'-'.$date[1].'-'.$date[0];

		$ax = new \DB\SQL\Mapper($f3->get('db'), 'entries');
		$ax->date = strtotime($dateconv);
		$ax->starttime = strtotime($dateconv.' '.$f3->get('REQUEST.starttime'));
		$ax->endtime = strtotime($dateconv.' '.$f3->get('REQUEST.endtime'));
		$ax->save();
		
		$vac = new \DB\SQL\Mapper($f3->get('db'), 'vacaccount');
        $vac->load('id = 1');
        $vac->fulltime = $vac->fulltime + ($ax->endtime - $ax->starttime);
        $vac->save();
		
		\misc\alert::set('Work time added.');
		$f3->reroute('/');
	}
	
	public function getEntries() {
		$f3 = $this->framework;
		
		$ax = new \DB\SQL\Mapper($f3->get('db'), 'entries');		
		
		$entries = array();
        $fullduration = array();
        foreach($ax->afind() as $entry) {
            $month = date('F', $entry['date']);
            $duration = ($entry['endtime'] - $entry['starttime'])/3600;

            $entries[$month][] = array_merge($entry, array('duration' => $duration));
            if(isset($fullduration[$month])) {
                    $fullduration[$month] += $duration;
            } else
                $fullduration[$month] = $duration;

        }
        return array('entries' => $entries, 'fullduration' => $fullduration);
	}
}