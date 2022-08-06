<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>Doctors</title>
  <link rel="shortcut icon" href="connectify_favicon.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    p,
    span,
    h6 {
      font-family: "Poppins", sans-serif;
    }
    .para{
      font-family: "Poppins", sans-serif;
    }
    .w3-bar,
    h1,
    button {
      font-family: "Montserrat", sans-serif
    }

    .fa-anchor,
    .fa-coffee {
      font-size: 200px
    }

    .topnav {
      overflow: hidden;
      background-color: #67a1b8;
    }

    .topnav a {
      float: left;
      display: block;
      color: black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }

    .topnav a.active {
      background-color: #285161;
      color: white;
    }

    .topnav .search-container {
      float: right;
    }

    .topnav input[type=text] {
      padding: 6px;
      margin-top: 8px;
      font-size: 17px;
      border: none;
    }

    .topnav .search-container button {
      float: right;
      padding: 6px 10px;
      margin-top: 8px;
      margin-right: 16px;
      background: #6693a5;
      font-size: 17px;
      border: none;
      cursor: pointer;
    }

    @import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600');

    * {
      margin: 0;
      padding: 0;
    }

    body {
      background: #acd3e3;
      font-family: 'Open Sans', sans-serif;
    }

    .wrapper {
      position: relative;
    }


    .wrapper2 {
      position: relative;
    }

    .brd {
      margin-left: 10px;
      display: flex;
      flex-direction: column;
    }

    .container {
      width: 480px;
      height: 200px;
      background: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    .img-container {
      width: 40%;
      height: 100%;
      float: left;
      position: relative;
    }

    .img-container img {
      width: 100%;
      height: 100%;
      border-top-left-radius: 5px;
      border-bottom-left-radius: 5px;
    }

    .content {
      width: 60%;
      height: 100%;
      float: left;
      padding: 30px 40px;
      box-sizing: border-box;
    }

    .head {
      padding-bottom: 30px;
    }

    .head p {
      font-size: 28px;
      color: #444444;
      font-weight: 600;
      text-transform: capitalize;
    }

    .head span {
      color: black;
      font-size: 14px;
      text-transform: capitalize;
    }

    .data {
      width: 90%;
      overflow: hidden;
    }

   .inner-data {
      width: 100%;
      float: left;
      text-align: left;
      color: black;
    }

    .inner-data p {
      font-size: 14px;
      padding-bottom: 0px;
    }

    .inner-data span {
      font-size: 18px;
      font-weight: 400;
    }

    .floating-icon {
      position: absolute;
      width: 50px;
      height: 50px;
      top: 38%;
      right: -5%;
      background: #1DA1F2;
      border-radius: 50%;
      cursor: pointer;
    }

    .floating-icon .fa {
      position: absolute;
      left: 18px;
      top: 15px;
      color: #fff;
      font-size: 20px;
      transition: all 1s ease;
    }

    .floating-icon.active .fa {
      transform: rotate(45deg);
      transition: all 1s ease;
    }
    table,th,td {
      border-collapse:collapse;
      border:2px solid lightblue;
      font-size:24px;
      padding:10px;
    
    }
    .btn {
      position: absolute;
      top: 10px;
      right: 10px;
      text-transform: uppercase;
      font-size: 12px;
      background: #1DA1F2;
      padding: 6px 15px;
      border-radius: 50px;
      color: #fff;
      font-weight: 600;
      opacity: 0;
      transition: all 1s ease;
      cursor: pointer;
    }

    .btn.active {
      opacity: 1;
    }

    .topnav .search-container button:hover {
      background: #ccc;
    }

    .lal {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
    }

    .rev {
      margin-top: 40px;

    }

    .iew {
      font-size: 35px;
      color: black;
      border-top: 2px solid rgb(12, 12, 36);
      border-bottom: 2px solid rgb(12, 12, 36);
    }

    .last {
      margin-left: 760px;
    }

    .mur {
      margin-left: 20px;
    }

    @media screen and (max-width: 600px) {
      .topnav .search-container {
        float: none;
      }

      .topnav a,
      .topnav input[type=text],
      .topnav .search-container button {
        float: none;
        display: block;
        text-align: left;
        width: 100%;
        margin: 0;
        padding: 14px;
      }

      .topnav input[type=text] {
        border: 1px solid #ccc;
      }
    }

    .heading h3 {
      margin-left: 15px;
      font-size: 30px;
      font-family: 'Times New Roman', Times, serif;
      font-weight: bold;
      margin-top: 10px;
    }

    .h {
      color: rgb(12, 46, 113);
      font-size: 50px;
      border-bottom: 2px solid rgb(10, 22, 46);

    }

    .k {
      color: rgb(12, 46, 113);
      font-size: 50px;
      border-bottom: 2px solid rgb(10, 22, 46);

    }
    #a {
      text-decoration:none;
    }
    .para {
      font-size: 24px;
      
      word-spacing: 2px;
    }

    #search{
      margin-top: 12px;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <div class="topnav">
    <a class="active" href="http://127.0.0.1:8000/">Home</a>
    <a href="http://127.0.0.1:8000/about">About</a>
    <a href="http://127.0.0.1:8000/#twi">Contact</a>
    <div class="search-container">
      <div class="input-group mb-7">

        <form action="" method="GET">

        <input type="text" class="form-control" placeholder="search here" name="search">
      
         
            <button type="submit">Submit</button>
          
          </form>
      </div>
    </div>
  </div>


  <!-- Header -->
  <header class="w3-container w3-center" >
    <img src="doctor_bg.png" alt="img" width="100%" height="600px">
  </header>
  </div>

  <div class="heading">
    <h3> See Your Search Results Here</h3>
           
                 <div class="card-body">
                  <center>
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                                <th>NAME</th>
                                <th>PHONE NO</th>
                                <th>GENDER</th>
                                <th>MAIL</th>
                                <th>DOMAIN</th>
                           </tr>
                        </thead>
                               <tbody>
                                <?php
                               $con = mysqli_connect("localhost","root","","account");
                               if(isset($_GET['search']))
                               {
                                $filter = $_GET['search'];
                                $sql = "SELECT * FROM user WHERE category='$filter' ";
                                $result = mysqli_query($con,$sql);
                                if(mysqli_num_rows($result)>0)
                                {
                                    foreach($result as $items)
                                    {
                                      ?>
                                      
                                 <tr>
                              <td>  <a href="doc1.php" id="a">  <?php echo $items['name']; ?> </a></td>
                                  <td><?php echo $items['mobile']; ?></td>
                                  <td><?php echo $items['gender']; ?></td>
                                  <td><?php echo $items['mail']; ?></td>
                                  <td><?php echo $items['category']; ?></td>
                                 </tr>

                                     <?php
                                    }
                                }
                                else
                                {
                                  ?>
                                 
                                 <tr colspan="3">
                                  <td>No record found</td>
                                 </tr>

                                 <?php
                                }
                               }
                                ?>
                                <tr>
                                  <td></td>
                                 </tr>
                                </tbody>
                       </table>
                  </center>
               </div>
  </div>
  <br><br>
 
  <div class="mur">
    <span class="h">We Serve</span>
    <p class="para">
     
Find the ‘best doctors near me’ on "Connectify" by typing the same in the search bar. The website/mobile app provides you with instant 
details along with a range of options. You can easily find the doctor’s clinic address and contact details'
    </p><br>
    <span class="k">How to access</span>
    <p class="para">


      Click on the ‘Book Appointment’ tab and fill in the required details or directly contact the doctor to fix an
      appointment.
</p>
    <div class="rev">
      <p class="iew">"One of the nicest doctors i have met, very patient in hearing the complaints and very clear in explaining things."<br><span class="last">-Ajith Vasan</span> </p>
    </div>
  </div>

  </div>


  <script>
    // Used to toggle the menu on small screens when clicking on the menu button
    function myFunction() {
      var x = document.getElementById("navDemo");
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
      } else {


        x.className = x.className.replace(" w3-show", "");
      }
    }
    
    window.onload = function() {
      var text = document.getElementById("field-inner").innerHTML;
      var image = document.getElementById("images");
      if(text == "") {
        image.style.display = "block";
      }
      else {
        image.style.display = "none";
      }
      
    }
    
  </script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>