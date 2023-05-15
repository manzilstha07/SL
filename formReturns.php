<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        label{
            width:5rem;
            display:inline-block;
        }
    </style>

    <form action="formReturns.php" method="POST">
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" placeholder="Enter your username">
        </div>
        <br>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="Enter your email">
        </div>
        <br>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password">
        </div>
        <br>
        <div>
            <label for="phone">Phone No.:</label>
            <input type="text" name="phone" placeholder="Enter your phone number">
        </div>
        <br>
        <div>
            <label for="gender">Gender:</label>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Others">Others
        </div>
        <br>
        <button type="submit" name="submit">Submit</button>
        <button type="reset" name="reset">Reset</button>
    </form>
    <br><br>

    <?php
        if (isset($_POST["submit"]))
        {
            $username=$_POST["username"];
            $email=$_POST["email"];
            $password=$_POST["password"];
            $phone=$_POST["phone"];
            

            if(preg_match("/^[a-zA-Z0-9_]*$/",$username))
                echo "Valid username. <br>";
            else
                echo "Invalid username. <br>";

            if(filter_var($email,FILTER_VALIDATE_EMAIL)){
                echo "Valid email<br>";
            }
            else{
                echo "Invalid email.<br>";
            }

            if(preg_match("/^[9][8,7][0-9]{8}$/",$phone)){
                 echo "Valid phone number.<br>";
            }
            else{
                echo "Invalid phone number.<br>";
            }

        }

        


    ?>
</body>
</html>