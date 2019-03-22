<?php get_header(); ?>

<?php
$post = $wp_query->post;

if (in_category('services')) {
    include('single-services.php');
}
elseif (in_category('avto-trade')) {
    include('single-avto-trade.php');
}
elseif (in_category('blog')) {
    include('single-blog.php');
}
else {
    include('single-default.php');
}
?>

<?php get_footer(); ?>
