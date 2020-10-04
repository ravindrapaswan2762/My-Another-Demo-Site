<!DOCTYPE html>
<html>
<head>
	<title> BootstrapWebsite </title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">

	<link rel="stylesheet" type="text/css" href="css/about.php">
	<link rel="stylesheet" type="text/css" href="css/home.php">
	<link rel="stylesheet" type="text/css" href="css/portfolio.php">
	<link rel="stylesheet" type="text/css" href="css/service.php">
	<link rel="stylesheet" type="text/css" href="css/team.php">




<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css?family=josefin+sans&display=swap" rel="stylesheet">

</head>
<body>







		<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top"> 
			<div class="container">
				<a href="navbar-brand" class="navbar-brand text-warning font-weight-bold"> P-PRODUCTION </a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
					<span class="navbar-toggler-icon"> </span>
				</button>

				<div class="collapse navbar-collapse text-center " id="collapsenavbar">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
						<a href="index.php" class="nav-link text-white">HOME</a> 
                        </li>

						<li class="nav-item">
						<a href="portfolio.php" class="nav-link text-white">PORTFOLIO</a>
					    </li>

						<li class="nav-item">
						<a href="about.php" class="nav-link text-white">ABOUT</a> 
                        </li>
						

						<li class="nav-item">
						<a href="service.php" class="nav-link text-white">SERVICE</a>
					    </li>

						<li class="nav-item">
						<a href="team.php" class="nav-link text-white">TEAM</a> 
                        </li>

						<li class="nav-item">
						<a href="contact.php" class="nav-link text-white">CONTACT</a> 
                        </li>
                    </ul>
                
                </div>
            </div>
        </nav>



<div class="jumbotron">
  <h1>Paswantechnical</h1>
  <h2>production</h2>
  <p>HERE You can contact with me!</p>
</div>


<section class="my-5">
	
<div class="py-5">
	<h2 class="text-center font-josfin sans"> Resister Here</h2>
</div>

<div class="w-50 m-auto">
	<form action="userinfo.php" method="post">
		<div class="form-group">
			<label> Username</label>
			<input type="text" name="user" autocomplete="off" class="form-control">
		</div>



        <div class="form-group">
			<label> Email Id</label>
			<input type="text" name="email" autocomplete="off" class="form-control">
		</div>

        
        <div class="form-group">
			<label> Mobile</label>
			<input type="text" name="mobile" autocomplete="off" class="form-control">
		</div>

        
        <div class="form-group">
			<label> Comment </label>
			<textarea class="form-control" name="comment"></textarea>
		</div>

		<button type="submit" class="btb btn-success">Submit
			
		</button>

		
	</form>



</div>


</section>



</body>
</html>


<footer class="footer">
	<h6 class="text-center bg-dark text-white">@paswantechnicalproduction</h6>
</footer>


