<?php

$app = require 'lib/base.php';

$app->set('dbfile', 'data/db.sqlite');

$app->set('UI', 'ui/');
$app->set('CACHE', 'folder=cache/');
$app->set('AUTOLOAD', 'inc/');
$app->set('DB', new DB('sqlite:'.$app->get('dbfile')));

$app->route('GET /', 'controllers\main->start');
$app->route('POST /add', 'controllers\entries->add');

$app->run();

\misc\alert::clear();
