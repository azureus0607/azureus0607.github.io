<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days of the Week Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>



<div class="m-auto mt-3 p-3 text-center" style="width: 800px; background-color: #f3f3f3;">
<form action="" method="get">
        <h4>Display Data Act-2</h4>
        <hr>

            <button type="submit" name="monday" id="button"
            class="btn btn-outline-none bg-primary m-auto p-2"
             style="color: white;">Monday</button>

             <button type="submit" name="tuesday" id="button"
            class="btn btn-outline-none bg-secondary m-auto p-2"
             style="color: white;">Tuesday</button>

             <button type="submit" name="wednesday" id="button"
            class="btn btn-outline-none bg-success m-auto p-2"
             style="color: white;">Wednesday</button>

             <button type="submit" name="thursday" id="button"
            class="btn btn-outline-none bg-danger m-auto p-2"
             style="color: white;">Thursday</button>

             <button type="submit" name="friday" id="button"
            class="btn btn-outline-none bg-warning m-auto p-2"
             style="color: white;">Friday</button>

             <button type="submit" name="saturday" id="button"
            class="btn btn-outline-none bg-dark m-auto p-2"
             style="color: white;">Saturday</button>

             <button type="submit" name="sunday" id="button"
            class="btn btn-outline-none bg-primary m-auto p-2"
             style="color: white;">Sunday</button>

             


            </form>
</div>

</body>
</html>

<?php 

    if(isset($_GET['monday'])){
        echo "<br><h4 class='text-center m-auto p-2' style='width: 400px;'>
        Mnday</h4>";
    }
    
    if(isset($_GET['tuesday'])){
        echo "<br><h4 class='text-center m-auto p-2' style='width: 400px;'>
        Tuesday</h4>";
    }
    if(isset($_GET['wednesday'])){
        echo "<br><h4 class='text-center m-auto p-2' style='width: 400px;'>
        Wednesday</h4>";
    }
    if(isset($_GET['thursday'])){
        echo "<br><h4 class='text-center m-auto p-2' style='width: 400px;'>
        Thursday</h4>";
    }
    if(isset($_GET['friday'])){
        echo "<br><h4 class='text-center m-auto p-2' style='width: 400px;'>
        Friday</h4>";
    }
    if(isset($_GET['saturday'])){
        echo "<br><h4 class='text-center m-auto p-2' style='width: 400px;'>
        Saturday</h4>";
    }
    if(isset($_GET['sunday'])){
        echo "<br><h4 class='text-center m-auto p-2' style='width: 400px;'>
        Sunday</h4>";
    }

?>