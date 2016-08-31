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
					<div class="medium-9 medium-push-3 columns">
						<?php print render($page['content']); ?>
					</div>
					<div class="medium-3 medium-pull-9 columns">
						<?php if ($page['information-menu']): ?>
						<h3><?php print t('Information') ?></h3>
						<?php print render($page['information-menu']); ?>
						<?php endif; ?>
					</div>
				</div>
			</section>
			<?php include ($directory."/partials/footer.php"); ?>
			<div class="js-off-canvas-exit"></div>
		</div>
	</div>
</div>