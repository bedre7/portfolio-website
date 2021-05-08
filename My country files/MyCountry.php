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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <title>My Country</title>
</head>
<body>
    <?php include '../navbar.php'; ?>
    <section class = "intro">
        <div class="welcome display-4">
           <h1>Welcome to Ethiopia!</h1>
         </div>
    </section>
    
      
    <section>

	<div class = "container-fluid padding">
	<div class = "row welcome text-center">
		<div class="col-12">
			<h1 class="display-4">Meet the team</h1>
		</div>
		<hr>
	</div>
    <div class = "container-fluid padding textimg">
    <div class = "row padding">
        <div class = "col-lg-6 flag">
            <h3>Ethiopia | Land of origins</h3>
			<img src="../img/flag.jpg" class  = "img-fluid">
		</div>
		<div class="col-lg-6">
			<h2>Our philosophy</h2>
			<p>The columns will automatically stack over each other when the screen is less than 576px wide</p>
			<p>Resize the browser window to see the effect. Responsive web design has become more important as the amount of mobile traffic now accounts more than half of total internet traffic</p>
			<br>
			
		</div>
	</div>
	</div>
	<hr class="my-4">
</div> 
    </section>

</body>
</html>