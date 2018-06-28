<?php
// Print out the progress bar at the top of the page
// print drupal_render($form['progressbar']);
// Print out the preview message if on the preview page.
if (isset($form['preview_message'])) {
    print '<div class="messages warning">';
    print drupal_render($form['preview_message']);
    print '</div>';
}
// Print out the main part of the form.
// Feel free to break this up and move the pieces within the array.
//print drupal_render($form['submitted']);
// Always print out the entire $form. This renders the remaining pieces of the
// form that haven't yet been rendered above (buttons, hidden elements, etc).
//print drupal_render_children($form);
    // print('<pre>'.print_r($form,1).'</pre>');
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
	<input type="hidden" name="details[sid]">
	<input type="hidden" name="details[page_num]" value="1">
	<input type="hidden" name="details[page_count]" value="1">
	<input type="hidden" name="details[finished]" value="0">
	<input type="hidden" name="form_build_id" value="<?= $form['#build_id'] ?>">
	<input type="hidden" name="form_id" value="webform_client_form_65">
	<input type="hidden" name="webform_ajax_wrapper_id" value="webform-ajax-wrapper-65">
	<button class="button" type="submit" id="edit-webform-ajax-submit-65" name="op"><?php print t('Send');?></button>
	<div class="hide">
		<?php print drupal_render($form['actions']['submit']); ?>
	</div>
</div>