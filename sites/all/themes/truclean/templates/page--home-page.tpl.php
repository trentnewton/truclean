<div class="off-canvas-wrapper">
	<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<div class="off-canvas position-right" id="offCanvasRight" data-off-canvas data-position="right">
			<?php include ($directory."/partials/off_canvas_menu.php"); ?>
		</div>
		<div class="off-canvas-content" id="main-content" data-off-canvas-content>
			<header role="banner" itemscope itemtype="http://schema.org/WPHeader">
				<?php if ($page['header']): ?>
					<div class="row column notice">
						<?php print render($page['header']); ?>
					</div>
	        	<?php endif; ?>
				<?php include ($directory."/partials/header.php"); ?>
			</header>
			<section class="homepage-hero">
				<div class="homepage-hero-bg">
					<div class="row medium-12 large-12 columns homepage-hero-text">
						<h1 itemprop="headline"><?php print render( $node->field_slogan["und"][0]["value"] ); ?></h1>
					</div>
				</div>
			</section>
			<?php include ($directory."/partials/main_product_categories.php"); ?>
			<?php if ($page['content']): ?>
			<main class="normal-page-content" itemscope itemprop="mainContentOfPage">
				<?php if ($messages): ?>
				<div class="row column">
					<?php print $messages; ?>
				</div>
				<?php endif; ?>
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
			</main>
			<?php endif; ?>
			<?php include ($directory."/partials/footer.php"); ?>
			<div class="js-off-canvas-exit"></div>
		</div>
	</div>
</div>