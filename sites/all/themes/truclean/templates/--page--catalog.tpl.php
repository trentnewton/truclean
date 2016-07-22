<div class="off-canvas-wrapper">
	<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<div class="off-canvas position-right" id="offCanvasRight" data-off-canvas data-position="right">
			<?php include ($directory."/partials/off-canvas-menu.php"); ?>
		</div>
		<div class="off-canvas-content" data-off-canvas-content>
			<?php include ($directory."/partials/header.php"); ?>
			<header class="main-header">
				<div class="row">
					<div class="medium-6 large-6 medium-push-6 columns main-header-inner">
					<?php if ($breadcrumb): ?>
						<?php print $breadcrumb; ?>
					<?php endif; ?>
					</div>
					<div class="medium-6 large-6 medium-pull-6 columns main-header-inner">
						<?php print render($title_prefix); ?>
						<?php if ($title): ?>
						<h1 class="title" id="page-title">
							<?php print $title; ?>
						</h1>
						<?php endif; ?>
						<?php print render($title_suffix); ?>
					</div>
				</div>
			</header>
			<?php if ($page['main-product-categories']): ?>
			<section class="products">
				<div class="row">
					<?php print render($page['main-product-categories']); ?>
				</div>
			</section>
			<?php endif; ?>
			<?php if ($tabs): ?>
			<section class="admin-links">
				<div class="row column">
					<div class="tabs">
						<?php print render($tabs); ?>
					</div>
				</div>
			</section>
			<?php endif; ?>
			<?php print render($page['help']); ?>
			<?php if ($action_links): ?>
			<ul class="action-links">
				<?php print render($action_links); ?>
			</ul>
			<?php endif; ?>
			<?php print render($page['content']); ?>
			<?php include ($directory."/partials/footer.php"); ?>
			<div class="js-off-canvas-exit"></div>
		</div>
	</div>
</div>