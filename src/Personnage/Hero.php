<?php
/**
 * Created by IntelliJ IDEA.
 * User: elliotbouvier
 * Date: 11/29/16
 * Time: 16:10
 */

namespace Zelda;


class Hero implements Personage
{
    private $life;
    private $armor;
    private $damage;

    public function __construct()
    {

    }

    public function getLife(): int
    {
        return $this->life;
    }


    public function setLife(int $life): int
    {
        return $this->life = $life;
    }

    public function getDamage(): int
    {
        return $this->damage;
    }

    public function setDamage(int $damage): int
    {
        return $this->damage = $damage;
    }

    public function attack(Personage $personnage)
    {
        // TODO: Implement attack() method.
    }

    public function getArmor(): int
    {
        return $this->armor;
    }

    public function setArmor($armor): int
    {
        return $this->armor = $armor;
    }
}