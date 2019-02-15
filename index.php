<?php
session_start();
?>
<!doctype html>
<html lang="it">
  <head>
    <?php require('inc/meta.php'); ?>
    <?php require('inc/css.php'); ?>
    <style media="screen">
      .cardGroup .card{margin-bottom:10px;box-shadow: 0 .125rem .25rem rgba(0,0,0,.2)!important;}
    </style>
  </head>
  <body>
    <?php require('inc/nav.php'); ?>
    <div id="main" class="">
      <div class="container-fluid">
        <div class="row">
          <div class="col text-center py-2 border-bottom mainTitleGroup">
            <h1><span class="text-danger">A</span>rc-<span class="text-danger">T</span>eam <span class="text-danger">O</span>pen <span class="text-danger">R</span>esearch</h5>
            <h4 class="text-secondary">archeologia - informatica - open source</h4>
          </div>
        </div>
      </div>
      <div id="mappa" class="shadow"></div>
      <div class="container-fluid mt-5 cardGroup">
        <div class="row">
          <div class="col-md-4">
            <!-- Ator block start -->
              <div class="card ator">
                <div class="card-body p-0">
                  <h4 class="card-title bg-info text-white p-3">Geek corner <i class="fas fa-code float-right"></i></h4>
                  <p class="card-text p-4"><i class="fas fa-code fa-5x text-info float-left mr-3"></i> ATOR (Arc-Team Open Research) è un blog che nasce dall'esigenza di condividere le nostre esperienze in ambito informatico, i problemi riscontrati durante lo sviluppo di un software o i test su applicazioni varie, le soluzioni adottate per risolvere tali problemi. La vasta comunità internazionale che supporta il blog e l'alto livello tecnico degli utenti hanno reso il blog un punto di riferimento per tuto ciò che riguarda l'informatica applicata ai Beni Culturali...ma no solo! Di seguito gli ultimi post inseriti, in fondo il link alla pagina principale del blog.</p>
                </div>
              </div>
              <div class="card p-3">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              </div>
              <div class="card p-3">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              </div>
              <div class="card p-3">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              </div>
              <div class="card p-3">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              </div>
              <div class="card p-3">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              </div>
              <!-- Ator block end -->
              <!-- Youtube block start -->
              <div class="card youtube">
                <div class="card-body p-0">
                  <h4 class="card-title bg-danger text-white p-3">YouTube Channel <i class="fab fa-youtube-square float-right"></i></h4>
                  <p class="card-text p-4"><i class="fab fa-youtube fa-5x text-danger float-left mr-3"></i> Nel nostro canale YouTube potete vedere i video delle nostre attività principali, delle nostre missioni all'estero, oltre ad alcuni video tutorial sui software "open" usati maggiormente in archeologia. Di seguito gli ultimi video caricati, in fondo il link al nostro canale ufficiale</p>
                </div>
              </div>
              <div class="card p-3">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              </div>
              <div class="card p-3">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              </div>
              <div class="card p-3">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              </div>
              <div class="card p-3">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              </div>
              <div class="card p-3">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              </div>
            </div>
              <!-- toutube block end -->
            <div class="col-md-4">
              <!-- Post block start -->
              <div class="card postCard">
                <div class="card-body p-0">
                  <h4 class="card-title bg-warning text-white p-3">News from Arc-Team <i class="fas fa-comment-alt float-right"></i></h4>
                  <p class="card-text p-4"><i class="fas fa-comment-alt fa-5x text-warning float-left mr-3"></i> Notizie, eventi, nuovi progetti, nuovi cantieri e tante altre informazioni dal mondo Arc-Team. Di seguito gli ultimi post inseriti, in fondo il link per accedere all'archivio completo.</p>
                </div>
              </div>
              <div class="card p-3">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              </div>
              <div class="card p-3">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              </div>
              <div class="card p-3">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              </div>
              <div class="card p-3">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              </div>
              <div class="card p-3">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              </div>
              <!-- post block end -->
            </div>
            <div class="col-md-4">

            </div>
        </div>
      </div>
    </div>
    <?php require('inc/footer.php'); ?>
    <?php require('inc/lib.php'); ?>
    <script type="text/javascript">
      var osm = new ol.layer.Tile({ source: new ol.source.OSM() })
      var view = new ol.View({ center: ol.proj.fromLonLat([23, 45]), zoom: 5 })
      var map = new ol.Map({
        target: 'mappa',
        layers: [osm],
        view: view
      });
    </script>
  </body>
</html>
