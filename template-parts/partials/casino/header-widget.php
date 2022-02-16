<?php $helper = \BANKROLL\Inc\Helper::get_instance(); ?>

<div class="info-element-widget">
    <?php $casinos_for_widget = get_field('hero_top_casinos'); ?>
    <div class="info-element-widget__element">
        <div class="info-element-widget__title">
            Top Casinos
        </div>
        <?php foreach ($casinos_for_widget as $widget) : ?>
            <div class="info-element-widget__casino df-jsb">
                <div class="info-element-widget__logo df-jc">
                    <img src="http://bankroll.local/wp-content/uploads/2021/10/rizk-large.png" width="45" height="20" alt="alt">
                </div>
                <div class="info-element-widget__information df-jsb-ac">
                    <div class="info-element-widget__name">
                        BetMGM
                    </div>
                    <div class="info-element-widget__rating df-fdc">
                        <span>77/100</span>
                        <span class="info-element-widget__stars">
                            <?php $helper->generate_rating(4); ?>
                        </span>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>