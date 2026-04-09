<?php

try{
  $connection = mysqli_connect("localhost","root","","kepegawaian");
  echo "Success Connect to Database";
}catch(Exception $e){
  echo "Failed Connect : " . $e->getMessage();
}





?>