<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'catalogue'; // default page

// Set title and meta
// if ($page == 'hobby') {
//     $page_title = 'Mes loisirs - Mon site';
//     $page_meta = 'Découvrez mes hobbies préférés.';
// } elseif ($page == 'contact') {
//     $page_title = 'Contact - Mon site';
//     $page_meta = 'Contactez-moi ici.';
// } elseif ($page == 'blog') {
//     $page_title = 'Blog - Mon site';
//     $page_meta = 'Lisez mes derniers articles.';
// } else {
//     $page_title = 'Page introuvable - Mon site';
//     $page_meta = 'La page demandée n’existe pas.';
// }

// include('header.php');
?>
<?php
    if ($page == 'catalogue') {
        include 'catalogue.php';
    } elseif ($page == 'contact') {
        include 'contact.php';
    } elseif ($page == 'home') {
        include 'index.php';
    } else {
        include '404.php';
    }
?>


<!-- php include('footer.php');  -->

