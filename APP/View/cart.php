<main class="container">
    <h2>Votre panier</h2>
    <table class="table table-bordered">
        <thead id="ligne">
            <tr>
                <th class="text-center w-10">REFERENCE</th>
                <th class="w-60">DESCRIPTION</th>
                <th class="text-center w-10">PRIX<br>UNITAIRE</th>
                <th class="text-center w-10">QUANTITE</th>
                <th class="text-center w-10">PRIX HT</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($panier as $ref => $article) {
                echo '<tr><td>' . $ref . '</td><td>' . $article->getProduit()->getLibelle() . '</td><td>' . $article->getProduit()->getPrix() . '</td>';
                echo '<td>'.$article->getQuantite().'</td><td>'.$article->getPrixHT().'</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
        <tfoot>
            <tr><td colspan="4" style="text-align: right">Total </td><td><?= $montant ?></td></tr>
        </tfoot>
    </table>
    <script>
        function requete(bouton){
            ref = bouton.dataset.ref;
            qtt = $("#"+ref).val();
            //alert(qtt);
            url = 'index.php?entite=panier&action=ajout&ref='+ref+'&qtt='+qtt;
            $.ajax(url);
        }
    </script>
</main>

