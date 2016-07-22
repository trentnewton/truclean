<?php global $user;
  // Check to see if $user has the administrator role.
  if (in_array('administrator', array_values($user->roles))) { ?>
    <div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>" <?php print $attributes; ?>>
    <?php print render($title_suffix); ?>
<?php } ?>
<table>
  <thead>
    <tr>
      <th><?php print t('Name'); ?></th>
      <th width="200"><?php print render($content['field_sds_date']['#title']); ?></th>
      <th width="50"><?php print render($content['field_sds_file']['#title']); ?></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php print $title; ?></td>
      <td><?php print render($content['field_sds_date']); ?></td>
      <td><a href="<?php print render($content['field_sds_file']); ?>"><svg class="icon icon-box-add"><use xlink:href="#icon-box-add"></use></svg></a></td>
    </tr>
  </tbody>
</table>
<?php global $user;
  // Check to see if $user has the administrator role.
  if (in_array('administrator', array_values($user->roles))) { ?>
    </div>
<?php } ?>
