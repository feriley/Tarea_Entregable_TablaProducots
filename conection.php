<?php

function connection(){
    $host = "localhost:3306";
    $user = "root";
    $pass = "root";

    $bd = "northwind";

    $connect=mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);

    return $connect;

}

function imprimirArray($array){
    foreach ($array as $key => $value) {
        echo $key.": ".$value."\n";
    }
}