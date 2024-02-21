<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="website icon" href="logo.png">
</head>
<body>  

<nav class="navbar">
    <div class="logo">
        <a href="index.html">Serenistart</a>
        <img src="logo.png" class="logo1">
    </div>
    <div class="nav-links">
        <a href="index.html#apropos">A PROPOS</a>
        <a href="admin.html">ADMINISTRATION</a>
        <a href="guidedujeune.html">GUIDE DU JEUNE</a>
        <a href="forum.html">FORUM</a>
        <a href="contact.php">CONTACT</a>
        <div class="logoinsta">
            <a href="https://www.instagram.com/serenistart/"><img src="instalogo.png" class="logo2"></a>
        </div>
    </div>
</nav>

<div class="contact">
<h1>Contactez-nous</h1>
    <form method="post">
        <input type="email" name="email" placeholder="Votre email">
        <textarea name="message" placeholder="Message"></textarea>
        <button type="submit">Envoyer</button>
    </form>
    <?php
    if (isset($_POST['message'])) {
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: contact@serenistart.com' . "\r\n";
        $entete .= 'Reply-to: ' . $_POST['email'];

        $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
        <p><b>Email : </b>' . $_POST['email'] . '<br>
        <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

        $retour = mail('killianrx16@gmail.com', 'Envoi depuis page Contact', $message, $entete);
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>
</div>

</body>

<footer>
    <p>© 2024 Serenistart. Tous droits réservés.</p>
</footer>
</html>
