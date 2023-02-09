<?php
if(isset ($_GET ['submit'])){ 
    $name=$_GET['name' ];
    $email= $_GET['email'];

   ?><H3><?Php echo  "your name :" .$name;?></H3>
   <H3><?Php echo  "your email : ".$email;?></H3>
  <?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title> 
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET" >
    
    <input type="text" name="name" placeholder="enter your name">
    <input type="email" name="email" placeholder="enter your Email">
    <input type="submit" name="submit">
        </form>

</body>
</html>
