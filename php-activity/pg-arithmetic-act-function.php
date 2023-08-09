<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<div class="m-auto mt-3 p-3 text-center" style="width: 400px; background-color: #f3f3f3;">

        <h4>Arithmetic Operation Act-3</h4>
        <hr>

        <form action="" method="post">
        <label for="">Enter First Number:</label>
        <input type="number" name="num1" id="num1"
        placeholder="First Number">
        
        <br><br>
        <label for="">Enter Second Number:</label>
        <input type="number" name="num2" id="num2"
        placeholder="Second Number">
        
        <br><br>
        <div class="text-center">
            <button type="submit" name="compute" id="compute"
            class="btn btn-outline-none bg-primary m-auto p-2"
             style="color: white;">Compute</button>
        </div>

        </form>
</div>

</body>
</html>

<?php 

function computeA11($num1, $num2){
        
    $sumans = $num1 + $num2 ;
    $difans = $num1 - $num2 ;
    $proans = $num1 * $num2 ;
    $quotans =$num1 / $num2 ;

    echo "<br><h4 class='bg-dark text-center m-auto p-2'
     style='width: 400px; color: white;'>
    The sum is... $sumans<br>
    The difference is... $difans<br>
    The product is... $proans<br>
    The quotient is... $quotans</h4> ";

}

if(isset($_POST['compute'])){
    $num_1 = $_POST['num1'];
    $num_2 = $_POST['num2'];

    echo computeA11($num_1,$num_2);
}

?>