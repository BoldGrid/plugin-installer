<div class="plugin <?php echo $pluginClasses; ?>">
	<div class="<?php echo $messageClasses; ?>"><p><?php echo $message; ?></p></div>
	<div class="plugin-wrap">
		<div class="plugin-wrap-left">
			<img src="<?php echo $api->icons['1x']; ?>" alt="<?php printf( __( '%1$s Plugin Logo', 'boldgrid-library' ), $api->name ); ?>">
			<a href="<?php echo $modal; ?>" class="thickbox open-plugin-details-modal" aria-label="<?php printf( __( 'More information about %1$s', 'boldgrid-library' ), $name ); ?>" data-title="<?php echo $name; ?>">
				<?php _e( 'More Details', 'boldgrid-library' ); ?>
			</a>
		</div>
		<h2 class="plugin-title">
			<?php echo $api->name; ?>
		</h2>
		<p>
			<?php echo $api->short_description; ?>
		</p>
		<p class="plugin-author">
			<?php printf( __( 'By %1$s', 'boldgrid-library' ), $api->author ); ?>
		</p>
	</div>
	<ul class="activation-row">
		<?php echo $premiumLink; ?>
		<li>
			<a href="<?php echo $button['link']; ?>" class="<?php echo $button['classes']; ?>" aria-label="<?php printf( __( 'Install %1$s now', 'boldgrid-library' ), $name ); ?>" data-slug="<?php echo $api->slug; ?>" data-name="<?php echo $name; ?>">
				<?php echo $button['text']; ?>
			</a>
		</li>
	</ul>
</div>
