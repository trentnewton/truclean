<nav class="right-off-canvas-menu" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
    <ul class="menu vertical">
        <li><label class="js-off-canvas-exit" for=""><svg class="icon icon-circle-left"><use xlink:href="#icon-circle-left"></use></svg>&nbsp;Back</label></li>
    </ul>
    <?php if ($main_menu): ?>
        <?php print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
                'class' => array('menu', 'vertical'),
            ),
            'heading' => array(
                'text' => t('Main menu'),
                'level' => 'h2',
                'class' => array('element-invisible'),
            ),
        )); ?>
    <?php endif; ?>
</nav>