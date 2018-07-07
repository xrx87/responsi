<?php
    session_start();

    if(isset($_SESSION ['login'])) {
        echo "<h1>Selamat datang ".$_SESSION ['login']."</h1>";

        echo "<h2>Klik <a href='session03.php'>disini(session03.php)</a> untuk LOGOUT</h2>";

    } else {
        die("Anda belum login! Anda tidak berhak masuk ke halaman ini. Silahkan login <a href='session01.php'>disini</a>");
    }
?>