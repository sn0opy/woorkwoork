<?php

namespace controllers;

class controller extends \F3instance {
	public function __construct() {
		if(!file_exists($this->get('dbfile'))) {
			$this->get('DB')->sql('	CREATE TABLE IF NOT EXISTS "entries" (
									  "id" integer NOT NULL PRIMARY KEY AUTOINCREMENT,
									  "date" integer NOT NULL,
									  "starttime" integer NOT NULL,
									  "endtime" integer NOT NULL,
									  "added" integer NOT NULL
									);');
		}
	}
	
	protected function tpserve() {
		$this->set('entries', \controllers\entries::getEntries());
		
		echo \Template::serve('main.tpl.php');
	}
}