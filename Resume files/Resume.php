<style>
    <?php include_once 'resume.css'; ?>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Resume</title>      
</head>
<body>
<?php include '../navbar.php'; ?>
    <section class = resume>
    <div class="container-fluid center">
        <div class = "col-12">
            <h1>Résumé</h1>
        </div>
        <div class = "col-lg-8 intro">
            <p>A fuly committed individual in a continious self-learning process. I like to take my time when learning a new concept.
            Once I get the hung of it I usually question its foundation to fully comprehend it.
            Dedication, calmness and perseverance would be the three words that define me. </p>
        </div>
      
        <div class="col-md-6 education">
            <h2><i class="fas fa-university"></i> &nbsp Education</h2> <br>
            <p><i class="fas fa-dot-circle"></i>&nbsp High school - Medhanealem Preparatory School(2016-2018)</p>
            <p><i class="fas fa-dot-circle"></i>&nbsp Bachelors of Computer Engineering - Sakarya University</p><br>

            <h2><ion-icon name="ribbon-outline"></ion-icon> &nbsp Achievements</h2><br>
            <ul class="fa-ul">
                <li><i class="fas fa-chevron-right"></i>&nbsp Took 252<sup>nd</sup> place in the university entrance national examination out of 280,000 students.</li><br>
                <li><i class="fas fa-chevron-right"></i>&nbsp Won full scholarship in Turkey TR which had 5% of acceptance rate globally.</li><br>
                <li><i class="fas fa-chevron-right"></i>&nbsp Participated in Ethiopian Spelling Bee contest back in 2013 and made it to the final.</li><br>
            </ul>
        </div>
        <article class="col-md-3 col-lg-3 col-sm-6 skillcol">
            <h4><ion-icon name="shield-checkmark-outline"></ion-icon> &nbspProgramming Skills</h4>
            <p>C++</p>
             <div class="containers">
               <div class="skills Cpp"></div>
            </div>
            <p>C#</p>
             <div class="containers">
               <div class="skills Csharp"></div>
            </div>
            <p>HTML</p>
             <div class="containers">
               <div class="skills html"></div>
            </div>

            <p>CSS</p>
            <div class="containers">
              <div class="skills css"></div>
            </div>

           <p>PHP</p>
            <div class="containers">
               <div class="skills php"></div>
           </div>
           
        </article>
     
       

    </div>

    </section>
    
    <?php include '../footer.php'; ?>

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>