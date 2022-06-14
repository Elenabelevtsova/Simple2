<?php
get_header();?>
<!-- Page Content -->
<div class="container">

    <h1 class="my-4">Welcome to Modern Business</h1>

    <!-- Marketing Icons Section -->
    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <h1 class="my-4">Page Heading
                <small>Secondary Text</small>
            </h1>
            <?php if (have_posts()) {
    while (have_posts()) {
        the_post();

        ?>
            <?php get_template_part('partials/posts/content', 'excerpt');?>
            <?php
}
}
?>
<!-- Post Content Column -->
<div class="col-lg-12">
    <!-- Title -->
    <h1 class="mt-4 mb-3"><?php the_title()?></h1>
            <!-- Pagination -->
            <ul class="pagination justify-content-center mb-4">
                <li class="page-item">
                    <?php previous_posts_link("&larr; Older");?>
                    <!-- <a class="page-link" href="#">&larr; Older</a> -->
                </li>
                <li class="page-item">
                    <?php next_posts_link("Newer &rarr;");?>
                    <!-- <a class="page-link" href="#">Newer &rarr;</a> -->
                </li>
            </ul>
        </div>


        <?php get_sidebar();?>
         <?php get_sidebar('second'); /* sidebar-second.php */?>
        <?php get_search_form();?>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
<?php get_footer();?>

<?php 
wp_head(); // здесь автоматически будет подключен файл functions.php
$str = 'Kit';
echo $str = apply_filters('my_filter1', $str); // <strong>Kit</strong>?>

<?php 
echo apply_filters('my_filter2', $str); // Hello Kit?>

<?php 
do_action('my_action', 'Hello!'); // Произошло событие "my_action"!Hello!?>

<?php 
do_action('my_time', $str); // Произошло событие "my_action"!Hello!?>