

setTimeout(function(){
  $(".preloader").css("transition", "0.3s ease all");
  $(".preloader").css("opacity", "0");
  $(".preloader").css("z-index", "-1");

  $("body").css("overflow", "scroll");
}, 1000);


setTimeout(function(){
  $(".animated").addClass('active');

}, 2000);


$(document).on("mousemove","html",function(e){ 
var x = e.clientX;
var y = e.clientY;
var newposX = -x/100;
var newposY = -y/50;
$(".hobbies-left").css("transform","translate3d("+newposX+"px,"+newposY+"px,0px)");
});