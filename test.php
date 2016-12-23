<?php

//test.php

require_once 'business/BoekService.php';

$boekSvc = new BoekService();
$lijst = $boekSvc->getBoekenOverzicht();

print("<pre>");
print_r($lijst);
print("</pre>");