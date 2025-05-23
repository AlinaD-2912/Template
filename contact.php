<?php
$page_title = 'Contact';
$page_meta = 'Vous pouvez me contacter si vous avez rencontreé le probléme';
include('header.php');

$nomErr = $prenomErr = $emailErr = $raisonErr = $messageErr = '';
$nom = $prenom = $email = $raison = $message = $civilite = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $civilite = filter_input(INPUT_POST, 'civilite', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $raison = filter_input(INPUT_POST, 'raison', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (!$nom) {
        $nomErr = "Nom est requis";
    }

    if (!$prenom) {
        $prenomErr = "Prénom est requis";
    }

    if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Format d'e-mail invalide";
    }

    if (!$raison) {
        $raisonErr = "Raison est requise";
    }

    if (!$message || strlen(trim($message)) < 5) {
        $messageErr = "Le message doit contenir au moins 5 caractères";
    }

    if (!$nomErr && !$prenomErr && !$emailErr && !$raisonErr && !$messageErr) {
        $data = "Civilité: $civilite\n";
        $data .= "Nom: $nom\n";
        $data .= "Prénom: $prenom\n";
        $data .= "Email: $email\n";
        $data .= "Raison: $raison\n";
        $data .= "Message: $message\n";
        $data .= "-----------------------------\n";
        file_put_contents('fichier.txt', $data, FILE_APPEND);
        echo "<p class='success'>Merci, votre message a été enregistré !</p>";
        $nom = $prenom = $email = $raison = $message = $civilite = '';
    }
}
?>


<?php
// PLUS LOIN filter has var 

// $page_title = 'Contact';
// $page_meta = 'Vous pouvez me contacter si vous avez rencontreé le probléme';
// include('header.php');

