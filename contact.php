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
    <label for="nom">Preccisez votre nom</label><br>
    <input type="text" id="nom" name="nom"><br>

    <label for="prenom">Preccisez votre prénom</label><br>
    <input type="text" id="prenom" name="prenom"><br>

    <label for="email">Preccisez votre email</label><br>
    <input type="email" id="email" name="email"><br>

    <fieldset>
        <legend>Choissisez votre raison de contact</legend>

        <div>
            <input type="radio" id="serviceInfo" name="raison" />
            <label for="serviceInfo">Service informatiqque</label>
        </div>

        <div>
            <input type="radio" id="hr" name="raison" />
            <label for="hr">Human Resources manager</label>
        </div>

        <div>
            <input type="radio" id="serviceTech" name="raison" />
            <label for="serviceTech">Service technique</label>
        </div>
    </fieldset>

    <label for="message">Vous pouvez ajouter la commentaire</label><br>
    <textarea name="message" id="message"></textarea>
    <br>

    <input type="submit" value="Envoyer" />

</form>
</main>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nomErr = $prenomErr = $emailErr = $raisonErr = $messageErr = '';

    $civilite = htmlspecialchars($_POST['civilite']);
    $email = htmlentities(trim($_POST['email']));
    $raison = $_POST['raison'];
    

    if (empty($_POST["nom"])) {
        $nomErr = "Nom est requis";
    } else {
        $nom = htmlentities(trim($_POST['nom']));
    }

    if (empty($_POST["prenom"])) {
        $prenomErr = "Prenom est requis";
    } else {
        $prenom = htmlentities(trim($_POST['nom']));
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Format d'e-mail invalide";
    }

    if (empty($_POST["raison"])) {
        $raisonErr = "Raison est requis";
    } else {
        $raison = $_POST["gender"];
    }
    if(strlen($message) < 5)
    {
        $messageErr = "Le message doit contenir au moins 5 caractères";
    }else{
        $message = htmlentities(trim($_POST['message']));
    }
}
