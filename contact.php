<?php
$nomErr = $prenomErr = $emailErr = $raisonErr = $messageErr = '';
$nom = $prenom = $email = $raison = $message = $civilite = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $civilite = htmlspecialchars($_POST['civilite']);
    $email = htmlentities(trim($_POST['email']));
    $message = htmlentities(trim($_POST['message']));

    if (empty($_POST["nom"])) {
        $nomErr = "Nom est requis";
    } else {
        $nom = htmlentities(trim($_POST['nom']));
    }

    if (empty($_POST["prenom"])) {
        $prenomErr = "Prénom est requis";
    } else {
        $prenom = htmlentities(trim($_POST['prenom']));
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Format d'e-mail invalide";
    }

    if (empty($_POST["raison"])) {
        $raisonErr = "Raison est requise";
    } else {
        $raison = $_POST["raison"];
    }

    if (empty($_POST["message"]) || strlen(trim($_POST["message"])) < 5) {
        $messageErr = "Le message doit contenir au moins 5 caractères";
    }

    $data = "Civilité: $civilite\n";
    $data .= "Nom: $nom\n";
    $data .= "Prénom: $prenom\n";
    $data .= "Email: $email\n";
    $data .= "Raison: $raison\n";
    $data .= "Message: $message\n";
    $data .= "-----------------------------\n";
    file_put_contents('fichier.txt', $data, FILE_APPEND);
    echo "<p class='success'>Merci, votre message a été enregistré !</p>";
}
?>


<main class="container my-5">
    <h1>Contactez-moi</h1>
    <form action="index.php?page=contact" method="post">

        <label for="civilite">Choissisez votre civilité</label><br>
        <select name="civilite" id="civilite">
            <option value="madame">Madame</option>
            <option value="monsieur">Monsieur</option>
            <option value="rein">aucune de ces options</option>
        </select>
        <br>

        <label for="nom">Précisez votre nom</label>
        <span class="error">* <?php echo $nomErr; ?></span><br>
        <input type="text" id="nom" name="nom"><br>

        <label for="prenom">Précisez votre prénom</label>
        <span class="error">* <?php echo $prenomErr; ?></span><br>
        <input type="text" id="prenom" name="prenom"><br>

        <label for="email">Précisez votre email</label>
        <span class="error">* <?php echo $emailErr; ?></span><br>
        <input type="email" id="email" name="email"><br>

        <fieldset>
            <legend>Choissisez votre raison de contact</legend>
            <span class="error">* <?php echo $raisonErr; ?></span><br>

            <div>
                <input type="radio" id="serviceInfo" name="raison" value="serviceInfo" />
                <label for="serviceInfo">Service informatique</label>
            </div>
            <div>
                <input type="radio" id="hr" name="raison" value="hr" />
                <label for="hr">Human Resources manager</label>
            </div>
            <div>
                <input type="radio" id="serviceTech" name="raison" value="serviceTech" />
                <label for="serviceTech">Service technique</label>
            </div>
        </fieldset>

        <label for="message">Donnez une courte explication de votre problème</label>
        <span class="error">* <?php echo $messageErr; ?></span><br>
        <textarea name="message" id="message"></textarea><br>

        <input type="submit" value="Envoyer" />

    </form>
</main>