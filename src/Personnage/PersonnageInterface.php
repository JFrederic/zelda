<?php
/**
 * Created by IntelliJ IDEA.
 * User: elliotbouvier
 * Date: 11/29/16
 * Time: 16:11
 */

namespace Zelda;


interface Personnage
{
    public function getLife(): int;
    public function setLife(int $life): int;
    public function getDamage(): int;
    public function setDamage(int $damage): int;
    public function attack(Personnage $personnage);
}