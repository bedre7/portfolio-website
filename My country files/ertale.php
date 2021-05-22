<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src = "../script.js" defer> </script>
    <link rel = stylesheet type = "text/css" href = "../css/style.css">
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
            rgba(0, 0, 0, 0.1),
            rgba(0, 0, 0, 0.1)
          ),
          url(../img/ertale.jpg);
        background-size: cover;
        background-position: center;
        height: 110vh;
      }
      .read-more .center {
        position: absolute;
        top: 55%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80%;
        background: rgb(216, 214, 214);
        border-radius: 10px;
        height: 85%;
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
          height: 115%;
          transform: translate(-50%, -30%);
        }
        .read-more{
          height: 180vh;
        }
      }
      @media (max-width:900px){
        .read-more .center {
          height: 120%;
        }
        .read-more{
          height: 200vh;
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
        .read-more .center {
          height: 135%;
        }
        .read-more{
          height: 200vh;
        }
        .read-more p{
          font-size:medium;
        }
      }
      @media (max-width:600px){
        .read-more .center {
          height: 120%;
        }
        .read-more p{
          font-size:small;
        }
      }
    </style>

    <title>Erta Ale</title>
  </head>
  <body>
  <?php include '../navbar.php'; ?>
    <section class="read-more">
      <div class="container-fluid center">
        <div class="col-12">
          <br />
          <h1>Erta Ale Volcano</h1>
        </div>
        <div class="col-lg-8 intro">
          <p>
            Erta Ale is 613 metres (2,011 ft) high, with one or sometimes two
            active lava lakes at the summit which occasionally overflow on the
            south side of the volcano. It is notable for holding the
            longest-existing lava lake, present since the early years of the
            twentieth century (1906). Volcanoes with lava lakes are very rare:
            there are only eight in the world. Erta Ale means "smoking
            mountain" in the local Afar language and its southernmost pit is
            known locally as "the gateway to Hell". In 2009, it was mapped by a
            team from the BBC using three-dimensional laser techniques, in
            order for the mapping team to maintain a distance and avoid the
            lakes' searingly hot temperatures. Erta Ale is centered over the
            East African Rift system, which is a triple junction setting whose
            movements are resulting in the formation of a pull-apart basin or
            rift. The volcano comprises mainly mafic material which has been
            brought up to the surface caused by unroofing of the mantle due to
            this rift formation. There was a major eruption on
            25 September 2005 which killed 250 head of livestock and forced
            thousands of nearby residents to flee. There was further lava
            flow in August 2007, forcing the evacuation of hundreds and leaving
            two missing. An eruption on 4 November 2008 was reported by
            scientists at Addis Ababa University.Another eruption was
            reported in January 2017. <br><br>

            <small>**Source: Wikipedia</small>
          </p>
        </div>
      </div>
    </section>
  </body>
</html>
