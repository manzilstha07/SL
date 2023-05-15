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
    <form action="./formValidation.php" method="POST">
<div>
    <label for="username">User name:</label>
    <input type="text" name="username" placeholder="Enter username">
</div>
<br>
<div>
    <label for="email">Email:</label>
    <input type="email" name="email" placeholder="Enter your email">
</div>
<br>
<div>
    <label for="Phone">Phone No.:</label>
    <input type="text" name="number" placeholder="Enter your phone number">
</div>
<br>
<div>
    <label for="address">Address:</label>
    <input type="text" name="address" placeholder="Enter your address">
</div>
<br>
<div>
    <label for="age">Age:</label>
    <input type="number" name="age" placeholder="Enter your age">
</div>
<br>
<div>
    <label for="faculty">Faculty:</label>
    <input type="radio" name="faculty" value="BCA">BCA
    <input type="radio" name="faculty" value="CSIT">CSIT
</div>
<br>
<div>
    <button type="submit" name="submit">Submit</button>
    <button type="reset" name="reset">Reset</button>
</div>

    </form>

</body>
</html>