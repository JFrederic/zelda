<?php
/**
 * Created by IntelliJ IDEA.
 * User: elliotbouvier
 * Date: 11/30/16
 * Time: 08:54
 */

namespace Zelda\Game;


use Zelda\Personnage\PersonageInterface;

class Game
{
    private $roundNumber;
    private $armorBonus;
    private $lifeBonus;
    private $playing;
    //private $fightSetting;

    public function __construct()
    {
        $this->roundNumber = 0;
        $this->armorBonus = 20;
        $this->lifeBonus = 50;
        $this->playing = false;
    }

    public function getRoundNumber(): int
    {
        return $this->roundNumber;
    }

    public function setRoundNumber(int $roundNumber): int
    {
        return $this->roundNumber = $roundNumber;
    }

    public function getArmorBonus(): int
    {
        return $this->armorBonus;
    }

    public function setArmorBonus(int $armorBonus): int
    {
        return $this->armorBonus = $armorBonus;
    }

    public function getLifeBonus(): int
    {
        return $this->lifeBonus;
    }

    public function setLifeBonus($lifeBonus): int
    {
        return $this->lifeBonus = $lifeBonus;
    }

    public function setPlaying($playing): bool
    {
        return $this->playing = $playing;
    }

    public function getPlaying(): bool
    {
        return $this->playing;
    }

    public function getFightSetting()
    {
        //$enemies = ['Minion', 'Lieutenant', 'Chief'];

    }

    public function chanceBonusLife(PersonageInterface $personage)
    {
        if (mt_rand(1, 5) === 1) {
            $personage->addLife($this->lifeBonus);
            return 'Vous avez eu un bonus de vie de : ' . $this->lifeBonus;
        }
        return 'Pas de bonus vie';
    }

    public function chanceBonusArmor(PersonageInterface $personage)
    {
        if (mt_rand(1, 3) === 1) {
            $personage->addArmor($this->armorBonus);
            return 'Vous avez eu un bonus d\'armor de : ' . $this->armorBonus;
        }
        return 'Pas de bonus armor';
    }
}