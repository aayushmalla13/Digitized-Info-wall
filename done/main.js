console.log("Connected main");
$(".postevent").hide();
$(".postannouncment").hide();
$(".addnote").hide();
var postEvent=$(".postevent").html();
var postAnnouncment=$(".postannouncment").html();
var addNote=$(".addnote").html();


var controller=1;




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

var noofli=$(".eventsandannouncecoll li");
//Adding Events in Events Grid


$(".PostA").on("click",function(){
	console.log("Posted");
	var item= $(".announcmentinput").val();
	var Eventitem=item.fontcolor("#6c6c6d");
	$(".eventsandannouncecoll").prepend('<li><a href="#"><span class="tab">'+Eventitem+'</span></a></li>');
	$(".announcmentinput").val('');
	 noofli=$(".eventsandannouncecoll li");
	console.log(noofli.length);
	if(controller===1){
		showmore();
	}
	



});
$(".PostE").on("click",function(){
	console.log("Posted");
	var item= $(".eventinput").val();
	var Eventitem=item.fontcolor("#f44336");
	$(".eventsandannouncecoll").prepend('<li><a href="#"><span class="tab">'+"- "+Eventitem+'</span></a></li>');
	$(".eventinput").val('');
	 noofli=$(".eventsandannouncecoll li");
	console.log(noofli.length);
	if(controller===1){

	showmore();

		}

});
console.log($(window).width());

    
    var viewportWidth = $(window).width();
    
    
    $(window).resize(function () {
    
        if (viewportWidth < 1100) {
            console.log("small_Size");
        }
    });

 console.log(noofli.length);




function showmore(){
	if(noofli.length>18){
		
		$("ul").append('<li><a href="#"><span class="tab">See More</span></a></li>');
		controller=2;
	}
}