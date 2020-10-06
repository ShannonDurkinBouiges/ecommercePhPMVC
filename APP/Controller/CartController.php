<?php
namespace Psmvc\App\Controller;
use Psmvc\App\Model\PanierModel;

/**
 * Description of PanierController
 *
 * @author ShannonDurkinBouiges@gmail.com
 */
class PanierController {
    
        public function make($action) {
        switch ($action) {
            case 'ajout':
                $ref = filter_input(INPUT_GET, 'ref', FILTER_SANITIZE_SPECIAL_CHARS);
                $qtt = filter_input(INPUT_GET, 'qtt', FILTER_SANITIZE_SPECIAL_CHARS);
                $mod = new PanierModel();
                $mod->addProduct($ref, $qtt);
                http_response_code(200);
                break;
            case 'aff_panier':
                $mod = new PanierModel();
                $montant = $mod->calculPanier();
                global $panier;
                global $connect;
                global $nom;
                $vue = 'panier';
                include 'App/vue/template.php';
            default:
                break;
        }
    }

}

