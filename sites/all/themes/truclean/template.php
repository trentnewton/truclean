<?php

// Used in conjunction with https://gist.github.com/1417914

/**
* Implements hook_preprocess_html().
*/
function truclean_preprocess_html(&$vars) {
// Move JS files "$scripts" to page bottom for perfs/logic.
// Add JS files that *needs* to be loaded in the head in a new "$head_scripts" scope.
// For instance the Modernizr lib.
  $path = drupal_get_path('theme', 'truclean');
  $vars['site_name'] = variable_get('site_name', 'Default');
}

/**
* Implements hook_process_html().
*/
function truclean_process_html(&$variables) {
  $variables['head_scripts'] = drupal_get_js('head_scripts');

  // Remove Query Strings from CSS filenames (CacheBuster)
  $variables['styles'] = preg_replace('/\.css\?[^"]+/','.css', $variables['styles']);
}

function truclean_js_alter(&$js) {

  // Remove Drupal core js

  // global $user;
  // if (!in_array('administrator', $user->roles)) {
  //   unset($js['settings']);
  // }

  // unset($js['settings']);

  $exclude = array(
  // 'sites/all/modules/jquery_update/replace/jquery/1.10/jquery.min.js' => TRUE,
  // 'sites/all/modules/jquery_update/replace/jquery/2.1/jquery.min.js' => TRUE
  'sites/all/modules/jquery_update/js/jquery_update.js' => TRUE,
  'sites/all/modules/jquery_update/replace/jquery.form/3/jquery.form.min.js' => TRUE,
  'sites/all/modules/jquery_update/replace/ui/external/jquery.cookie.js' => TRUE,
  'sites/all/modules/autoupload/js/autoupload.js' => TRUE,
  'sites/all/modules/custom_search/js/custom_search.js' => TRUE,
  'sites/all/modules/devel/devel_krumo_path.js' => TRUE,
  'sites/all/modules/webform/js/webform.js' => TRUE,
  // 'misc/ajax.js' => TRUE,
  'misc/jquery.js' => TRUE,
  // 'misc/jquery.once.js' => TRUE,
  'misc/textarea.js' => TRUE,
  'misc/collapse.js' => TRUE,
  'misc/form.js' => TRUE,
  'misc/progress.js' => TRUE,
  // 'misc/drupal.js' => TRUE,
  );

  $js = array_diff_key($js, $exclude);

}

// adding content type template overide

function truclean_preprocess_page(&$vars, $hook) {

  if (isset($vars['node']->type)) {
    // If the content type's machine name is "my_machine_name" the file
    // name will be "page--my-machine-name.tpl.php".
    $vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
  }

  if (drupal_is_front_page()) {
    unset($vars['page']['content']['system_main']['default_message']); //will remove message "no front page content is created"
  }

  drupal_add_js(drupal_get_path('theme', 'truclean') .'/dist/assets/js/app.js', array(
    'type' => 'file',
    'requires_jquery' => TRUE,
    'group' => JS_LIBRARY,
    'every_page' => TRUE,
    'weight' => 4,
  ));

  $header = drupal_get_http_header("status");
  if ($header == "404 Not Found") {
    $vars['theme_hook_suggestions'][] = 'page__404';
  }
  elseif ($header == "403 Forbidden") {
    $vars['theme_hook_suggestions'][] = 'page__403';
  }

}

/**
 * Implementation of hook_theme_registry_alter().
 * Original code from http://drupal.stackexchange.com/a/26796/7542
 */
function truclean_theme_registry_alter(&$theme_registry) {
  $mod_path = drupal_get_path('module', 'truclean');

  $theme_registry_copy = $theme_registry;
  _theme_process_registry($theme_registry_copy, 'phptemplate', 'theme_engine','', $mod_path);
  $theme_registry += array_diff_key($theme_registry_copy, $theme_registry);

  $hooks = array('page');
  foreach ($hooks as $h) {
    if (!isset($theme_registry[$h]['theme paths'])) {
      $theme_registry[$h]['theme paths'] = array();
    }

    _truclean_insert_after_first_element($theme_registry[$h]['theme paths'], $mod_path);
  }
}

function _truclean_insert_after_first_element(&$a, $element) {
  if (is_array($a)) {
    $first_element = array_shift($a);
    if ($first_element) {
      array_unshift($a, $first_element, $element);
    }
    else {
      array_unshift($a, $element);
    }
  }
}

// remove useless div in forms

function truclean_form($variables) {
  $element = $variables['element'];
  if (isset($element['#action'])) {
    $element['#attributes']['action'] = drupal_strip_dangerous_protocols($element['#action']);
  }
  element_set_attributes($element, array('method', 'id'));
  if (empty($element['#attributes']['accept-charset'])) {
    $element['#attributes']['accept-charset'] = "UTF-8";
  }
  // Anonymous DIV to satisfy XHTML compliance. (REMOVED)
  return '<form' . drupal_attributes($element['#attributes']) . '>' . $element['#children'] . '</form>';
}

function truclean_menu_tree($variables) {

  if (preg_match("/\bmenu\b/i", $variables['tree'])){
   return '<ul class="menu dropdown top-header-menu first-menu" data-dropdown-menu>' . $variables['tree']    . '</ul>';
  } else {
    return '<ul class="menu">' . $variables['tree'] . '</ul>';
  }

}

