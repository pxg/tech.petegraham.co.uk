<div class="sd_right">
	<div class="text_padding">
			<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>
		
		
		<h2>Search</h2>

<ul>

<li>

<form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" /><input type="submit" id="sidebarsubmit" value="Search" />

 </form>

</li> 

</ul>

<h2>Pages</h2>

<ul>
<li><a href="/books/">Books I Want to Read</a></li>
<li><a href="/books-reading/">Books I'm Reading</a></li>
<li><a href="/about/">About OptimusPete</a></li>
</ul>


<h2>Calendar</h2>

<div id="calendar" style="margin-left:20px">
	<?php get_calendar(); ?>
</div>

<h2>Categories</h2>

<ul>

<?php wp_list_cats('sort_column=name&hierarchical=0'); ?>

</ul>


 <?php if ( is_home() ) { ?>

<h2><?php _e('Other Ace Blogs'); ?></h2>

<ul>

<?php get_links(-1, '<li>', '</li>', '', FALSE, 'name', FALSE, FALSE, -1, FALSE); ?>

</ul>

<?php } ?>



<?php endif; ?>


	</div>
</div>
