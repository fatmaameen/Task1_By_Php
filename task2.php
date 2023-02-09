<?php
$_GET;
foreach($_GET as $key=>$value){
    if($key=="name"){
       echo " name:".$value ."<br>"; 
   }elseif($key=="email"){
     echo "email:".$value ."<br>"; 
   }else{
        echo "name:".$value ."<br>"; 
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="http://localhost/task-lec-2/point2.php?name=ameen" >click1</a>
    <br>
    <a href="http://localhost/task-lec-2/point2.php?email=ameen@gmail.com" >click2</a>
    <br>
    <a href="http://localhost/task-lec-2/point2.php?phone=01234567894" >click3</a>
<br>
</body>
</html>

