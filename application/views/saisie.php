<?php 
    $total=0;
    for($i=0;$i<count($achat);$i++){
        $total+=$achat[$i]->getMontant();
    }
?>
  <div class="container">

    <div class="row">

    <div class="col-md-6 col-md-offset-1">
        <b>Caisse numero <?php echo $idCaisse ?></b>
        <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
                    <tr>
                        <th>Produit</th>
                        <th>Prix Unitaire</th>
                        <th>Quantite</th>
                        <th>Montant</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php for($i=0;$i<count($achat);$i++) { ?>
                        <tr>
                            <td scope="row"><?php echo $achat[$i]->getNomProduit() ?></td>
                            <td scope="row"><?php echo $achat[$i]->getPrix() ?></td>
                            <td scope="row"><?php echo $achat[$i]->getQuantiteAchat() ?></td>
                            <td scope="row"><?php echo $achat[$i]->getMontant() ?></td>
                        </tr>
                        
                        <?php } ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Total</td>
                            <td> <?php echo $total ?></td>
                        </tr>
                    </tbody>
            </table>
    </div>

    <div class="col-md-6 col-md-offset-1">
        
        <form action="<?php echo site_url('Achat/commande') ?>" method="post">
            <div class="form-group pt-3">
                <label for="produit">Produit</label>
                <select class="form-control " name="produit" id="produit" required>
                    <option value="">choisissez</option>
                    <?php for($i=0;$i<count($produit);$i++){ ?>
                        <option value="<?php echo $produit[$i]->getIdAchat() ?>"><?php echo $produit[$i]->getNomProduit() ?></option>
                    <?php } ?>
                </select>

                <label for="nombre" class="pt-3">Nombre</label>
                    <input type="number" class="form-control " name="nombre" id="nombre" placeholder="nombre" required>
            </div>
            
            <Button class="btn btn-primary mb-3" name="button" >Valider</Button>
        </form>

    </div>
    
    

  </div>
  <!-- /.col-lg-3 -->

  <div class="col-lg-9">

    <div class="row ">

    </div>
    <!-- /.row -->

  </div>
  <!-- /.col-lg-9 -->

</div>
<!-- /.row -->

</div>
<!-- /.container -->