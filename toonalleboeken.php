<?php

//toonalleboeken.php

require_once 'business/BoekService.php';

$boekSvc=new BoekService();
$boekenlijst = $boekSvc->getBoekenOverzicht();
include 'presentation/boekenlijst.php';
