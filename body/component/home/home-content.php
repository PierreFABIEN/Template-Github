<div class="col-12 home-content">

  <div class="col-12 home-content-brand">
    <div class="row home-content-brand--colonne">
      <div class="col-12 home-content-brand--colonne---logo">
        <img class="rounded mx-auto d-block img-fluid" src="asset/img/logo.png" alt="logo">
      </div>
      <div class="col-12 mx-auto home-content-brand--colonne---subtitle">
        Lorem ipsum dolor sit amet.
      </div>
    </div>
  </div>
  <div class="col-12 home-content-search">
    <div class="col-8 col-sm-6 mx-auto">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for...">
        <span class="input-group-btn">
      <button class="btn btn-secondary" type="button" data-toggle="modal" data-target="#myModal">Go!</button>
    </span>
        <div class="modal fade" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title mx-auto">Nous pouvons vous aider!</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                <p>Si vous n'avez aucun article proposé pour votre recherche, grace au numero:</p>
                <p class="modal-body--numero">118 001</p>
                <p>nous pourrons vous mettre en relation avec l'interlocuteur que vous recherchez.</p>
<div class="row">
                <div class="col-12 col-sm-12 blog-content-card--colonne---section">
                  <div class="col-10 blog-content-card--colonne---section----box mx-auto">
                    <?php
              include __DIR__.'/../card.php';
              ?>
                  </div>
                </div>
                </div>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
