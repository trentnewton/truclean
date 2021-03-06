<?php global $user;
// Check to see if $user has the administrator role.
if (in_array('administrator', array_values($user->roles))) { ?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>>
      <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
    </h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <div class="meta submitted">
      <?php print $user_picture; ?>
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>

  <div class="content clearfix"<?php print $content_attributes; ?>>
<?php } ?>
    <h2>
		<svg class="icon icon-home"><use xlink:href="#icon-home"></use></svg>&nbsp;<?php print render($content['field_address_title']); ?>
	</h2>
	<?php print render($content['field_address_body']); ?>
	<h2>
		<svg class="icon icon-mobile"><use xlink:href="#icon-mobile"></use></svg>&nbsp;<?php print render($content['field_phone_title']); ?>
	</h2>
	<?php print render($content['field_phone_body']); ?>
<?php global $user;
// Check to see if $user has the administrator role.
if (in_array('administrator', array_values($user->roles))) { ?>

  </div>
  <?php
    // Remove the "Add new comment" link on the teaser page or if the comment
    // form is being displayed on the same page.
    if ($teaser || !empty($content['comments']['comment_form'])) {
      unset($content['links']['comment']['#links']['comment-add']);
    }
    // Only display the wrapper div if there are links.
    $links = render($content['links']);
    if ($links):
  ?>
    <div class="link-wrapper">
      <?php print $links; ?>
    </div>
  <?php endif; ?>

  <?php print render($content['comments']); ?>

</div>
<?php } ?>