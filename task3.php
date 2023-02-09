<?php
$pruducts = [
    ["product number 1",300,50],
    ["product number 2",250,1000],
    ["product number 3",30,1200],
    ["product number 4",1500,10],
    ["product number 5",450,300],
];
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
<a href='http://localhost/task-lec-2/show_pruduct.php?id=' ></a>

    <table border="8">
    
        <tr><th>name</th>
       <th>price</th>
        <th>quality</th></tr>
        <?php
        foreach($pruducts as $pruduct):?>
        <tr> 
<?php foreach($pruduct as $item):?>
    <td><?php echo $item;?></td>
    <?php endforeach;?>
        </tr>
        <?php
     endforeach;?>
        
    </table>
    
</body></html>