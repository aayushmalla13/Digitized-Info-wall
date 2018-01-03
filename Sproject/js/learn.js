console.log("Connected");
var loginform = $(".lform").html();
var signupform=$(".sform").html();
var slideshow=$(".slide").html();
;
$(".sform").css("display", "none"); 
$(".lform").css("display", "none");


$(".login").on("click",function(){
	$(".slide").css("display","none")
	$(".contain").html(loginform);

});

$(".signup").on("click",function(){
	$(".slide").css("display","none")
	$(".contain").html(signupform);
});










/*$(".login").on("click",function (){
	$(".lform").css("visibility", "visible");
	$(".sform").css("visibility", "hidden");
});
$(".signup").on("click",function (){

	$(".sform").html()=signform;
	$(".sform").css("visibility","visible");



	/*$(".lform").css("visibility", "hidden");
	$(".sform").css("visibility", "visible");*/
