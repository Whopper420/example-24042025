<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia atque omnis cum qui cumque placeat quasi alias iste unde rem necessitatibus molestias, iusto fugit ea eveniet sint odio esse et.</p>
    <ul>
        <li>2</li>
        <li>23</li>
        <li>25</li>
        <li>2o9</li>
        <li>232</li>
    </ul>

    <?php
    $persona = array(
        "vards" => "rudolfs",
        "vecums" => 24123,
        "pilseta" => "Chernobyl"
    );
    echo "<ul>";
    echo "<li>" . $persona["vards"] . "<li>";
    echo "<li>" . $persona["vecums"] . "<li>";
    echo "<li>" . $persona["pilseta"] . "<li>";
    echo "<ul>";
    ?>
    {{$variable}}

</body>

</html>