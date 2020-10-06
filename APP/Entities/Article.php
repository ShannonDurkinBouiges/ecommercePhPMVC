<?php
namespace Psmvc\App\Entities;

/**
 * Description of Article
 *
 * @author ShannonDurkinBouiges@gmail.com
 */
class Article {
    
    private $produit;
    private $quantite;
    private $prixHT;
    
    function __construct($produit, $quantite, $prixHT) {
        $this->produit = $produit;
        $this->quantite = $quantite;
        $this->prixHT = $prixHT;
    }

    function getProduit() {
        return $this->produit;
    }

    function getQuantite() {
        return $this->quantite;
    }

    function getPrixHT() {
        return $this->prixHT;
    }

    function setQuantite($quantite): void {
        $this->quantite = $quantite;
    }

    function setPrixHT($prixHT): void {
        $this->prixHT = $prixHT;
    }



}

