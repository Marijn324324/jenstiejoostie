<?php
// Start een sessie
session_start();

// Definieer de juiste gebruikersnaam en wachtwoord
$correct_username = 'jemoeder';
$correct_username = 'jevader';
$correct_password = 'jeoma'; // Voor demo-doeleinden. In een echte situatie moet je wachtwoorden op een veilige manier opslaan.
$correct_password = 'jeopa'; // Voor demo-doeleinden. In een echte situatie moet je wachtwoorden op een veilige manier opslaan.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Haal de verzonden gegevens op
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Controleer of de gegevens kloppen
    if ($username === $correct_username && $password === $correct_password) {
        // Sla gebruikersnaam op in sessie en redirect naar een beveiligde pagina
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: secure_page.php"); // Vervang met de URL van je beveiligde pagina
        exit();
    } else {
        // Foutmelding als gegevens niet kloppen
        echo '<p style="color: red; text-align: center;">Onjuiste gebruikersnaam of wachtwoord.</p>';
    }
}
?>