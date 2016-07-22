<div class="off-canvas-wrapper">
	<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<div class="off-canvas position-right" id="offCanvasRight" data-off-canvas data-position="right">
			<?php include ($directory."/partials/off-canvas-menu.php"); ?>
		</div>
		<div class="off-canvas-content" data-off-canvas-content>
			<?php include ($directory."/partials/header.php"); ?>
			<?php include ($directory."/partials/title-header.php"); ?>
			<?php include ($directory."/partials/main-product-categories.php"); ?>
			<section class="normal-page-content">
				<div class="row column">
					<?php global $user;
					// Check to see if $user has the administrator role.
					if (in_array('administrator', array_values($user->roles))) { ?>
						<?php if ($tabs): ?>
						<div class="tabs">
							<?php print render($tabs); ?>
						</div>
						<?php endif; ?>
						<?php print render($page['help']); ?>
						<?php if ($action_links): ?>
						<ul class="action-links">
							<?php print render($action_links); ?>
						</ul>
						<?php endif; ?>
					<?php } ?>
					<h2><?php print t('Product Data Sheets'); ?></h2>
					<?php print render($page['content']); ?>
				</div>
			</section>
			<?php include ($directory."/partials/footer.php"); ?>
			<div class="js-off-canvas-exit"></div>
		</div>
	</div>
</div>