<?php

namespace Psmvc\App\Dao;
use PDO;
use PDOException;
use Psmvc\App\Dao\DaoConnect;
use Psmvc\App\Entities\Product;

/**
 * Description of DaoProduct
 *
 * @author ShannonDurkinBouiges@gmail.com
 */
class DaoProduct {
    
    private const LISTE_PRODUIT = 'SELECT ref, produits.libelle, prix, fk_categ '
            . 'FROM produits JOIN categories ON categories.pk_categ=produits.fk_categ '
            . 'WHERE categories.libelle=:categ';
    
    private const GET_PRODUCT = 'SELECT * FROM produits WHERE ref=:ref';

    public function getProduitByCateg($cat) {

        $bdd = $this->connexion();
        $stm = $bdd->prepare(self::LISTE_PRODUIT);
        $stm->bindParam(':categ', $cat);
        $stm->execute();

        $stm->setFetchMode(PDO::FETCH_CLASS, 'Psmvc\App\Entities\Product');
        $liste = [];
        while(($product = $stm->fetch()) !== false){
            $liste[] = $product;
        }
        
        return $liste;
    }

    public function getProductByRef($ref) {
        $bdd = $this->connexion();
        $stm = $bdd->prepare(self::GET_PRODUCT);
        $stm->bindParam(':ref', $ref);
        $stm->execute();

        $stm->setFetchMode(PDO::FETCH_CLASS, 'Psmvc\App\Entities\Product');
        $product = $stm->fetch();
        
        return $product;
    }
    
}