<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    <?php $connection = mysqli_connect("localhost", "root", "", "project"); ?>
    <?php if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $query = mysqli_query($connection,"SELECT * FROM student WHERE name LIKE '%$name%' ");
    }?>
    <div class="container">
        <div class="row">
            <div class="col-12">
  <table class="table">
  <thead>
  <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PASSWORD</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($query as $data){?>
    <tr>
      <td><?php echo $data['id']; ?></td>
      <td><?php echo $data['name']; ?></td>
      <td><?php echo $data['email']; ?></td>
      <td><?php echo $data['pass']; ?></td>
    </tr>
    <?php } ?> 
     </tbody>
</table>
</div>
</div>
    </div\>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>