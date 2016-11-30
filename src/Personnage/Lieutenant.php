<?php
/**
 * Created by IntelliJ IDEA.
 * User: elliotbouvier
 * Date: 11/29/16
 * Time: 16:12
 */

namespace Zelda\Personnage;


class Lieutenant extends Enemy
{
    public function __construct()
    {
        parent::__construct();
        $this->life = 40;
        $this->damage = 30;
    }
}