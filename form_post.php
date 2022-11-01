<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>

</head>
<body>
    <?php
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $tekst = $numer = "";
        
        /* if($_SERVER["REQUEST_METHOD"] == "POST") {
            $tekst = test_input($_POST["textt"]);
            $numer = test_input($_POST["number"]);
        }
          
        echo $tekst. " ". $numer; */

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["textt"])) {
                $texttErr = "required";
            }else {
                $tekst = test_input($_POST["textt"]);
            }
          
            if (empty($_POST["number"])) {
                $numberErr = "required";
            }else {
                $numer = test_input($_POST["number"]);
            }
        }

        /* $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Tylko litery i spacje";
        }
        $website = test_input($_POST["website"]);
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr = "Invalid URL";
        }
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        } */


        echo $tekst. " ". $numer;
    ?>
</body>
</html>