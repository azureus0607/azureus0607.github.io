<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<div class="m-auto mt-3 p-3 text-center" style="width: 400px; background-color: #f3f3f3;">

        <h4>If Else Display Data Act-1</h4>
        <hr>

        <form action="" method="get">
        <label for="">Enter First Number:</label>
        <input type="text" name="firstnumber" id="firstnumber"
        placeholder="First Number">
        
        <br><br>
        <label for="">Enter Second Number:</label>
        <input type="text" name="secondnumber" id="secondnumber"
        placeholder="Second Number">
        
        <br><br>
        <div class="text-center">
            <button type="submit" name="button" id="button"
            class="btn btn-outline-none bg-primary m-auto p-2"
             style="color: white;">Compute</button>
        </div>

        </form>
</div>

</body>
</html>

<?php 

    if(isset($_GET['firstnumber']) && isset($_GET['secondnumber'])){
        $firstnumber = $_GET['firstnumber'];
        $secondnumber = $_GET['secondnumber'];
       
    $answer = $firstnumber + $secondnumber ;

    echo "<br><h4 class='bg-primary text-center m-auto p-2' style='width: 400px; color: white;'>
    The sum is... $answer</h4>";

}

?>