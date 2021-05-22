<style>
    <?php include_once 'mycountry.css';
 ?>
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src = "../script.js" defer> </script>
    <link rel = stylesheet type = "text/css" href = "../css/style.css">
    <link rel = stylesheet type = "text/css" href = "mycountry.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>My Country</title>
</head>
<body>
<?php include '../navbar.php'; ?>
    <section class = "intro">
        <div class="welcome display-4">
           <h1>Welcome to Ethiopia!</h1>
         </div>
    </section>      
    <div class = "second">	             	
          <div class = "container-fluid padding textimg">
              <div class = "row padding">
                 <div class = "col-lg-6 flag">
                    <h3>Ethiopia | Land of origins</h3>
			        <img src="../img/flag.jpg" class  = "img-fluid">
		         </div>
		  <div class="col-lg-6 description vl">
		 	<h2>My Country...</h2>
            <hr>
			<p>Ethiopia, in the Horn of Africa, is a rugged, landlocked country split by the Great Rift Valley. With archaeological
         finds dating back more  than 3 million years, it’s a place of ancient culture. </p>     
     <p> Ethiopia has a total area of 1,100,000 square kilometres and over 109 million inhabitants, making it the 13th-most 
        populous country in the world and the 2nd-most populous in Africa. The national capital and largest city is Addis Ababa.</p>
			<br>			
		</div>
	   </div>
	</div>
	<br><br><hr class="my-4"><br>
</div> 
</div>
    <div class = "slider">
        <div class="col-12 padding heading">
            <h1>Tourist Attraction</h1>  
        </div>
        <div class = "col-12 carousel-slide">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
               <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                  <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
        
              <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="../img/nile.jpg">
                    <div class = "carousel-caption">
                      <h2 class="display-2">Nile River</h2>
                      <h4>The longest river in Africa, it has historically been considered the longest river in the world</h4>
                      <a href="https://google.com" class = "btn btn-default btn-lg">Read more</a>
                      
                    </div>
                  </div>                          
                  <div class="item">
                    <img src="../img/ertale.jpg">
                    <div class = "carousel-caption">
                      <h3 class="display-2">Erta Ale Volcano</h3>
                      <h4>A continuously active basaltic shield volcano in Afar region</h4>
                      <a href="https://google.com" class = "btn btn-default btn-lg">Read more</a>
                      
                    </div>
                  </div>                         
                  <div class="item">
                    <img src="../img/animal.jpg">
                    <div class = "carousel-caption">
                      <h3 class="display-2">Wild life</h3>
                      <h4>Ethiopia has a number of endemic animals.</h4>
                      <a href="https://google.com" class = "btn btn-default btn-lg">Read more</a>
                      
                    </div>
                  </div>
                  <div class="item">
                    <img src="../img/coffee1.jpg">
                  </div>
                                        
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                  
        
                </div>
        </div>
    </div>

<section>

</section>

<footer>

</footer>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>
