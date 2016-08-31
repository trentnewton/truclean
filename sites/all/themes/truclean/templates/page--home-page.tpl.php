<div class="off-canvas-wrapper">
	<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<div class="off-canvas position-right" id="offCanvasRight" data-off-canvas data-position="right">
			<?php include ($directory."/partials/off-canvas-menu.php"); ?>
		</div>
		<div class="off-canvas-content" data-off-canvas-content>
			<?php include ($directory."/partials/header.php"); ?>
			<div class="homepage-hero">
				<div class="homepage-hero-bg">
					<div class="row medium-12 large-12 columns homepage-hero-text">
						<h1><?php print render( $node->field_slogan["und"][0]["value"] ); ?></h1>
					</div>
				</div>
			</div>
			<?php include ($directory."/partials/main-product-categories.php"); ?>
			<?php if ($page['content']): ?>
			<section class="normal-page-content">
				<?php global $user;
				// Check to see if $user has the administrator role.
				if (in_array('administrator', array_values($user->roles))) { ?>
				<div class="row column">
					<?php if ($tabs): ?>
						<?php print render($tabs); ?>
					<?php endif; ?>
					<?php print render($page['help']); ?>
					<?php if ($action_links): ?>
					<ul class="action-links">
						<?php print render($action_links); ?>
					</ul>
					<?php endif; ?>
				</div>
				<?php } ?>
				<div class="row">
					<?php print render($page['content']); ?>
				</div>
			</section>
			<?php endif; ?>
			<?php include ($directory."/partials/footer.php"); ?>
			<div class="js-off-canvas-exit"></div>
		</div>
	</div>
</div>