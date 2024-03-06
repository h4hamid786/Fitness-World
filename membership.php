<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership List</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            width: 100%;
            height: 100%;
        }
        .form_container form{
            width: 1200px;
            height: 10rem;
            margin: 0 auto;
            background-color: pink;
            display:flex;
            justify-content:center;
            align-items:center;
            gap: 1rem;
        }
        #submit_button{
            width: 200px;
            height: 50px;
            text-align:center;
            font-weight:bold;
            font-size:20px;
            color:white;
            border-radius:2rem;
            background-color: #8EC5FC;
            background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);
        }
        .input{
            width: 300px;
            height: 50px;
            border-radius:2rem;
            text-align:center;
            font-weight:bold;
            font-size:20px;
            background-color: black;
            color:white;
        }
        table,th,td{
            width: 1200px;
            height: 50px;
            border:2px solid black;
            border-collapse:collapse;
            text-align:center;
            font-size:18px;
        }
        th{
            background-color: #8EC5FC;
            background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);
        }
        table{
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;

        }
        
        .container{
            width: 1200px;
            height: 100rem;
            margin: 0 auto;
            /* background-color: yellow;
            border:2px solid black; */
            display: flex;
            justify-content: center;
            margin-top: 1rem;

        }
        
    </style>
</head>
<body>
    <div class="form_container">
    <form action="" method="post">  
        <input type="text" Placeholder="Enter id" name="id" class="input"><br><br>
        <input type="text" Placeholder="Enter Name" name="name" class="input" ><br><br>
        <input type="submit" name ="submit" value="Check Now" id="submit_button">
    </form>
    </div>

    <div class="container">

        <table >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Plan</th>
                    <th>Trainer</th>
                </tr>
            </thead>
            <tbody>
            <?php
    include 'connection.php';

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $id =$_POST['id'];
        

        $fetchdata = "select * from membership where id='$id' and name='$name'";
        $query =mysqli_query($con,$fetchdata);
        while($res = mysqli_fetch_array($query)){
            if($id==$res['id']&&$name=$res['name']){

             ?>
            <tr>
                <td><?php echo $res['id']?></td>
                <td><?php echo $res['name']?></td>
                <td><?php echo $res['age']?></td>
                <td><?php echo $res['gender']?></td>
                <td><?php echo $res['mobile']?></td>
                <td><?php echo $res['email']?></td>
                <td><?php echo $res['plan']?></td>
                <td><?php echo $res['trainer']?></td>
            </tr>

            <?php
            }else{
                ?>
                <script>
                    alert("Please Check Your Details.");
                </script>
                <?php
            }
        }
    }
?>
            </tbody>
        </table>
    </div>
</body>
</html>