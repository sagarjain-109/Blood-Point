<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blood Point</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
 <section class="h-100 gradient-form" style="background-color: #eee;">
 <div class="main" style="display: flex; flex-direction: column; align-items: center ;background-image:url('https://static.vecteezy.com/system/resources/previews/007/849/341/original/blood-donation-equipment-background-free-vector.jpg'); background-repeat: no-repeat; background-size: cover;">
            <div class="col-lg-6" >
              <div class="card-body p-md-5 mx-md-4">
                <div class="text-center">
                  <img src="./assets/logo.png" style="width: 185px; border-radius: 50%;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Welcome to Blood point</h4>
                </div>
                <form method='post' action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <h6>Please login to your account</h6>
                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example11" class="form-control mt-3" name='user'
                      placeholder="Email address" />
                    <label class="form-label" for="form2Example11">Username</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example22" class="form-control" name='d_pwd' placeholder="abc@1233" />
                    <label class="form-label" for="form2Example22">Password</label>
                  </div>
                  <div class="text-center pt-1 mb-5 pb-1">
                    <input type="submit" class="btn btn-outline-primary btn-block fa-lg gradient-custom-2 mb-3" name='loginBtn' value='Log in'><br>
                    <a class="text-muted" href="#!">Forgot password?</a>
                  </div>
                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                  <a href="signup.php"><input type="button" name="button" id="" value="Create new account"class="btn btn-outline-success"></a> 
                  </div>

                </form>
            </div>
        </div>
</section>
</div>
<?php
    extract($_POST);
    if(isset($loginBtn))
    {
        if (!empty($user) and !empty($d_pwd))
        {
            include_once("./mini_db_conn.php");
            $link = mysqli_connect($hostName,$userName,$password,$databaseName);
            $qry = "select * from d_details where e_mail='$user' and d_pwd='$d_pwd'";
            $resultset=mysqli_query($link,$qry);
            $num_rows=mysqli_num_rows($resultset); 
            if($num_rows)
            {
                $data = mysqli_fetch_assoc($resultset);
                extract($data);
                header("location:index.html");
            }
            else 
            {
                echo "Invalid User ID or Password";
            }
        }
        else 
        {
            echo "Fields can't be left Blank.....";
        }
    }
    ?>
</body>
</html>
