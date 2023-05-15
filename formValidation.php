<?php
    if (isset($_POST["submit"]))
    {
        $username=$_POST["username"];
        $email=$_POST["email"];
        $number=$_POST["number"];
        $address=$_POST["address"];
        $age=$_POST["age"];
        $faculty=$_POST["faculty"];


        if($username!=null && preg_match("/^[a-z A-Z 0-9]*$/",$username))
            echo "Valid username. <br>";
        else
            echo "Invalid username. <br>";

        
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo "Valid email<br>";
        }
        else{
            echo "Invalid email.<br>";
        }

        if(preg_match("/^[9][8,7][0-9]{8}$/",$number)){
            echo "Valid phone number.<br>";
        }
        else{
            echo "Invalid phone number.<br>";
        }

        if(strlen($address)<10 && strlen($address)>30){
            echo "valid address.";
        }
        else{
            echo "Invalid address.";
        }
    }



?>