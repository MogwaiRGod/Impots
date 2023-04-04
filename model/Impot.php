<?php

class Impot {
    private $nom;
    private $revenu;
    
    public const TAUXSUP = 0.2; /* 20 % */
    public const TAUXINF = 0.15; /* 15 % */

    /* constantes de classe */
    public function __construct($nm, $rev) {
        $this->nom = $nm;
        $this->revenu = (int)$rev;
    }

    // méthode retournant un impôt à payer selon le revenu passé en paramètre
    private function calculImpot() {
        if($this->revenu < 15000) {
            return self::TAUXINF*$this->revenu;
        }
        return self::TAUXSUP*$this->revenu;
    }

    // méthode retournant une chaîne
    public function afficheImpot() {
        $impot = $this->calculImpot();
        return "M./Mme " . $this->nom . ", votre impôt est de " . $impot . "€"; 
    }


}