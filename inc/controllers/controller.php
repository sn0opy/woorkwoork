<?php

namespace controllers;

class controller {
	protected $framework;
	
	public function __construct() {
		$this->framework = \Base::instance();
		$f3 = $this->framework;
		
		if(file_exists('setup.sql')) {
			$db = new \DB\SQL('sqlite:' . $f3->get('dbfile'));			
			$db->exec(explode(';', $f3->read('setup.sql')));
			rename('setup.sql', 'setup_done.sql');
		}
		
		$f3->set('db', new \DB\SQL('sqlite:'.$f3->get('dbfile')));
	}
	
	protected function tpserve() {
		$entries = new \controllers\entries;
		$tpl = new \Template;
		
		echo $tpl->render('main.tpl.php');
	}
}