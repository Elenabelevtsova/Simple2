 <!-- Sidebar Widgets Column -->
 <div class="col-md-4">
     
     <?php if (is_active_sidebar('bootkit_sidebar')) {
    dynamic_sidebar('bootkit_sidebar');
}?>
     <div class="my-new-sidebar">

         <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar Area")): ?>

         <?php endif;?>

     </div>
 </div>