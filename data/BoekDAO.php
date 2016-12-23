<?php

//data/BoekDAO.php
//datalaag zorgt voor verbinding met database
//omvormen van de records in tabellen nr Boek- en Genre objecten

require_once 'DBConfig.php';
require_once 'entities/Genre.php';
require_once 'entities/Boek.php';

class BoekDAO{
    
    public function getAll(){
        $sql = "select mvc_boeken.id as boek_id,title,genre_id, genre from mvc_boeken, mvc_genres where genre_id = mvc_genres.id";
        
        $dbh = new PDO(DBConfig::$DB_CONNSTRING,DBConfig::$DB_USERNAME,DBConfig::$DB_PASSWORD);
        
        $resultSet = $dbh->query($sql);
        
        //eerst wordt het Genre-object gemaakt om dan te gebruiken als parameter in boek(create)
        $lijst = array();
        foreach($resultSet as $rij){
            $genre = Genre::create($rij["genre_id"], $rij["genre"]);
            $boek = Boek::create($rij["boek_id"], $rij["title"], $genre);
            array_push($lijst,$boek);
        }
        $dbh= null;
        return $lijst;
        
    }
}

