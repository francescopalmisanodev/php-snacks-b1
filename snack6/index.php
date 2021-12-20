<?php
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];
$keys = array_keys($db);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Snack6</title>
</head>

<body>
    <div class="box gray">
        <h2>Teachers</h2>
        <ul>
            <?php
            for ($i = 0; $i < count($db["teachers"]); $i++) : ?>
                <li>
                    <?php echo $db["teachers"][$i]["name"] . " " . $db["teachers"][$i]["lastname"]; ?>
                </li>
            <?php endfor ?>
        </ul>

    </div>
    <div class="box green">
        <h2>PM</h2>
        <ul>
            <?php
            for ($i = 0; $i < count($db["pm"]); $i++) : ?>
                <li>
                    <?php echo $db["pm"][$i]["name"] . " " . $db["pm"][$i]["lastname"]; ?>
                </li>
            <?php endfor ?>
        </ul>
    </div>
</body>

</html>