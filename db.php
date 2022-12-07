<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $con = new mysqli("127.0.0.1","root","","login");

        $q = "Select * from users";

        if($wynik = $con->query($q))
        while($row = $wynik->fetch_array()){
        echo "nazwa uzytkownika: " . $row["Nazwa"] . "<br> haslo: " . $row["Haslo"] .  "<br>";
        }else{
        echo $con->errno . " " . $con->error;
        }

        echo '<form action = "" method = "post">
        <label>login: </label><input type="text" name="nazwa" id="nzawa"/><br>
        <label>hasło: </label><input type="password" name="haslo" id="haslo"/><br>
        <input type="submit" value="submit" name="dodaj"><br>
    </form>';
        ?>

        <?php
        if(isset($_POST['dodaj'])){

            $nazwa = "";
            $haslo = "";

            $nazwa = $_POST['nazwa'];
            $haslo = $_POST['haslo'];
            $puste = "";
            $query = "INSERT INTO users (nazwa, haslo) VALUES ('$nazwa','$haslo')";


            if($nazwa === $puste || $haslo === $puste){
                echo("Nie poprawny format");
            }else{
                $connection = mysqli_connect("localhost","root","","login");
                // $connection = new mysqli("localhost", "root", "", "login");
                // $connection = new PDO("mysql:host=localhost;dbname=demo", "root", "");


                if($connection === false){
                    //echo "nie połączono z bazą" . mysqli_connect_error();
                    echo "nie połączono z bazą" . $mysqli->connect_error;
                }

                if(mysqli_query($connection, $query)){
                    echo("Powodzenie");
                }else{
                    echo("Niepowodzenie");
                }

                //mysqli_close($connection);
                $connection->close();
                }
            }
        ?>
    <br>
    <form action="" method="POST">
        <label for="wybor">wybierz kolumnę</label>
        <select name="wybor" id="wybor">
            <option>nazwa</option>
            <option>haslo</option>
        </select><br>
        <label for="zawartosc">Wartość: <input type="text" name="zawartosc" id="zawartosc"><br>
        <button type="submit" name="usun">usuń</button>
    </form><br>
   
    <?php

        if(isset($_POST['usun'])){

            $wybor = $_POST['wybor'];
            $zawartosc = $_POST['zawartosc'];

            $connection = mysqli_connect("localhost","root","","login");
            if(mysqli_connect_errno()){
                echo("nie połączono z bazą");
            }

            $query = "DELETE FROM users WHERE $wybor = '$zawartosc'";

            if(mysqli_query($connection, $query)){
                echo "Powodzenie";
            }else{
                echo "Niepowodzenie";
            }

        }
    ?>
    <br>
    <form action="" method="POST">
        <label for="wyboredit">wybierz kolumnę</label>
        <select name="wyboredit" id="wyboredit">
            <option>nazwa</option>
            <option>haslo</option>
        </select><br>
        <label for="zawartoscedit">Wartość: <input type="text" name="zawartoscedit" id="zawartoscedit"><br>
        <label>login: </label><input type="text" name="nowanazwa" id="nzawa"/><br>
        <label>hasło: </label><input type="password" name="nowehaslo" id="haslo"/><br>
        <button type="submit" name="edytuj">edytuj</button>
    </form>
   
    <?php

        if(isset($_POST['edytuj'])){

            $wybor = $_POST['wyboredit'];
            $zawartosc = $_POST['zawartoscedit'];
            $nazwa = $_POST['nowanazwa'];
            $haslo = $_POST['nowehaslo'];

            $connection = mysqli_connect("localhost","root","","login");
            if(mysqli_connect_errno()){
                echo("nie połączono z bazą");
            }

            $query = "UPDATE `users` SET `Nazwa`='$nazwa',`Haslo`='$haslo' WHERE $wybor = '$zawartosc'";

            if(mysqli_query($connection, $query)){
                echo "Powodzenie";
            }else{
                echo "Niepowodzenie";
            }

        }

    ?>
</body>
</html>
