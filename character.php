<?php
/////////////////////////////// EXO 1////////////////////////////////////////////

class Character
{
    private int $_health; // int = type d attributs
    private int $_rage;   // int = type d attributs
    ////////////////////////////// EXO 2////////////////////////////////////////////

    public function getHealth(): int
    {
        return $this->_health;
    }

    public function setHealth(int $health) : void
    {
         $this->_health = $health;
    }

    public function getRage(): int
    {
        return $this->_rage;
    }

    public function setRage(int $rage) : void
    {
         $this->_rage = $rage;
    }

    ////////////////////////////// EXO 3////////////////////////////////////////////

    public function __construct(int $health, int $rage) //entre parenthese recupere le valeurs ligne 15 et 20        //underscore underscore = methode magic POO
    {
        $this->setHealth($health); //recupere les valeurs ligne 17
        $this->setRage($rage); //recupere les valeurs ligne 27
    }
}

