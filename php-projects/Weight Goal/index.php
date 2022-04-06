<!doctype html>

<html lang="en">

  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link href="NAME OF CSS FILE .CSS" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>GET & POST Project</title>

  </head>

  <body>

    <div class="container" style="border: 1px solid grey; padding: 20px; margin: 30px auto;">

      <h1 style="text-align: center; margin-bottom: 25px; text-decoration: underline;">BODY INDEX</h1>
    
      <form action="display-data.php" method="POST">

        <div class="mb-3">
          <label for="full-name" class="form-label">Full Name</label>
          <input type="text" name="full-name" class="form-control" id="full-name">
        </div>

        <div class="row mx-md-n5 mb-3">

          <div class="col px-md-5">
            <label for="gender" class="form-label">Gender</label>
            <select name="gender" id="gender" class="form-control">
              <option value="error">---</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>

          <div class="col px-md-5">
            <label for="age" class="form-label">Age</label>
            <input name="age" type="number" class="form-control" id="age">
          </div>

        </div>

        <div class="mb-3">
          <label for="disabledSelect" class="form-label">Goal</label>
          <select name="goal" id="disabledSelect" class="form-control">
            <option value="error">---</option>
            <option value="goal-gw">Gain Weight (Bulk Up!)</option>
            <option value="goal-lw">Lose Weight (Slim Down!)</option>
            <option value="goal-mw">Maintain Weight</option>
          </select>
        </div>

        <div class="row mx-md-n5 mb-3">    

          <div class="col px-md-5">
            <label for="current-weight" class="form-label">Current Weight (kg)</label>
            <input name="current-weight" type="number" class="form-control" id="current-weight">
          </div>

          <div class="col px-md-5">
            <label for="weight-goal" class="form-label">Weight Goal (kg)</label>
            <input name="weight-goal" type="number" class="form-control" id="weight-goal">
          </div>

        </div>

        <div class="mb-3">
          <label for="date" class="form-label">Weight Target Date</label>
          <input name="goal-date" type="date" class="form-control" id="date">
        </div>

        <div class="mb-3">
          <label for="activity-level" class="form-label">Activity Level</label>
          <select id="activity-level" class="form-control">
            <option value="error">---</option>
            <option value="high">I train 5 or more times a week !</option>
            <option value="moderate">I train 3-5 times a week !</option>
            <option value="low">I train ones or twice times a week if i get time !</option>
            <option value="zero">I don't bother</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="current-diet" class="form-label">Current Diet</label>
          <select id="current-diet" class="form-control">
            <option value="error">---</option>
            <option value="high-cal">I am well fed! (>3000 cals)</option>
            <option value="rec-cal">I eat a good breakfast and a nice dinner (2000-2500 cals)</option>
            <option value="low-cal">I eat whenever I can (1000-2000 cals)</option>
            <option value="poor-diet">I have a poor diet</option>
          </select>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Submit</button>

      </form>

    </div>






    <!-- JavaScript -->
    <!-- <script src="NAME OF JAVASCRIPT FILE .JS"> </script> -->


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>

</html>