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
                 <div class = "col-md-6 flag">
                    <h3>Ethiopia | Land of origins</h3>
			        <img src="../img/flag.jpg" class  = "img-fluid"><br><br><br><br>
		         </div>
		  <div class="col-md-6 description vl">
		 	<h2>My Country...</h2>
            <hr>
			<p>Ethiopia, in the Horn of Africa, is a rugged, landlocked country split by the Great Rift Valley. With archaeological finds dating back more 
                than 3 million years, it’s a place of ancient culture. </p>
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
                      <h1 class="display-2">Nile River</h1>
                      <h4>The longest river in Africa, it has historically been considered the longest river in the world</h4>
                      <a href="nile.php" class = "btn btn-primary btn-lg">Read more</a>
                      
                    </div>
                  </div>                          
                  <div class="item">
                    <img src="../img/ertale.jpg">
                    <div class = "carousel-caption">
                      <h1 class="display-2">Erta Ale Volcano</h1>
                      <h4>A continuously active basaltic shield volcano in Afar region</h4>
                      <a href="ertale.php" class = "btn btn-info btn-lg">Read more</a>
                      
                    </div>
                  </div>                         
                  <div class="item">
                    <img src="../img/dalol.jpg">
                    <div class = "carousel-caption">
                      <h1 class="display-2" style="color:white">Dallol</h1>
                      <h4>Dallol is a locality in the Dallol woreda of northern Ethiopia. Located in Administrative Zone 2 of the Afar Region in the Afar Depression.</h4>
                      <a href="dallol.php" class = "btn btn-default btn-lg">Read more</a>
                      
                    </div>
                  </div>
                  <div class="item">
                    <img src="../img/semien.jpg">
                    <div class = "carousel-caption">
                      <h1 class="display-2" style="color:white">Semien Mountains</h1>
                      <h4>The Simien Mountains, in northern Ethiopia, north east of Gondar in Amhara region, 
                        are part of the Ethiopian Highlands. They are a World Heritage Site and include the Simien Mountains National Park. </h4>
                        <a href="semien.php" class = "btn btn-primary btn-lg">Read more</a>
                    </div>
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
<br><br><hr><br>
    <div class="extra">
      <div class="col-12 padding heading">
        <h1>What makes us unique?</h1>  
      </div>
      <div class = "container-fluid extra-content">
        <div class="col-lg-6 col-md-6 col-sm-6 adwa">
          <img src="../img/hand.jpg" alt="">
          <h2>Battle of Adwa</h2><br>
          <p>Back in 1896, near the town of <i>Adwa</i>, Ethiopia defeated the Italian invading force under the rule of Emperor Menelik II.
            Ethiopia and Liberia are the <strong>only two</strong> countries to have never been colonized.
          The Battle takes a huge place in history and is considered the victory of not only the country but also Africa's victory over the
          colonial rule of Europe. </p><br><br>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 calendar">
          <img src="../img/diduk.jpg" alt=""><br>
          <h2>Our calendar</h2><br>
          <p>Here is a mind blowing fact...</p>
          <p>Ethiopian has its own calendar! Can you guess which year we are in...? currently(2021GC) it is 2013 in Ethiopia. Yes, You have read that right.
            Basically the calendar has 13 months, 12 months of thirty days plus five or six days long month(Pagume).</p>
        </div>
      </div>

    </div>

<br><hr><br><br>
    
    <section class="section-more">
      
      <div class="col-12 padding heading">
        <h1>Our Food/Drink</h1>  
      </div>

      <ul class="meals-showcase">
          <li class = "col-xs-6">
              <figure class="meal-photo">
                  <img src ="../img/coffee2.jpg">
              </figure>
          </li>
          <li class = "col-xs-6">
              <figure class="meal-photo">
                  <img src ="../img/food3.jpg">
              </figure>
          </li>
          <li class = "col-xs-6">
              <figure class="meal-photo">
                  <img src ="../img/food1.jpg">
              </figure>
          </li>
          <li class = "col-xs-6">
              <figure class="meal-photo">
                  <img src ="../img/food2.jpg">
              </figure>
          </li>
      </ul>
  
  </section>

  <br><hr><br><br>
<hr>
  <section class = "famous">
    <div class="col-12 padding heading">
      <h1>What are we famous for?</h1>  
    </div>
    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-4 athletics">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="../img/athletics.jpg" width="390" height="300">
              <div class="card-body">
                <h3>Athletics</h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 ceremony">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="../img/ceremony.jpg" width="390" height="300">
              <div class="card-body">
                <h3>Coffee ceremony</h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 airlines">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="../img/Ethiopian-Airlines.jpg" width="390" height="300">
              <div class="card-body">
                <h3>Ethiopian Airlines</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<hr>

  <section class = "events">
    <div class="col-12 padding heading">
      <h1>Events</h1>  
    </div>

    <hr class="featurette-divider">

    <div class="row featurette great-run">
      <div class="col-md-7">
        <h2 class="featurette-heading">The Great Ethiopian Run<span class="muted"></span></h2>
        <br><p class="lead">The competition was first envisioned by neighbors Ethiopian runner Haile Gebrselassie's return from the 2000 Summer Olympics. The 10,000 entries for the first edition quickly sold out and other 
          people unofficially joined in the race without a number. The creation of the race marked the first time that a major annual 10 km race had been held in the country, 
          renowned for producing world class runners. The day's events include an international and popular 10 km race and a 5 km women only race.</p>
      </div>
      <div class="col-md-5">
        <img src="../img/Greatrun.jpg" width="500" height="400">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette meskel">
        <div class="col-md-5 order-md-1 image">
            <img src="../img/meskel.png" width="500" height="400">
          </div>
      <div class="col-md-7 order-md-2 text">
        <h2 class="featurette-heading">Meskel<span class="muted"></span></h2>
        <br><p class="lead">Meskel is a Christian holiday in the Ethiopian Orthodox and Eritrean Orthodox churches that commemorates the discovery of the True Cross by the Roman Empress Helena in the fourth century. 
          Meskel occurs on the 17 Meskerem in the Ethiopian calendar. "Meskel" is Ge'ez for "cross". </p>
      </div>
    </div>

    <hr class="featurette-divider eid">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Eid al-Fitr prayer<span class="muted"></span></h2>
        <p class="lead">The prayer of Eid al-fitr and Eid al-adha is prayed in all cities including the capital, Addis Ababa.
          Over millions of muslims gather to pray every year. </p>
      </div>
      <div class="col-md-5 col-sm-12 col-xs-4 youtube-vid">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/rKj-Tc8L-Fg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>

  </section>

<footer> <?php include '../footer.php'; ?></footer>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>