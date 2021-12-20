<?php
$text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat blanditiis voluptate ex maiores temporibus error enim modi. Nulla, fuga porro minima libero ratione maxime reprehenderit molestiae voluptates dolore voluptatum hic.";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>

<body>
    <?php
    $paragraph = explode(".", $text);
    for ($i = 0; $i < count($paragraph); $i++) {
        if (!empty($paragraph[$i])) {


    ?>
            <p><?php echo $paragraph[$i] ?></p>
    <?php
        }
    }
    ?>
</body>

</html>