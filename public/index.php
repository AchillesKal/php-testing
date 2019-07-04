<?php

use App\Framework;

require dirname(__DIR__).'/config/bootstrap.php';

$framework = new Framework();
echo $framework->run();