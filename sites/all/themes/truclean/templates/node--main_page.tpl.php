<?php global $user;
  // Check to see if $user has the administrator role.
  if (in_array('administrator', array_values($user->roles))) { ?>
    <div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
    <?php print render($title_suffix); ?>
<?php } ?>
<?php if(isset($node) && $node->field_section_1_body):?>
<div class="normal-page-content">
	<div class="row">
		<div class="large-6 medium-6 medium-push-6 columns">
			<?php print render($content['field_section_1_image']); ?>
		</div>
		<div class="large-6 medium-6 medium-pull-6 columns">
			<h2><?php print render($content['field_section_1_title']); ?></h2>
			<?php print render($content['field_section_1_body']); ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(isset($node) && $node->field_section_2_body):?>
<div class="normal-page-content">
	<div class="row">
		<div class="large-6 medium-6 columns">
			<?php print render($content['field_section_2_image']); ?>
		</div>
		<div class="large-6 medium-6 columns">
			<h2><?php print render($content['field_section_2_title']); ?></h2>
			<?php print render($content['field_section_2_body']); ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(isset($node) && $node->field_section_3_body):?>
<div class="normal-page-content">
	<div class="row">
		<div class="large-6 medium-6 medium-push-6 columns">
			<?php print render($content['field_section_3_image']); ?>
		</div>
		<div class="large-6 medium-6 medium-pull-6 columns">
			<h2><?php print render($content['field_section_3_title']); ?></h2>
			<?php print render($content['field_section_3_body']); ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php global $user;
    // Check to see if $user has the administrator role.
    if (in_array('administrator', array_values($user->roles))) { ?>
    </div>
<?php } ?>