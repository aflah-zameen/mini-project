<?php include "database.php";
  include "header.php";
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
  <div class="main">
    <div class="registration-form">
      <div class="row">
        <div class="section-2">

        </div>
        <div class="section-1 col-6">
          <form action="index.php" method="POST">
            <br>
            <h1>Registration Form</h1><br>
            <div class="row-1">
              <div class="row ">
                <div class="col-6 row-0-0">
                  <input type="text" placeholder="First Name" name="fname" >
                 <p  class="error"><?=$fnameErr?></p> 
                </div>
                <div class="col-6 row-0-1">
                  <input type="text" placeholder="Last Name" name="lname">
                  <p class="error"><?=$lnameErr?></p>
                </div>
              </div>
            </div>
            <div class="row-2">
              <div class="row ">
                <div class="col-6 row-1-0">
                  <input type="text" placeholder="Email" name="email">
                  <p  class="error"><?=$emailErr?></p> 
                </div>
                <div class="col-6 row-1-1">
                  <h5>Gender</h5><input type="radio" name="radio" value="female" id="femalegender"><label for="femalegender">&nbsp;Female</label>
                  <input type="radio" name="radio" value="male" id="malegender"><label for="malegender">&nbsp;Male&nbsp;</label><input type="radio" value="other" id="othergender" name="radio"><label for="othergender">&nbsp;Other</label>
                  <p  class="error"><?=$genderErr?></p> 
                </div>
              </div>
            </div>
            <div class="row-3">
              <div class="row ">
                <div class="col-6 row-2-0">
                  <textarea type="text" placeholder="Address" name="address" rows="4" cols="22"></textarea>
                  <p  class="error"><?=$addressErr?></p>
                </div>
                <div class="col-6 row-2-1">
                  <input type="text" placeholder="Experience" name="experience">
                  <p  class="error"><?=$expErr?></p>
                </div>
              </div>
            </div>
            <div class="row-4">
              <div class="row ">
                <div class="col-6 row-3-0">
                  <input type="text" placeholder="Phone Number" name="phone">
                  <p  class="error"><?=$phoneErr?></p>
                </div>
                <div class="col-6 row-3-1">
                  <span>Category</span>

                  <select class="category" name="category">
                    <option disabled>Choose option</option>
                    <option value="Plumber">Plumber</option>
                    <option value="Electrician">Electrician</option>
                    <option value="Baby care taker">Baby care taker</option>
                    <option value="Mason">Mason</option>
                    <option value="Home nurse">Home nurse</option>

                  </select>
                  <p  class="error"><?=$categErr?></p>
                </div>
              </div>
            </div>
            <div class="row-5">
              <div class="row ">
                <div class="col-6 row-4-0">
                  <input type="text" placeholder="Rating" name="rating">
                  <p  class="error"><?=$ratingErr?></p>
                </div>
                <div class="col-6 row-4-1">
                  <input type="text" placeholder="Price" name="price">
                  <p  class="error"><?=$priceErr?></p>
                </div>
                <div class="col-12 buttonhead">
                  <button class="button" type="submit" name="submit">Register</button>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    <div class="status"><?=$status?></div>
  </div>
  </form>

  </div>





  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>