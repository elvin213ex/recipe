<?php
$title="chicken varuthathu";
$ingrediants=[
    "1/2 kilo Chicken",
    "1 tablespoon Kashmiri chilli powder",
    "1 teaspoon Pepper powder",
    "1 tablespoon Chilly flakes",
    "1 teaspoon Turmeric powder",
    "1/4 teaspoon Cumin powder",
    "3/4 teaspoon Garam masala",
    "12 teaspoon Ginger garlic paste",
    "2 tablespoon Curd",
    "1 tablespoon Rice powder",
    "Salt to taste",
    "2 cups Coconut oil",
];
$steps=[
    "Mix everything for marination and marinate it for an hour.",
    "Heat enough coconut oil to deep fry the chicken in a small pan on a medium heat.",
    "Once the oil is hot, fry the chicken in batches. Flip the chicken after 7 minutes.",
    "When it is 75% fried (after around 10 minutes) , add curry leaves",
    "Remove the chicken when it is golden brown to plate with paper towel to remove excess oil from chicken fry.",
    "Serve hot as an appetizer or with chapathi/porotta.",
    
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title><?php echo $title ?></title>
</head>

<body>
    <header>
    <div class="title">
    <h1><?php echo $title ?></h1></div>
    </header>
    <h2><u>Ingrediants</u></h2>
    <ul>
        <?php foreach($ingrediants as $ingrediant): ?> 
            <li><?php echo $ingrediant ?></li>
            <?php endforeach ?>
    </ul><br>
    
    <h2><u>Steps</u></h2>
    <ol>
        <?php foreach($steps as $step): ?>
        <li><?php echo $step ?></li>
        <?php endforeach ?>
    </ol>

    <br><br><br>Source: <a href="https://www.pachakam.com/recipes/kerala-thattukada-chicken-fry-kozhi-porichathu-video">Pachakam.com</a>
</body>
</html>