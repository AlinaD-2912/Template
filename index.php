<!-- index.php -->
<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>

<?php include('header.php'); ?>

<main>
    <?php
    switch($page) {
        case 'home':
            include('home.php');
            break;
        case 'blog':
            include('blog.php');
            break;
        case 'contact':
            include('contact.php');
            break;
        default:
            include('404.php');
    }
    ?>
</main>

<?php include('footer.php'); ?>
