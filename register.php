
<?php
        
            
        include('./connection/connection.php');
        if (isset($_POST['submit']))
        
              {
                  
                  $name  =  $_POST['name'];
                  $pass   =  $_POST['pass'];
                  $email   =  $_POST['email'];    
                  $filename    =  $_FILES['uploadfile'];
                  $filename = $_FILES['uploadfile']['name'];
                  $tempname = $_FILES['uploadfile']['tmp_name'];
                   $folder = 'uploads/'.$filename;
                  move_uploaded_file($tempname,$folder);
                  $address    =  $_POST['address'];
                 

$query = mysqli_query($conn, "INSERT INTO members (name  , email ,	password , image ,address ) VALUES('$name'  ,' $email','$pass','  $folder','$address')");

                  if ($query) 
                  {
                    echo "<script>alert('Record Inserted Successfully!');
                    window.location.href='index.php';
                    </script>";
                  }
                  else
                  {
                  	 echo "<script> alert('Record insertion Failed !!!!'); </script>";
                  }

              }      
  ?>

<html>
  <head>
    <title>Document</title>

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="nav.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="font-awesome/css/font-awesome.min.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
    <style>
        body
        {
            background-image: url('./assets/img/background.png');
            background-repeat: no-repeat;
            background-size:cover;
            
        }
        .background{
          background-color: gray;
          width: 100%;
        } 
    </style>
  </head>
  <body>
  
      
    <div class="container">
      <div class="row">
        <h1 class="text-center"  style="font-family: algerian; ">Registration Form</h1>
        <h5 class="text-center text-danger">Fill the form carefully!</h5>
        <div class="col-sm-4 col-lg-offset-4">

          <div class="myform">
        
          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label >Name</label>
              <input type="text" class="form-control" name="name" required="true" class="mylabel" />
            </div>
            
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" name="pass" required="true" />
            </div>

            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" name="email" required="true" />
            </div>

            <div class="form-group">
              <label>Image</label>
              <input type="file" class="form-control" name = "uploadfile" />
            </div>


            <div class="form-group">
              <label for="">CNIC</label>
              <input
              type="text"
              data-inputmask="'mask': '99999-9999999-9'"
              class="form-control"
              placeholder="XXXXX-XXXXXXX-X"
              name="cnic"
              required=""
            />
             

            </div>
            <div class="form-group">
              <label for="">Mobile No</label>
              <input
              type="text"
              data-inputmask="'mask': '0399-99999999'"
              required=""
              class="form-control"
              type="number"
              maxlength="12"
              name="mobile"
            />
            <script>
                $(":input").inputmask();
              </script>
            </div>

            <div class="form-group">
              <label>Address</label>
              <textarea class="form-control" name="address" rows="4"></textarea>
            </div>

           

            <input type="submit" name="submit" class="btn btn-success btn-block" />

  
            

          </form>

          </div>

        </div>


    </div>
    </div>
  </body>
</html>
