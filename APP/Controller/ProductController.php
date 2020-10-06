<?php
namespace Psmvc\App\Controller;
use Psmvc\App\Model\ProductModel;

/**
 * Description of ProductController
 *
 * @author ShannonDurkinBouiges@gmail.com
 */
class ProductController {
    
    public function make($action) {
        switch ($action) {
            case 'list':
                $categ = filter_input(INPUT_GET, 'categ', FILTER_SANITIZE_SPECIAL_CHARS);
                $mod = new ProductModel();
                $products = $mod->productList($categ);
                //var_dump($products); die();
                $vue = 'produit';
                break;

            default:
                break;
        }
        global $connect;
        global $nom;
        include 'App/Vue/template.php';
    }
    
}
