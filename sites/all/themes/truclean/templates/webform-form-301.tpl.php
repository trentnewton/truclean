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
            <?php print drupal_render($form['submitted']['trading_name']); ?>
        </div>
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['company_name']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-12 columns">
        	<?php print drupal_render($form['submitted']['business_street_address']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-4 columns">
        	<?php print drupal_render($form['submitted']['business_suburb_address']); ?>
        </div>
        <div class="small-4 columns">
        	<?php print drupal_render($form['submitted']['business_state_address']); ?>
        </div>
        <div class="small-4 columns">
        	<?php print drupal_render($form['submitted']['business_postcode_address']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-12 columns">
			<?php print drupal_render($form['submitted']['is_the_postal_address_the_same']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-12 columns">
        	<?php print drupal_render($form['submitted']['postal_street_address']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-4 columns">
        	<?php print drupal_render($form['submitted']['postal_suburb_address']); ?>
        </div>
        <div class="small-4 columns">
        	<?php print drupal_render($form['submitted']['postal_state_address']); ?>
        </div>
        <div class="small-4 columns">
			<?php print drupal_render($form['submitted']['postal_postcode_address']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-12 columns">
            <?php print drupal_render($form['submitted']['abn_number']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-4 columns">
        	<?php print drupal_render($form['submitted']['phone']); ?>
        </div>
        <div class="small-4 columns">
        	<?php print drupal_render($form['submitted']['email']); ?>
        </div>
        <div class="small-4 columns">
			<?php print drupal_render($form['submitted']['fax']); ?>
        </div>
    </div>
</fieldset>
<fieldset class="fieldset-reset">
	 <legend><strong><?php print t('Contact Information');?></strong></legend>
	 <div class="row">
        <div class="small-4 columns">
        	<?php print drupal_render($form['submitted']['account_contact_name']); ?>
        </div>
        <div class="small-4 columns">
        	<?php print drupal_render($form['submitted']['account_contact_phone']); ?>
        </div>
        <div class="small-4 columns">
        	<?php print drupal_render($form['submitted']['account_contact_email']); ?>
        </div>
    </div>
    <div class="row">
    	<div class="small-12 columns">
        	<?php print drupal_render($form['submitted']['director_owner_full_name']); ?>
        </div>
    </div>
    <div class="row">
    	<div class="small-12 columns">
        	<?php print drupal_render($form['submitted']['director_owner_street_address']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-4 columns">
        	<?php print drupal_render($form['submitted']['director_owner_suburb_address']); ?>
        </div>
        <div class="small-4 columns">
        	<?php print drupal_render($form['submitted']['director_owner_state_address']); ?>
        </div>
        <div class="small-4 columns">
        	<?php print drupal_render($form['submitted']['director_owner_postcode_address']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['director_owner_phone']); ?>
        </div>
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['director_owner_email']); ?>
        </div>
    </div>
    <div class="row">
    	<div class="small-12 columns">
        	<?php print drupal_render($form['submitted']['second_director_owner_full_name']); ?>
        </div>
    </div>
    <div class="row">
    	<div class="small-12 columns">
        	<?php print drupal_render($form['submitted']['second_director_owner_street_address']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-4 columns">
        	<?php print drupal_render($form['submitted']['second_director_owner_suburb_address']); ?>
        </div>
        <div class="small-4 columns">
        	<?php print drupal_render($form['submitted']['second_director_owner_state_address']); ?>
        </div>
        <div class="small-4 columns">
        	<?php print drupal_render($form['submitted']['second_director_owner_postcode_address']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['second_director_owner_phone']); ?>
        </div>
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['second_director_owner_email']); ?>
        </div>
    </div>
</fieldset>
<fieldset class="fieldset-reset">
	 <legend><strong><?php print t('Trade References');?></strong></legend>
	 <div class="row">
        <div class="small-4 columns">
        	<?php print drupal_render($form['submitted']['trade_reference_name']); ?>
        </div>
        <div class="small-4 columns">
        	<?php print drupal_render($form['submitted']['trade_reference_phone']); ?>
        </div>
        <div class="small-4 columns">
        	<?php print drupal_render($form['submitted']['trade_reference_email']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-4 columns">
        	<?php print drupal_render($form['submitted']['second_trade_reference_name']); ?>
        </div>
        <div class="small-4 columns">
        	<?php print drupal_render($form['submitted']['second_trade_reference_phone']); ?>
        </div>
        <div class="small-4 columns">
        	<?php print drupal_render($form['submitted']['second_trade_reference_email']); ?>
        </div>
    </div>
    <div class="row">
        <div class="small-4 columns">
        	<?php print drupal_render($form['submitted']['third_trade_reference_name']); ?>
        </div>
        <div class="small-4 columns">
        	<?php print drupal_render($form['submitted']['third_trade_reference_phone']); ?>
        </div>
        <div class="small-4 columns">
        	<?php print drupal_render($form['submitted']['third_trade_reference_email']); ?>
        </div>
    </div>
</fieldset>
<fieldset class="fieldset-reset">
	<legend><strong><?php print t('Final Details');?></strong></legend>
	<div class="row">
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['applicant_name']); ?>
        </div>
        <div class="small-6 columns">
            <?php print drupal_render($form['submitted']['applicant_position']); ?>
        </div>
    </div>
    <div class="row">
    	<div class="small-12 columns">
        	<?php print drupal_render($form['submitted']['terms']); ?>
        </div>
    </div>
</fieldset>
<div class="row column">
	<button class="button" type="submit" id="edit-webform-ajax-submit-301" name="op"><?php print t('Send');?></button>
</div>

<?php print drupal_render($form['submitted']); ?>
<?php print drupal_render($form['children']); ?>