<!DOCTYPE html>
<html lang="en">
<head>
    <title> About Github</title>
      <meta charset="utf-8">
   <!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   <script src="https://kit.fontawesome.com/441d92d2d1.js" crossorigin="anonymous"></script>
    
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
       #menu{width:100%;
        display:none;
        z-index:5;
        position:fixed;}
  #menu ul{background:#222;}
  
    .uli li{list-style:none; 
 border-bottom:1px solid rgba(0,0,0,0.2);
 padding-left:15px;}
 
  	 	.uli{padding:0px;
    border:1px solid rgba(0,0,0,0.2);
  	   }
     
     hr{ 
     							background:black;
     							height:2px;
     							width:23px;
     							margin:5px;}
     				#toggle{
     								 z-index:6;
     								position:fixed;
     								  left:10px;
     								  top:10px;
     								}
      	.col-md-3{
     						border-right:2px solid black;}
    
     #header{padding-left:50px;
        background:white;
        position:fixed;
        padding-top:10px;
        width:100%;
        height:50px;
        box-shadow:0px 1px 10px black;}
    
    </style>
   
</head>
<body>
   <div class="d-md-none">
     <div id="toggle" class="d-md-none"> 
        <hr><hr><hr>
      </div>
      <div id="menu">
       <ul class="uli">
         <li class="text-white ml-5 mt-2"><h4>Blog Dev</h4></li>
        <a href="#"><li class="pt-1 pb-1"><h5><i class="fa fa-home"></i> &nbsp Home</h5></li></a>
        
        <a href="#"><li class="pt-1 pb-1"><h5><i class="fas fa-layer-group"></i> &nbsp Blog</h5></li></a>
        
       <a href="about.html"><li class="pt-1 pb-1"><h5><i class="fa fa-user"></i> &nbspAbout me</h5></li></a>
       </ul>
      </div>
         
      <div id="header" class="d-md-none">
        <h4>Blog Dev</h4>
      </div>
    </div>
    
    
    
    </div>
    
 <div class="bg-dark text-white pl-3 p-1 d-none d-md-block"><h4>Blog Dev</h4></div>
 <div class="container-fluid">
  <div class="row">
    <div class="col-md-9 order-md-2 p-0">
      <div class="mt-md-0 mt-5 pt-4 pt-md-1">
        <center><h3>Github</h3></center>
      </div>
     </div>
    <div class="col-md-3 order-md-1">
     <!-- links-->
    </div>
  </div>
</div>
</body>
</html>

<script>
 
 $(document).ready(function(){
  										
  					
$("#toggle").on("click", function(){
				$("#menu").toggle("slide");
			
				   });
				   
				
				   
 	});
  				
  </script>
