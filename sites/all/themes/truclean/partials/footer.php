<footer class="main-footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
	<div class="top-footer">
		<div class="row">
			<div class="small-6 medium-3 large-3 columns">
			<?php if ($page['footer_first-column']): ?>
				<?php print render($page['footer_first-column']); ?>
        	<?php endif; ?>
			</div>
			<div class="small-6 medium-3 large-3 columns">
			<?php if ($page['footer_second-column']): ?>
				<?php print render($page['footer_second-column']); ?>
        	<?php endif; ?>
			</div>
			<div class="medium-3 large-3 columns">
			<?php if ($page['footer_third-column']): ?>
				<?php print render($page['footer_third-column']); ?>
        	<?php endif; ?>
			</div>
			<div class="medium-3 large-3 columns">
				
			</div>
		</div>
	</div>
	<div class="bottom-footer">
		<div class="row">
			<div class="medium-4 medium-push-8 columns">
				<p class="top">
					<a id="top" href="#top" title="Top"><svg class="icon icon-circle-up"><use xlink:href="#icon-circle-up"></use></svg></a>
				</p>
			</div>
			<div class="medium-8 medium-pull-4 columns">
				<p class="copyright"><?php print t('Copyright'); ?> &copy; <?php echo date("Y"); ?> Truclean (Qld) Pty. Ltd.</p>
			</div>
		</div>
	</div>
</footer>