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
    public function getLife();
    public function setLife($life);
    public function getDamage();
    public function setDamage($damage);
    public function attack();

}