console.log("Connected main");
$(".postevent").hide();
$(".postannouncment").hide();
$(".addnote").hide();
var postEvent=$(".postevent").html();
var postAnnouncment=$(".postannouncment").html();
var addNote=$(".addnote").html();







$(".Notes").on("click",function(){//Opening file browsers on clicking Note button
	//console.log("clicked");
	$(".item1-contain").hide();
	$(".postevent").hide();
	$(".postannouncment").hide();
	$(".addnote").show();
	//$(".collector").html(addNote);

});

$(".Events").on("click",function(){//Opening add note interface on clicking Event Button
	//console.log("clicked");
	$(".item1-contain").hide();
	$(".postevent").show();
	$(".postannouncment").hide();
	$(".addnote").hide();

	});




$(".Announcements").on("click",function(){//Opening add Announcments on clicking Announcement Button
	//console.log("clicked");
	$(".item1-contain").hide();
	$(".postevent").hide();
	$(".postannouncment").show();
	$(".addnote").hide();

	});


//Adding Events in Events Grid


$(".PostA").on("click",function(){
	console.log("Posted");
	var item= $(".announcmentinput").val();
	var Eventitem=item.fontcolor("#6c6c6d");
	$("ul").prepend("<li>"+ Eventitem +"</li>");
	$(".announcmentinput").val('');


});
$(".PostE").on("click",function(){
	console.log("Posted");
	var item= $(".eventinput").val();
	var Eventitem=item.fontcolor("#f44336");
	$(".EA").prepend("<li>"+ Eventitem +"</li>");
	$(".eventinput").val('');


});



$(".navbar-toggler").on("click",function(){

	console.log("clicked");
	$(".grid-container").toggleClass("grd");
});


