<h1 class="entry-title"><?php _e('Nothing found');?></h1>
<p><?php _e('Nothing found, please use the search.');?></p>
<?php get_search_form();?>
<?php get_template_part('partials/posts/content', 'none');?>
<?php if (have_posts()) {
    while (have_posts()) {
        the_post();
        //get_template_part('partials/posts/content-excerpt');
        get_template_part('partials/posts/content', 'excerpt');
    }
} else {
    get_template_part('partials/posts/content', 'none');
}