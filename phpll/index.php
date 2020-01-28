<?php 
// Fonctions qui va permettre de charger le fichier qui contient la classe instanciée
function chargerClass($class) {
    require "class/$class" . ".php";
}
spl_autoload_register('chargerClass');


// Initiation d'un propriétaire
$proprio1 = new Proprietaire('mathieu', 'pavy', 10);
echo $proprio1->getBiens();
// Setter pour définir combien de biens a le propriétaire


// Getter pour afficher le nombre de biens du propriétaire


// Static méthode 


// var_dump propriétaire
var_dump($proprio1);

// Initiation d'un locataire


// Getter pour afficher le montant du loyer du locataire




?>