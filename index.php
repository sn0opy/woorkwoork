<?php

$app = require 'lib/base.php';

$app->config('data/config.ini');
$app->run();

\misc\alert::clear();
