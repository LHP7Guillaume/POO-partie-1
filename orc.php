<?php

class Orc extends Character
{
    private int $_damage;

    public function __construct(int $health, int $rage)
    {
        parent::__construct($health, $rage);

        // echo "Vous venez de creer un Orc avec " . $this->getHealth() . " points de vie, " . $this->getRage() . " points de rage. ";
    }

    public function getDamage(): int
    {
        return $this->_damage;
    }

    public function setDamage($damage): void
    {
        $this->_damage = $damage;
    }

    public function attack(): void
    {
        $this->setDamage(rand(600, 800));
    }
}
