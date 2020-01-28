<?php
class Proprietaire extends Habitant {
    // Attributs
    protected $_nom;
    protected $_prenom;
    private $_biens;

    public function __construct($nom,$prenom,$num) {
        parent::__construct($nom,$prenom);
       
        $this->setBiens($num);
    }
    // Setter pour définir les biens du propriétaire avec test de validité
   public function setBiens($num) {
       $this->_biens = $num;
   }
    // Getter pour récupérer les biens et les afficher
   public function getBiens() {
       return "<h1> $this->_nom a $this->_biens biens immobilliers, il va pouvoir en donner </h1>";
   }
}
?>  