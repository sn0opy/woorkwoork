<?php

namespace misc;

class alert extends \F3instance {
	static public function set($msg, $type = 'success') {
		\F3::set('SESSION.alert.msg', $msg);
		\F3::set('SESSION.alert.type', $type);
	}
	
	static public function clear() {
		\F3::clear('SESSION.alert');
	}
}