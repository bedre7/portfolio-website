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
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,200&display=swap');
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        font-weight: 300;
        color: black;
      }
      h1 {
        color: blue;
      }
      .read-more {
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.5),
            rgba(0, 0, 0, 0.5)
          ),
          url(../img/nile.jpg);
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
        height: 75%;
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
          height: 85%;
          transform: translate(-50%, -30%);
        }
        .read-more{
          height: 150vh;
        }
      }
      @media (max-width:900px){
        .read-more .center {
          height: 95%;
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
        .read-more .center {
          height: 100%;
        }
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
    <title>Nile River</title>
  </head>
  <body>
  <?php include '../navbar.php'; ?>
    <section class="read-more">
      <div class="container-fluid center">
        <div class="col-12"><br>
          <h1>Nile river</h1>
        </div>
        <div class="intro">
          <p>
            The Nile is a major
            north-flowing river in northeastern Africa. The longest river in
            Africa, it has historically been considered the longest river in the
            world, though this has been contested by research suggesting
            that the Amazon River is slightly longer. The Nile is about
            6,650 km (4,130 mi) long and its drainage basin covers eleven
            countries: Tanzania, Uganda, Rwanda, Burundi, the Democratic
            Republic of the Congo, Kenya, Ethiopia, Eritrea, South Sudan,
            Republic of the Sudan, and Egypt. In particular, the Nile is the
            primary water source of Egypt and Sudan. The Nile has two major
            tributaries – the White Nile and the Blue Nile. The White Nile is
            considered to be the headwaters and primary stream of the Nile
            itself. The Blue Nile, however, is the source of most of the water,
            containing 80% of the water and silt. The White Nile is longer and
            rises in the Great Lakes region of central Africa, with the most
            distant source still undetermined but located in either Rwanda or
            Burundi. It flows north through Tanzania, Lake Victoria, Uganda and
            South Sudan. The Blue Nile begins at Lake Tana in Ethiopia and
            flows into Sudan from the southeast. The two rivers meet just north
            of the Sudanese capital of Khartoum.<br><br>

            <small>**Source: Wikipedia</small>
          </p>
        </div>
      </div>
    </section>
  </body>
</html>
