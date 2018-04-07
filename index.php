<?php require_once "table.php"; ?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CodeFest</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    
    
<nav class="navbar navbar-dark bg-dark">
</nav>

<nav class="navbar navbar-dark bg-primary">
  <!-- Navbar content -->
</nav>

<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
</nav>
    

<body>
    <div class="container">
        <table id="dining-info" class="table table-dark">
            <thead>
            <tr>
              <th scope="col">Dining Hall</th>
              <th scope="col">Current Population</th>
              <th scope="col">Capacity</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <th scope="row"><?php echo $central_name; ?></th>
              <td><?php echo $central_total; ?></td>
              <td><?php echo $central_capacity; ?></td>
            </tr>
            <tr>
              <th scope="row"><?php echo $grundle_name; ?></th>
              <td><?php echo $grundle_total; ?></td>
              <td><?php echo $grundle_capacity; ?></td>
            </tr>
            <tr>
              <th scope="row"><?php echo $redstone_name; ?></th>
              <td><?php echo $redstone_total; ?></td>
              <td><?php echo $redstone_capacity; ?></td>
            </tr>
            </tbody>
        </table>
    
        <button class="btn btn-primary" onclick='window.location.reload(true);' id="update">Update</button>
    </div>    

    
<nav class="navbar navbar-dark bg-dark">
</nav>

<nav class="navbar navbar-dark bg-primary">
</nav>

<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
</nav>
    
</body>

</html>




