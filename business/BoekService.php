<?php

//business/BoekService.php

//deze pagina zorgt ervoor dat alle data die dienen te worden getoond, teruggegeven worden.
//deze servicelaag weet niet hoe data worden opgehaald

require_once 'data/BoekDAO.php';

class BoekService{
    
    public function getBoekenOverzicht(){
        $boekDAO = new BoekDAO();
        $lijst = $boekDAO->getAll();
        return $lijst;
    }
}

