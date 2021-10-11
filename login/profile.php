<!DOCTYPE html>
<?php
include("database.php");
include("getProfile.php");
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="Login.css" /> 
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>User-Pofile</title>
       <?php
    if (isset($_SESSION["message"])){
         
                $message=$_SESSION["message"];
echo "<script type='text/javascript'>alert('$message');</script>";        
    unset($_SESSION['message']);
    
    
    }
    
    ?>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="updateProfile.php" method="post" class="sign-in-form">
<!--            <h2 class="title">PROFILE</h2>-->
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" value="<?php echo $data['username'];?>"  id="username" placeholder="Username" readonly/>
            </div>
              <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="name"  value="<?php echo $data['name'];?>" id="name" placeholder="Name" required/>
            </div>
              <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="fathername"  value="<?php echo $data['fathername'];?>" id="fathername" placeholder="Father Name" required/>
            </div>
                <div class="input-field">
              <i class="fa  fa-id-card-o"></i>
              <input type="text" name="cnic"  value="<?php echo $data['cnic'];?>" id="cnic" placeholder="CNIC" required/>
            </div>
                
              <div class="input-field">
              <i class="fa fa-phone"></i>
              <input type="text" name="phone"  value="<?php echo $data['phone'];?>" id="phone" placeholder="Phone" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email"  value="<?php echo $data['email'];?>" id="email" placeholder="Email" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="text" name="password"  value="<?php echo $data['password'];?>" id="password" placeholder="Password" required/>
            </div>
            <button class="btn solid">UPDATE</button>
          </form>
        </div>
      </div>




      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>FUNERAL360 PROFILE</h3>
            <p>
              Make Changes and press update button
            <br>
                NOTE : You cant change your username
            </p>
<!--
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
-->
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              click on below button to access your account!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
