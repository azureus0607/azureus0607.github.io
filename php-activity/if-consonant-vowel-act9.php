<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consonant or Vowel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<div class="m-auto mt-3  text-center" style="width: 400px; background-color: #f3f3f3;">

        <h5 class="bg-dark p-4" style="color: white; width: 400px;">Consonant or Vowel ?</h5>
        
        
        <form action="" method="post" class="pt-3">
        <input type="text" name="text" placeholder="Enter a letter">
        
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
function check($letter){
    
 if($letter == 'a' || $letter == "i" || $letter == "u" || $letter == "e" || $letter == "0"){
         echo "<h3 class='bg-primary text-light text-center mt-3 m-auto' style='width:400px;'/>
         $letter --- Vowel";
    }
    else if(is_numeric($letter)){
         echo "<h3 class=' bg-danger text-light text-center mt-3 m-auto' style='width:400px; '/>
          --- Not a Number !";
    }
    else if(strlen($letter) > 1){
            echo "<h3 class='bg-danger text-light text-center mt-3 m-auto' style='width:400px; '/>
            $letter ---  you can Only one letter !";
   }
    else{
            echo"<h3 class='bg-success text-light text-center mt-3 m-auto' style='width:400px; '/>
            $letter ---  Constant";

    }

}

if(isset ($_POST['submit'])){
    $number1 = $_POST [ 'text' ];
    check($number1);
 }
    


?>