<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

    require("animal.php");
    require("frog.php");
    require("ape.php");

    $sheep = new Animal;

    $sheep->set_Name('shaun');
    echo $sheep->get_Name(); // "shaun"
    echo '<br>';

    $sheep->set_Legs(2);
    echo $sheep->get_Legs(); // 2
    echo '<br>';

    $sheep->set_coldBlooded('false');
    echo $sheep->get_coldBlooded(); // false
    echo '<br><br>';

    // index.php
    $sungokong = new ape;
    $sungokong->set_Name('Kera_Sakti');
    echo $sungokong->get_Name();
    echo '<br>';

    $sungokong->set_Legs(2);
    echo $sungokong->get_Legs();
    echo '<br>';

    $sungokong->set_coldBlooded('false');
    echo $sungokong->get_coldBlooded();
    echo '<br>';

    $sungokong->set_Yell('AUOOOOOOOO'); // "Auooo"
    echo $sungokong->get_Yell();
    echo '<br><br>';

    $kodok = new frog;
    $kodok->set_Name('buduk');
    echo $kodok->get_Name();
    echo '<br>';

    $kodok->set_Legs(4);
    echo $kodok->get_Legs();
    echo '<br>';

    $kodok->set_coldBlooded('true');
    echo $kodok->get_coldBlooded();
    echo '<br>';

    $kodok->set_Jump('hop hop') ; // "hop hop"
    echo $kodok->get_Jump();    

    ?>
</body>
</html>