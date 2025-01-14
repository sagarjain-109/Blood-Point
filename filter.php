<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
</style>
<body background="https://static.vecteezy.com/system/resources/previews/007/849/341/original/blood-donation-equipment-background-free-vector.jpg">
<div class='container-fluid'>
    <form method='post' action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div>
            <?php
             include_once("./mini_db_conn.php");
             $link = mysqli_connect($hostName,$userName,$password,$databaseName);
             $qry = "select b_group from d_details";
              $resultset = mysqli_query($link,$qry);
              ?>
            <input type="text" name="i_snm" id="" list="mylist" class="m-2" align="center" >
            <datalist id="mylist">
            <?php
                while ($row=mysqli_fetch_assoc($resultset))
                echo "<option>$row[b_group]<option>";
            ?>
            </datalist>
            <input type="submit" name="showBtn" id="" value="Show Result" class="btn btn btn-outline-danger">
            <?php
                extract($_POST);
                if(isset($showBtn))
                {
                    $qry="select * from d_details where b_group='$i_snm'";
                    // echo $qry;
                    $resultset = mysqli_query($link,$qry);
                    $row = mysqli_fetch_assoc($resultset);
                    extract($row);
                }
           ?>
  <div class="form-row ">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" value="<?php if(isset($showBtn)) echo $e_mail; ?>">
    </div>
    <div>
      <label for="inputName">Name</label>
      <input type="text" class="form-control" id="inputName" value="<?php if(isset($showBtn)) echo $d_name; ?>">
    </div>
    <div class="form-group">
      <label for="inputnumber">Phone No.</label>
      <input type="number" class="form-control" id="inputnumber" value="<?php if(isset($showBtn)) echo $p_no; ?>">
    </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" value="<?php if(isset($showBtn)) echo $addr; ?>">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" value="<?php if(isset($showBtn)) echo $city; ?>">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <input type="text" class="form-control" id="inputState" value="<?php if(isset($showBtn)) echo $state; ?>">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip/Pin Code</label>
      <input type="text" class="form-control" id="inputZip" value="<?php if(isset($showBtn)) echo $pincode; ?>">
    </div>
  </div>
</div>
</div>
</form>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>  
</body>
</html>
