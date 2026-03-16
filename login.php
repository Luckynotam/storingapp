<!doctype html>
<html lang="nl">

<head>
    <title>StoringApp</title>
    <?php require_once 'resources/views/components/head.php'; ?>
    <link rel="stylesheet" href="public_html/css/main.css">
    <link rel="stylesheet" href="public_html/css/normalize.css">
</head>

<body>

    <?php require_once 'resources/views/components/header.php'; ?>

    <div class="container home">

        <form action="">
            <div class="form-group">
                <label for="username">Gebruikers naam:</label>
                <input type="text">

            </div>
            <div class="form-group">
                <label for="password">Wachtwoord:</label>
                <input type="password">
            </div>
            <div class="form-group">
                <input type="submit" value="inloggen">
            </div>
            
        </form>

    </div>

</body>

</html>
