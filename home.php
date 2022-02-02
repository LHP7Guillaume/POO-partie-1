<?php
require 'character.php';
require 'hero.php';
require 'orc.php';

$hero = new Hero(2000, 0, 'Master Sword', 250, 'Bouclier des Ombres', 600);
$orc = new Orc(500, 0);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Creation d'un Héro : </h1>
    <ul>
        <li>Vie : <?= $hero->getHealth() ?></li>
        <li>Rage : <?= $hero->getRage() ?></li>
        <li><?= $hero->getWeapon() ?> avec comme dégats <?= $hero->getWeaponDamage() ?></li>
        <li><?= $hero->getShield() ?> avec comme armure <?= $hero->getShieldValue() ?></li>
    </ul>

    <h1>Creation d'un Orc : </h1>
    <ul>
        <li>Vie : <?= $orc->getHealth() ?></li>
        <li>Rage : <?= $orc->getRage() ?></li>
    </ul>

    <?php
    $round = 1;
    while ($hero->getHealth() > 0 && $orc->getHealth() > 0) {

        $orc->attack();
        $hero->getAttacked($orc->getDamage());
        $hero->upRage(30);

    ?>

        <h2><?= $round++ ?> - Une attaque a été lancée </h2>
        <p>l'Orc a effectué une attaque de <?= $orc->getDamage() ?>, l'armure a absorbé <?= $hero->getShieldValue() ?> et le Héro a subit <?= $orc->getDamage() - $hero->getShieldValue() ?> points de dégats.</p>

        <?php
        if ($hero->getRage() >= 100) {
            $orc->setHealth($orc->getHealth() - $hero->getWeaponDamage());
            $hero->setRage(0);
        }

        echo $orc->getHealth();


        if ($orc->getHealth() <= 0) { ?>
            <h3>L'Orc est vaincu.</h3>
        <?php } else { ?>
            <h3>L'orc a <?= $orc->getHealth() ?> points de vie.</h3>
        <?php }


        if ($hero->getHealth() <= 0) { ?>
            <h3>Le Héro est vaincu.</h3>
        <?php } else { ?>
            <p>Le Héro a maintenant <?= $hero->getHealth() ?> points de vie et <?= $hero->getrage() ?> points de rage.</p>
    <?php }
    } ?>

</body>

</html>