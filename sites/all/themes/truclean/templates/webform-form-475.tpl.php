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
        <div class="small-4 columns">
            <?php print drupal_render($form['submitted']['date']); ?>
        </div>
        <div class="small-4 columns">
            <?php print drupal_render($form['submitted']['email']); ?>
        </div>
        <div class="small-4 columns">
            <?php print drupal_render($form['submitted']['email_2']); ?>
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
        <div class="small-12 columns">
            <?php print drupal_render($form['submitted']['contact']); ?>
        </div>
    </div>
</fieldset>
<fieldset class="fieldset-reset">
     <legend><strong><?php print t('Reason for Service Call');?></strong></legend>
     <div class="row">
        <div class="small-12 columns">
            <?php print drupal_render($form['submitted']['reason_for_service_call']); ?>
        </div>
    </div>
</fieldset>
<fieldset class="fieldset-reset">
     <legend><strong><?php print t('Washer Specifications');?></strong></legend>
     <div class="row">
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['washer_specifications_make']); ?>
        </div>
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['washer_specifications_model']); ?>
        </div>
    </div>
</fieldset>
<fieldset class="fieldset-reset">
     <legend><strong><?php print t('Chemical Specifications');?></strong></legend>
     <div class="row">
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['chemical_specifications_make']); ?>
        </div>
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['chemical_specifications_model']); ?>
        </div>
    </div>
</fieldset>
<fieldset class="fieldset-reset">
     <legend><strong><?php print t('Chemicals Used');?></strong></legend>
     <div class="row">
        <div class="small-12 columns">
            <?php print drupal_render($form['submitted']['chemicals_used']); ?>
        </div>
    </div>
</fieldset>
<fieldset class="fieldset-reset">
     <legend><strong><?php print t('Washer Operations');?></strong></legend>
     <div class="row">
        <div class="small-3 columns">
            <?php print drupal_render($form['submitted']['water_levels']); ?>
        </div>
        <div class="small-3 columns">
            <?php print drupal_render($form['submitted']['water_levels_comments']); ?>
        </div>
        <div class="small-3 columns">
            <?php print drupal_render($form['submitted']['extract']); ?>
        </div>
        <div class="small-3 columns">
            <?php print drupal_render($form['submitted']['extract_comments']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-3 columns">
            <?php print drupal_render($form['submitted']['titration']); ?>
        </div>
        <div class="small-3 columns">
            <?php print drupal_render($form['submitted']['titration_comments']); ?>
        </div>
        <div class="small-3 columns">
            <?php print drupal_render($form['submitted']['final_ph_of_fabric']); ?>
        </div>
        <div class="small-3 columns">
            <?php print drupal_render($form['submitted']['final_ph_of_fabric_comments']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['other']); ?>
        </div>
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['other_comments']); ?>
        </div>
    </div>
</fieldset>
<fieldset class="fieldset-reset">
    <legend><strong><?php print t('Dispenser Operations');?></strong></legend>
    <div class="row">
        <div class="small-3 columns">
            <?php print drupal_render($form['submitted']['product_delivery']); ?>
        </div>
        <div class="small-3 columns">
            <?php print drupal_render($form['submitted']['product_delivery_comments']); ?>
        </div>
        <div class="small-3 columns">
            <?php print drupal_render($form['submitted']['squeeze_tubes']); ?>
        </div>
        <div class="small-3 columns">
            <?php print drupal_render($form['submitted']['squeeze_tubes_comments']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['load_count']); ?>
        </div>
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['load_count_comments']); ?>
        </div>
    </div>
</fieldset>
<fieldset class="fieldset-reset">
    <legend><strong><?php print t('Wash Results');?></strong></legend>
    <div class="row">
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['wash_results']); ?>
        </div>
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['wash_results_comments']); ?>
        </div>
    </div>
</fieldset>
<fieldset class="fieldset-reset">
     <legend><strong><?php print t('Dispenser Check');?></strong></legend>
     <div class="row">
        <div class="small-12 columns">
            <?php print drupal_render($form['submitted']['dispenser_check']); ?>
        </div>
    </div>
</fieldset>
<fieldset class="fieldset-reset">
     <legend><strong><?php print t('Final Details');?></strong></legend>
     <div class="row">
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['technician_comments']); ?>
        </div>
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['parts_replaced']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-12 columns">
            <?php print drupal_render($form['submitted']['service_performed_by']); ?>
        </div>
    </div>
</fieldset>
<div class="row column">
    <?php print drupal_render_children($form); ?>
</div>