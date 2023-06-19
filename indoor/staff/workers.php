<?php include "../user/connection.php";
$sql= "SELECT * FROM workers";
$featured=$con->query($sql);
include "header.php";
?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'&&isset($_POST['removebutton']))
{
  $data=$_POST['id'];
  $sql="DELETE FROM workers WHERE id='$data' ";
  $query=$con->query($sql);
  header("Refresh:0"); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_staff.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container">
      <h2 style="text-align: center;">Workers List</h2>
        <div class="listing">
        <table class="table">
  <thead>
    <tr style="font-size: large;">
      <th scope="col"></th>
      <th scope="col">Name</th>
      <th scope="col">Experience</th>
      <th scope="col">Category</th>
      <th scope="col">Rating</th>
      <th scope="col">Price</th>
      <th scope="col"></th>
    </tr>
    <tbody>
      <?php
       while($worker_details=mysqli_fetch_assoc($featured)):
      ?>
      <tr>
      <th scope="row"><?php echo $worker_details['id']; ?></th>
      <th scope="row"><?php echo $worker_details['fname']." " .$worker_details['lname'];  ?></th>
      <th scope="row"><?= $worker_details['experience'];  ?>&nbsp;yr</th>
      <th scope="row"><?php echo $worker_details['category']; ?></th>
      <th scope="row"><?= $worker_details['rating'];  ?></th>
      <th scope="row">₹<?= $worker_details['price'];  ?></th>
      <th>
        <form action="workers.php" method="POST">
          <span class="submit-button"><input type="submit" name="removebutton" value="Delete"></span>
          <input type="hidden" name="id" value="<?= $worker_details['id']; ?>">
        </form>
      </th>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </thead>
    </table>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>