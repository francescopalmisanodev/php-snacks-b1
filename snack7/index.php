<?php
$students = [
    [
        "name" => "Gianni",
        "surname" => "Celeste",
        "votes" => [6, 7, 9]
    ],
    [
        "name" => "Lorenzo",
        "surname" => "Fragola",
        "votes" => [6, 8, 3]
    ],
    [
        "name" => "Gianni",
        "surname" => "Celeste",
        "votes" => [9, 9.5, 8]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack7</title>
</head>

<body>
    <h2>Students</h2>
    <ul>
        <?php
        for ($i = 0; $i < count($students); $i++) : ?>
            <li>
                <h3><?php echo $students[$i]['name'] . " " . $students[$i]['lastname']; ?></h3>
                <h4>Media voti: <?php echo round(array_sum($students[$i]['votes']) / count($students[$i]['votes']), 1); ?></h4>
            </li>
        <?php endfor ?>
    </ul>
</body>

</html>