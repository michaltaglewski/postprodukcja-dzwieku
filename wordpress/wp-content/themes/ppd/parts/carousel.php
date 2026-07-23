
<?php

/** @var array $args */

$id = $args['id'];
$carousel = getCarousel($id);
?>

<?php if (!empty($carousel['title']) && !empty($carousel['items'])): ?>
<article id="<?= $id ?>" class="split split--<?= $carousel['side'] ?: 'left' ?>">
    <div class="split-carousel owl-carousel">
        <?php foreach ($carousel['items'] as $i => $item): ?>
            <div class="split-slide">
                <div class="split-media">
                    <?php if (!empty($item['media'])): ?>
                        <img src="<?= esc_url($item['media']) ?>"  alt="">
                    <?php else: ?>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/placeholder.png'); ?>" alt="">
                    <?php endif; ?>
                </div>
                <div class="copy">
                    <h2 class="eyebrow"><?= wp_kses_post($carousel['title']) ?></h2>
                    <?php if (!empty($item['copy'])): ?>
                        <?php if (isset($carousel['box']) && $carousel['box'] === true): ?>
                            <div class="copy-box">
                                <?php if (!empty($item['subtitle'])): ?>
                                <div class="copy-box-top">
                                    <h3><?= wp_kses_post($item['subtitle']) ?></h3>
                                    <span class="number"><?= $i+1 ?></span>
                                </div>
                                <?php endif; ?>

                                <?= wp_kses_post($item['copy']) ?>
                            </div>
                        <?php else: ?>
                            <?= wp_kses_post($item['copy']) ?>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</article>
<?php endif; ?>
