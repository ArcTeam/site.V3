<?php
session_start();
?>
<!doctype html>
<html lang="it">
  <head>
    <?php require('inc/meta.php'); ?>
    <?php require('inc/css.php'); ?>
    <style media="screen">
      .cardGroup .card, .nocard{margin-bottom:10px;box-shadow: 0 .125rem .25rem rgba(0,0,0,.2)!important;}
      .leaflet-container .leaflet-control-mouseposition {
        background-color: rgba(255, 255, 255, 0.7);
        box-shadow: 0 0 5px #bbb;
        padding: 0 5px;
        margin:0;
        color: #333;
        font: 11px/1.5 "Helvetica Neue", Arial, Helvetica, sans-serif;
      }
    </style>
    <link rel="stylesheet" href="css/bgFade.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css" />
    <link rel="stylesheet" href="lib/leaflet-awesome/leaflet.awesome-markers.css" />
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
      <div class="container-fluid mt-5 presentazione">
        <div class="row">
          <div class="col">
            <div class="presWrap">
              <div class="presImg"></div>
              <div class="presText rounded shadow">
                <div>
                  <p class="h4 mainTitleGroup border-bottom">Cos'è <span class="text-danger">A</span>rc-<span class="text-danger">T</span>eam</p>
                  <p>Archeologi di formazione ma informatici nell'animo, e proprio archeologia e informatica sono i cardini su cui si basa il nostro lavoro.<br>La nostra storia parte dall'ormai lontano 2005 ed è stata subito chiara la strada che volevamo percorrere: sperimentare nuove tecnologie informatiche per migliorare il lavoro dell'archeologo...tutto rigorosamente Open Source.</p>
                  <p>Negli anni abbiamo avuto la possibilità di approfondire determinati argomenti quali modellazione 3d, fotogrammetria, rilievi topografici, sviluppo di applicazioni web based, gestione di sistemi di reti, modellazione database, GIS sia desktop che web</p>
                  <p>Un aspetto del nostro lavoro per noi di fondamentale importanza è la <strong>condivisione</strong> della conoscenza, per questo abbiamo deciso di aprire un blog in cui condividiamo tutti le nostre sperimentazioni in campo informatico, in modo da confrontarci con altri ricercatori e, da questo confronto, cercare di migliorare...dai un'occhiata alla sezione <strong>Geek corner</strong>, magari qualche argomento potrebbe incuriosirti!</p>
                  <p>Sempre in un'ottica di condivisione, abbiamo deciso di pubblicare liberamente tutti i nostri lavori, sia su questso sito che su piattaforme specifiche come Academia.edu o ResearchGate, nella sezione <strong>OpenData</strong> troverai un po' di questo materiale...speriamo interessante!</p>
                  <p class="h5 mainTitleGroup">Buona navigazione!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid mt-5 cardGroup">
        <div class="row">
          <div class="col-md-4">
            <!-- Ator block start -->
              <div class="card ator">
                <div class="card-body p-0">
                  <h4 class="card-title bg-info text-white p-3">Geek corner <i class="fas fa-code float-right"></i></h4>
                  <p class="card-text p-4"><i class="fas fa-code fa-5x text-info float-left mr-3"></i> ATOR è un blog che nasce dall'esigenza di condividere le nostre esperienze in ambito informatico, i problemi riscontrati durante lo sviluppo di un software o i test su applicazioni varie, le soluzioni adottate per risolvere tali problemi. La vasta comunità internazionale che supporta il blog e l'alto livello tecnico degli utenti hanno reso il blog un punto di riferimento per tuto ciò che riguarda l'informatica applicata ai Beni Culturali...ma no solo! Di seguito gli ultimi post inseriti, in fondo il link alla pagina principale del blog.</p>
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
              <div class="card instagram">
                <div class="card-body p-0">
                  <h4 class="card-title bg-instagram text-white p-3">Instagram <i class="fab fa-instagram float-right"></i></h4>
                  <p class="card-text p-4"><i class="fab fa-instagram fa-5x text-instagram float-left mr-3"></i> Nel nostro profilo Instagram raccogliamo tutte le immagini più significative dei nostri lavori in giro per l'Italia...e anche un po' per il mondo! Se ti va fai un salto sul nostro <a href="https://www.instagram.com/arcteamarchaeology/" target="_blank" title="pagina ufficiale di Instagram">profilo Instagram</a></p>
                </div>
              </div>
              <div class="p-3 instaWrap bg-white rounded shadow nocard"></div>
              <div class="p-3 bg-instagram text-white rounded"><a href="https://www.instagram.com/arcteamarchaeology/" target="_blank" title="[link esterno] Seguici su Instagram" class="text-white" style="font-size:15px;"><i class="fab fa-instagram"></i> Seguici su Instagram</a></div>
            </div>
            <div class="col-md-4">
              <!-- Post block start -->
              <div class="card opendata">
                <div class="card-body p-0">
                  <h4 class="card-title bg-success text-white p-3">OpenData Documents <i class="fab fa-creative-commons float-right"></i></h4>
                  <p class="card-text p-4"><i class="fab fa-creative-commons fa-5x text-success float-left mr-3"></i>La libera circolazione delle idee è alla base del nostro lavoro, per questo abbiamo dedicato una sezione del nostro sito alla condivisione di pubblicazioni, articoli scientifici e presentazioni che la nostra ditta ha prodotto negli anni. Alcuni articoli sono su Academia.edu, altri su Research Gate. Di seguito i link alle ultime risorse pubblicate.</p>
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
              <div class="card twitter mt-5">
                <div class="card-body p-0">
                  <h4 class="card-title bg-twitter text-white p-3">Twitter <i class="fab fa-twitter-square float-right"></i></h4>
                  <p class="card-text p-4"><i class="fab fa-twitter text-twitter fa-5x float-left mr-3"></i> Arc-Team è anche su Twitter! Segui <a href="https://twitter.com/ArcTeamArch" target="_blank" title="pagina ufficiale di twitter ">@ArcTeamArch</a> per rimanere sempre aggiornato sulle nostre attività, sui nuovi progetti o semplicemente per condividere con noi alcune riflessioni</p>
                </div>
                  <a class="twitter-timeline" data-height="500" href="https://twitter.com/ArcTeamArch?ref_src=twsrc%5Etfw">Tweets by ArcTeamArch</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
              </div>
              <div class="p-3 bg-twitter text-white rounded"><a href="https://twitter.com/ArcTeamArch" target="_blank" title="[link esterno] Seguici su Twitter" class="text-white" style="font-size:15px;"><i class="fab fa-twitter-square"></i> Seguici su Twitter</a></div>
            </div>
        </div>
      </div>
    </div>
    <?php require('inc/footer.php'); ?>
    <?php require('inc/lib.php'); ?>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
    <script src="lib/bgFade.js" charset="utf-8"></script>
    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js" integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg==" crossorigin=""></script>
    <script src="lib/leaflet-awesome/leaflet.awesome-markers.js" charset="utf-8"></script>
    <script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js" charset="utf-8"></script>
    <script src="lib/L.Control.MousePosition.js" charset="utf-8"></script>

    <script src="js/function.js"></script>

    <script type="text/javascript">
      initMap()
      $(".feedburnerFeedBlock > ul")
        .find('li')
        .replaceWith(function(){
          return $("<div />", {class:"card p-3",html: $(this).html()});
        })
      $(".feedburnerFeedBlock > ul").replaceWith(function(){
        return $("<div />", {html: $(this).html()});
      })
      $(".feedburnerFeedBlock .headline>a").addClass('d-block text-info p-1 border-bottom border-info')
      $(".feedburnerFeedBlock p.date").addClass('small')
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

      });
      insta( function( data ) {
        $.each(data.data, function(i,v){
          img = v.images.low_resolution.url
          w = $(".instaWrap").width() / 3
          $("<img/>",{class:'d-inline-block m-0 p-0 lozad',width:w}).attr("data-src",img).appendTo('.instaWrap')
          observer.observe();
        })
      })
      $.post('class/funzioni.php', {funzione:'randomBg'}, function(imgList) {
        $(".presImg").fadeShow({ correctRatio: true, shuffle: true, speed: 5000, images: imgList});
      }, 'json');
    </script>
  </body>
</html>
