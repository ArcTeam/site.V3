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
  if (screen.width < 991) {
    $("#main").css({"margin-top":$("#nav").height() + 10})
  }else {
    $("#main").css({"margin-top":"0"})
  }
}
