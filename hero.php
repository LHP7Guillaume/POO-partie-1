<?php

class Hero extends Character
{

    private string $_weapon;
    private int $_weaponDamage;
    private string $_shield;
    private int $_shieldValue;

    public function __construct(int $health, int $rage, string $weapon, int $weaponDamage, string $shield, int $shieldValue)
    {
        parent::__construct($health, $rage);

        $this->setWeapon($weapon);
        $this->setWeaponDamage($weaponDamage);
        $this->setShield($shield);
        $this->setShieldValue($shieldValue);

        // echo "<p>Creation d'un Héro </p>";
        // echo "<ul>";
        // echo "<li>Vie : " . $this->getHealth() . "</li>";
        // echo "<li>Rage : " . $this->getRage() . "</li>";
        // echo "<li>" . $this->getWeapon() . " avec comme dégats " . $this->getWeaponDamage() . "</li>";
        // echo "<li>" . $this->getShield() . " avec comme armure " . $this->getShieldValue() . "</li>";
        // echo "</ul>";
    }

    public function getWeapon(): string
    {
        return $this->_weapon;
    }

    public function setWeapon(string $weapon): void
    {
        $this->_weapon = $weapon;
    }

    public function getWeaponDamage(): int
    {
        return $this->_weaponDamage;
    }

    public function setWeaponDamage(int $weaponDamage): void
    {
        $this->_weaponDamage = $weaponDamage;
    }

    public function getShield(): string
    {
        return $this->_shield;
    }

    public function setShield(string $shield): void
    {
        $this->_shield = $shield;
    }


    public function getShieldValue(): int
    {
        return $this->_shieldValue;
    }

    public function setShieldValue(int $shieldValue): void
    {
        $this->_shieldValue = $shieldValue;
    }

    public function getAttacked(int $damage): void
    {
        // point de vie (setter) = vie actuelle - (degat - bouclier)
        $this->setHealth($this->getHealth() - ($damage - $this->getShieldValue()));
    }


    public function upRage(int $rage): void
    {
        $this->setRage($this->getRage() + $rage);
    }
}
