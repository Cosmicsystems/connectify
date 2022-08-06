<!DOCTYPE html>
<html>
  <?php 
      include("connection.php");
      $email=$_COOKIE['email'];
      $sql = "SELECT *FROM user WHERE mail = '$email'";
      $result=mysqli_query($con,$sql);
      if(mysqli_num_rows($result) > 0)
      {
      $record = mysqli_fetch_assoc($result);     
      $name = $record['name'];
      $mail =$record['mail'];
      $gender =$record['gender'];
      $mobile =$record['mobile'];
      }
  ?>
<head>
  
<title>Profile Card</title>
<meta charset="UTF-8">
<link rel="shortcut icon" href="connectify_favicon.png" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="docstyle.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
.button {
  display:flex;
  flex-direction:row;
}
.w3-third
{
  background-color:white;
}
body {
  background-color:white;
}
.w3-container{
  background-color:white;
}
.w3-twothird{
  background-color:white;
}
</style>
</head>
<div class="container">
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="download (1).png" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2 style="text-transform:capitalize"><?php echo $name; ?></h2>
          </div>
        </div>
        <div class="w3-container">
          <p style="text-transform:capitalize"><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $email ; ?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $gender; ?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $mobile; ?></p>
          <hr>

          
          <br>
        </div>
      </div><br>
         <div class="button">
       <button onclick="location.href = 'https://docs.google.com/forms/d/e/1FAIpQLSft6_v_inRQcFOOTvKoZmazQZNXtT_DP86fEtUD-JdKzTMEiA/viewform?usp=sf_link';">Book an Appoinment</button>
        &nbsp;&nbsp;&nbsp;
       <form action="logout1.php" method="GET">
         <button type="submit">Log Out</button>
       </form>
         </div>
      </div>

    <!-- Right Column -->
	
    <div class="w3-twothird">   
    
		
		
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b> <span style="text-transform: capitalize;"></span> </b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2021 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
          <hr>
        </div>
		
	  <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa-regular fa-location-check fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Location</h2>
		<div class="w3-container">

          <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248756.1167542448!2d80.06892435232284!3d13.047487785569134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5265ea4f7d3361%3A0x6e61a70b6863d433!2sChennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1656868212491!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		  </p><br>  </div>
      </div>
          </div>  
</body>
</html>
