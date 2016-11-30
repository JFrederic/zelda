<?php
/**
 * Created by IntelliJ IDEA.
 * User: elliotbouvier
 * Date: 11/29/16
 * Time: 16:12
 */

namespace Zelda\Personnage;


abstract class Enemy implements PersonageInterface
{
    protected $life;
    protected $damage;
    protected $armor;

    public function __construct()
    {
        $this->armor = 0;
        $this->damage = 0;
        $this->life = 0;
    }

    public function getLife(): int
    {
        return $this->life;
    }

    public function setLife(int $life): int
    {
        return $this->life = $life;
    }

    public function addLife(int $life): int
    {
        // TODO: Implement addLife() method.
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
        if ($this->damage >= $personage->getArmor()) {
            $health = $personage->getLife() + $personage->getArmor();
            $health -= $this->damage;
            $personage->setArmor(0);
            $personage->setLife($health);
            return $this->damage;
        }

        if ($this->damage < $personage->getArmor()) {
            $personage->setArmor($personage->getArmor() - $this->damage);
            return $this->damage;
        }
        return $this->damage;
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
        // TODO: Implement addArmor() method.
    }
}