<?php
/**
 * Created by IntelliJ IDEA.
 * User: elliotbouvier
 * Date: 11/29/16
 * Time: 16:13
 */
require __DIR__ . '/vendor/autoload.php';
use Zelda\Game\Game;
use Zelda\Personnage\Hero;
use Zelda\Personnage\Minion;
use Zelda\Personnage\Chief;
use Zelda\Personnage\Lieutenant;

$hero = new Hero();
$minion = new Minion();
$lieutenant = new Lieutenant();
$chief = new Chief();
$game = new Game();
$game->setPlaying(true);
echo '<p>';
while ($game->getPlaying()) {
    $game->setRoundNumber($game->getRoundNumber() + 1);
    if ($game->getRoundNumber() == 1) {
        echo '<span> Hero Life = ' . $hero->getLife() . '</span></br>';
        echo '<span> Hero Armor = ' . $hero->getArmor() . '</span><br>';
        echo '<span>' . $game->chanceBonusLife($hero) . '</span></br>';
        echo '<span>' . $game->chanceBonusArmor($hero) . '</span></br>';
        echo '<span> Hero Life = ' . $hero->getLife() . '</span></br>';
        echo '<span> Hero Armor = ' . $hero->getArmor() . '</span><br>';
        echo '<span> Vous attaquez le minion et il lui reste ' . $hero->attack($minion) . '</span><br>';
        echo '<span> Un minion vous atk de ' . $minion->attack($hero) . '</span><br>';
        echo '<span> Hero Life = ' . $hero->getLife() . '</span></br>';
        echo '<span> Hero Armor = ' . $hero->getArmor() . '</span><br>';
    }
    if ($game->getRoundNumber() == 2) {
        echo '<span> Hero Life = ' . $hero->getLife() . '</span></br>';
        echo '<span> Hero Armor = ' . $hero->getArmor() . '</span><br>';
        echo '<span>' . $game->chanceBonusLife($hero) . '</span></br>';
        echo '<span>' . $game->chanceBonusArmor($hero) . '</span></br>';
        echo '<span> Hero Life = ' . $hero->getLife() . '</span></br>';
        echo '<span> Hero Armor = ' . $hero->getArmor() . '</span><br>';
        echo '<span> Vous attaquez le lieutenant et il lui reste ' . $hero->attack($lieutenant) . '</span><br>';
        echo '<span> Un lieutenant vous atk de ' . $lieutenant->attack($hero) . '</span><br>';
        echo '<span> Hero Life = ' . $hero->getLife() . '</span></br>';
        echo '<span> Hero Armor = ' . $hero->getArmor() . '</span><br>';
    }
    if ($game->getRoundNumber() == 3) {
        $i = 1;
        while ($i <= 5) {
            echo '<span> Hero Life = ' . $hero->getLife() . '</span></br>';
            echo '<span> Hero Armor = ' . $hero->getArmor() . '</span><br>';
            echo '<span>' . $game->chanceBonusLife($hero) . '</span></br>';
            echo '<span>' . $game->chanceBonusArmor($hero) . '</span></br>';
            echo '<span> Hero Life = ' . $hero->getLife() . '</span></br>';
            echo '<span> Hero Armor = ' . $hero->getArmor() . '</span><br>';
            echo '<span> Vous attaquez le ChiefKeef et il lui reste ' . $hero->attack($chief) . '</span><br>';
            echo '<span> Un ChiefKeef vous atk de ' . $chief->attack($hero) . '</span><br>';
            if ($hero->getLife() <= 0) {
                echo '<span> Hero Life = ' . $hero->getLife() . '</span></br>';
                echo '<span> Hero Armor = ' . $hero->getArmor() . '</span><br>';
            }
            $i++;
            if ($hero->getLife() <= 0) {
                $game->setPlaying(false);
                echo 'Votre hero est dead au bout de ' . ($i + $game->getRoundNumber()) . ' tours <br>';
                echo 'Il reste ' . $chief->getLife() . ' pv au ChiefKeef';
                return;
            }
        }
    }
    if ($hero->getLife() <= 0) {
        $game->setPlaying(false);
        return 'Votre hero est dead';
    }
}
echo '</p>';




