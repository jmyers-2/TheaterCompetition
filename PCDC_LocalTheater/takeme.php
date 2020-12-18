<?php

$name = $_POST['myCountry'];

        if($name == "mulan"){
            header("Location: http://localhost/movie/movies/mulan.html");
        }
        else if ($name == "invisible"){
            header("Location: http://localhost/movie/movies/invisible.html");
        }
        else if ($name == "onward"){
            header("Location: http://localhost/movie/movies/onward.html");
        }
        else if ($name == "sonic"){
            header("Location: http://localhost/movie/movies/sonic.html");
        }
        else {
            header("Location: http://localhost/movie/index.php");
        }
?>
