<?php global $user;
  // Check to see if $user has the administrator role.
  if (in_array('administrator', array_values($user->roles))) { ?>
    <div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>" <?php print $attributes; ?>>
    <?php print render($title_suffix); ?>
<?php } ?>
<div class="row">
  <div class="medium-6 medium-push-6 columns">
    <?php print render($content['uc_product_image']); ?>
  </div>
  <div class="medium-6 medium-pull-6 columns">
    <h2><?php print $title; ?></h2>
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
</div>
<?php global $user;
  // Check to see if $user has the administrator role.
  if (in_array('administrator', array_values($user->roles))) { ?>
    </div>
<?php } ?>