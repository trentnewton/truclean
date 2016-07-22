<div class="top-header-wrap">
    <div class="row">
        <div class="large-3 columns logo text-center">
            <a href="<?php print render($front_page); ?>" class="responsive-svg-container" title="<?php print t('Home'); ?>" rel="home">
                <svg class="responsive-svg truclean"><use xlink:href="#truclean"></use></svg>
            </a>
        </div>
        <nav class="medium-6 large-6 columns">
            
        </nav>
        <div class="medium-6 large-3 columns">
            <?php if ($page['search']): ?>
            <div class="top-header-menu">
                <?php print render($page['search']); ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="bottom-header-wrap">
    <div class="row column">
        <nav class="top-bar">
            <?php if ($main_menu): ?>
                <?php print theme('links__system_main_menu', array(
                    'links' => $main_menu,
                    'attributes' => array(
                        'class' => array('menu', 'hide-for-small-only'),
                    ),
                    'heading' => array(
                        'text' => t('Main menu'),
                        'level' => 'h2',
                        'class' => array('element-invisible'),
                    ),
                )); ?>
            <?php endif; ?>
            <div class="off-canvas-menu-trigger show-for-small-only">
                <button class="menu-button" type="button" data-open="offCanvasRight">Menu&nbsp;<span class="hamburger"></span></button>
            </div>
        </nav>
    </div>
</div>