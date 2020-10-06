<?php
namespace Psmvc\App\Entities;

/**
 * Description of Product
 *
 * @author ShannonDurkinBouiges@gmail.com
 */
class Product {
    
    private $ref;
    private $libelle;
    private $prix;
    private $fk_categ;
    
    function getRef(): int {
        return $this->ref;
    }

    function getLibelle(): string {
        return $this->libelle;
    }

    function getPrix(): float {
        return $this->prix;
    }

    function getFk_categ(): int {
        return $this->fk_categ;
    }


}

