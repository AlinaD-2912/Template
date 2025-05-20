<?php
include('header.php'); 
?>

<main class="container my-5">
    <?php
    if ($page == 'hobby') {
        include 'hobby.php';
    } elseif ($page == 'contact') {
        include 'contact.php';
    } else {
        include '404.php';
    }
    ?>
</main>

<?php
include('footer.php'); 
?>