<?php
//if(isset($_POST['operator'])){
    $first_num = $_POST['first_num'];
    $second_num = $_POST['second_num'];
    $operator = $_POST['operator'];
    $result = '' ;

    if(is_numeric($first_num) && is_numeric($second_num)){
        switch($operator){
            case "add":
                $result = $first_num + $second_num;
               break;
            case "subtract":
                $result = $first_num - $second_num;
               break;
            case "multiply":
                 $result = $first_num * $second_num;
               break;
            case "divide":
                 $result = $first_num / $second_num;
                break;
            case "modulus":
                $result = $first_num % $second_num;
                break;
            case "power":
                 $result = pow($first_num , $second_num);
                 break;
      
        }
    }
//}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>  
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">

    <p>A Simple Calculator</p>

    <form action="" method="post">
    <input type="number" name="first_num"  id="first_num" value="<?php echo $first_num; ?>" ><br>
    <input type="number" name="second_num" id="second_num" value="<?php echo $second_num; ?>" ><br>

    <input type=""  id="output" readonly="readonly" name="result"  value="<?php echo $result; ?>" >
    <div class="operate">
    <input type="submit" name="operator" value="add"/>
    <input type="submit" name="operator" value="subtract"/>    
    <input type="submit" name="operator" value="multiply"/>   
    <input type="submit" name="operator" value="divide"/>   
    <input type="submit" name="operator" value="modulus"/>   
    <input type="submit" name="operator" value="power"/> 
  
    </form>


    </div>
</body> 
</html>