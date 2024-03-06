<?php

$username ="root";
$password = "";
$server ="localhost";
$db ="bookonline";

$con = mysqli_connect($server,$username,$password,$db);

if($con){
    ?>
    <script>
        alert("Welcome To World Of Fitness");
    </script>
    <?php
}
else{
    ?>
    <script>
        alert("Connection Successfull");
    </script>
    <?php
}
?>