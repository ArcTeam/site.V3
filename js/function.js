const page = window.location.pathname.split('/').pop()
const observer = lozad();
observer.observe();
$(document).ready(function() {
  setDim();
  menuLink = page.split('.')[0];
  $("#nav a[href='"+menuLink+".php']").addClass('active');
  $(".submenu").on('click',function(){ $("#usrMenu").slideToggle('fast'); })
});

window.addEventListener("orientationchange", function() {
  window.setTimeout(function() {
    setDim();
  }, 200);
}, false);

function setDim(){
  nav = $("#nav").height()
  usrMenu = $("#usrMenu").is(':visible') ? $("#usrMenu").height() : 0;
  if (screen.width < 991) {
    $("#main").css({"margin-top": nav + usrMenu + 10})
  }else {
    $("#main").css({"margin-top": usrMenu + 10})
  }
}
function insta( doneCallback ) {
  tok = '4209263315.9bb57b2.a1220e62e7764389b63b905bd519c824'
  tag = 'archaeology'
  uri = 'http://www.arc-team.com'
  count = 30
  endpointUrl = 'https://api.instagram.com/v1/users/4209263315/media/recent/'
  return $.ajax({
    url: endpointUrl,
    dataType: 'jsonp',
    data: {access_token: tok,count:count}
  })
  .done(doneCallback)
  .fail(function() { console.log("error"); }).always(function() { console.log("complete"); });
}
function initMap(){
  osmUrl='https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
  osmAttrib='Map data © <a href="https://openstreetmap.org">OpenStreetMap</a> contributors';
  map = new L.Map('mappa');
  osm = new L.TileLayer(osmUrl, {minZoom:3,attribution: osmAttrib}).addTo(map);
  markers = L.markerClusterGroup();
  icone = {
    convegni : {icon: L.AwesomeMarkers.icon({icon: 'chalkboard-teacher', markerColor: 'red', prefix: 'fa'}) },
    didattica : {icon: L.AwesomeMarkers.icon({icon: 'graduation-cap', markerColor: 'green', prefix: 'fa'}) },
    documentazione : {icon: L.AwesomeMarkers.icon({icon: 'file-signature', markerColor: 'blue', prefix: 'fa'}) },
    informatica : {icon: L.AwesomeMarkers.icon({icon: 'laptop', markerColor: 'purple', prefix: 'fa'}) },
    laboratorio : {icon: L.AwesomeMarkers.icon({icon: 'flask', markerColor: 'cadetblue', prefix: 'fa'}) },
    scavo : {icon: L.AwesomeMarkers.icon({icon: 'university', markerColor: 'orange', prefix: 'fa'}) }
  }

  function createico(feature, latlng) {
    switch (feature.properties.tipo) {
      case 'convegni': return L.marker(latlng, icone.convegni); break;
      case 'didattica': return L.marker(latlng, icone.didattica); break;
      case 'documentazione': return L.marker(latlng, icone.documentazione); break;
      case 'informatica': return L.marker(latlng, icone.informatica); break;
      case 'laboratorio': return L.marker(latlng, icone.laboratorio); break;
      case 'scavo': return L.marker(latlng, icone.scavo); break;
    }
  }
  function bindPopUp (feature, layer) {
    popup = {
      convegni : "<strong>"+feature.properties.nome+"</strong><br>"+
                 "categoria: "+feature.properties.tipo+"<br>"+
                 "prima partecipazione: "+feature.properties.anno+"<br>"+
                 "successive partecipazioni: "+feature.properties.attivita+"<br>",
      didattica : "<strong>"+feature.properties.nome+"</strong><br>"+
                  "categoria: "+feature.properties.tipo+"<br>"+
                  "inizio lezioni: "+feature.properties.anno+"<br>"+
                  "cicli lezioni: "+feature.properties.attivita+"<br>",
      documentazione : "<strong>"+feature.properties.nome+"</strong><br>"+
                       "categoria: "+feature.properties.tipo+"<br>"+
                       "inizio incarico: "+feature.properties.anno+"<br>"+
                       "interventi effettuati: "+feature.properties.attivita+"<br>",
      informatica : "<strong>"+feature.properties.nome+"</strong><br>"+
                    "categoria: "+feature.properties.tipo+"<br>"+
                    "inizio incarico: "+feature.properties.anno+"<br>",
      laboratorio : "<strong>"+feature.properties.nome+"</strong><br>"+
                    "categoria: "+feature.properties.tipo+"<br>"+
                    "inizio incarico: "+feature.properties.anno+"<br>",
      scavo : "<strong>"+feature.properties.nome+"</strong><br>"+
              "categoria: "+feature.properties.tipo+"<br>"+
              "inizio incarico: "+feature.properties.anno+"<br>"+
              "interventi effettuati: "+feature.properties.attivita+"<br>"
    }
    switch (feature.properties.tipo) {
      case 'convegni': popup = popup.convegni; break;
      case 'didattica': popup = popup.didattica; break;
      case 'documentazione': popup = popup.documentazione; break;
      case 'informatica': popup = popup.informatica; break;
      case 'laboratorio': popup = popup.laboratorio; break;
      case 'scavo': popup = popup.scavo; break;
    }
    layer.bindPopup(popup);
  }

  $.getJSON('class/puntiMappa.php',function (data) {
    punti = L.geoJSON(data, {
      pointToLayer: createico,
      onEachFeature: bindPopUp
    });
    markers.addLayer(punti);
    map.addLayer(markers);
    map.fitBounds(markers.getBounds());

  });
  resetMap = L.Control.extend({
    options: { position: 'topleft'},
    onAdd: function (map) {
      var container = L.DomUtil.create('div', 'extentControl leaflet-bar leaflet-control leaflet-touch');
      btn=$("<a/>",{href:'#'}).appendTo(container);
      $("<i/>",{class:'fas fa-home'}).appendTo(btn)
      btn.on('click', function () {
        map.fitBounds(markers.getBounds());
      });
      return container;
    }
  })
  // coo = L.Control.extend({
  //   options: { position: 'topright'},
  //   onAdd: function (map) {
  //     cooWrap = L.DomUtil.create('div', 'extentControl leaflet-bar leaflet-control leaflet-touch');
  //     cooBtn=$("<button/>",{type:'button',class:'btn btn-light btn-sm',disabled:'disabled'}).appendTo(cooWrap).text('ciao');
  //     return cooWrap;
  //   }
  // })
  //
  // var lat, lng;
  // map.addEventListener('mousemove', function(ev) {
  //   lat = ev.latlng.lat;
  //   lng = ev.latlng.lng;
  //   cooWrap.innerHtml(lat+" | "+lng);
  // });

  map.addControl(new resetMap());
  // map.addControl(new coo());
  L.control.scale({imperial:false}).addTo(map);
  L.control.mousePosition({position:'topright'}).addTo(map);
}
