<!doctype html>

<html lang="en">

  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Form</title>

  </head>

  <body>


    <form action="" method="get">      
        <h1>Please input your name: </h1>
        <input type="text" name="fname"> <input type="submit" value="Submit Name" >
    </form>

    <br>

    <?php
        echo $_GET['fname'];
    ?>


   

  </body>

</html>