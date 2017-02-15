<?php

require_once __DIR__.'/vendor/autoload.php';

use Siler\Route;
use RedBeanPHP\Facade as R;

R::setup('sqlite:dbfile.db');

  // $w = R::dispense( 'test' );
  // $w->date = date('Y-m-d H:m:s');
  // $id = R::store( $w );

Route\resource('/test', 'api/test');


