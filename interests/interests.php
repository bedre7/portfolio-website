<style>
    <?php include_once 'interests.css'; ?>
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src = "../script.js" defer> </script>
    <link rel = stylesheet type = "text/css" href = "../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <title>My interest</title>
</head>
<body>
<?php include '../navbar.php'; ?>
    <section class = "intro">
        <div class="welcome display-4">
            <h1>My interest...</h1>
         </div>
         <div class="row featurette">
            <div class="col-md-8 text">
              <h1 class="featurette-heading">Archery 🎯<span class="muted"> hell yeah!</span></h1>
              <p>From my experience, archery is all about re-creating the perfect technique over and over and over. One thing to note is you
                  should be relaxed and not tense And I believe that helps in day to day life. You may be wondering like "how do we shoot
                an arrow right on target?" well shoot an arrow in the air. Where it lands, paint a bullseye. Easy peasy😊!</i>
              </p>
            </div>
            <div class="col-md-4">
              <img class = "image-fluid" src="../img/carousel5.jpg" width="400" height=auto>     
            </div>
          </div>
    </section>

    <section class = "painting">
        <div class="paint-text">
            <h1 class="featurette-heading">Painting 🎨</h1>
        </div>  
    </section>

    <!----------------------------PHOTOGRAPHY------------------------->

    <section class="section-more">
      
        <div class="col-12 padding heading">
          <h1>Photography</h1> 
        </div>
  
        <ul class="meals-showcase">
            <li class = "col-xs-6">
                <figure class="meal-photo">
                    <img src ="../img/pg1.jpg">
                </figure>
            </li>
            <li class = "col-xs-6">
                <figure class="meal-photo">
                    <img src ="../img/pg2.jpg">
                </figure>
            </li>
            <li class = "col-xs-6">
                <figure class="meal-photo">
                    <img src ="../img/pg3.jpg">
                </figure>
            </li>
            <li class = "col-xs-6">
                <figure class="meal-photo">
                    <img src ="../img/pg5.jpg">
                </figure>
            </li>
        </ul>
    </section><br>
     <!----------------------------PHOTO API------------------------->
    <div class="col-12 padding heading">
        <h1 style="margin-top: 50%;">Pexels Free API</h1> 
      </div>
      <div class="container api">
          <br><h1>Mini Photo Search</h1><br>
          <form id = "form" autocomplete="off">
              <div class="form-group col-md-6">
                  <input type="text" class = "form-control" id = "search" placeholder = "Search for free photos...">
              </div>
              <div class="form-group col-md-6 center">
                <input type="submit" class = "btn btn-danger" value = "search">
            </div>
          </form>

          <div class="row">
              <div class="col-md-12">
                  <div id="images">

                  </div>
              </div>
          </div>
      </div>
      <footer> <?php include '../footer.php'; ?></footer>
</body>
</html>