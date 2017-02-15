<?php

use RedBeanPHP\Facade as R;
use Siler\Http\Response;

$test = R::findAll('test'); // in the planet

Response\json($test)
    and exit; // wtf?
