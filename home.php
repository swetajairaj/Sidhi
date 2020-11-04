<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}

$connection = mysqli_connect('localhost','root');


mysqli_select_db($connection, 'quizdbase');

?>
            
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
</head>
         
<body>
<div class="container">
                 
	<br><h1 class="text-center text-primary"> SIDHI TUTORIALS </h1></br>
	<h2 class="text-center text-success"> welcome <?php echo $_SESSION['username'] ?> </h2>

 <div class="col-lg-8 m-auto d-block">
	<div class="card">

	<h3 class="text-center card-header">welcome <?php echo $_SESSION['username'] ?>,you have to select 1 out of 4 options.</h3><br>

	</div>
    <form>
	<?php

	for($i= 1; $i < 5 ; $i++){
    $q = "select * from questions where qid = $i ";
    $query = mysqli_query($connection, $q);
    
    while ($rows = mysqli_fetch_array($query)) {
      ?>
     	<div class="card">
     	   <h4 class="card-header"> <?php echo $rows['question'] ?> </h4>
     	
    
		<?php 

		    $q = "select * from answers where ans_id = $i ";
		    $query = mysqli_query($connection, $q);
		    
		    while ($rows = mysqli_fetch_array($query)) {
		      ?>   
		      <div class="card-body">
		      	 
		      	<input type="radio" name="quizcheck[<?php echo $rows['ans_id']; ?>]" value="<?php echo $rows['aid']; ?> ">
		      	<?php echo $rows['answer'] ; ?>

		      </div> 	<br>
		      
		      
	<?php 
	     }
        }
	  }

	?>

	<input type="submit" name="submit" value="submit" class="btn btn-primary m-auto d-block"> <br>
	
</form>
</div><br><br>

    <div class="m-auto d-block">
     <a href="logout.php" class="btn btn-primary"> LOGOUT </a> 
    </div>
</div><br>
   
   </div>
</body>
</html>