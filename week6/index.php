<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS-PHP</title>
    <!-- bootstrap CDN CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php include('reusables/nav.php'); ?>
<div class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="display-5">All Schools</h1>
      </div>
    </div>
      <div class="row">
   
        <?php
          include('reusables/conn.php');
          $query = 'SELECT * FROM schools';
          $schools = mysqli_query($connect,$query);

          foreach($schools as $school){
            echo '<div class="col-md-8">
              <div class="card mb-4" style="width: 80rem;">
                <div class="card-body">
                  <h5 class="card-title">' .$school['Board']. '</h5>
                  <span class="badge rounded-pill text-bg-primary">' . $school['School Type'] .'</span>
                  <span class="badge rounded-pill text-bg-success">' . $school['Language'] .'</span>
                </div>
              </div>
            </div>';
          }

        ?>
      </div>
  </div>
</div>

    
</body>
</html>