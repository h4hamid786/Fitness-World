<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            background-color: #8EC5FC;
            background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);

            border: 2px solid black;
            width: 100vw;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 2rem;
        }
        .card_container form{
            background-color: black;
            border: 2px solid black;
            width: 80vw;
            height: 80vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 1rem;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }
        .item{
            width: 30rem;
            height: 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .item input{
            width: 100%;
            height: 100%;
            border-radius: 0.5rem;
        }
        .select_tag{
            display: flex;
            justify-content: space-around;
            align-items: center;
            color: white;
        }
        #gender{
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            align-items: center;
            color: white;
        }
        .container >h1{
           
            text-align: center;
            text-decoration: underline;
            font-style: italic;
        }
        #submit_button input{
            border-radius: 5rem;
            border:none;
            width: 200px;
            background-color:orangered;
            color: black;
            font-weight: bold;
            font-size: 1rem;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }
        a{
            color:green;
            text-decoration:none;
            font-weight:bold;
            font-style:italic;
        }
       
    </style>
</head>
<body>
    <div class="container">
        <h1>Book Online</h1>
        <div class="card_container">
                <form action="" method="post">

                    <div class="item">
                        <input type="text" placeholder="Enter Your Name" name="name">
                    </div>
                    <div class="item">
                        <input type="text" placeholder="Enter Your Age" name="age">
                    </div>
                    <div class="item" id="gender">
                        <h1>Select Gender :</h1>
                        <div><input type="radio" name="gender" value="male"></div><h1>M</h1>
                        <div><input type="radio" name="gender" value="female"></div><h1>F</h1>
                    </div>
                    <div class="item">
                        <input type="email" placeholder="Enter Your Email" name="email">
                    </div>
                    <div class="item">
                        <input type="text"  placeholder="Enter Your Mobile" name="mobile">
                    </div>
                    <div class="item select_tag" >
                        <h3>Select Your Plan</h3>
                        <select name="plan" id="">
                            <option value="One Year">One Year</option>
                            <option value="Full Time">Full Time</option>
                        </select>
                    </div>
                    <div class="item select_tag">
                        <h3>Select Your Trainer</h3>
                        <select name="trainer" id="">
                            <option value="Aditya Kora">Aditya Kora</option>
                            <option value="Shubham Singh">Shubham Singh</option>
                        </select>
                    </div>
                    <div class="item" id="submit_button">
                    <input type="submit" name="submit" value="Register">
                    </div>
                     <a href="membership.php" target="_blank">Click here to See All Members List</a>


            </form>
        </div>
    </div>
</body>
</html>
<?php
    include 'connection.php';

    if(isset($_POST['submit'])){
        $name =$_POST['name'];
        $age =$_POST['age'];
        $gender =$_POST['gender'];
        $email =$_POST['email'];
        $mobile =$_POST['mobile'];
        $plan =$_POST['plan'];
        $trainer =$_POST['trainer'];

        $insertdata = "insert into membership (name,age,gender,mobile,email,plan,trainer)
        values('$name','$age','$gender','$mobile','$email ','$plan','$trainer')";

        $res =mysqli_query($con, $insertdata );
        if($res){
            ?>
                <script>
                    alert("Successfylly Registered");
                </script>
            <?php
        }
        else{
            ?>
                <script>
                    alert("Connection Error");
                </script>
            <?php
        }

        

    }



?>