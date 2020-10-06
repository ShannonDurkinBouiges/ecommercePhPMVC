<?php

namespace Psmvc\App\Dao;
use PDO;
use PDOException;
use Psmvc\App\Dao\DaoConnect;
use Psmvc\App\Entities\User;

/**
 * Description of DaoUser
 *
 * @author ShannonDurkinBouiges@gmail.com
 */
class DaoUser {
    
    private const GET_USER = 'SELECT * FROM users WHERE ident=:ident';

    public function getUserByIdent($ident) {
        $bdd = $this->connexion();
        $stm = $bdd->prepare(self::GET_USER);
        $stm->bindParam(':ident', $ident);
        $stm->execute();
        $stm->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Psmvc\App\Entities\User');
        $user = $stm->fetch();
        return $user;
    }
    
}
