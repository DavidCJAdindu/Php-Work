<!doctype html>

<html lang="en">

  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Form</title>

  </head>

  <body>

 
  <p><h1 style="color:<?php echo $_POST['color'];
    ?>">Change the color of this text</h1></p>

  <br>

  <form action="index.php" method="post">
    Which color do you want to change to: 
    <input type="text" name="color">
    <br>
    <br>
    <input type="submit" name="change" value="Change Color">
  </form>




   

  </body>

</html>