// $nomErr = $prenomErr = $emailErr = $raisonErr = $messageErr = '';
// $nom = $prenom = $email = $raison = $message = $civilite = '';

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {

//     $civilite = htmlspecialchars($_POST['civilite']);
//     $email = htmlentities(trim($_POST['email']));
//     $message = htmlentities(trim($_POST['message']));

// if (!filter_has_var(INPUT_POST, 'nom') || empty(trim($_POST["nom"]))) {
//     $nomErr = "Nom est requis";
// } else {
//     $nom = htmlentities(trim($_POST['nom']));
// }

// if (!filter_has_var(INPUT_POST, 'prenom') || empty(trim($_POST["prenom"]))) {
//     $prenomErr = "Prénom est requis";
// } else {
//     $prenom = htmlentities(trim($_POST['prenom']));
// }

// if (!filter_has_var(INPUT_POST, 'email') || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
//     $emailErr = "Format d'e-mail invalide";
// } else {
//     $email = htmlentities(trim($_POST["email"]));
// }

// if (!filter_has_var(INPUT_POST, 'raison') || empty(trim($_POST["raison"]))) {
//     $raisonErr = "Raison est requise";
// } else {
//     $raison = $_POST["raison"];
// }

// if (!filter_has_var(INPUT_POST, 'message') || strlen(trim($_POST["message"])) < 5) {
//     $messageErr = "Le message doit contenir au moins 5 caractères";
// } else { 
//     $message = htmlentities(trim($_POST["message"]));
// }

//      if (!$nomErr && !$prenomErr && !$emailErr && !$raisonErr && !$messageErr) {
//         $data = "Civilité: $civilite\n";
//         $data .= "Nom: $nom\n";
//         $data .= "Prénom: $prenom\n";
//         $data .= "Email: $email\n";
//         $data .= "Raison: $raison\n";
//         $data .= "Message: $message\n";
//         $data .= "-----------------------------\n";
//         file_put_contents('fichier.txt', $data, FILE_APPEND);
//         echo "<p class='success'>Merci, votre message a été enregistré !</p>";
//         // Optionally, reset variables here if you want to clear the form
//         $nom = $prenom = $email = $raison = $message = $civilite = '';
//     }
// }
?>


<?php
// $page_title = 'Contact';
// $page_meta = 'Vous pouvez me contacter si vous avez rencontreé le probléme';
// include('header.php');

// $nomErr = $prenomErr = $emailErr = $raisonErr = $messageErr = '';
// $nom = $prenom = $email = $raison = $message = $civilite = '';

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {

//     $civilite = filter_input(INPUT_POST, 'civilite', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
//     $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
//     $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
//     $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
//     $raison = filter_input(INPUT_POST, 'raison', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
//     $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

//     if (!$nom) {
//         $nomErr = "Nom est requis";
//     }

//     if (!$prenom) {
//         $prenomErr = "Prénom est requis";
//     }

//     if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         $emailErr = "Format d'e-mail invalide";
//     }

//     if (!$raison) {
//         $raisonErr = "Raison est requise";
//     }

//     if (!$message || strlen(trim($message)) < 5) {
//         $messageErr = "Le message doit contenir au moins 5 caractères";
//     }

//     if (!$nomErr && !$prenomErr && !$emailErr && !$raisonErr && !$messageErr) {
//         $data = "Civilité: $civilite\n";
//         $data .= "Nom: $nom\n";
//         $data .= "Prénom: $prenom\n";
//         $data .= "Email: $email\n";
//         $data .= "Raison: $raison\n";
//         $data .= "Message: $message\n";
//         $data .= "-----------------------------\n";
//         file_put_contents('fichier.txt', $data, FILE_APPEND);
//         echo "<p class='success'>Merci, votre message a été enregistré !</p>";
//         $nom = $prenom = $email = $raison = $message = $civilite = '';
//     }
// }
?>

<main class="container my-5">
    <h1>Contactez-nous</h1>
    <form action="index.php?page=contact" method="post" class="container mt-5 needs-validation" novalidate>

        <div class="mb-3">
            <label for="civilite" class="form-label">Choisissez votre civilité</label>
            <select name="civilite" id="civilite" class="form-select" required>
                <option value="">Sélectionnez...</option>
                <option value="madame" <?= ($civilite === 'madame') ? 'selected' : '' ?>>Madame</option>
                <option value="monsieur" <?= ($civilite === 'monsieur') ? 'selected' : '' ?>>Monsieur</option>
                <option value="rein" <?= ($civilite === 'rein') ? 'selected' : '' ?>>Aucune de ces options</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="nom" class="form-label">Précisez votre nom</label>
            <input type="text" id="nom" name="nom" class="form-control <?= !empty($nomErr) ? 'is-invalid' : '' ?>" value="<?= htmlspecialchars($nom) ?>">
            <div class="invalid-feedback"><?= $nomErr; ?></div>
        </div>

        <div class="mb-3">
            <label for="prenom" class="form-label">Précisez votre prénom</label>
            <input type="text" id="prenom" name="prenom" class="form-control <?= !empty($prenomErr) ? 'is-invalid' : '' ?>" value="<?= htmlspecialchars($prenom) ?>">
            <div class="invalid-feedback"><?= $prenomErr; ?></div>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Précisez votre email</label>
            <input type="email" id="email" name="email" class="form-control <?= !empty($emailErr) ? 'is-invalid' : '' ?>" value="<?= htmlspecialchars($email) ?>">
            <div class="invalid-feedback"><?= $emailErr; ?></div>
        </div>

        <fieldset class="mb-3">
            <legend class="col-form-label pt-0">Choisissez un service</legend>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="raison" id="serviceInfo" value="serviceInfo" <?= ($raison === 'serviceInfo') ? 'checked' : '' ?>>
                <label class="form-check-label" for="serviceInfo">Service informatique</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="raison" id="hr" value="hr" <?= ($raison === 'hr') ? 'checked' : '' ?>>
                <label class="form-check-label" for="hr">Human Resources manager</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="raison" id="serviceTech" value="serviceTech" <?= ($raison === 'serviceTech') ? 'checked' : '' ?>>
                <label class="form-check-label" for="serviceTech">Service technique</label>
            </div>
            <?php if (!empty($raisonErr)): ?>
                <div class="text-danger mt-1"><?= $raisonErr; ?></div>
            <?php endif; ?>
        </fieldset>

        <div class="mb-3">
            <label for="message" class="form-label">Expliquez votre problème</label>
            <textarea name="message" id="message" class="form-control <?= !empty($messageErr) ? 'is-invalid' : '' ?>" rows="4"><?= htmlspecialchars($message) ?></textarea>
            <div class="invalid-feedback"><?= $messageErr; ?></div>
        </div>

        <div class="mb-4">
            <label for="file" class="form-label">Ajoutez un fichier (facultatif)</label>
            <input class="form-control" type="file" id="file" name="file">
        </div>

        <button type="submit" class="btn btn-primary">Envoyer</button>

    </form>

</main>

<?php include('footer.php'); ?>