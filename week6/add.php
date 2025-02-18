<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<?php 
include("reusables/nav.php");
include("reusables/conn.php");
?>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="display-5">Add a School</h1>
      </div>
    </div>
    <div class="row">
        <div class="col-md-6">
        <form method="POST" action="add.php">
            <div class="mb-3">
                <label for="boardname" class="form-label">Board Name</label>
                <input type="text" class="form-control" id="boardname" aria-describedby="boardname" name="boardname">
            </div>
            <div class="mb-3">
                <label for="language" class="form-label">Language</label>
                <input type="text" class="form-control" id="language" aria-describedby="language" name="language">
            </div>
            <div class="mb-3">
                <label for="schooltype" class="form-label">School Type</label>
                <input type="text" class="form-control" id="schooltype" aria-describedby="School Type" name="language">
            </div> 
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
  </div>

    
</body>
</html>