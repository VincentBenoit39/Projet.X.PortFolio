<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
<?php
    if (isset($_POST['message'])) {
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: contact@vincentb.fr' . "\r\n";
        $entete .= 'Reply-to: ' . $_POST['email'];

        $message = '<h1>Message envoyé depuis la page Contact</h1>

        <p><b>Premon : </b>' . $_POST['name'] . '<br>
        <p><b>Email : </b>' . $_POST['email'] . '<br>
        <p><b>Sujet : </b>' . $_POST['subject'] . '<br><br>
        <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

        $retour = mail('vincent-benoit@outlook.fr', 'Envoi depuis page Contact', $message, $entete);
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>
</body>
</html>
