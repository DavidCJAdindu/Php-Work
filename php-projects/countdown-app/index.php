<!doctype html>

<html lang="en">

  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
        p {
            font-size: 30px;
            margin: 20px 0px 20px 0px;
        }

        .container {
            text-align: center;
            margin: 20px 0px;
        }

        h1 {
            background-color: red;
            padding: 12px;
        }

        #demo {
            text-decoration: underline;
        }

    </style>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Countdown App!</title>

  </head>

  <body>

    <?php 
        $date = date('2022-04-22');
        $time = date('14:00:00');
        $date_today = $date . ' ' . $time;
    ?>

    <script type="text/javascript">
      // set the date we are counting down to 
      let count_id = "<?php echo $date_today; ?>";
      let countDownDate = new Date(count_id).getTime();

      // update the court down every 1 second
      let x = setInterval(function(){
        // get todays date and time
        let now = new Date().getTime();
        // find the disatance between now and the count down date
        let distance = countDownDate - now;
        // time calculations for day,hours,minutes and seconds
        let days = Math.floor(distance/(1000*60*60*24));
        let hours = Math.floor((distance%(1000*60*60*24))/(1000*60*60));
        let minutes = Math.floor((distance%(1000*60*60))/(1000*60));
        let seconds = Math.floor((distance%(1000*60))/1000);

        // output countdown 
        document.getElementById("demo").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

        // display when count down is finished
        if(distance<0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "";
        }
      }, 1000);
    </script> 

    <div class="container">

        <h1>
            Welcome David, hope your having a nice day!
        </h1>

        <p class="mt-5 mb-5">This is how long you have till your interview with Champion's Travel</p>
        <span style="font-size: 20px;"> <?php echo $date . " at " . $time; ?> </span>
        <br>
        <span id="demo" style="font-size:40px;"></span>
        <br>
        <br>
        <img src="profil-pic.jpg" alt="ot-trips" height="300px" width="350px">

    </div>

    
    

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>

</html>