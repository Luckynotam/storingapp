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

    <?php
    if(isset($_GET['msg']))
    {
    echo "<div class='msg'>" . $_GET['msg'] . "</div>";
    }
    ?>
    <?php
    if(isset($_SESSION['user_id'])){
    $msg = "Je bent al ingelogd!";
    header("Location: http://localhost/storingapp/storingapp/resources/views/meldingen/index.php?msg=$msg");
    exit;
    }?>
    
    

        <form action="app/Http/Controllers/loginController.php" method="POST">
            <div class="form-group">
                <label for="username">Gebruikers naam:</label>
                <input type="text" name="username" id="username">

            </div>
            <div class="form-group">
                <label for="password">Wachtwoord:</label>
                <input type="password" name="password" id="password">
            </div>
            <div class="form-group">
                <input type="submit" value="inloggen">
            </div>
            
        </form>

    </div>

</body>

</html>
