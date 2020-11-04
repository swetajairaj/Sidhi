<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}

$connection = mysqli_connect('localhost','root');


mysqli_select_db($connection, 'quizdbase');


  if(isset($_POST['submit'])){

  	if(!empty($_POST['quizcheck'])){

  	$count = count($_POST['quizcheck']);

  	echo "out of 5, you have selected ".$count. "options";

    $selected = $_POST['quizcheck'];
    print_r($selected);

    $q = "select * from questions";
    $query = mysqli_fetch_array($query)
    
    while($rows = mysqli_fetch_array($query)){
    	print_r($rows['ans_id']);

    	$checked = 
    }

  	}
  }

?>