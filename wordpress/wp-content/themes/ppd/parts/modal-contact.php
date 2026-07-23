
<?php
    $modalContactForm = get_field('modal_contact_form');
?>

<?php if (!empty($modalContactForm['shortcode'])): ?>
<div id="modal-contact" class="modal">
    <div class="modal-overlay" data-close></div>
    <div class="modal-container gradient-box">
        <button class="modal-close" data-close aria-label="Zamknij modal">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>
        <div class="modal-content">
            <?php if (!empty($modalContactForm['header'])): ?>
            <h3><?= $modalContactForm['header'] ?></h3>
            <?php endif; ?>

            <div class="contact-form-cf7">
                <?= do_shortcode($modalContactForm['shortcode']); ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
