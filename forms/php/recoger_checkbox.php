
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $numero=$_POST["numero"];
    $count = count($numero);
    for ($i = 0; $i < $count; $i++) {
        echo $numero[$i];
    }
}
>?