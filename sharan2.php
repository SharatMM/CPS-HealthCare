<?php
   include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CPS Health Care</title>
	
	<!--

	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/styles.css">
	
	-->
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<link href='https://fonts.googleapis.com/css?family=Oxygen:400,
	300,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
</head>
<body>
<div claass="fluid-conatiner">
<div class="col-sm-12">
<div class="row">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><strong>CPS Health Care</strong></a>
    </div>
    <ul class="nav navbar-nav navbar-right">	
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Awards</a></li>
      <li><a href="logout.php">Sign Out</a></li>
    </ul>
  </div>
</nav>

<div class="well well-lg text-justify text-success" style="text-align:center;"><strong><h2>Monitoring patients</h2></strong></div>
 
</div>
</div>
</div>

<?php
include("config.php");

$query = $_SESSION['login_user']; 

              
        $query = mysqli_real_escape_string($db,$query);
         
        $sql = "SELECT * FROM patient where d_id='$query'; " or die(mysqli_error($sql));
             $raw_results=mysqli_query($db,$sql);
        
         
        if(mysqli_num_rows($raw_results))
        { 
            while($results = mysqli_fetch_array($raw_results,MYSQLI_ASSOC))
            {
            $patient="patient.php";
            echo "<a href=".$patient."?id=".$results['p_id']."> <li>" . $results['p_name'] . "</li> </a>";
            }
             
        }
        else{ 
            echo "No results";
        }

?>

</body>
</html>

