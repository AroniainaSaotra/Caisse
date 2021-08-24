
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
        <br>
        <form action="<?php echo site_url('Accueil/choix') ?>" method="POST">   
            <div class="form-group">
                <label for="caisse"><h3>Choissir une caisse</h3></label>
                <select class="form-control" name="caisse" id="caisse">
                    <?php for($i=0;$i<count($caisse);$i++) { ?>
                        <option value="<?php echo $caisse[$i]->getId() ?>"><?php echo $caisse[$i]->getNumero() ?></option>
                    <?php } ?>
                </select>
            </div>
            <Button class="btn btn-primary mb-5">Valider</Button>
        </form>     

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