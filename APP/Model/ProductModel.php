<?php
namespace Psmvc\App\Model;
use Psmvc\App\Dao\Dao;

/**
 * Description of ProducttModel
 *
 * @author ShannonDurkinBouiges@gmail.com
 */
class ProductModel {
    
    public function productList($categ) {
        
        $bdd = new Dao();
        $list = $bdd->getProduitByCateg($categ);
        return $list;
    }
}
