<?php

/**
 * @file
 * Customize the display of a complete webform.
 *
 * This file may be renamed "webform-form-[nid].tpl.php" to target a specific
 * webform on your site. Or you can leave it "webform-form.tpl.php" to affect
 * all webforms on your site.
 *
 * Available variables:
 * - $form: The complete form array.
 * - $nid: The node ID of the Webform.
 *
 * The $form array contains two main pieces:
 * - $form['submitted']: The main content of the user-created form.
 * - $form['details']: Internal information stored by Webform.
 *
 * If a preview is enabled, these keys will be available on the preview page:
 * - $form['preview_message']: The preview message renderable.
 * - $form['preview']: A renderable representing the entire submission preview.
 */
?>
<?php
  // Print out the progress bar at the top of the page
  print drupal_render($form['progressbar']);

  // Print out the preview message if on the preview page.
  if (isset($form['preview_message'])) {
    print '<div class="messages warning">';
    print drupal_render($form['preview_message']);
    print '</div>';
  }

  // Print out the main part of the form.
  // Feel free to break this up and move the pieces within the array.
  // print drupal_render($form['submitted']);

  // Always print out the entire $form. This renders the remaining pieces of the
  // form that haven't yet been rendered above (buttons, hidden elements, etc).
  // print drupal_render_children($form);
?>
<fieldset class="fieldset-reset">
    <legend><strong><?php print t('Company Information');?></strong></legend>
    <div class="row">
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['date']); ?>
        </div>
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['email']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['name']); ?>
        </div>
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['phone']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-3 columns">
            <?php print drupal_render($form['submitted']['address']); ?>
        </div>
        <div class="small-3 columns">
            <?php print drupal_render($form['submitted']['city___suburb']); ?>
        </div>
        <div class="small-3 columns">
            <?php print drupal_render($form['submitted']['state']); ?>
        </div>
        <div class="small-3 columns">
            <?php print drupal_render($form['submitted']['postcode']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['contact']); ?>
        </div>
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['machine_model']); ?>
        </div>
    </div>
</fieldset>
<fieldset class="fieldset-reset">
     <legend><strong><?php print t('Fittings');?></strong></legend>
     <div class="row">
        <div class="small-4 columns">
            <?php print drupal_render($form['submitted']['tubes___squeeze_tubes']); ?>
        </div>
        <div class="small-4 columns">
            <?php print drupal_render($form['submitted']['detergent_injector']); ?>
        </div>
        <div class="small-4 columns">
            <?php print drupal_render($form['submitted']['rinse_injector']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['probe']); ?>
        </div>
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['detergent_concentration']); ?>
        </div>
    </div>
</fieldset>
<fieldset class="fieldset-reset">
    <legend><strong><?php print t('Results');?></strong></legend>
    <div class="row">
        <div class="small-4 columns">
            <?php print drupal_render($form['submitted']['dishes']); ?>
        </div>
        <div class="small-4 columns">
            <?php print drupal_render($form['submitted']['glasses']); ?>
        </div>
        <div class="small-4 columns">
            <?php print drupal_render($form['submitted']['flatware']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-4 columns">
            <?php print drupal_render($form['submitted']['pots___pans']); ?>
        </div>
        <div class="small-4 columns">
            <?php print drupal_render($form['submitted']['sanitation']); ?>
        </div>
        <div class="small-4 columns">
            <?php print drupal_render($form['submitted']['floors']); ?>
        </div>
    </div>
</fieldset>
<fieldset class="fieldset-reset">
    <legend><strong><?php print t('Mechanical');?></strong></legend>
    <div class="row">
        <div class="small-4 columns">
            <?php print drupal_render($form['submitted']['gauges']); ?>
        </div>
        <div class="small-4 columns">
            <?php print drupal_render($form['submitted']['pumps']); ?>
        </div>
        <div class="small-4 columns">
            <?php print drupal_render($form['submitted']['wash_arms']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-4 columns">
            <?php print drupal_render($form['submitted']['rinse_arms']); ?>
        </div>
        <div class="small-4 columns">
            <?php print drupal_render($form['submitted']['drain']); ?>
        </div>
        <div class="small-4 columns">
            <?php print drupal_render($form['submitted']['overflow']); ?>
        </div>
    </div>
</fieldset>
<fieldset class="fieldset-reset">
    <legend><strong><?php print t('Operational');?></strong></legend>
    <div class="row">
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['wash_temperature']); ?>
        </div>
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['rinse_temperature']); ?>
        </div>
    </div>
</fieldset>
<fieldset class="fieldset-reset">
    <legend><strong><?php print t('Training');?></strong></legend>
    <div class="row">
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['operations_safety']); ?>
        </div>
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['dishwasher_instructions']); ?>
        </div>
    </div>
</fieldset>
<fieldset class="fieldset-reset">
     <legend><strong><?php print t('Final Details');?></strong></legend>
     <div class="row">
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['comments']); ?>
        </div>
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['representative_name']); ?>
        </div>
    </div>
</fieldset>
<div class="row column">
    <?php print drupal_render_children($form); ?>
</div>