<div class="off-canvas-wrapper">
	<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<div class="off-canvas position-right" id="offCanvasRight" data-off-canvas data-position="right">
			<?php include ($directory."/partials/off-canvas-menu.php"); ?>
		</div>
		<div class="off-canvas-content" id="main-content" data-off-canvas-content>
			<header role="banner" itemscope itemtype="http://schema.org/WPHeader">
				<?php include ($directory."/partials/header.php"); ?>
				<?php include ($directory."/partials/title-header.php"); ?>
			</header>
			<?php include ($directory."/partials/main-product-categories.php"); ?>
			<main class="normal-page-content" id="main-content" itemscope itemprop="mainContentOfPage">
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
					<div class="medium-3 columns">
						<?php print render($page['content']); ?>
					</div>
					<div class="medium-9 columns">
						<hr class="show-for-small-only">
						<?php if ($messages): ?>
			            	<?php print $messages; ?>
						<?php endif; ?>
						<?php if ($page['contact-form']): ?>
							<?php print render($page['contact-form']); ?>
						<?php endif; ?>
					</div>
				</div>
			</main>
			<?php if ($page['google-map']): ?>
			<aside class="google-map">
				<?php print render($page['google-map']); ?>
				<div class="google-map-overlay"></div>
			</aside>
			<?php endif; ?>
			<?php include ($directory."/partials/footer.php"); ?>
			<div class="js-off-canvas-exit"></div>
		</div>
	</div>
</div>