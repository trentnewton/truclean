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
    <?php if(isset($node) && $node->field_section_1_body):?>
	<article class="normal-page-content">
		<div class="row">
			<div class="large-6 medium-6 medium-push-6 columns">
				<?php print render($content['field_section_1_image']); ?>
			</div>
			<div class="large-6 medium-6 medium-pull-6 columns">
				<h2 itemprop="headline"><?php print render($content['field_section_1_title']); ?></h2>
				<?php print render($content['field_section_1_body']); ?>
			</div>
		</div>
	</article>
	<?php endif; ?>
	<?php if(isset($node) && $node->field_section_2_body):?>
	<article class="normal-page-content">
		<div class="row">
			<div class="large-6 medium-6 columns">
				<?php print render($content['field_section_2_image']); ?>
			</div>
			<div class="large-6 medium-6 columns">
				<h2 itemprop="headline"><?php print render($content['field_section_2_title']); ?></h2>
				<?php print render($content['field_section_2_body']); ?>
			</div>
		</div>
	</article>
	<?php endif; ?>
	<?php if(isset($node) && $node->field_section_3_body):?>
	<article class="normal-page-content">
		<div class="row">
			<div class="large-6 medium-6 medium-push-6 columns">
				<?php print render($content['field_section_3_image']); ?>
			</div>
			<div class="large-6 medium-6 medium-pull-6 columns">
				<h2 itemprop="headline"><?php print render($content['field_section_3_title']); ?></h2>
				<?php print render($content['field_section_3_body']); ?>
			</div>
		</div>
	</article>
	<?php endif; ?>
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