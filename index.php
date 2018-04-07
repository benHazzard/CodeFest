<?php require "header.php"; ?>

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
</body>
</html>




