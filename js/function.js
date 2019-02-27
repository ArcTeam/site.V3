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
  var osm = new ol.layer.Tile({ source: new ol.source.OSM() })
  var view = new ol.View({ center: ol.proj.fromLonLat([23, 45]), zoom: 5 })
  var map = new ol.Map({ target: 'mappa', layers: [osm], view: view });
}
