<header class="container-fluid bg-dark text-white">
    <div class="row">
        <div class="col-1">
            <img src="images/logo_papeterie.png" alt="logo">
        </div>
        <div class="col-8">
            <h3>Papeterie du Centre</h3>
            <p>9 rue Marc Seguin<br>
                94000 Créteil<br>
                Tél : 01 23 45 67 89</p>
        </div>
        <div class="col-3">
            <?php
            if (!$connect) {
                echo '<span>Déjà client : <a href="index.php?entite=user&action=form_connect" class="btn btn-primary btn-sm">Identifiez-vous</a></span>';
                echo '<br><br>
                    <span><a href="#" class="btn btn-secondary btn-sm">Créer un compte</a></span>';
            } else {
                echo '<span>Bonjour '.$nom.'<a href="index.php?entite=user&action=deconnect" class="btn btn-primary btn-sm">Deconnexion</a></span><br><br>';   
            }
            ?>
            
            <br>
            <span class="badge badge-secondary">Date : <?php echo date('d/m/Y');?></span>
        </div>
    </div>
</header>
