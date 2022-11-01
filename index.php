<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $hlw = "hello world"; 
        echo "wyraz: ", $hlw, 
        ",<br> ilosc znakow: ", strlen($hlw), 
        ",<br> ilosc wyrazow: ", str_word_count($hlw), 
        ",<br> odwrocony wyraz: ", strrev($hlw), 
        ",<br> gdzie w tekscie zaczyna sie wyraz world: ", strpos($hlw, "world"), 
        ",<br> zamiana \"world\" na \"world!\": ", str_replace("world", "world!", $hlw);

        echo "<br>";

        $one = 1;
        $two = 2;
        $three = 3;
        $four = 4;

        if($one > $four){
            echo "true";
        }elseif ($two > $three){
            echo "true";
        }else{
            echo "false";
        }

        echo "<br>";

        $string = "aaad";
        switch ($string){
            case "aaaa":
                echo "aaaa";
            break;
            case "aaab":
                echo "aaab";
            break;
            case "aaac":
                echo "aaac";
            break;
            case "aaad":
                echo "aaad";
            break;
            default:
                echo "none";
        }

        echo "<br>";

        $loopwhile = 0;
        echo $loopwhile;
        while ($loopwhile < 10){
            $loopwhile++;
            echo  "-", $loopwhile;
        }

        echo "<br>";

        for ($i = 0; $i < 10; $i++){
            echo "*";
        }

        echo "<br><br>";

        for ($i = 0; $i < 10; $i++){
            for ($j = 0; $j < 10; $j++){
                echo "*";
            }
            echo "<br>";
        }

        echo "<br>";

        for ($l=0; $l < 2; $l++) { 
            for ($i = 1; $i < 10; $i++){
                for($k = 0; $k < 10; $k ++){
                    for ($j = 0; $j < $i; $j++){
                        echo "*";
                    }
        
                    echo " ";
        
                    for ($j = $i; $j < 10; $j++){
                        echo "*";
                    }
        
                    for ($j = $i; $j < 10; $j++){
                        echo "*";
                    }
        
                    echo " ";
        
                    for ($j = 0; $j < $i; $j++){
                        echo "*";
                    }
                }
                echo "<br>";
            }
    
            for ($i = 1; $i < 10; $i++){
                for($k = 0; $k < 10; $k ++){
                    for ($j = $i; $j < 10; $j++){
                        echo "*";
                    }
    
                    echo " ";
    
                    for ($j = 0; $j < $i; $j++){
                        echo "*";
                    }
    
                    for ($j = 0; $j < $i; $j++){
                        echo "*";
                    }
    
                    echo " ";
                        
                    for ($j = $i; $j < 10; $j++){
                        echo "*";
                    }
                }
                echo "<br>";
            }
        }

        echo "<br>";

        $liczbalosowa = rand(1, 100);
        echo $liczbalosowa;

        echo "<br><br>";

        $tablica = array("kom1", "kom2", "kom3");
        for ($i = 0; $i < 3; $i++){
            echo $tablica[$i], ", ";
        }

        echo "<br>";

        $arrlength = count($tablica);
        for ($i = 0; $i < $arrlength; $i++){
            echo $tablica[$i], ", ";
        }

        echo "tablica zawiera ", count($tablica), " elementy<br>";

        $wartosci = array("wartosc1"=>"1", "wartosc2"=>"2", "wartosc3"=>"3", "wartosc4"=>"4");
        echo "wartosc pierwsza jest równa ", $wartosci["wartosc1"];

        foreach ($wartosci as $i => $i_value){
            echo "wartosc" , $i, "= " , ", Value=" , $i_value;
        }

        echo "<br>";

        $tabfunkcje = array(34, 32, 26, 62, 23 ,31, 83, 89 , 42, 63, 93, 10, 96, 88);
        $tablenght = count($tabfunkcje);
        for ($i = 0; $i < $tablenght; $i++){
            echo $tabfunkcje[$i], ", ";
        }
        echo "<br>";
        sort($tabfunkcje);
        for ($i = 0; $i < $tablenght; $i++){
            echo $tabfunkcje[$i], ", ";
        }
        echo "<br>";
        rsort($tabfunkcje);
        for ($i = 0; $i < $tablenght; $i++){
            echo $tabfunkcje[$i], ", ";
        }
        echo "<br>";


        $tabasfunkcje = array(
            "dfhsdsgdsa" => "734",
            "dkshufsesdf" => "212",
            "pioewhbs" => "32",
            "dpqkwm" => "65",
            "mznxczio" => "521",
            "sdfsedwokm" => "912",
            "sauipo" => "523");
        echo "<br>";
        asort($tabasfunkcje);
        foreach ($tabasfunkcje as $i => $i_value) {
            echo "Key=" , $i , ", Value=" , $i_value;
            echo "<br>";
        }
        echo "<br>";
        ksort($tabasfunkcje);
        foreach ($tabasfunkcje as $i => $i_value) {
            echo "Key=" , $i , ", Value=" , $i_value;
            echo "<br>";
        }
        echo "<br>";
        arsort($tabasfunkcje);
        foreach ($tabasfunkcje as $i => $i_value) {
            echo "Key=" , $i , ", Value=" , $i_value;
            echo "<br>";
        }
        echo "<br>";
        krsort($tabasfunkcje);
        foreach ($tabasfunkcje as $i => $i_value) {
            echo "Key=" , $i , ", Value=" , $i_value;
            echo "<br>";
        }

        echo "<br>";
        
        print_r($tabasfunkcje);

        echo "<br><br>";

        echo "dzisiejsza data: ", date("d/m/Y"), ", ", date("l");

        date_default_timezone_set("Europe/Lisbon");
        $data = getdate();
        $seconds = $data["seconds"];
        $minutes = $data["minutes"];
        $hours = $data["hours"];
        $dayofthemonth = $data["mday"];
        $dayoftheweek = $data["wday"];
        $month = $data["month"];
        $year = $data["year"];
        $dayoftheyear = $data["yday"];
        $dayname = $data["weekday"];
        $monthname = $data["month"];
        echo "<br>";
        // mktime(hour, minute, second, month, day, year)
        $new_date = mktime(11, 14, 54, 8, 12, 2014);
        // strtotime() konwersja czasu na czas unixowy
        $unix_date=strtotime(date(""));
        /*  Y - rok
            m - miesiac
            d - dzien
            H - godzina (format 0 - 24)
            h - (format 1 - 12)
            i - minuty
            s - sekundy
            a  - am/pm
        */

        // czas do dnia
        $d1 = strtotime("July 04");
        $d2 = ceil(($d1-time())/60/60/24);
        echo "There are " . $d2 ." days until 4th of July.";


        /* self <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> */
        /* self required <span class="error">* <?php echo $texttErr;?></span> */

        echo "<form action=\"form_post.php\" method=\"post\">
        <input type=\"text\" name=\"textt\">
        <input type=\"number\" name=\"number\">
        <button type=\"submit\">Submit</button>
        </form>";

        echo "<form action=\"form_get.php\" method=\"get\">
        <input type=\"text\" name=\"textt\">
        <input type=\"number\" name=\"number\">
        <button type=\"submit\">Submit</button>
        </form>";

        // preg_match() bool czy wyrazenie jest w ciagu
        // preg_match_all() ile razy wyrazenie wystepuje w ciagu
        // preg_replace zamienia wyrazenie innym wyrazeniem


        // regex / [...] /
        // regex = "/string/" identycznie
        // regex = "/string/i" duze i male litery
        // regex = "/string/m" wyszukiwanie wielowierszowe
        // regex = "/string/u" identyczny kod UTF-8
        $string1 = "qwertyuiopasdfghjklzxcvbnm";
        $regex1 = "/qwerty/i";

        echo preg_match($regex1, $string1). "<br>";

        $string2 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus congue nibh ut luctus ultricies. Proin pharetra nunc at eros commodo sollicitudin vel non nisl. In orci ex, interdum quis augue id, commodo vehicula nisi. Curabitur volutpat leo id massa tempor sagittis. In rutrum nulla velit, nec ullamcorper diam condimentum non. Mauris non mauris et purus auctor gravida. Suspendisse ac nisi ut nisl luctus auctor. Nunc suscipit blandit congue. Ut nec diam felis. Nunc molestie accumsan sollicitudin. Ut et orci facilisis, scelerisque leo ut, pellentesque orci. Maecenas bibendum, velit vel bibendum porttitor, urna quam porta justo, ut porta tortor ligula id nibh.";
        $regex2 = "/i/i";

        echo preg_match_all($regex2, $string2). "<br>";

        $string3 = "qwertyxyzqwerty";
        $regex3 = "/xyz/i";
        $newregex3 = "_";

        echo preg_replace($regex3, $newregex3, $string3). "<br>";

        $string4 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus congue nibh ut luctus ultricies. Proin pharetra nunc at eros commodo sollicitudin vel non nisl. In orci ex, interdum quis augue id, commodo vehicula nisi. Curabitur volutpat leo id massa tempor sagittis. In rutrum nulla velit, nec ullamcorper diam condimentum non. Mauris non mauris et purus auctor gravida. Suspendisse ac nisi ut nisl luctus auctor. Nunc suscipit blandit congue. Ut nec diam felis. Nunc molestie accumsan sollicitudin. Ut et orci facilisis, scelerisque leo ut, pellentesque orci. Maecenas bibendum, velit vel bibendum porttitor, urna quam porta justo, ut porta tortor ligula id nibh.";
        $regex4 = "/[abc]/"; //a || b || c

        echo preg_match_all($regex4, $string4). "<br>";

        $string5 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus congue nibh ut luctus ultricies. Proin pharetra nunc at eros commodo sollicitudin vel non nisl. In orci ex, interdum quis augue id, commodo vehicula nisi. Curabitur volutpat leo id massa tempor sagittis. In rutrum nulla velit, nec ullamcorper diam condimentum non. Mauris non mauris et purus auctor gravida. Suspendisse ac nisi ut nisl luctus auctor. Nunc suscipit blandit congue. Ut nec diam felis. Nunc molestie accumsan sollicitudin. Ut et orci facilisis, scelerisque leo ut, pellentesque orci. Maecenas bibendum, velit vel bibendum porttitor, urna quam porta justo, ut porta tortor ligula id nibh.";
        $regex5 = "/[^abc]/"; // wszystko poza a || b || c

        echo preg_match_all($regex5, $string5). "<br>";

        $string6 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus congue nibh ut luctus ultricies. Proin pharetra nunc at eros commodo sollicitudin vel non nisl. In orci ex, interdum quis augue id, commodo vehicula nisi. Curabitur volutpat leo id massa tempor sagittis. In rutrum nulla velit, nec ullamcorper diam condimentum non. Mauris non mauris et purus auctor gravida. Suspendisse ac nisi ut nisl luctus auctor. Nunc suscipit blandit congue. Ut nec diam felis. Nunc molestie accumsan sollicitudin. Ut et orci facilisis, scelerisque leo ut, pellentesque orci. Maecenas bibendum, velit vel bibendum porttitor, urna quam porta justo, ut porta tortor ligula id nibh.";
        $regex6 = "/lo|ip|do/"; // wszystkie lo || ip || do

        echo preg_match_all($regex6, $string6). "<br>";

        $string7 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus congue nibh ut luctus ultricies. Proin pharetra nunc at eros commodo sollicitudin vel non nisl. In orci ex, interdum quis augue id, commodo vehicula nisi. Curabitur volutpat leo id massa tempor sagittis. In rutrum nulla velit, nec ullamcorper diam condimentum non. Mauris non mauris et purus auctor gravida. Suspendisse ac nisi ut nisl luctus auctor. Nunc suscipit blandit congue. Ut nec diam felis. Nunc molestie accumsan sollicitudin. Ut et orci facilisis, scelerisque leo ut, pellentesque orci. Maecenas bibendum, velit vel bibendum porttitor, urna quam porta justo, ut porta tortor ligula id nibh.";
        $regex7 = "/./"; // wszystkie znaki

        echo preg_match_all($regex7, $string7). "<br>". strlen($string7). "<br>";

        $string8 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus congue nibh ut luctus ultricies. Proin pharetra nunc at eros commodo sollicitudin vel non nisl. In orci ex, interdum quis augue id, commodo vehicula nisi. Curabitur volutpat leo id massa tempor sagittis. In rutrum nulla velit, nec ullamcorper diam condimentum non. Mauris non mauris et purus auctor gravida. Suspendisse ac nisi ut nisl luctus auctor. Nunc suscipit blandit congue. Ut nec diam felis. Nunc molestie accumsan sollicitudin. Ut et orci facilisis, scelerisque leo ut, pellentesque orci. Maecenas bibendum, velit vel bibendum porttitor, urna quam porta justo, ut porta tortor ligula id nibh.";
        $regex8 = "/^Lorem/"; // pierwszy znak

        echo preg_match_all($regex8, $string8). "<br>";

        $string9 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus congue nibh ut luctus ultricies. Proin pharetra nunc at eros commodo sollicitudin vel non nisl. In orci ex, interdum quis augue id, commodo vehicula nisi. Curabitur volutpat leo id massa tempor sagittis. In rutrum nulla velit, nec ullamcorper diam condimentum non. Mauris non mauris et purus auctor gravida. Suspendisse ac nisi ut nisl luctus auctor. Nunc suscipit blandit congue. Ut nec diam felis. Nunc molestie accumsan sollicitudin. Ut et orci facilisis, scelerisque leo ut, pellentesque orci. Maecenas bibendum, velit vel bibendum porttitor, urna quam porta justo, ut porta tortor ligula id nibh.";
        $regex9 = "/nibh.$/"; // ostatni znak

        echo preg_match_all($regex9, $string9). "<br>";

        $string10 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus congue nibh ut luctus ultricies. Proin pharetra nunc at eros commodo sollicitudin vel non nisl. In orci ex, interdum quis augue id, commodo vehicula nisi. Curabitur volutpat leo id massa tempor sagittis. In rutrum nulla velit, nec ullamcorper diam condimentum non. Mauris non mauris et purus auctor gravida. Suspendisse ac nisi ut nisl luctus auctor. Nunc suscipit blandit congue. Ut nec diam felis. Nunc molestie accumsan sollicitudin. Ut et orci facilisis, scelerisque leo ut, pellentesque orci. Maecenas bibendum, velit vel bibendum porttitor, urna quam porta justo, ut porta tortor ligula id nibh.";
        $regex10 = "/ \d /"; // cyfra

        echo preg_match_all($regex10, $string10). "<br>";

        $string11 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus congue nibh ut luctus ultricies. Proin pharetra nunc at eros commodo sollicitudin vel non nisl. In orci ex, interdum quis augue id, commodo vehicula nisi. Curabitur volutpat leo id massa tempor sagittis. In rutrum nulla velit, nec ullamcorper diam condimentum non. Mauris non mauris et purus auctor gravida. Suspendisse ac nisi ut nisl luctus auctor. Nunc suscipit blandit congue. Ut nec diam felis. Nunc molestie accumsan sollicitudin. Ut et orci facilisis, scelerisque leo ut, pellentesque orci. Maecenas bibendum, velit vel bibendum porttitor, urna quam porta justo, ut porta tortor ligula id nibh.";
        $regex11 = "/ \s /"; // spacja

        echo preg_match_all($regex11, $string11). "<br>";

        $az = "/^[a-z]+$/";
        $string1 = "qwertyuiopasdfghjklzxcvbnm";

        if(preg_match($az, $string1)) {
            echo("true");
        }else { 
            echo("false");
        }
    ?>
</body>
</html>
