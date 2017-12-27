console.log("Connected JS");
var myIndex =0;
show();
function show()
{	var i;
	var slideShow = document.getElementsByClassName("Slides");
	for(i =0; i<slideShow.length;i++)
	{
		slideShow[i].style.display="none";
	}
	myIndex++;
	if(myIndex>slideShow.length)
		{ myIndex=1}
	slideShow[myIndex-1].style.display="block";
	setTimeout(show,2000);
}