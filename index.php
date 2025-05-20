<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home'; // default page

// Set title and meta
if ($page == 'hobby') {
    $page_title = 'Mes loisirs - Mon site';
    $page_meta = 'Découvrez mes hobbies préférés.';
} elseif ($page == 'contact') {
    $page_title = 'Contact - Mon site';
    $page_meta = 'Contactez-moi ici.';
} elseif ($page == 'blog') {
    $page_title = 'Blog - Mon site';
    $page_meta = 'Lisez mes derniers articles.';
} else {
    $page_title = 'Page introuvable - Mon site';
    $page_meta = 'La page demandée n’existe pas.';
}

include('header.php');
?>

<main class="container my-5">
    <?php
    if ($page == 'hobby') {
        include 'hobby.php';
    } elseif ($page == 'contact') {
        include 'contact.php';
    } elseif ($page == 'blog') {
        include 'blog.php';
    } else {
        include '404.php';
    }
    ?>
</main>

<?php include('footer.php'); ?>

