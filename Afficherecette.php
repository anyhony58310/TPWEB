<!DOCTYPE html>
<html>
<head>
    <title>Affichage des recettes</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Affichage des recettes</h1>
    <ul>
        <?php
        $users = [
            [
                'full_name' => 'Mickaël Andrieu',
                'email' => 'mickael.andrieu@exemple.com',
                'age' => 34,
            ],
            [
                'full_name' => 'Mathieu Nebra',
                'email' => 'mathieu.nebra@exemple.com',
                'age' => 34,
            ],
            [
                'full_name' => 'Laurène Castor',
                'email' => 'laurene.castor@exemple.com',
                'age' => 28,
            ],
        ];

        $recipes = [
            [
                'title' => 'Cassoulet',
                'recipe' => 'etape 1 -> je sais pas',
                'author' => 'mickael.andrieu@exemple.com',
                'is_enabled' => true,
            ],
            [
                'title' => 'Couscous',
                'recipe' => 'etape 1 -> je sais pas',
                'author' => 'mickael.andrieu@exemple.com',
                'is_enabled' => false,
            ],
            [
                'title' => 'Escalope milanaise',
                'recipe' => 'etape 1 -> je sais pas',
                'author' => 'mathieu.nebra@exemple.com',
                'is_enabled' => true,
            ],
            [
                'title' => 'Salade Romaine',
                'recipe' => 'etape 1 -> je sais pas',
                'author' => 'laurene.castor@exemple.com',
                'is_enabled' => false,
            ],
        ];

        foreach ($recipes as $recipe) {
            if ($recipe['is_enabled']) {
                echo '<li>';
                echo '<h2>Recette : ' . $recipe['title'] . '</h2><br>';
                echo 'Auteur : ' . $recipe['author'] . '<br>';
                echo 'recipe ; ' . $recipe['recipe'] . '<br>';
                // Autres détails de la recette ici
                echo '</li>';
            }
        }
        ?>
    </ul>
</body>
</html>
