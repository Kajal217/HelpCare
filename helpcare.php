<!-- // Kajal Sheth
-->
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
        
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" /> 

   
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <style>
    .jumbotron{
      
      background: #F8F8FF;
      color: black;
      text-align: center;

    }
    .jumbotron p{
      color: black;

    }
  </style>
          
        
  </head>

  <body>

    
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
     	<a class= "navbar-brand"  > HelpCare </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">   
          <ul class="navbar-nav">
            <?php
              session_start();


               if (isset($_SESSION['user'])) {
                 #is there is cookie/there is a session, then the user has the ability to logout
               ?>
                <li class="nav-item"> 
              <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class = 'nav-item'>
                <a class = 'nav-link' href ='profile.php'>Profile</a>
                <li class = 'nav-item'>
                <a class = 'nav-link' href ='login.php'>Login</a>
                </li> 
              
<?php
}
                else {
                  #if there is no session, there is no cookie saved, the user can still login
                 ?>


              
              <li class="nav-item"> 
              <a class="nav-link" href="http://localhost:4200">Contact</a>
            </li>
            <li class = 'nav-item'>
                <a class = 'nav-link' href ='login.php'>Log In</a>
              </li>
                                       
        <?php
        } ?>    
            
            
          </ul>
        </div>  
      </nav>

 
    <div class= "jumbotron">
      <div class = "container">
        <h1> Connecting People</h1>
        <p> We can help connect you to your best options! </p>
        <p> 
          <a class= "btn btn-primary btn-lg" href= "search.php" role= "button"> Search For A Provider </a>   <!-- this button redirects to search page --> 
        </p>
      </div>
    </div>
     <div class= "container">
      <div class= "row">
          
         

        <div class= "col-md-4", style= "float:center">   
          <h3> Enroll in a Plan </h3>
          <p> Already know who you want? Enroll today! </p>
          <a class= "btn btn-primary btn-lg" href= "" role= "button"> Enroll </a>
          
          <style>
            
              .button { 

                background-color: #0000FF; 
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
    }
          .div{
            float: left;
            text-align:center;
          }
        </style>

        </div>

                <div class= "col-md-4", style="position:absolute; left:800px; top:375px;">
          <h3> Find Benefits</h3>
          <p> Not sure what you're looking for? See what companies have to offer! </p>
          <a class= "btn btn-primary btn-lg" href= "university.html" role= "button"> Find </a>
          <style>
          .div{
            float: right;
            text-align: center;
          }
        
          
              .button {
                background-color: #0000FF; 
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
    }
   </style>
        </div>



        <div class = "search">
          <div class = 'icon'>



          </div>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link type="text/css" rel="stylesheet" href="main_styles.css" />
    <script src="./Bootstrap example_files/jquery.min.js"></script>
    <script src="./Bootstrap example_files/bootstrap.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> if you downloaded bootstrap to your computer -->
    
  
</body></html>