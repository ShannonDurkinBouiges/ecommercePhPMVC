<?php
namespace Psmvc\App\Entities;

/**
 * Description of Cart
 *
 * @author ShannonDurkinBouiges@gmail.com
 */
class Cart {
    
    private $list = [];
    
    public function ajout($prod) {
        $list[] = $prod;
    }
    
}
