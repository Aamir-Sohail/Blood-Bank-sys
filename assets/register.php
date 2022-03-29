
<?php
        
            
        include('./connection/connection.php');
        if (isset($_POST['submit']))
        
              {
                  
                  $name_var    =  $_POST['r_name'];
                  $fname_var    =  $_POST['r_fname'];
                  $password_var    =  $_POST['r_password'];
                  $email_var    =  $_POST['r_email'];
                  $bgroup_var    =  $_POST['r_bgroup'];
                  $filename    =  $_FILES['uploadfile'];

                  $filename = $_FILES['uploadfile']['name'];
                  $tempname = $_FILES['uploadfile']['tmp_name'];
                   $folder = 'uploads/'.$filename;
                  move_uploaded_file($tempname,$folder);






                  
                  $cnic_var    =  $_POST['r_cnic'];
                  $address_var    =  $_POST['r_address'];
                  $mobile_var    =  $_POST['r_mobile'];

$query = mysqli_query($conn, "INSERT INTO members   
(name , fname , password ,	email ,	bgroup, img ,	cnic ,	address , mobile) VALUES('$name_var' , '$fname_var' ,' $password_var','$email_var','$bgroup_var','  $folder',' $cnic_var',' $address_var ','$mobile_var')  ");

                  if ($query) 
                  {
                  	 echo"<script> alert('Record inserted successfully'); </script>";
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
              <input type="text" class="form-control" name="r_name" required="true" class="mylabel" />
            </div>
            <div class="form-group">
              <label>Father Name</label>
              <input type="text" class="form-control" name="r_fname" required="true" />
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" name="r_password" required="true" />
            </div>

            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" name="r_email" required="true" />
            </div>

            <div class="form-group">
              <label>Blood Group</label>
              <select name="r_bgroup" id="" class="form-control">
                <option value="" selected disabled>Select Blood Group</option>
                <option value="">A+</option>
                <option value="">B+</option>
                <option value="">O+</option>
                <option value="">AB+</option>
                <option value="">A-</option>
                <option value="">B-</option>
                <option value="">O-</option>
                <option value="">AB-</option>
              </select>
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
              name="r_cnic"
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
              name="r_mobile"
            />
            <script>
                $(":input").inputmask();
              </script>
            </div>

            <div class="form-group">
              <label>Address</label>
              <textarea class="form-control" name="r_address" rows="4"></textarea>
            </div>

           

            <input type="submit" name="submit" class="btn btn-success btn-block" />

  
            

          </form>

          </div>

        </div>


    </div>
    </div>
  </body>
</html>
