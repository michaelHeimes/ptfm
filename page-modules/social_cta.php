<section class="social-cta module">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<div class="left cell small-12 medium-6 tablet-5">
				<div class="handle"><?php the_sub_field('handle');?></div>
				<h2><?php the_sub_field('heading');?></h2>
				<p><?php the_sub_field('copy');?></p>
				<?php 
				$link = get_sub_field('link');
				if( $link ): 
				    $link_url = $link['url'];
				    $link_title = $link['title'];
				    $link_target = $link['target'] ? $link['target'] : '_self';
				    ?>
				    <a class="lm-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>				
			</div>

			<div class="right cell small-12 medium-6 tablet-6 tablet-offset-1">
				<div class="inner">
					<?php 
					$image = get_sub_field('image');
					if( !empty( $image ) ): ?>
						<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
				</div>
			</div>

		</div>
	</div>
</section>