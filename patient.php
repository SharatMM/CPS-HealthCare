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
      <a class="navbar-brand" style="text-align: center;" href="#"><strong>Patient Details</strong></a>
    </div>
    <ul class="nav navbar-nav navbar-right">	
      <li><a href="sharan2.php">Home</a></li>
      <li><a href="index.html">Sign Out</a></li>
    </ul>
  </div>
</nav>


<?php
include("config.php");

$query = $_SESSION['login_user']; 

        $id=$_GET['id'];    
        $query = mysqli_real_escape_string($db,$query);
         
        $sql = "SELECT * FROM patient where p_id='$id'; " or die(mysqli_error($sql));
             $raw_results=mysqli_query($db,$sql);
        
         
        if(mysqli_num_rows($raw_results))
        { 
            while($results = mysqli_fetch_array($raw_results,MYSQLI_ASSOC))
            {
            
               echo "<h4 style='text-align:center;'>Name            : <span style='color:red;'> " .$results['p_name']."</span></h4>";
               echo "<h4 style='text-align:center;'>Id              : <span style='color:red;'> " .$results['p_id']."</span></h4>";
               echo "<h4 style='text-align:center;'>Sex             : <span style='color:red;'> " .$results['sex']."</span></h4>";
               echo "<h4 style='text-align:center;'>Age             : <span style='color:red;'> " .$results['age']."</span></h4>";
               echo "<h4 style='text-align:center;'>Mobile No.      : <span style='color:red;'> " .$results['p_number']."</span></h4>";
               echo "<h4 style='text-align:center;'>address         : <span style='color:red;'> " .$results['address']."</span></h4>";
               echo "<h4 style='text-align:center;'>suffering from  : <span style='color:red;'> " .$results['disease']."</span></h4>";
            }
             
        }
        else{ 
            echo "No results";
        }

?>


</div>
</div>
</div>
</body>
</html>