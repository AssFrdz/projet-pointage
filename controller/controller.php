<?php
switch($action){
    case "accueil":
        $titre="Accueil";
        include "./view/header.php";
        include "./view/vueAccueil.php";
        include "./view/footer.php";
        break;

    case "tabord":
        $titre="Tableau de bord";
        include "./view/header.php";
        include "./view/vueTableauDeBord.php";
        include "./view/footer.php";
        break;

    case "pointage":
        $titre="Pointage";
        include "./view/header.php";
        include "./view/vuePointage.php";
        include "./view/footer.php";
        break;

    case "contact":
        $titre="Contact";
        include "./view/header.php";
        include "./view/vueContact.php";
        include "./view/footer.php";
        break;
    
    case "seconnecter":
        $titre="Se connecter";
        include "./view/header.php";
        include "./view/vueConnexion.php";
        include "./view/footer.php";
        break;
    

    default:{
        $titre="Accueil";
        include "./view/header.php";
        include "./view/vueAccueil.php";
        include "./view/footer.php";
        break;}
}