<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <form action="" method="post">
        <label>Nama Anda : </label>
        <input type="text" name="nama">
        <br>
        <input type="submit" value="Input" name="input">
    </form>
    <p>
        Nama Anda :
        <?php
            if(isset($_POST ['input'])) {
                $nama = $_POST ['nama'];
                echo $nama;
            }
        ?>
    </p>
</body>
</html>