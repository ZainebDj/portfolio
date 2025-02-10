<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="http://localhost/projects/portfolio/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/projects/portfolio/index.php">Accueil</a></li>
                <li><a href="/projects/portfolio/pages/projets.php">Projets</a></li>
                <li><a href="/projects/portfolio/pages/contact.php">Contact</a></li>
                <!--li class="lange">
                    
                    <form method="get" action="">
                        <select name="lang" onchange="this.form.submit()">
                            <option value="fr" <?php echo ($_GET['lang'] ?? 'fr') == 'fr' ? 'selected' : ''; ?>>FR</option>
                            <option value="en" <?php echo ($_GET['lang'] ?? 'fr') == 'en' ? 'selected' : ''; ?>>EN</option>
                            <option value="de" <?php echo ($_GET['lang'] ?? 'fr') == 'de' ? 'selected' : ''; ?>>DE</option>
                        </select>
                    </form>
                </li-->
            </ul>
        </nav>
    </header>
