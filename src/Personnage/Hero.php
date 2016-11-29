<?php
/**
 * Created by IntelliJ IDEA.
 * User: elliotbouvier
 * Date: 11/29/16
 * Time: 16:10
 */

namespace Zelda;


class Hero implements Personnage
{
    private $life;
    private $armor;
    private $damage;

    public function __construct()
    {

    }

    public function getLife()
    {
        return $this->life;
    }


    public function setLife(int $life)
    {
        return $this->life = $life;
    }

    public function getDamage()
    {
        return $this->damage;
    }

    public function setDamage(int $damage)
    {
        return $this->damage = $damage;
    }

    public function attack()
    {
        // TODO: Implement attack() method.
    }

    public function getArmor()
    {
        return $this->armor;
    }

    public function setArmor($armor)
    {
        return $this->armor = $armor;
    }
}