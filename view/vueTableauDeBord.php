<div id="abord">
<h1 class="titre"><?=$titre?></h1>
<?php
$a = false;
?>
<?php if($a) :?>

<?php else :?>
<p class="alerte"><i class="fa-solid fa-triangle-exclamation"></i> Etant donné que vous n'êtes pas connecté, vous ne pouvez pas consulter votre tableau de bord pour le moment.</p>

<p>Ici, vous pourrez trouver toute sortes d'informations reliées à votre compte: vos heures réalisées,des statistiques, etc..</p>

<div class="tabdebord">

<div class="infos-salarie">
    <h2>Mes informations</h2>
    <div>

    <div class="initiales">
    <?=$exemple["infos-s"]["initiales"]?>
    </div>
    <div class="infos-s">
    <span>Nom</span>
    <span><?=$exemple["infos-s"]["nom"]?></span>
    <span>Prenom</span>
    <span><?=$exemple["infos-s"]["prenom"]?></span>
    <span>Service</span>
    <span><?=$exemple["infos-s"]["service"]?></span>
    <span>Fonction</span>
    <span><?=$exemple["infos-s"]["fonction"]?></span>
    <span>Responsable</span>
    <span><?=$exemple["infos-s"]["responsable"]?></span>
    <a class="modif-salarie" href="index.php?action=modifinfos">Modifier mes informations personnelles</a>
    </div>
    </div>
</div>
<div class="ssm">
<div class="statistiques">
    <h2>Données statistiques</h2>
<span>Nombre d'heures totales travaillées :</span>
<span class="chiffres"><?=$exemple["heures"]["heures-totales"] . " heures"?></span>
<span>Nombre d'heures supplémentaires :</span>
<span class="chiffres"><?=$exemple["heures"]["heures-supp"] . " heures"?></span>

</div>

<div class="vue-semaine">
    <h2>Semaine</h2>
    <div class="graphik">

    </div>
</div>

<div class="vue-mois">
    <h2>Mois</h2>
    <div class="graphik">

    </div>
</div>
</div>
</div>
</div>

<a href="#scroll" class="remonter"><i class="fa-solid fa-arrow-up"></i></a>

<?php endif ?>

</div>