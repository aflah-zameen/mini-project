<?php include "../user/connection.php";
$sql= "SELECT * FROM staff";
$featured=$con->query($sql);
include "header.php";
?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'&&isset($_POST['removebutton']))
{
  $data=$_POST['id'];
  $sql="DELETE FROM staff WHERE id='$data' ";
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
    <link rel="stylesheet" href="style_admin.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container">
      <h2 style="text-align: center;">Staff List</h2>
        <div class="listing">
        <table class="table">
  <thead>
    <tr style="font-size: large;">
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Position</th>
      <th scope="col">Education</th>
      <th scope="col">Type of work</th>
      <th scope="col">Contact No</th>
      <th scope="col">Salary</th>
      <th scope="col"></th>
    </tr>
    <tbody>
      <?php
       while($staff_details=mysqli_fetch_assoc($featured)):
      ?>
      <tr>
      <th scope="row"><?php echo $staff_details['id']; ?></th>
      <th scope="row"><?php echo $staff_details['fname']." " .$staff_details['lname'];  ?></th>
      <th scope="row"><?= $staff_details['applied_position'];  ?>&nbsp;yr</th>
      <th scope="row"><?php echo $staff_details['qualification']; ?></th>
      <th scope="row"><?= $staff_details['type_of_work'];  ?></th>
      <th scope="row">₹<?= $staff_details['phone_no'];  ?></th>
      <th scope="row">₹<?= $staff_details['salary'];  ?></th>
      <th>
        <form action="staff.php" method="POST">
          <span class="submit-button"><input type="submit" name="removebutton" value="Delete"></span>
          <input type="hidden" name="id" value="<?= $staff_details['id']; ?>">
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