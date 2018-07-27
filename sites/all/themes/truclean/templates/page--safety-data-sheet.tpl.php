<div class="off-canvas-wrapper">
	<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<div class="off-canvas position-right" id="offCanvasRight" data-off-canvas data-position="right">
			<?php include ($directory."/partials/off_canvas_menu.php"); ?>
		</div>
		<div class="off-canvas-content" id="main-content" data-off-canvas-content>
			<?php if ($page['header']): ?>
				<div class="row column notice">
					<?php print render($page['header']); ?>
				</div>
        	<?php endif; ?>
			<?php include ($directory."/partials/header.php"); ?>
			<?php include ($directory."/partials/title_header.php"); ?>
			<?php include ($directory."/partials/main_product_categories.php"); ?>
			<main class="normal-page-content" itemscope itemprop="mainContentOfPage">
				<div class="row column">
					<?php if ($messages): ?>
		            	<?php print $messages; ?>
					<?php endif; ?>
					<?php global $user;
					// Check to see if $user has the administrator role.
					if (in_array('administrator', array_values($user->roles))) { ?>
						<?php if ($tabs): ?>
							<?php print render($tabs); ?>
						<?php endif; ?>
						<?php print render($page['help']); ?>
						<?php if ($action_links): ?>
						<ul class="action-links">
							<?php print render($action_links); ?>
						</ul>
						<?php endif; ?>
					<?php } ?>
					<h2><?php print t('Safety Data Sheets'); ?></h2>
					<?php print render($page['content']); ?>
				</div>
			</main>
			<?php include ($directory."/partials/footer.php"); ?>
			<div class="js-off-canvas-exit"></div>
		</div>
	</div>
</div>