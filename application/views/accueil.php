
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
        <br>
          
            <div class="form-group">
                <label for="caisse"><h3>Choisissez une caisse</h3></label>
                  <?php for($i=0;$i<count($caisse);$i++) { ?>
                    <button type="button" class="btn btn-light"><a href="<?php echo base_url('accueil/tsotra') ?>">
                    <?php echo $caisse[$i]->getNumero() ?></a></button>
                    <?php } ?> 
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