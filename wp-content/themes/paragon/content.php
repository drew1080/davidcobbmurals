<?php
/*
Template Name: Content
*/
?>
<?php get_header(); ?>

<script type="text/javascript">
jQuery(document).ready(function($){
  $('body').addClass('content-body')
});
</script>

<!-- BEGIN full-logo -->
<div class="full-header" id="blog">

	<!-- BEGIN main -->
	<div class="main">
		<div class="page-title">
		  <h2><?php echo get_the_title(); ?></h2>
		</div>
		<div id="header-image">
			<a href="<?php echo home_url()?>"><img src="<?php echo get_template_directory_uri() . "/framework/images/david-cobb-murals-logo.png" ?>" /></a>
		</div>

	<!-- END .main -->
	</div>

<!-- END full-header -->
</div>

<div class="clear"></div>

<!-- BEGIN WRAP -->
<div id="wrap">
	
	<div class="nav">
		<?php wp_nav_menu(); ?>
	</div>
	
<!-- BEGIN full-middle -->
<div class="full-middle" id="content_page">
  <?php echo the_content() ?>
  
  <div class="clear"></div>
		
	<!-- ALL THOSE COMMENTS -->
	<?php comments_template(); ?>
<!-- END full-middle -->
</div>


<br style="clear: both;">
<!-- END WRAP -->
</div>

<?php //get_footer(); ?>