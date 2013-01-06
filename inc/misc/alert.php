<?php

namespace misc;

class alert {	
	static public function set($msg, $type = 'success') {
		$f3 = \Base::instance();
		
		$f3->set('SESSION.alert.msg', $msg);
		$f3->set('SESSION.alert.type', $type);
	}
	
	static public function clear() {
		$f3 = \Base::instance();
		$f3->clear('SESSION.alert');
	}
}