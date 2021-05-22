<style>
    <?php include_once 'heritage.css'; ?>
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src = "../script.js" defer> </script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel = stylesheet type = "text/css" href = "../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Heritage</title>
</head>
<body>
  <body>
<?php include '../navbar.php'; ?>
    <section class = "intro">
        <div class="welcome display-4">
            <h1>Heritage</h1>
         </div>
    </section> 
    <div class="container-fluid main">
        <div class="col-lg-8 heading">
            <h1>Heritage of Ethiopia</h1>
            <p>Ethiopia is amongst the countries that have registered their tangible and intangible heritage under UNESCOs cultural heritage list.
                 According to Ethiopian Ministry of Culture and Tourism, UNESCO has recognized four intangible and nine tangible Ethiopian (a total of 13) heritages.
                Here is a list of UNESCO world heritage sites in Ethiopia: </p><br>
            <ul>
                <li>Aksum</li>
                <li>Fasil Ghebbi, Gondar Region</li>
                <li>Harar Jugol, the Fortified Historic Town</li>
                <li>Konso Cultural Landscape</li>
                <li>Lower Valley of the Awash</li>
                <li>Lower Valley of the Omo</li>
                <li>Rock-Hewn Churches, Lalibela</li>
                <li>Tiya</li>
                <li>Simien National Park</li>
                <li>Meskel</li>
                <li>Irreechaa</li>
                <li>Fichee-Chambalaalla</li>
                <li>TIMKET, Ethiopian Epiphany</li>
            </ul>
            <br>
        </div>
    </div> 

    <!---------------------------Featurette------------------------------->
    <section class="details">
    <div class="col-lg-8 heading">
        <h1>Our heritage at a glance</h1><br>

    </div>
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Aksum Obelisk <span class="muted">ሓወልቲ ኣኽሱም</span></h2>
        <p class="lead">The ruins of this ancient city were recognized in 1980 by UNESCO as a World Heritage Site due to its cultural importance. In fact, this city marked as the heart of ancient Ethiopia that also reflects the power of the kingdom at that time. 
            There are several ruins in the ancient city that include royal tombs, ancient castle ruins, monolithic obelisks, and giant stelae.</p>
      </div>
      <div class="col-md-5">
        <img src="../img/axum.jpg" width="400" height="auto">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-5 order-md-1">
            <img src="../img/fasil.jpg" width="400" height="auto">
          </div>
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Fasil Ghebbi<span class="muted"> ፋሲል ግቢ</span></h2>
        <p class="lead">This property included in the list of UNESCO World tangible Heritage Sites in Ethiopia consists of eight component sites. The main site is the Fasil Ghebbi palace compound. Meanwhile, the other seven sites are located within the city of Gondar. 
            These sites include a monastery, church, thermal area, bath, and a palace.</p>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Al-Nejashi <span class="muted">mosque</span></h2>
        <p class="lead">Located in the town of Wukro, 790 kilometers (over 490 miles) north of Ethiopia's capital Addis Ababa, Al-Nejashi is said to be the first mosque in Africa. It is named after Nejashi, who hosted companions of the Prophet who escaped persecution in Mecca. </p>
      </div>
      <div class="col-md-5">
        <img src="../img/nejashi.jpeg" width="400" height="auto">

      </div>
    </div>

    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-5">
            <img src="../img/lalibela.jpg" width="400" height="auto">
    
          </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Rock Hewn Churches, Lalibela <span class="muted">ላሊበላ.</span></h2>
          <p class="lead">This is one of the most breathtaking Ethiopian sites included in this list of World tangible Heritage Sites by UNESCO in 1978. Located in the Amhara Region, this site boasts of 11 monolithic cave churches that were built in the 13th century.</p>
        </div>
      </div>
    </div>
    </section>

        <!---------------------------VIDEO------------------------------->
        <section class = "last row">
        <div class="col-lg-8 heading"><br>
      <h1>What's more?</h1>
    </div>
    <div class="youtube-vid col-lg-7 col-md-9 col-sm-9 col-xs-8">
      <div class="embed-responsive embed-responsive-16by9">
          <iframe  class = "embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/VX0VfJFQrlA?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; 
          autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div><br>
  </div><br><br>
        </section>
    

<footer> <?php include '../footer.php'; ?></footer>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>