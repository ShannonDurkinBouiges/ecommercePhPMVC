<main class="container">
    <h2>Connectez vous</h2>
    <span><?= $message ?></span>
    <form method="post" action="index.php?entite=user&action=verif_connect">
        <div class="form-group">
            <label for="idLogin">Votre login : </label>
            <input type="text" class="form-control" id="idLogin" name="login">
        </div>
        <div class="form-group">
            <label for="idPsw">Votre mot de passe : </label>
            <input type="password" class="form-control" id="idPsw" name="psw">
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
    </form>
</main>

