<?php
namespace Psmvc\App\Model;
use Psmvc\App\Dao\Dao;
use Psmvc\App\Entities\Product;
use Psmvc\App\Entities\Article;
/**
 * Description of CartModel
 *
 * @author ShannonDurkinBouiges@gmail.com
 */
class CartModel {
    
    public function addProduct($ref, $qtt) {
        global $panier;

        if(isset($panier[$ref])){
            $panier[$ref]->setQuantite($panier[$ref]->getQuantite() + $qtt);
            $panier[$ref]->setPrixHT($panier[$ref]->getProduit()->getPrix()*$panier[$ref]->getQuantite());
        } else {
            $bdd = new Dao();
            $prod = $bdd->getProductByRef($ref);

            // création de l'article
            $prixHT = $prod->getPrix() * $qtt;
            $article = new Article($prod, $qtt, $prixHT);

            $panier[$ref] = $article;
        }
    }
    
    public function calculPanier() {
        global $panier;
        
        $mont = 0;
        foreach ($panier as $article) {
            $mont += $article->getPrixHT();
        }
        
        return $mont;
    }
}
