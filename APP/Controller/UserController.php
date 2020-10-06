<?php
namespace Psmvc\App\Controller;
use Psmvc\App\Model\UserModel;
use Psmvc\App\Entities\User;

/**
 * Description of ProductController
 *
 * @author ShannonDurkinBouiges@gmail.com
 */
class UserController {
    
    public function make($action) {
        global $connect;
        switch ($action) {
            case 'form_connect':
                $message = '';
                $vue = 'connect';
                break;
            case 'verif_connect':
                $mod = new UserModel();
                try{
                    $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_SPECIAL_CHARS);
                    $mdp = filter_input(INPUT_POST, 'psw', FILTER_SANITIZE_SPECIAL_CHARS);

                    $util = $mod->verifConnect($login, $mdp);
                    //var_dump($util); 
                    $_SESSION['user'] = serialize($util);
                    $connect = true;
                    $nom = $util->getNom();
                    $vue = 'accueil';
                }catch(\ErrorException $er){
                    $message = $er->getMessage();
                    $vue = 'connect';
                }
                break;
            case 'deconnect':
                $mod = new UserModel();
                $mod->deconnect();
                global $connect;
                $connect = false;
                global $nom;
                $nom = '';
                $vue = 'accueil';
                break;
            default:
                break;
        }

        include 'App/Vue/template.php';
    }
    
}

