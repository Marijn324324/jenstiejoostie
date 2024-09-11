<?php
session_start();

// Controleer of de gebruiker is ingelogd
if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beveiligde Pagina</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Welkom, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    </header>
    <main>
        <p>Je hebt succesvol ingelogd. Dit is een beveiligde pagina.</p>
        <a href="logout.php" class="btn">Uitloggen</a>
    </main>
    <footer>
        <p>&copy; 2024 Jouw Bedrijf</p>
    </footer>
</body>
</html>