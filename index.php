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
              <script src="http://feeds.feedburner.com/blogspot/YduRN?format=sigpro" type="text/javascript" ></script>
              <noscript><p>Subscribe to RSS headline updates from: <a href="http://feeds.feedburner.com/blogspot/YduRN"></a><br/>Powered by FeedBurner</p> </noscript>
              <!-- Ator block end -->
              <!-- Youtube block start -->
              <div class="card youtube mt-5">
                <div class="card-body p-0">
                  <h4 class="card-title bg-danger text-white p-3">YouTube Channel <i class="fab fa-youtube-square float-right"></i></h4>
                  <p class="card-text p-4"><i class="fab fa-youtube fa-5x text-danger float-left mr-3"></i> Nel nostro canale YouTube potete vedere i video delle nostre attività principali, delle nostre missioni all'estero, oltre ad alcuni video tutorial sui software "open" usati maggiormente in archeologia. Di seguito gli ultimi video caricati, in fondo il link al nostro canale ufficiale</p>
                </div>
              </div>
              <div class="youtubeFeed"></div>
              <div class="p-3 bg-danger text-white rounded"><a href="https://www.youtube.com/channel/UCa-GKE-c3Be1k8g0nqoawxw" target="_blank" title="[link esterno] Visualizza tutti i video del nostro canale" class="text-white" style="font-size:15px;"><i class="fab fa-youtube-square"></i> Visualizza tutti i video del nostro canale</a></div>
            </div>
              <!-- youtube block end -->
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
      $(".feedburnerFeedBlock > ul")
        .find('li')
        .replaceWith(function(){
          return $("<div />", {class:"card p-3",html: $(this).html()});
        })
      $(".feedburnerFeedBlock > ul").replaceWith(function(){
        return $("<div />", {html: $(this).html()});
      })
      $(".fbsubscribelink")
      .prepend('<a href="http://arc-team-open-research.blogspot.it/" title="[link esterno] Vai alla pagina iniziale di ATOR" target="_blank"><i class="fab fa-blogger-b" aria-hidden="true"></i> Visita il nostro blog</a>')
      .replaceWith(function(){
        div = $("<div />", {class:"p-3 bg-info text-white rounded",html: $(this).html()});
        div.find('a')
          .addClass('text-white d-inline-block')
          .css({"font-size":"15px"})
          .eq(1)
          .addClass('float-right')
          .find('img')
          .replaceWith('<i class="fas fa-rss"></i>')
        return div;
      })
      $("#creditfooter").remove()

      var k="AIzaSyCN8A47a_r_cz0gW8cy1JXBQAs_nnOOSw0";
      var c="UCa-GKE-c3Be1k8g0nqoawxw";
      var u = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyCN8A47a_r_cz0gW8cy1JXBQAs_nnOOSw0&channelId=UCa-GKE-c3Be1k8g0nqoawxw&part=snippet,id&order=date&maxResults=5';
      $.getJSON(u, function(data) {
        trovati = [];
        $.each(data.items, function(k,v) {
          url = "http://www.youtube.com/watch?v="+v.id.videoId
          urlFrame = "https://www.youtube.com/embed/"+v.id.videoId
          div = $("<div/>",{class:'card p-3'}).appendTo('.youtubeFeed')
          a = $("<a/>",{href:url, text:v.snippet.title, class:'h5 text-danger'}).appendTo(div)
          iframe = $("<iframe/>",{width:"100%",src:urlFrame, frameborder:'0',allowFullScreen:'allowFullScreen'}).appendTo(div)
        });

        getJson = 'https://api.instagram.com/v1/users/self/media/recent/?'
        insta( getJson, function( data ) {
          console.log(data);
        })

        function insta( endpointUrl, doneCallback ) {
          return $.ajax({
            url: endpointUrl,
            dataType: 'jsonp',
            data: {access_token: '4209263315.9bb57b2.a1220e62e7764389b63b905bd519c824'}
          })
          .done(doneCallback)
          .fail(function() {
            console.log("error");
          })
          .always(function() {
            console.log("complete");
          });

        }



      });
    </script>
  </body>
</html>
