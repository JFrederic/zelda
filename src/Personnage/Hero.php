<?php
/**
 * Created by IntelliJ IDEA.
 * User: elliotbouvier
 * Date: 11/29/16
 * Time: 16:10
 */

namespace Zelda\Personnage;


class Hero implements PersonageInterface
{
    private $life;
    private $armor;
    private $damage;

    public function __construct()
    {
        $this->life = 200;
        $this->damage = 15;
        $this->armor = 0;

    }

    public function getLife(): int
    {
        return $this->life;
    }


    public function setLife(int $life): int
    {
        return $this->life = $life;
    }

    public function addLife(int $life) :int
    {
        return $this->life += $life;
    }

    public function getDamage(): int
    {
        return $this->damage;
    }

    public function setDamage(int $damage): int
    {
        return $this->damage = $damage;
    }

    public function attack(PersonageInterface $personage)
    {
        return $personage->setLife($personage->getLife() - $this->damage);

    }

    public function getArmor(): int
    {
        return $this->armor;
    }

    public function setArmor(int $armor): int
    {
        return $this->armor = $armor;
    }

    public function addArmor(int $armor): int
    {
        return $this->armor += $armor;
    }
}