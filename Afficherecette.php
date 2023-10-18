<?php
    // Déclaration du tableau de recettes en utilisant des tableaux associatifs
    $recipes = [
        [
            'name' => 'Cassoulet',
            'description' => 'Description du cassoulet',
            'email' => 'mickael.andrieu@exemple.com',
            'enabled' => true
        ],
        [
            'name' => 'Couscous',
            'description' => 'Description du couscous',
            'email' => 'mickael.andrieu@exemple.com',
            'enabled' => false
        ],
        [
            'name' => 'Burger',
            'description' => 'Description du burger',
            'email' => 'anthony.regala@exemple.com',
            'enabled' => true
        ],
        [
            'name' => 'Kebab',
            'description' => 'Description du kebab',
            'email' => 'bob.jesaispas@exemple.com',
            'enabled' => true
        ],
        [
            'name' => 'Frites',
            'description' => 'Description des frites',
            'email' => 'amelie.robin@exemple.com',
            'enabled' => false
        ]
    ];
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Affichage des recettes</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <h1>Afficher des recettes</h1>
            <ul>
                <?php foreach ($recipes as $recipe): ?>
                    <?php if ($recipe['enabled']): ?>
                        <li>
                            <?php echo $recipe['name'] . ' (' . $recipe['email'] . ')'; ?>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
    </body>
</html>
