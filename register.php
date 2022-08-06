<?php
include('connection.php');
if(isset($_POST['submit']))
{
$name = $_POST['tname'];
$mail = $_POST['tmail'];
$gender = $_POST['tgender'];
$password =$_POST['tpass'];
$role = $_POST['userrole'];
$dob = $_POST['tdob'];
$category=$_POST['tcategory'];
$pincode = $_POST['tpincode'];
$lan = $_POST['tlanguages'];
$domain = $_POST['trecentcourse'];
$study = $_POST['tuniv'];
$status = $_POST['t-com-or-pur'];
$des = $_POST['tdescription'];
$mob = $_POST['tmobile'];
$sql = " INSERT INTO user (name,mail,gender,password,role,dob,category,pincode,lang,study,univ,status,description,mobile)VALUES('$name','$mail','$gender','$password','$dob','$role','$category','$lan','$pincode','$domain','$study','$status','$des','$mob')";
mysqli_query($con,$sql);
?>
<script>
    alert("account created successfully");
    window.location.href="home.html";
</script>
<?php
}
?>
