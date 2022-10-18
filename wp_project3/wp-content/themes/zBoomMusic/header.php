<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo('charset') ?>">
	<title><?php bloginfo('name') ?></title>
	<meta name="description" content="<?php bloginfo('description') ?>">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/zerogrid.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/responsive.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/responsiveslides.css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri()?>">
	
	<link href='<?php echo get_template_directory_uri() ?>/images/favicon.ico' rel='icon' type='image/x-icon'/>
	<script src="<?php echo get_template_directory_uri() ?>/js/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri() ?>/js/responsiveslides.js"></script>
	<script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			maxwidth: 962,
			namespace: "centered-btns"
		  });
		});
	</script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--------------Header--------------->
<header>
	<div class="wrap-header zerogrid">
		<div id="logo"><a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/logo.png"/></a></div>
		
		<div id="search">
			<div class="button-search"></div>
			<input type="text" value="Search..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
		</div>
	</div>
</header>

<?php ?>

  <!-- <div id="example-1">The quick brown fox jumps over the lazy dog##The quick brown fox jumps over the lazy dog##The quick brown fox jumps over the lazy dog##The quick brown fox jumps over the lazy dog##</div> -->
<?php if(function_exists('Newsticker_init')){
	echo Newsticker_init();
}?>



<nav>
	<div class="wrap-nav zerogrid">
		<!-- Dynamic menu -->
        <?php 
            wp_nav_menu( array(
                //'container'			=> "<div class='menu'>", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
                'container_class'	=> "menu", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
                'theme_location'	=> "primary_menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
            ) );
        
        ?>
        <!-- Static Menu -->
        <!-- <div class="menu">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li class="current"><a href="blog.html">Blog</a></li>
				<li><a href="gallery.html">Gallery</a></li>
				<li><a href="single.html">About</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div> -->
		
		<div class="minimenu"><div>MENU</div>
			<select onchange="location=this.value">
				<option></option>
				<option value="index.html">Home</option>
				<option value="blog.html">Blog</option>
				<option value="gallery.html">Gallery</option>
				<option value="single.html">About</option>
				<option value="contact.html">Contact</option>
			</select>
		</div>		
	</div>
</nav>