<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Else Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<div class="m-auto mt-3  text-center" style="width: 400px; background-color: #f3f3f3;">

        <h5 class="bg-dark p-4" style="color: white; width: 400px;">Subtract if first number is 
            greater than second number. Multiply if not!</h5>
        

        <form action="" method="get">
      
        <input type="number" name="Fnumber" placeholder="First Number">
        
        <br><br>
       
        <input type="number" name="Snumber" placeholder="Second Number">
        
        <br><br>
        <div class="text-center">
            <button type="submit" name="submit" 
            class="btn btn-outline-none bg-danger m-auto p-2"
             style="color: white;">Compute</button>
        </div>

        </form>
</div>

</body>
</html>


<?php
function calculat($num1,$num2){
    if($num1 > $num2){
        $ans = $num1 - $num2;
         echo "<div class='card card-body bg-dark text-light text-center mt-3 m-auto' style='width:400px;'/>
        First Number: $num1<br>
        Second Number: $num2<br><br>
        The Difference is: $ans";
    }
else if($num1 < $num2){
        $ans = $num1 * $num2;
         echo "<div class='card card-body bg-dark text-light text-center mt-3 m-auto' style='width:400px;'/>
        First Number: $num1<br>
        Second Number: $num2<br><br>
        The Product is: $ans";
    }

}
if(isset($_GET['submit'])){
    $number1 = $_GET['Fnumber'];
    $number2 = $_GET['Snumber'];
    calculat($number1, $number2);
}
?>



