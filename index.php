<?php

require 'vendor/autoload.php';
$f3 = \Base::instance();
$f3->config("app/config/config.ini");
$f3->config("app/config/routes.ini");

$db=new DB\SQL(
"mysql:server=" . $f3->get('DB_HOST') . ";Database=" . $f3->get('DB_NAME').';TrustServerCertificate=true;',
    $f3->get('DB_USER'),
    $f3->get('DB_PASS')
);

$f3->set('DB',$db);


$f3->run();