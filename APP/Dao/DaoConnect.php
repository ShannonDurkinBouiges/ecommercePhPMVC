<?php

namespace Psmvc\App\Dao;
use PDO;
use PDOException;

/**
 * Description of DaoConnect
 *
 * @author ShannonDurkinBouiges@gmail.com
 */
abstract class DaoConnect {

    protected $bdd;

    public function __construct() {

        $this->bdd = $this->connection();
    }

    private function connection() {
        try {
            $connectClient = new PDO('mysql:host=localhost;dbname=shop_mvc_template;charset=utf8', 'root', '');
            $connectClient->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $ex) {
            echo 'Échec lors de la connexion : ' . $ex->getMessage();
        }
        return $connectClient;
    }

    
}