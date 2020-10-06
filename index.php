<?php
namespace Psmvc;
use Psmvc\App\Controller\ProductController;
use Psmvc\App\Controller\UserController;
use Psmvc\App\Controller\PanierController;
use Psmvc\App\Entities\{User, Cart};

spl_autoload_register(function ($className){
    $className = substr($className, 5).'.class.php';
    include $className;
    }
);

session_start();
$connect = false;
$name = '';

// test si connecté
if(isset($_SESSION['user'])){
    $connect = true;
    $user = unserialize($_SESSION['user']);
    //var_dump($user);die();
    $name = $user->getNom();
    
    // gestion du panier
    if (isset($_SESSION['panier'])){
        $cart = unserialize($_SESSION['cart']);
    } else {
        $cart = [];
    }
} else {
    $cart = [];
}

$entity = filter_input(INPUT_GET, 'entity', FILTER_SANITIZE_SPECIAL_CHARS);
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);

if ($entity == NULL) {
    $entity = 'home';
}


switch ($entity) {
    case 'home':
        $vue = 'home';
        include 'App/View/template.php';
        break;
    case 'product':
        $ctrl = new ProductController();
        $ctrl->make($action);
        break;
    case 'user':
        $ctrl = new UserController();
        $ctrl->make($action);
        break;
    case 'cart':
        $ctrl = new CartController();
        $ctrl->make($action);
        break;
        
    default:
        break;
}

if ($connect){
    $_SESSION['cart'] = serialize($cart);
}



