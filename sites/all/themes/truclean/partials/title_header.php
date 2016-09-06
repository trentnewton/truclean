<div class="main-header">
	<div class="row">
		<div class="medium-6 large-6 medium-push-6 columns main-header-inner">
		<?php if ($breadcrumb): ?>
			<?php print $breadcrumb; ?>
		<?php endif; ?>
		</div>
		<div class="medium-6 large-6 medium-pull-6 columns main-header-inner">
			<?php if ($page['title']): ?>
				<?php print render($title_prefix); ?>
				<?php if ($title): ?>
					<?php print render($page['title']); ?>
				<?php endif; ?>
				<?php print render($title_suffix); ?>
			<?php endif; ?>
		</div>
	</div>
</div>