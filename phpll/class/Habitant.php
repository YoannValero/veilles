<?php
// Je définit Habitant comme classe Abstraite car je ne m'en servirai pas 
// Ce sera le modèle pour les classes filles
abstract class Habitant {
// Attributs 
    protected $_nom;
    protected $_prenom;

    public function __construct($nom, $prenom) {
        $this->setNom($nom);
        $this->setPrenom($prenom);
    }

    public function setNom($nom) {
        $this->_nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->_prenom = $prenom;
    }
    
}
// Getter : va permettre de récupérer l'attribut pour l'afficher

// Setter : définit le nom en testant les entrées
  
// Utilisation du Setter













//     // Constructeur (nom, prénom)
    
    
//     // Static function parler()
//     public static function parler() {
//         echo self::$_textADire;
//     }

//     // GETTER nom, prénom
    

//     //SETTER nom, prénom avec tests
   
   
// }