<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Else Greater</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<div class="m-auto mt-3  text-center" style="width: 400px; background-color: #f3f3f3;">

        <h5 class="bg-dark p-4" style="color: white; width: 400px;">Which number is greater?</h5>
        
        
        <form action="" method="get" class="pt-3">
       
        <input type="number" name="Fnumber" placeholder="First Number">
        
        <br><br>
        
        <input type="number" name="Snumber" placeholder="Second Number">
        
        <br><br>
        <div class="text-center">
            <button type="submit" name="submit" class="btn btn-outline-none bg-danger m-auto p-2"
             style="color: white;">CHECK</button>
        </div>
        <br><br>

        </form>
</div>

</body>
</html>

<?php

function calculate($num1, $num2){
    if($num1 > $num2){
        echo "<div class='bg-dark text-light pt-3 m-auto' style='width:400px; height:80px;'>
        
            <h1 class='big-number float-start text-center fw-bold' style=' width:100px;' >$num1</h1>
            <h1 class='small-number float-end text-center fw-normal' style='width:100px;'>$num2</h1>
        
    </div>";
    }
    else if($num2 > $num1){
        echo "<div class=' bg-dark text-light pt-3 m-auto' style='width:400px; height:80px;'>
            
            <h1 class='big-number float-start text-center fw-bold' style='width:100px;'>$num2</h1>
            <h1 class='small-number float-end text-center fw-normal' style='width:100px;'>$num1</h1>
                  
        </div>";
    }
}

if(isset($_GET['submit'])){
    $number1 = $_GET['Fnumber'];
    $number2 = $_GET['Snumber'];
    calculate($number1, $number2);
}

?>