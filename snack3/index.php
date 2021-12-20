<?php
$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 3</title>
</head>

<body>
    <h1>Posts</h1>
    <?php
    $keys = array_keys($posts);

    for ($i = 0; $i < count($keys); $i++) {
    ?>
        <h2><?php echo $keys[$i]; ?></h2>
        <?php
        $daily_posts = $posts[$keys[$i]];
        for ($j = 0; $j < count($daily_posts); $j++) {
        ?>
            <ul>
                <li>Title: <?php echo $daily_posts[$j]["title"]; ?> </li>
                <li>Author: <?php echo $daily_posts[$j]["author"]; ?> </li>
                <li>Text: <?php echo $daily_posts[$j]["text"]; ?> </li>
            </ul>
        <?php
        }
        ?>
    <?php
    }
    ?>
</body>

</html>