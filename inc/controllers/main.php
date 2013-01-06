<?php

namespace controllers;

class main extends \controllers\controller {
	public function start() {
		$f3 = $this->framework;
		
		$entries = new \controllers\entries;
		$data = $entries->getEntries();
		
		$ax = new \DB\SQL\Mapper($f3->get('db'), 'vacaccount');
        $ax->load('id = 1');
		$f3->set('fulltime', $ax->fulltime);
		
		$f3->set('entries', $data['entries']);
        $f3->set('fullduration', $data['fullduration']);
		$f3->set('subtemplate', 'start.tpl.php');
		$f3->set('onpage', 'start');
		
		$this->tpserve();
	}
}