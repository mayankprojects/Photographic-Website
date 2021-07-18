<?php
$name = filter_input(INPUT_POST, 'name');
$lastname = filter_input(INPUT_POST, 'lastname');
$email = filter_input(INPUT_POST, 'email');
$contact = filter_input(INPUT_POST, 'contact');
$dob = filter_input(INPUT_POST, 'dob');
$state = filter_input(INPUT_POST, 'state');
$district = filter_input(INPUT_POST, 'district');
$occupation = filter_input(INPUT_POST, 'occupation');
$attach = filter_input(INPUT_POST, 'attach');
$preference = filter_input(INPUT_POST, 'preference');

        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "project";
        // Create connection
        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);


        if (mysqli_connect_error()) {
            die('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
        } else {
            $sql = "INSERT INTO info (name, lastname, email, contact, dob, state, district, occupation, attach, preference)
            values ('$name','$lastname','$email','$contact', '$dob', '$state' , '$district', '$occupation', '$attach', '$preference')";
            if ($conn->query($sql)) {
                echo "New record is inserted sucessfully";
            } else {
                echo "Error: " . $sql . "
" . $conn->error;
            }
            $conn->close();
        }

?>