<!DOCTYPE html>
<html>
<head>
	<title>Main</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	
  
	
	<link rel="stylesheet" type="text/css" href="index.css">
	
	
	
</head>
<body>

<div id="nav">
	<?php include 'nav.php'; ?>
	
</div>

<div class="row">

  <div class="item2 col-lg-3">
    <h4 style="color: #f44336">Events <span style="color: black">&</span> <span style="color:#6c6c6d">Announcments</span></h4>
      <ul class="eventsandannouncecoll">
        
        
      </ul>







  </div>

  	<div class="item1 col-lg-6">
  		<div class="buttoncollection">
  			<button type="submit" class="Notes">Notes</button>
  			<button type="submit" class="Events">Events</button>
  			<button type="submit" class="Announcements">Announcements</button>


  		</div>	
  			<div class="item1-contain">
  				<h2 class="askinghead">What Would you like to do?</h2>
  				<div class="options">
  					<div class="brief addnotes"><h4>You can add Notes</h4></div>
  					<div class="brief postevents"><h4>You can Post Events</h4></div>
  					<div class="brief postannouncments"><h4>Post Announcments</h4></div>
  				</div>

  			</div>
  			
  			<div class="addnote">
  					
            <h2 class="askingnote">Share Your Note</h2>
                          <label for="">Subject:</label>
                          <input id="" type="text" name="NoteSub">
  					
  						<input type="file" class="browsenote" name="" accept="">
 					 	<input type="button" class="uploadnote" value="upload">
 					
				
  			</div>	
  			<div class="postevent">
  				
  					<h1 class="eventlabel" for="groupname">Add Event and let others know</h1>
              <label for="">Event Subject:</label>
				<input class="eventinput" id="" type="text" name="" placeholder="Add Event">
  				
          <div>
            <label class="eventtextlabel" for="">Body:</label>
            <textarea cols="55" rows="3" charswidth="23" class="eventarea" name="text_body"></textarea>
            <label>OR</label>
             <input type="file" class="browseevents" name="" accept="">
            </div>

  				<button type="submit"  class="PostE">Post</button>


  			</div>
  			<div class="postannouncment">
				<div><h2 class="announcmentlabel" for="groupname">Add Announcment and let others know</h2>
          <label for="">Announcement Subject:</label>
				<input class="announcmentinput" id="" type="text" name="" placeholder="Add Announcment"></div>  			
        <div>
            <label class="eventtextlabel" for="texta">Body:</label><textarea id="texta" cols="55" rows="3" charswidth="23" class="announcearea" name="text_body"></textarea>
            <label>OR</label>
             <input type="file" class="browseannounce" name="" accept="">
          </div>		
  				<button type="submit" class="PostA">Post</button>

  			</div>

  		
    














    </div>
  	

<div class="item4 col-lg-3">
      <h4>Recent Activities</h4>



    </div>
  
 </div>
 <div class="row"> 
  <div class="item6 col-lg-3">Notes</div>
  	<div class="item3 col-lg-6">View</div>  
  	
  	<div class="item5 col-lg-3">Calendar</div>
  	
  </div>
  	
</div>














<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
<script type="text/javascript" src="main.js"></script>

</body>
</html>