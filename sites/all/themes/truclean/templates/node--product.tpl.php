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
    <article class="row">
  	  <div class="medium-6 medium-push-6 columns">
  	    <?php print render($content['uc_product_image']); ?>
  	  </div>
  	  <div class="medium-6 medium-pull-6 columns">
  	    <h2 itemprop="headline"><?php print $title; ?></h2>
  	    <h4><?php print render($content['field_sub_title']); ?></h4>
  	    <?php print render($content['body']); ?>
  	    <p>
  	      <label><?php print t('Code:'); ?></label>&nbsp;<span class="code"><?php print $node->model; ?></span>
  	      <?php if(isset($node) && $node->field_sds_link):?>
  	        &nbsp;<a href="<?php print render($content['field_sds_link']); ?>" class="sds"><?php print t('SDS Available'); ?></a>
  	      <?php endif; ?>
  	    </p>
  	    <?php if(user_is_logged_in()) { ?>
  	      <h3><?php print render($content['display_price']); ?></h3>
  	      <?php } else { ?>
  	        <h3><?php print t('Price displayed upon login'); ?></h3>
  	    <?php } ?>
  	    <?php print render($content['add_to_cart']); ?>
  	  </div>
    </article>
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