<div id="login" class="reveal" data-reveal data-close-on-click="true" data-animation-in="slide-in-down" data-animation-out="fade-out">
    <h2>Login</h2>
    <?php if ($messages): ?>
        <?php print $messages; ?>
    <?php endif; ?>
    <?php if ($page['login_form']): ?>
        <?php print render($page['login_form']); ?>
    <?php endif; ?>
    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>