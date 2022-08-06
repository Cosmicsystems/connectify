<?php
include('connection.php');
$id = $_POST['slmail'];
$password = $_POST['slpass'];
$sql = "SELECT * FROM user WHERE name='$id' AND password='$password'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0)
{
    $record = mysqli_fetch_assoc($result);
    $email = $record['mail'];
    $password = $record['password'];
    setcookie('email',$email,time()+60*60*24*30, "/");
    ?>
    <script>
        alert("logged in succesfully");
        window.location.href='doc1.php';
    </script>
    <?php
}
else{
    ?>
    <script>
        alert("login invalid");
    </script>
    <?php
}
?>