<?php
/**
 * Created by IntelliJ IDEA.
 * User: elliotbouvier
 * Date: 11/29/16
 * Time: 16:12
 */

namespace Zelda\Personnage;


class Minion extends Enemy
{
    public function __construct()
    {
        parent::__construct();
        $this->life = 20;
        $this->damage = 10;
    }
}