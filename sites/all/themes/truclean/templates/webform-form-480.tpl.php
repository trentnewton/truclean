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
    <legend><strong><?php print t('Service Specifics');?></strong></legend>
    <div class="row">
        <div class="small-12 columns">
            <?php print drupal_render($form['submitted']['blend_centre_location']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['blend_centre_make']); ?>
        </div>
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['blend_centre_model']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['blend_centre_serial_number']); ?>
        </div>
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['call_out_type']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['dispenser_configuration']); ?>
        </div>
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['saftflo_caps']); ?>
        </div>
    </div>
</fieldset>
<fieldset class="fieldset-reset">
     <legend><strong><?php print t('Site Checks');?></strong></legend>
     <div class="row">
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['charts_and_data_sheets_pre_result']); ?>
        </div>
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['charts_and_data_sheets_post_result']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['dispenser_condition_pre_result']); ?>
        </div>
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['dispenser_condition_post_result']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['pick_up_lines_pre_result']); ?>
        </div>
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['pick_up_lines_post_result']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['water_pressure_pre_result']); ?>
        </div>
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['water_pressure_post_result']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['water_line_pre_result']); ?>
        </div>
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['water_line_post_result']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['water_filters_pre_result']); ?>
        </div>
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['water_filters_post_result']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['filters_and_weights_pre_result']); ?>
        </div>
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['filters_and_weights_post_result']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['product_dilutions_pre_result']); ?>
        </div>
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['product_dilutions_post_result']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['drip_trays_pre_result']); ?>
        </div>
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['drip_trays_post_result']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['dispenser_labelling_pre_result']); ?>
        </div>
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['dispenser_labelling_post_result']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['trigger_bottles_pre_result']); ?>
        </div>
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['trigger_bottles_post_result']); ?>
        </div>
    </div>
</fieldset>
<fieldset class="fieldset-reset">
    <legend><strong><?php print t('Onsite Training');?></strong></legend>
    <div class="row">
        <div class="small-12 columns">
            <?php print drupal_render($form['submitted']['onsite_training']); ?>
        </div>
    </div>
</fieldset>
<fieldset class="fieldset-reset">
    <legend><strong><?php print t('Technician Details and Comments');?></strong></legend>
    <div class="row">
        <div class="small-12 columns">
            <?php print drupal_render($form['submitted']['comments']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-12 columns">
            <?php print drupal_render($form['submitted']['technician_name']); ?>
        </div>
    </div>
</fieldset>
<div class="row column">
    <?php print drupal_render_children($form); ?>
</div>