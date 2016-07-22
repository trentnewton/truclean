<?php global $user;
  // Check to see if $user has the administrator role.
  if (in_array('administrator', array_values($user->roles))) { ?>
    <div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
    <?php print render($title_suffix); ?>
<?php } ?>
<h2>
	<svg class="icon icon-home"><use xlink:href="#icon-home"></use></svg>&nbsp;<?php print render($content['field_address_title']); ?>
</h2>
<address>
	<?php print render($content['field_address_body']); ?>
</address>
<h2>
	<svg class="icon icon-mobile"><use xlink:href="#icon-mobile"></use></svg>&nbsp;<?php print render($content['field_phone_title']); ?>
</h2>
<p><?php print render($content['field_phone_body']); ?></p>
<?php global $user;
	// Check to see if $user has the administrator role.
	if (in_array('administrator', array_values($user->roles))) { ?>
	</div>
<?php } ?>