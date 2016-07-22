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
?>

<div class="row">
	<?php print drupal_render($form['submitted']['full_name']); ?>
	<?php print drupal_render($form['submitted']['email']); ?>
</div>
<?php print drupal_render($form['submitted']['subject']); ?>
<?php print drupal_render($form['submitted']['message']); ?>
<div class="row column">
	<input type="hidden" name="details[sid]">
    <input type="hidden" name="details[page_num]" value="1">
    <input type="hidden" name="details[page_count]" value="1">
    <input type="hidden" name="details[finished]" value="0">
    <input type="hidden" name="form_build_id" value="<?= $form['#build_id'] ?>">

    <input type="hidden" name="form_id" value="webform_client_form_64">
    <input type="hidden" name="webform_ajax_wrapper_id" value="webform-ajax-wrapper-64">
    <button class="button" type="submit" id="edit-webform-ajax-submit-64" name="op" value="Send">Send</button>
    <?php print drupal_render($form['captcha']); ?>
    <div class="hide">
    	<?php print drupal_render($form['actions']['submit']); ?>
    </div>
</div>