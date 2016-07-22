<?php global $user;
  // Check to see if $user has the administrator role.
  if (in_array('administrator', array_values($user->roles))) { ?>
    <div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>" <?php print $attributes; ?>>
    <?php print render($title_suffix); ?>
<?php } ?>
<div class="large-8 medium-8 columns banner-info">
	<?php print render($content['body']); ?>
</div>
<div class="large-4 medium-4 columns banner-image">
	<?php print render($content['field_home_page_image']); ?>
</div>
<?php global $user;
	// Check to see if $user has the administrator role.
	if (in_array('administrator', array_values($user->roles))) { ?>
	</div>
<?php } ?>