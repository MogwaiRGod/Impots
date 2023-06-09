<?php

class Impot {
    private $nom;
    private $revenu;
    private $taux;

    /* constantes de classe */
    public const TAUXSUP = 0.2; /* 20 % */
    public const TAUXINF = 0.15; /* 15 % */
    
    public function __construct($nm, $rev) {
        $this->nom = $nm;
        $this->revenu = (int)$rev;
        $rev < 15000 ? $this->taux = self::TAUXINF : $this->taux = self::TAUXSUP;
    }

    // méthode retournant un impôt à payer selon le revenu passé en paramètre
    private function calculImpot() {
        return $this->taux*$this->revenu;
    }

    // méthode retournant un message indiquant le montant à payer : chaîne
    public function afficheImpot() {
        $impot = $this->calculImpot();
        return "M./Mme " . $this->nom . ", votre impôt est de " . $impot . "€"; 
    }
}
