<?php
/**
 * Created by IntelliJ IDEA.
 * User: elliotbouvier
 * Date: 11/29/16
 * Time: 16:11
 */

namespace Zelda\Personnage;


interface PersonageInterface
{
    public function getLife(): int;
    public function setLife(int $life): int;
    public function addLife(int $life): int;
    public function getArmor(): int;
    public function setArmor(int $armor): int;
    public function addArmor(int $armor): int;
    public function getDamage(): int;
    public function setDamage(int $damage): int;
    public function attack(PersonageInterface $personage);
}