function truclean_menu_tree__menu_login_menu($variables) {
  return '<ul class="menu top-header-menu first-menu">' . $variables['tree'] . '</ul>';
}

// information menu

function truclean_menu_tree__menu_info_menu($variables){
  return "<ul class=\"menu vertical information-menu\">\n" . $variables['tree'] ."</ul>\n";
}

function truclean_form_alter(&$form, &$form_state, $form_id) {

  if ($form_id == 'search_block_form') {
    $form['#attributes']['class'][] = 'search-box';
    $form['search_block_form']['#theme_wrappers'] = array();
    $form['search_block_form']['#attributes']['class'][] = 'search-box-input';
    $form['search_block_form']['#attributes']['placeholder'] = t('Search...');
    $form['actions']['#theme_wrappers'] = array();
    $form['actions']['submit'] = array
    (
      '#type' => 'submit',
      '#attributes' => array( 'class' => array( 'search-box-submit' )),
    );
    $form['actions']['#suffix'] = '<span class="search-box-icon"><svg class="icon icon-search"><use xlink:href="#icon-search"></use></svg></span>';
  }

  if ($form_id == 'search_form') {
    $form['#attributes']['class'][] = 'search-form-custom';
    $form['basic']['keys']['#theme_wrappers'] = array();
    $form['basic']['keys']['#prefix'] = '<div class="row"><div class="medium-9 large-9 medium-push-3 columns search-form-inputs"><div class="row"><div class="medium-9 large-10 columns">';
    $form['basic']['keys']['#attributes']['placeholder'] = t('Search');
    $form['basic']['keys']['#suffix'] = '</div>';
    $form['basic']['submit'] = array
    (
      '#prefix' => '<div class="medium-3 large-2 columns"><button type="submit" name="op" class="expanded button">' . t('Search') . '</button></div></div>',
      '#type' => 'submit',
      '#attributes' => array( 'class' => array( 'hide' )), // hide the input field
    );
    $form['advanced']['#attributes']['class'][] = 'medium-3 large-3 medium-pull-9 columns';
    $form['advanced']['#title'] = '<h3><svg class="icon icon-search"><use xlink:href="#icon-search"></use></svg>&nbsp;' . t('Results from') . '</h3>';
    $form['advanced']['submit'] = array
    (
      '#prefix' => '<button type="submit" name="op" class="button">' . t('Advanced search') . '</button>',
      '#type' => 'submit',
      '#attributes' => array( 'class' => array( 'hide' )), // hide the input field
      '#suffix' => '</div>',
    );
    unset($form['advanced']['type']['#title']);
  }

  if ($form_id == 'user_pass') {
    $form['actions']['submit'] = array
    (
      '#prefix' => '<button type="submit" name="op" class="button">' . t('Email new password') . '</button>',
      '#type' => 'submit',
      '#attributes' => array( 'class' => array( 'hide' )),
    );
  }

  if ($form_id == 'user_pass_reset') {
    $form['actions']['submit'] = array
    (
      '#prefix' => '<button type="submit" name="op" class="button">' . t('Log in') . '</button>',
      '#type' => 'submit',
      '#attributes' => array( 'class' => array( 'hide' )),
    );
  }

  if (in_array($form_id, array('user_login', 'user_login_block'))) {
    $form['name']['#attributes'] = array
    (
      'placeholder' => t('Enter your username'),
      'required' => 'required',
    );
    $form['pass']['#attributes'] = array
    (
      'placeholder' => t('Enter your password'),
      'required' => 'required',
    );
    $form['actions']['submit'] = array
    (
      '#prefix' => '<button type="submit" name="op" class="button" id="edit-submit">' . t('Log in') . '</button>',
      '#type' => 'submit',
      '#attributes' => array( 'class' => array( 'hide' )), // hide the input field
    );

    // Turn it into an AJAX element.
    $form['actions']['submit']['#ajax'] = array(
      'wrapper' => $form['#id'],
      'callback' => 'truclean_form_user_login_ajax',
      'progress' => array
      (
        'type' => 'throbber',
        'message' => t('Logging in'),
      ),
      'event' => 'click',
    );
  }

}

function truclean_form_user_login_ajax($form, $form_state) {
  global $user;
  if ($user->uid) {
    return '<div class="reload-overlay"></div><div class="messages status">' . t('Successfully logged in.') . '</div>';
  }
  else {
    return $form;
  }
}

function truclean_block_view_user_login_alter(&$data, $block) {
  global $user;
  if (!$user->uid && !(arg(0) == 'user' && (arg(1) == 'login'))) {
        $block->subject = t('User login');
        $block->content = drupal_get_form('user_login_block');
  }
}

// breadcrumbs

function truclean_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  $crumbs = '';
  if (!empty($breadcrumb)) {
    $crumbs = '<nav aria-label="You are here:" role="navigation"><ul class="breadcrumbs">';
    if(arg(0)=='search')
    {
      unset($breadcrumb[1]);
      unset($breadcrumb[2]);
      unset($breadcrumb[3]);
      unset($breadcrumb[4]);
    }
    foreach($breadcrumb as $value) {
      $crumbs .= '<li>' . $value . '</li>';
    }

    $crumbs .= '<li><span class="show-for-sr">Current: </span>' . drupal_get_title() . '</li></ul></nav>';
  }
  return $crumbs;
}