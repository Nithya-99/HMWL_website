  <?php include 'userheader1.php'; ?>
  <!DOCTYPE html>
  <head>
    <title>Handmade with Love</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="header_footer.css">
    <link rel="stylesheet" type="text/css" href="form.css">
    <script src="./bootstrap/jquery.min.js"></script>
    <script src="./bootstrap/popper.min.js"></script>
    <script src="./bootstrap/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
      input[type=text]{
        border: none;
      }
      input{
        background: inherit;
        font-weight: bold;
      }
      td{
        vertical-align: middle;
        font-family: 'sans-serif';
        font-size: 20px;
        font-weight: bold;
        text-align: center;
      }
      button{
        width: 35%;
      }
      .form{
        background: rgba(2, 54, 87, 0.8);
        padding: 20px;
      }
    </style>
  </head>
  <body style="background-image: url('./images/img4.jpg');">

    <?php

  //session_start();

    if(!isset($_SESSION['uid']))
    {

      echo ("<script LANGUAGE='JavaScript'>
        window.alert('Login First');
        window.location.href='./loginform.php';
        </script>");
    }
    else
    {

      $uid = $_SESSION['uid'];


      require_once('connection.php');

      $result = mysqli_query($con,"SELECT * from user where user_id = '$uid' ");

      $row = mysqli_fetch_assoc($result);

      ?>
      
      <div style="z-index: 1;">
        <br>


        <center>
          <div class="table-responsive">
            <form name = "myprofile" method = "POST" class="form" action = "updateprofile.php?uid=<?php echo $uid; ?>">
              <h3 align='center'>My Profile</h3>
              <div class="container">
                <br><label>Name</label>
                <input type="text" name="uname" id="uname" required readonly value="<?php echo $row['name'] ?>"> 
                <br><label>Email</label>
                <input type="email" name="email" id="email" required readonly value="<?php echo $row['email'] ?>"> 
                <br><label>Contact No.</label>
                <input type="text" name="mobile" id="mobile" required readonly value="<?php echo $row['mobile'] ?>"> 
                <br><label>Gender</label>
                <input type="text" name="gender" id="gender" required readonly value="<?php echo $row['gender'] ?>">
                <br><label>Old Password</label>
                <input type="password" name="crpw" id="crpw" required>  
                <br><label>New Password</label>
                <input type="password" name="npw" id="npw" required> 
                <br><label>Re-enter New Password</label>
                <input type="password" name="repw" id="repw" required> 
                <div class="clearfix"> 
                  <button class="btn" name="login" type="submit">Save Changes</button> 
                </div>
              </div>
              
            </form>
          </div>
        </center>


      </div>

      <div id="footer" style="position: relative; bottom: 0px; width: 100%">
        <?php include 'footer.php';?>
      </div>

      <?php
    }


    ?>

  </body> 
  </html>