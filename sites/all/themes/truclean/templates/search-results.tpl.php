<div class="row">
  <div class="medium-9 large-9 medium-push-3 columns">
    <?php if ($search_results) : ?>
      <header class="major-header">
        <h2><?php print t('Search results');?></h2>
        <hr>
      </header>
      <?php if (isset($filter) && $filter != '' && $filter_position == 'above') : ?>
        <div class="custom-search-filter">
          <?php print $filter; ?>
        </div>
      <?php endif; ?>
      <div class="search-results <?php print $module; ?>-results">
      <ol>
        <?php print $search_results; ?>
      </ol>
      </div>
      <?php if (isset($filter) && $filter != '' && $filter_position == 'below') : ?>
        <div class="custom-search-filter">
          <?php print $filter; ?>
        </div>
      <?php endif; ?>
      <?php print $pager; ?>
    <?php else : ?>
      <h2><?php print t('Your search yielded no results');?></h2>
      <?php print search_help('search#noresults', drupal_help_arg()); ?>
    <?php endif; ?>
  </div>
  <div class="medium-3 large-3 medium-pull-9 columns"></div>
</div>