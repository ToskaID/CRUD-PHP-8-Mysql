<?php

try{
  $connection = mysqli_connect("localhost","root","","kepegawaian");
}catch(Exception $e){
  echo "Failed Connect : " . $e->getMessage();
}





?>