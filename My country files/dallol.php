<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src = "../script.js" defer> </script>
    <link rel = stylesheet type = "text/css" href = "../css/style.css">
    <link rel="shortcut icon" href="../img/favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,200&display=swap");
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
        font-weight: 300;
        color: black;
      }
      h1 {
        color: blue;
      }
      .read-more {
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.4),
            rgba(0, 0, 0, 0.4)
          ),
          url(../img/dalol.jpg);
        background-size: cover;
        background-position: center;
        height: 110vh;
      }
      .read-more .center {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80%;
        background: rgb(216, 214, 214);
        border-radius: 10px;
        height: 60%;
        font-family: montserrat;
        font-weight: 500;
      }

      .read-more h1 {
        margin: 25px;
        font-weight: 700;
        color: #68b2a6;
        margin-left: 5%;
        font-size: 200%;
      }
      .read-more .intro {
        margin-bottom: 25px;
      }
      .read-more p {
        text-indent: 25px;
        width: 90%;
        margin-left: 5%;
        font-size: large;
      }
      @media (max-width:1200px){
        .read-more .center {
          height: 80%;
          transform: translate(-50%, -30%);
        }
        .read-more{
          height: 150vh;
        }
      }
      @media (max-width:900px){
        .read-more .center {
          height: 85%;
        }
        .read-more{
          height: 180vh;
        }
        .read-more p{
          font-size:medium;
        }
      }
      @media (max-width:860px){
        .read-more .center {
          transform: translate(-50%, -10%);
        }
      }
      @media (max-width:768px){
      
        .read-more{
          height: 200vh;
        }
        .read-more p{
          font-size:medium;
        }
      }
      @media (max-width:600px){

        .read-more p{
          font-size:small;
        }
      }
    </style>
    <title>Dallol</title>
  </head>
  <body>
  <?php include '../navbar.php'; ?>
    <section class="read-more">
      <div class="container-fluid center">
        <div class="col-12">
          <br />
          <h1>Dallol</h1>
        </div>
        <div class="intro">
          <p>
            Dallol (ዳሎል) is a locality in the Dallol woreda of northern
            Ethiopia. Located in Administrative Zone 2 of the Afar Region in the
            Afar Depression, it has a latitude and longitude of 14°14′19″N
            40°17′38″E with an elevation of about 130 metres (430 ft) below sea
            level. The Central Statistical Agency has not published an estimate
            for the 2005 population of the village, which has been described as
            a ghost town. Dallol currently holds the official record for record
            high average temperature for an inhabited location on Earth, and an
            average annual temperature of 35°C (95°F) was recorded between 1960
            and 1966. Dallol is also one of the most remote places on Earth, but
            paved roads to the nearby village of Hamedela are being built.
            Still, the most important mode of transport besides jeeps are the
            camel caravans that travel to the area to collect salt.<br /><br />

            <small>**Source: Wikipedia</small>
          </p>
        </div>
      </div>
    </section>
  </body>
</html>
