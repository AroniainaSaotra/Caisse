<?php

?>
<div class="container" style="width:400px; height:450px; border:2px solid red; text-align:center;" >
<form action="<?php echo site_url("commandecaisse/listeFinProd") ?>">
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