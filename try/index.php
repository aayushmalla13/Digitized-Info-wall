<!DOCTYPE html>
<html>
<head>
  <title>Main</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="index.css">
  
  <style type="text/css">.size{height: 69px;}</style>
</head>
<body>

<div id="nav">
  <?php include 'nav.php'; ?>
  
</div>

<div class="grid-container">
    <div class="item1">
      <div class="buttoncollection">
        <button type="submit" class="Notes">Notes</button>
        <button type="submit" class="Events">Events</button>
        <button type="submit" class="Announcements">Announcements</button>
      </div>  
        <div class="item1-contain">
          <h2 class="askinghead">What Would you like to do?</h2>
          <div class="options">
            <div class="brief addnotes"><h4>You can add Notes</h4></div>
            <div class="brief postevents"><h4>You can post Events</h4></div>
            <div class="brief postannouncments"><h4>Post Announcments</h4></div>
          </div>

        </div>
        <div class="collector">
          
        </div>
        <div class="addnote">
            <h2 class="askingnote">Share Your Note</h2>
            
              <input type="file" class="browsenote" name="" accept="">
            <input type="button" class="uploadnote" value="upload">
          
        
        </div>  
        <div class="postevent">
          <div><h2 class="eventh2">Add Event and let others know</h2>
        <input class="eventinput" id="" type="text" name="" placeholder="Add Event"></div>
          
          <button type="submit" class="PostE">Post</button>


        </div>
        <div class="postannouncment">
        <div><h2 class="announcmenth2">Add Announcment and let others know</h2>
        <input class="announcmentinput" id="" type="text" name="" placeholder="Add Announcment"></div>            
          <button type="submit" class="PostA">Post</button>

        </div>

      
    














    </div>
    


  
  <div class="item2">
     <h4 style="color: #f44336">Events <span style="color: black">&</span> <span style="color:#6c6c6d">Announcments</span></h4>
      <ul class="EA">
        


        
      </ul>







  </div>
    <div class="item3">View</div>  
    <div class="item4">
      <h4>Recent Activities</h4>



    </div>
    <div class="item5">Calendar</div>
    <div class="item6">Notes</div>
  </div>
    
</div>










<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="main.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

</body>
</html>