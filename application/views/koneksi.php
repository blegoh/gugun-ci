<?php
        error_reporting( E_ALL ^ E_DEPRECATED);
        $host="localhost";  //diisi nama host apache
        $user="root";       //diisi username apache
        $db="db_sma1";   //nama database
        $pass="";
 
        $conn=mysql_connect($host,$user,$pass);
        mysql_select_db($db,$conn);
 
        if ($conn) {
            echo "";
        } else {
            echo "Koneksi Gagal";
        }
?>
