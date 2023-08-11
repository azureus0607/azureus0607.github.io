<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to identify a leap year</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<div class="m-auto mt-3  text-center" style="width: 400px; background-color: #f3f3f3;">

        <h5 class="bg-dark p-4" style="color: white; width: 400px;">Leap or Not</h5>
        
        
        <form action="" method="post" class="pt-3">
        <input type="number" name="year" placeholder="Enter any year!">
        
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

function check ($num1){
    if ($num1 % 4 !== 0){
        echo "<h3 class='big-number m-auto text-center fw-bold' style='width:400px;'>
        It is not a leap year";
    }
    else if ($num1 % 4 == 0){
            if($num1 % 100 != 0){
            echo "<h3 class='big-number m-auto text-center fw-bold' style='width:400px;' >
         It is a leap year";
        }
        else if ($num1 % 100 == 0){
            if($num1 % 400 != 0){
            echo "<h3 class='big-number m-auto text-center fw-bold' style='width:400px;' >
         It is not a leap year";
        }
        else if ($num1 % 400 == 0){
            echo "<h3 class='big-number m-auto text-center fw-bold' style='width:400px;' >
         It is a leap year";
        }
        }
    }
}
     if(isset ($_POST['submit'])){
$number1 = $_POST [ 'year' ];
check ($number1);
}

?>