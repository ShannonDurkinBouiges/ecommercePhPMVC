<?php
namespace Psmvc\App\Model;
use Psmvc\App\Dao\Dao;
use Psmvc\App\Entities\User;
/**
 * Description of ProducttModel
 *
 * @author ShannonDurkinBouiges@gmail.com
 */
class UserModel {
    
    public function verifConnect($ident, $psw) {
        
        $bdd = new Dao();
        $user = $bdd->getUserByIdent($ident);
        // test si user trouvé
        if(!is_bool($user)){
            if (password_verify($psw, $user->getPsw())){
                // user ok
                return $user;
            } else {
                throw new \ErrorException('Mot de passe incorrect !');
            }
        } else {
            throw new \ErrorException('Utilisateur inconnu !');
        }
    }
    
    public function deconnect() {
        unset($_SESSION['user']);
        session_destroy();
    }
}


