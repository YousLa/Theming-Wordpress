<!DOCTYPE html>
<!-- Inclut automatiquement la bonne langue -->
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crisp - Accueil</title>
    <!-- Inclut les feuilles de style css de wordpress + la barre de navigation WordPress -->
    <?php wp_head() ?>
    <link rel="stylesheet" href="<?= THEME_URI ?>/assets/css/home.css">
    <link rel="stylesheet" href="<?= THEME_URI ?>/assets/css/main.css">
</head>

<body>
    <header>
        <div class="left">
            <img src="<?= THEME_URI ?>/assets/img/logo.png" alt="">
            <div>
                <span>
                    L'actionnariat
                </span>
                <span>
                    des entreprises
                </span>
                <span>
                    Walonne
                </span>
            </div>
        </div>

        <div class="right">
            <div>
                <div></div>
                <div></div>
                <div></div>
                <nav>
                    <ul>
                        <li><a href="">Accueil</a></li>
                        <li><a href="">Actualités</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="">Recheche simple</a></li>
                        <li><a href="">Recheche avancée</a></li>
                        <li><a href="">FAQ</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Inclut les scripts js wordpress dans notre page -->
    <?php wp_footer() ?>
</body>

</html>