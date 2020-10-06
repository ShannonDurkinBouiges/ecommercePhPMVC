<?php
namespace Psmvc\App\Entities;

/**
 * Description of User
 *
 * @author ShannonDurkinBouiges@gmail.com
 */
class User {
    
    private $idUser;
    private $nom;
    private $prenom;
    private $ident;
    private $psw;
    private $role;
 
    function __construct($idUser=0, $nom='', $prenom='', $ident='', $psw='', $role='') {
        $this->idUser = $idUser;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->ident = $ident;
        $this->psw = $psw;
        $this->role = $role;
    }

    
    function getNom() {
        return $this->nom;
    }
    
    function getPsw() {
        return $this->psw;
    }



}

