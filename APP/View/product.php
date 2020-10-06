<main class="container">
    <div id="msg" style="float:right">Produit ajouté au panier</div>
    <h2>Liste des produits de la catégorie <?= $categ ?></h2>
    <table class="table table-bordered">
        <thead id="ligne">
            <tr>
                <th class="text-center w-10">REFERENCE</th>
                <th class="w-60">DESCRIPTION</th>
                <th class="text-center w-10">PRIX<br>UNITAIRE</th>
                <?php
                if ($connect){
                    echo '<th class="text-center w-10">QUANTITE</th>';
                    echo '<th class="text-center w-10">AJOUTER<br>AU PANIER</th>';
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($products as $product) {
                echo '<tr><td>' . $product->getRef() . '</td><td>' . $product->getLibelle() . '</td><td>' . $product->getPrix() . '</td>';
                if ($connect){
                    echo '<td><input id="'.$product->getRef().'" style="width:50px" type="number" min="1" value="1"></td><td><button onclick="requete(this)" data-ref="'.$product->getRef().'" class="btn btn-primary btn-sm">+</button></td>';
                }
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
    <script>
        function requete(bouton){
            ref = bouton.dataset.ref;
            qtt = $("#"+ref).val();
            //alert(qtt);
            url = 'index.php?entite=panier&action=ajout&ref='+ref+'&qtt='+qtt;
            $.ajax(url).done(function (){
                $("#msg").show(1000).delay(2000).hide(1000);
                //alert('ok');
            }).fail(function (jqXHR, textStatus){
                alert("Erreur " + textStatus);
            });
        }
        
        $(document).ready(function (){
            $("#msg").hide();
        });
    </script>
</main>

