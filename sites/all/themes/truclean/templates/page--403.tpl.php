<div class="off-canvas-wrapper">
	<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<div class="off-canvas position-right" id="offCanvasRight" data-off-canvas data-position="right">
			<?php include ($directory."/partials/off_canvas_menu.php"); ?>
		</div>
		<div class="off-canvas-content" id="main-content" data-off-canvas-content>
			<header role="banner" itemscope itemtype="http://schema.org/WPHeader">
				<?php include ($directory."/partials/header.php"); ?>
			</header>
			<section class="errorpage-hero">
				<div class="homepage-hero-bg">
					<div class="row medium-12 large-12 columns homepage-hero-text">
						<?php print render($title_prefix); ?>
						<?php if ($title): ?>
						<h1 itemprop="headline">
							<?php print $title; ?>
						</h1>
						<?php endif; ?>
						<?php print render($title_suffix); ?>
					</div>
				</div>
			</section>
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
					<h2><?php print t('Whoops!'); ?></h2>
					<?php print render($page['content']); ?>
					<p><?php print t('Try checking the url for errors and refreshing the page in your browser. For more help, please feel free to'); ?>&nbsp;<a href="<?php print $base_path; ?>contact/"><?php print t('contact us.'); ?></a></p>
				</div>
			</main>
			<?php include ($directory."/partials/footer.php"); ?>
			<div class="js-off-canvas-exit"></div>
		</div>
	</div>
</div>