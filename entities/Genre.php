<?php

//entities/Genre.php

class Genre{
    
    //static var zal zijn waarde behouden, ook bij verlaten van klas of functie 
    private static $idMap = array();
    
    private $id;
    private $genreNaam;
    
    //de function is private, nu kan enkel vanuit genre zelf een nieuw object worden aangemaakt
    
    private function __construct($id,$genreNaam){
        $this->id = $id;
        $this->genreNaam = $genreNaam;
    }
    
    //nieuw object aanmaken van genre mbv create ipv construct
    //er wordt nagegaan of objectenlijst $idmap reeds een genreobject bevat
    //indien niet wordt er een aangemaakt, anders w bestaande object teruggegeven
    
    public static function create($id,$genreNaam){
        if (!isset(self::$idMap[$id])){
            self::$idMap[$id] = new Genre($id,$genreNaam);
        }
        return self::$idMap[$id];
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getGenreNaam(){
        return $this->genreNaam;
    }
    
    public function setGenreNaam($genreNaam){
        $this->genreNaam = $genreNaam;
    }
}
