$(document).ready(function() {
  btnGroupClass(screen.width)
  page = window.location.pathname.split('/').pop()
  menuLink = page.split('.')[0];
  $("#nav a[href='"+menuLink+".php']").addClass('active');
  $(".submenu").on('click',function(){ $("#usrMenu").slideToggle('fast'); })
});

window.addEventListener("orientationchange", function() {
  window.setTimeout(function() {
    btnGroupClass(screen.width)
  }, 200);
}, false);

function btnGroupClass(mq){
  if (mq < 992) {
    $("#usrMenu").find('.btn-group').addClass('btn-group-sm')
  }else {
    $("#usrMenu").find('.btn-group').removeClass('btn-group-sm')
  }
}
