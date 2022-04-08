<!doctype html>

<html lang="en">

  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS & Bootstrap -->
    <!-- <link href="NAME OF CSS FILE .CSS" rel="stylesheet"> -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Countdown App!</title>

  </head>

  <body>

    <?php 
        $date = date('2021-02-18');
        $time = date('12:25:00');
        $date_today = $date . '' . $time;
    ?>
    <script>
      // set the date we are counting down to 
      let count_id = "<?php echo $date_today; ?>";
      let countDownDate = new Date(count_id).getTime();

      // update the court down every 1 second
      let x = setInterval(function(){
        // get todays date and time
        let now = new Date().getTime();
        // find the disatance between now and the count down date
        let distance = count - now;
        // time calculations for day,hours,minutes and seconds
        let days = Math.floor(distance/(1000 * 60 * 60 * 24));
        let hours = Math.floor((distance%(1000*60*60*24))/(1000*60*60));
        let minutes = Math.floor((distance%(1000*60*60))/(1000*60));
        let seconds = Math.floor((distance%(1000*60))/(1000));

        // output countdown 
      });
    </script> 
    

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>

</html>