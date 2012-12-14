<?php

namespace controllers;

class main extends \controllers\controller {
	public function start() {
		$this->set('subtemplate', 'start.tpl.php');
		$this->set('onpage', 'start');
		
		$this->tpserve();
	}
}