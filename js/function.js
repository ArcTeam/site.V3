const page = window.location.pathname.split('/').pop()
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
