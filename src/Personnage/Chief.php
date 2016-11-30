<?php
/**
 * Created by IntelliJ IDEA.
 * User: elliotbouvier
 * Date: 11/29/16
 * Time: 16:12
 */

namespace Zelda\Personnage;


class Chief extends Enemy
{
    public function __construct()
    {
        parent::__construct();
        $this->life = 60;
        $this->damage = 100;
    }

}