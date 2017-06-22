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
    print('<pre>'.print_r($form,1).'</pre>');
?>

<fieldset>
    <legend><strong>Company Information</strong></legend>
    <div class="row">
        <div class="small-6 columns">
            <div class="form-item webform-component webform-component-textfield webform-component--trading-name">
                <label for="edit-submitted-trading-name">Trading Name <span class="form-required" title="This field is required.">*</span></label>
                <input required="required" placeholder="Trading Name Pty Ltd" type="text" id="edit-submitted-trading-name" name="submitted[trading_name]" value="" size="60" maxlength="128" class="form-text required">
            </div>
        </div>
        <div class="small-6 columns">
            <div class="form-item webform-component webform-component-textfield webform-component--company-name">
                <label for="edit-submitted-company-name">Company Name <span class="form-required" title="This field is required.">*</span></label>
                <input required="required" placeholder="The Flower Shop" type="text" id="edit-submitted-company-name" name="submitted[company_name]" value="" size="60" maxlength="128" class="form-text required">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="small-12 columns">
            <div class="form-item webform-component webform-component-textfield webform-component--business-street-address">
                <label for="edit-submitted-business-street-address">Business Street Address <span class="form-required" title="This field is required.">*</span></label>
                <input required="required" placeholder="123 Street Name" type="text" id="edit-submitted-business-street-address" name="submitted[business_street_address]" value="" size="60" maxlength="128" class="form-text required">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="small-4 columns">
            <div class="form-item webform-component webform-component-textfield webform-component--business-suburb-address">
                <label for="edit-submitted-business-suburb-address">Business Suburb Address <span class="form-required" title="This field is required.">*</span></label>
                <input required="required" type="text" id="edit-submitted-business-suburb-address" name="submitted[business_suburb_address]" value="" size="60" maxlength="128" class="form-text required">
            </div>
        </div>
        <div class="small-4 columns">
            <div class="form-item webform-component webform-component-select webform-component--business-state-address">
                <label for="edit-submitted-business-state-address">Business State Address <span class="form-required" title="This field is required.">*</span></label>
                <select required="required" id="edit-submitted-business-state-address" name="submitted[business_state_address]" class="form-select required"><option value="" selected="selected">- Select -</option><option value="qld">QLD</option><option value="nsw">NSW</option><option value="vic">VIC</option><option value="sa">SA</option><option value="wa">WA</option><option value="tas">TAS</option><option value="nt">NT</option><option value="act">ACT</option></select>
            </div>
        </div>
        <div class="small-4 columns">
            <div class="form-item webform-component webform-component-number webform-component--business-postcode-address">
                <label for="edit-submitted-business-postcode-address">Business Postcode Address </label>
                <input type="text" id="edit-submitted-business-postcode-address" name="submitted[business_postcode_address]" step="any" class="form-text form-number">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="small-12 columns">
            <div class="form-item webform-component webform-component-select webform-component--is-the-postal-address-the-same">
                <label for="edit-submitted-is-the-postal-address-the-same">Is the postal address the same as the business address? <span class="form-required" title="This field is required.">*</span></label>
                <select required="required" id="edit-submitted-is-the-postal-address-the-same" name="submitted[is_the_postal_address_the_same]" class="form-select required"><option value="yes" selected="selected">Yes</option><option value="no">No</option></select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="small-12 columns">
            <div class="form-item webform-component webform-component-textfield webform-component--postal-street-address">
                <label for="edit-submitted-postal-street-address">Postal Street Address </label>
                <input placeholder="123 Street Name" type="text" id="edit-submitted-postal-street-address" name="submitted[postal_street_address]" value="" size="60" maxlength="128" class="form-text">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="small-4 columns">
            <div class="form-item webform-component webform-component-textfield webform-component--postal-suburb-address">
                <label for="edit-submitted-postal-suburb-address">Postal Suburb Address </label>
                <input type="text" id="edit-submitted-postal-suburb-address" name="submitted[postal_suburb_address]" value="" size="60" maxlength="128" class="form-text">
            </div>
        </div>
        <div class="small-4 columns">
            <div class="form-item webform-component webform-component-select webform-component--postal-state-address">
                <label for="edit-submitted-postal-state-address">Postal State Address </label>
                <select id="edit-submitted-postal-state-address" name="submitted[postal_state_address]" class="form-select"><option value="" selected="selected">- None -</option><option value="qld">QLD</option><option value="nsw">NSW</option><option value="vic">VIC</option><option value="sa">SA</option><option value="wa">WA</option><option value="tas">TAS</option><option value="nt">NT</option><option value="act">ACT</option></select>
            </div>
        </div>
        <div class="small-4 columns">
            <div class="form-item webform-component webform-component-number webform-component--postal-postcode-address">
                <label for="edit-submitted-postal-postcode-address">Postal Postcode Address </label>
                <input type="text" id="edit-submitted-postal-postcode-address" name="submitted[postal_postcode_address]" step="any" class="form-text form-number">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="small-12 columns">
            <div class="form-item webform-component webform-component-number webform-component--abn-number">
                <label for="edit-submitted-abn-number">ABN Number </label>
                <input type="text" id="edit-submitted-abn-number" name="submitted[abn_number]" step="any" class="form-text form-number">
            </div>
        </div>
    </div>
</fieldset>