<?php
$prod=$_GET['prod'];
$prodjouet=$_GET['prodjouet'];

$total=0;
for($i=0;$i<count($achat);$i++){
    $total+=$achat[$i]->getMontant();
}
?>
<div class="container" style="width:400px; height:450px; border:2px solid red; text-align:center;" >

    <table class="table" style="width:400px; height:450px;">  
  <caption><h2>Nouriture</h2></caption>
  <thead>
    <tr>
      <th scope="col">Images</th>
      <th scope="col">Nom du Produit</th>
      <th scope="col">Prix</th>
    </tr>
  </thead>
</br>
  <tbody>

    <tr>
    <?php for($i=0;$i<count($prod);$i++) { ?> 
        <td> <?php echo $prod[$i]->getImages() ?></td>
        <td> <?php echo $prod[$i]->getNom() ?></td>
        <td> <?php echo $prod[$i]->getPrix() ?></td>  
    <?php } ?> 
    </tr>
    
  </tbody>
</table>
</form>
</div>

<div class="container" style="float:rigth; width:400px; height:450px; border:2px solid red; text-align:center; margin-left:450px; margin-top:10px;" >

    <table class="table" style="width:400px; height:450px;">  
  <caption><h2>Jouets</h2></caption>
  <thead>
    <tr>
      <th scope="col">Images</th>
      <th scope="col">Nom du Produit</th>
      <th scope="col">Prix</th>
    </tr>
  </thead>
</br>
  <tbody>

    <tr>
    <?php for($i=0;$i<count($prod);$i++) { ?> 
        <td> <?php echo $prodjouet[$i]->getImages() ?></td>
        <td> <?php echo $prodjouet[$i]->getNom() ?></td>
        <td> <?php echo $projouetd[$i]->getPrix() ?></td>  
    <?php } ?> 
    </tr>
    
  </tbody>
</table>
</form>
</div>

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
                            <td scope="row"><?php echo $achat[$i]->getNom() ?></td>
                            <td scope="row"><?php echo $achat[$i]->getPrix() ?></td>
                            <td scope="row"><?php echo $achat[$i]->getQuantite() ?></td>
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