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
  osm = new L.TileLayer(osmUrl, {attribution: osmAttrib}).addTo(map);
  markers = L.markerClusterGroup();

  var pointStyle = {
    radius: 8,
    fillColor: "#ff7800",
    color: "#000",
    weight: 1,
    opacity: 1,
    fillOpacity: 0.8
  };

  $.getJSON('class/puntiMappa.php',function (data) {
    console.log(data);
    punti = L.geoJSON(data, {
      onEachFeature: function (feature, layer) {
        layer.bindPopup(
          "<strong>"+feature.properties.nome+"</strong><br>"+
          "inizio incarico: "+feature.properties.anno+"<br>"+
          "interventi effettuati: "+feature.properties.attivita+"<br>"
        );
      }
    });
    markers.addLayer(punti);
    map.addLayer(markers);
    map.fitBounds(markers.getBounds());

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

    map.addControl(new resetMap());
  });
}
