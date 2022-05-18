<?php
  include "connection.php";
  include "navbar.php" ;
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Student Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
      section {
        margin-top: -20px;
      }
    </style>
  </head>
  <body>
   
    <section>
      <div class="reg_img">
        <div class="box2">
          <h1
            style="
              text-align: center;
              font-size: 35px;
              font-family: Lucida Console;
            "
          >
            Library Management System
          </h1>
          <h1 style="text-align: center; font-size: 25px">
            User Registration Form
          </h1>
          <form name="Registration" action="" method="post">
            <div class="login">
              <input
                class="form-control"
                type="text"
                name="first"
                placeholder="First Name"
                required=""
              />

              <input
                class="form-control"
                type="text"
                name="last"
                placeholder="Last Name"
                required=""
              />

              <input
                class="form-control"
                type="text"
                name="username"
                placeholder="Username"
                required=""
              />

              <input
                class="form-control"
                type="password"
                name="password"
                placeholder="Password"
                required=""
              />

              <input
                class="form-control"
                type="text"
                name="roll"
                placeholder="Roll No"
                required=""
              />

              <input
                class="form-control"
                type="text"
                name="email"
                placeholder="Email"
                required=""
              />
              

              <input
                class="form-control"
                type="text"
                name="contact"
                placeholder="Phone No"
                required=""
              />
             

              <input
                class="btn btn-default"
                type="submit"
                name="submit"
                value="Sign Up"
                style="color: black; width: 70px; height: 30px"
              />
            </div>
          </form>
        </div>
      </div>
    </section>
  
  <?php

    if(isset($_POST['submit']))
    {
        $count=0;
        $sql="SELECT username from `student`";
        $result=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($result))
        {
            if($row['username']==$_POST['username'])
            {
                $count=$count+1;
            }
        }
       if($count==0)
       {mysqli_query($db,"INSERT INTO `STUDENT`  VALUES('$_POST[first]', '$_POST[last]', '$_POST[username]', '$_POST[password]', 
       '$_POST[roll]', '$_POST[email]', '$_POST[contact]'); ");

    ?>
        <script type="text/javascript">
            alert("Resgistration successful");
        </script>

    <?php
       }

            else
            {
                ?>
        <script type="text/javascript">
            alert("The username alredy exist.");
        </script>
    <?php
            }

       }

?>
      
  </body>
</html>