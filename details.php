<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
 <div class="main" style="display: flex; flex-direction: column; align-items: center ;background-image:url('https://static.vecteezy.com/system/resources/previews/007/849/341/original/blood-donation-equipment-background-free-vector.jpg'); background-repeat: no-repeat; background-size: cover;">

<?php 
            include_once("./mini_db_conn.php");
            $link = mysqli_connect($hostName,$userName,$password,$databaseName);
            $qry = "select * from d_details";
            $resultset = mysqli_query($link,$qry);
           
?>
<section>
<div class='container'>
    <div class='row'>
        <?php
        while( $row=mysqli_fetch_assoc($resultset))
        {
        ?>
        <div class='col-lg-3 col-md-4 col-sm-6 mt-3'>
            <div class="card bg-danger"style='box-shadow: 1px 1px 3px 2px grey; border: 2px solid black ;'>
                <div class='card-body'>
                    <h4 style="color:white;"><?php echo $row['d_name']; ?> </h4>
                    <p style="color:white;">
                        Name     :  <?php echo $row['d_name']; ?> <br>
                        City     :  <?php echo $row['city']; ?> <br>
                        State     :  <?php echo $row['state']; ?> <br>
                        Blood group     :  <?php echo $row['b_group']; ?> <br>

                    </p>
                </div>
                <!-- <div class='caed-footer'>
                    <a href="#" class='btn btn-dark btn-block'>View Details</a>
                </div> -->
            </div>
        </div>
        <?php
        }
        ?>




    </div>
    </div>
</div>
</section>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>  
</body>
</html>