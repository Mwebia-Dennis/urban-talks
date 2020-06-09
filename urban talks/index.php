<?php

	
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    <!---fontawesome---->
    <script src="https://kit.fontawesome.com/fe39f99d95.js" crossorigin="anonymous"></script>

    <!---css----->

    <link rel="stylesheet" type="text/css" href="css\styles.css">

    <!-------------top icon---------------

    //todo:loook for an icon	
	<link rel="icon" type="image/gif" href="images/logo.jpg" />

    ---->
    

    <title>Urban Talks</title>
  </head>
  <body>

<!----------------------------------------------------main navigation/ menu--------------------->
  	<div class="main_nav">
  		
  		<div class="logo">
  			
  			<p>Urban Talks</p>

  		</div>

  		<div class="search_div">
  			
  			<input type="text" name="search" placeholder="search urban talks..." id="search_bar" autocomplete="autocomplete"><button id="search_btn"><i class="fas fa-search"></i></button>
  		</div>

  		<div class="top_main_menu">
  			
  			<ul>

  				<li><i class="fas fa-paper-plane"></i></li>
  				<li><a href="#"><i class="fas fa-comment-alt"></i><span>0</span></a></li>
  				<li><i class="fas fa-bell"></i><span>0</span></li>
  				<li><img src="images/avatar.jpg"></li>
  			</ul>
  		</div>

  	</div>



  	<!------------------------------------------------container-div--------------------------->

  	<div class="container_div">
  		
  		<div class="left_menu"> 

  			<ul>
  				<li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
  				<li><a href="index.php"><i class="fas fa-user"></i> Profile</a></li>
  				<li><a href="index.php"><i class="fas fa-comment-alt"></i> Messages</a></li>
  				<li><a href="index.php"><i class="fas fa-user-friends"></i> Friends</a></li>
  				<li><a href="index.php"><i class="fas fa-user-cog"></i> Settings</a></li>
  			</ul>

  			<div class="new_post">

  				<p>Share Your View Today :)</p>

  				<p><textarea name="new_post_text" placeholder="Share Your Thoughts..."></textarea><button><i class="far fa-smile"></i></button><button><i class="fas fa-paper-plane"></i></button></p>
  				
  			</div>
  			<div class="footer">
  				
  				<ul>
  					
  					<li><a href="#">About us</a></li>
  					<li><a href="#">Terms & Conditions</a></li>
  					<li><a href="#">Contact Us</a></li>
  					<li><a href="#">Advertise</a></li>
  				</ul>

  				<p>&copy copyright Penguins Technologies 2020</p>
  			</div>

  		</div>
  		<div class="home">
  			
  			<div class="post">
  				
	  				<div class="post_top">
	  					<img src="images/avatar.jpg">
	  					<span>Dennis Gitonga</span>
	  					<span>08/05/2020 08:10 PM</span>
	  				</div>

	  				<img src="images/image1.jpg" id="post_image">

	  				<div class="post_bottom">
	  					
	  					<span><button><i class="far fa-comment"></i></button><button><i class="fas fa-heart"></i></button><button><i class="far fa-envelope"></i></button></span>

	  					<p>50 likes</p>
	  					<p>21 comments</p>

	  					<h5>Comments:</h5>
	  					<p>@dennis_gitonga:  Nice Home care from reborn medicare ...</p>
	  					<p><input type="text" name="add_comment" placeholder="Add Your Comment..."><button>Add</button></p>
	  				</div>
  			</div>

  			<div class="post">
  				
  				<div class="post_top">
  					<img src="images/avatar.jpg">
  					<span>Dennis Gitonga</span>
  					<span>08/05/2020 08:10 PM</span>
  				</div>

  				<img src="images/image1.jpg" id="post_image">

  				<div class="post_bottom">
  					
  					<span><button><i class="far fa-comment"></i></button><button><i class="fas fa-heart"></i></button><button><i class="far fa-envelope"></i></button></span>

  					<p>50 likes</p>
  					<p>21 comments</p>

  					<h5>Comments:</h5>
  					<p>@dennis_gitonga:  Nice Home care from reborn medicare ...</p>
  					<p><input type="text" name="add_comment" placeholder="Add Your Comment..."><button>Add</button></p>
  				</div>
  			</div>


  			<div class="post">
  				
  				<div class="post_top">
  					<img src="images/avatar.jpg">
  					<span>Dennis Gitonga</span>
  					<span>08/05/2020 08:10 PM</span>
  				</div>

  				<img src="images/image1.jpg" id="post_image">

  				<div class="post_bottom">
  					
  					<span><button><i class="far fa-comment"></i></button><button><i class="fas fa-heart"></i></button><button><i class="far fa-envelope"></i></button></span>

  					<p>50 likes</p>
  					<p>21 comments</p>

  					<h5>Comments:</h5>
  					<p>@dennis_gitonga:  Nice Home care from reborn medicare ...</p>
  					<p><input type="text" name="add_comment" placeholder="Add Your Comment..."><button>Add</button></p>
  				</div>
  			</div>




  		</div>
  		<div class="activities">
  			
  			<div class="new_friends">
  				
  				<h5>People You May Know</h5>
  				<p><span><img src="images/avatar.jpg"></span><span>Penguins Tech</span><button>Follow</button></p>
  				<p><span><img src="images/avatar.jpg"></span><span>Penguins Play</span><button>Follow</button></p>
  				<p><span><img src="images/avatar.jpg"></span><span>Penguins Medicare</span><button>Follow</button></p>
  				<p><span><img src="images/avatar.jpg"></span><span>Dennis Brown</span><button>Follow</button></p>

  				<a href="#">View More...</a>
  			</div>


  				
  			<h3>Status</h3>

  			<div class="status">

  				<div class="status_card">
  					<img src="images/image1.jpg">
	  				<p>@dennis_gitonga</p>
	  				<p>2 hrs ago</p>
  				</div>

          <div class="status_card">
            <img src="images/image1.jpg">
            <p>@dennis_gitonga</p>
            <p>2 hrs ago</p>
          </div>


  			<div>
  				

  			</div>
  		</div>
  	</div>









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>

