<?php

require_once('Carre.php');

$maforme = new Carre(10, 10, 120);

function afficheInfos($forme)
{
    echo 'Aire: ' . $forme->aire() . '</br> Périmètre: ' . $forme->perimetre();
}

afficheInfos($maforme);