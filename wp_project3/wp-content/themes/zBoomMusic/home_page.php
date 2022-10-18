
<!-- 
	template name: myhome
 -->
<?php get_header(); ?>

<div class="featured">
	<div class="wrap-featured zerogrid">
		<div class="slider">
			<div class="rslides_container">
				<ul class="rslides" id="slider">
				<?php
					$sql = new WP_Query(array(
						'post_type'=>'slider'
						)
				);
				if($sql->have_posts()):
					while($sql->have_posts()): $sql->the_post();
				?>	
				<li>
					<?php the_post_thumbnail(); ?>
				</li>
				<?php 
					endwhile;
					endif;
				?>	
				</ul>
			</div>
		</div>
	</div>
</div>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block01">
			<div class="col-1-3">
				<div class="wrap-col box">
					<h2>The White Night</h2>
					<p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis.</p>
					<div class="more"><a href="#">[...]</a></div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col box">
					<h2>Tons of Fans</h2>
					<p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis.</p>
					<div class="more"><a href="#">[...]</a></div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col box">
					<h2>Best DJ's Ever</h2>
					<p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis.</p>
					<div class="more"><a href="#">[...]</a></div>
				</div>
			</div>
		</div>
		<div class="row block02">
			<div class="col-2-3">
				<div class="wrap-col">
					<div class="heading"><h2>Latest Blog</h2></div>
					<?php 
						
					$sql = new WP_Query(array(
							'post_type'=>'post', 
							'posts_per_page'=> 5
							)
					);
					if($sql->have_posts()):
						while($sql->have_posts()): $sql->the_post();
					?>
					<article class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<img src="images/img1.png"/>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="#">Dreaming With Us All Night</a></h2>
								<div class="info">By Admin on December 01, 2012 with <a href="#">01 Commnets</a></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor [...]</p>
							</div>
						</div>
					</article>
					<?php 
						endwhile;
						endif;
					?>
					
				</div>
			</div>
			<?php dynamic_sidebar('sidebar-1'); ?>
		</div>
	</div>
</section>
<!--------------Footer--------------->
<?php get_footer(); ?>
