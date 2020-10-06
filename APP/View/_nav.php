<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand <?php if ($vue == 'accueil') {echo 'active';} ?>" href="index.php">Accueil</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php if (preg_match('/^prod/', $vue)) {echo 'active';} ?>" href="#" id="navbardrop" data-toggle="dropdown">Les Produits</a>
                <div class="dropdown-menu bg-secondary">
                    <a class="dropdown-item <?php if ($vue == 'prod_papeterie') {echo 'disabled';} ?>" href="index.php?entite=product&action=list&categ=papeterie">Papeterie</a>
                    <?php
                    if ($vue != 'prod_ecriture') {
                        echo '<a class="dropdown-item" href="index.php?entite=product&action=list&categ=écriture">Ecriture</a>';
                    }
                    ?>
                    <a class="dropdown-item" href="#">Accessoires</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Les Bonnes affaires</a>
            </li>
            <?php
            if ($connect) {
                echo '<li class="nav-item">
                    <a class="nav-link" href="index.php?entite=panier&action=aff_panier">Votre panier</a>
                    </li>';
            }
            ?>
        </ul>
    </div>
</nav>

