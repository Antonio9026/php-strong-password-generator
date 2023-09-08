<?php
$pswLenght = $_GET["numero"] ?? "";
$lunghezzaPsw = strlen($pswLenght);
// var_dump($pswLenght);
include './function.php'

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="input-container">
        <form action="index.php">
            <input type="text" name="numero" id="">
            <input type="submit" value="Genera">
        </form>


        <p><strong>La password generata è: </strong><?php echo $passwordGenerated = generatePassword($pswLenght) ?> </p>


    </div>
</body>

</html>