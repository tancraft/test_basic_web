<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon site web</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php echo $content; ?>
    </main>
    <script src="/js/main.js"></script>
</body>
</html>
