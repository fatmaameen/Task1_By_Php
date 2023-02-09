<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <form action="rand.php" method="POST">
      <input type="hidden" name="id" value="<?php echo rand(1,5); ?>">
      <input type="submit" name="submit" >
   </form>
   <?php
   $products = [
            ["product number 1",300,50],
            ["product number 2",250,1000],
            ["product number 3",30,1200],
            ["product number 4",1500,10],
            ["product number 5",450,300]
        ];   
        echo "<table border=8>
        <thead>
            <th>Name</th>
            <th>Price</th>
            <th>quantity</th>   
        </thead>";            
    foreach ($products as $key=>$value){                   
        echo "<tr>"; 
        foreach ($value as $item){
            echo "<td>$item</td>";
        }
        echo "</tr>"; 
    }
echo "</table><br>";
         ?>


</body>
</html>
