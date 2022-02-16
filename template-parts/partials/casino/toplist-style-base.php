<?php

$helper = \BANKROLL\Inc\Helper::get_instance();
$casino_ids = get_sub_field('casino_toplist_casinos');

foreach ($casino_ids as $key => $id) : $information = get_field('casino_information', $id); ?>
    <div class="toplist toplist-base df">
        <div class="toplist-base__logo df-jc-ac">
            <span class="position df-jc-ac"><?php echo $key + 1; ?></span>
            <?php echo wp_get_attachment_image($information['casino_logo'], 'operator_logo_medium'); ?>
        </div>
        <div class="toplist-base__highlights df-jc">
            <div class="highlights-title">Rizk Casino Hightlights</div>
            <ul>
                <li><span>&#10003;</span>Kooperation v. Bild & BetVictor</li>
                <li><span>&#10003;</span>Portal für deutsche Tipper</li>
                <li><span>&#10003;</span>Attraktive Quotenboosts</li>
            </ul>
        </div>
        <a href="#" class="toplist-base__main-bonus df-jc-ac">
            100% up to 200$ +15 free spins and more
            <svg width="22" height="22" fill="#6cda36">
                <use href="#scissors"></use>
            </svg>
        </a>
        <div class="toplist-base__payments df">
            <div class="payment-img df-jc-ac"><img src="http://bankroll.local/wp-content/uploads/2021/10/mc-logo.png" alt="" width="50" height="40"></div>
            <div class="payment-img df-jc-ac"><img src="http://bankroll.local/wp-content/uploads/2021/10/paypal-logo-png.png" alt="" width="50" height="40"></div>
            <div class="payment-img df-jc-ac"><img src="http://bankroll.local/wp-content/uploads/2021/10/visalogo.png" alt="" width="50" height="40"></div>
            <div class="payment-img df-jc-ac"><img src="http://bankroll.local/wp-content/uploads/2021/10/neteller-logo.png" alt="" width="50" height="40"></div>
        </div>
        <div class="toplist-base__actions df">
            <a class="read-more" href="<?php the_permalink($id); ?>"><?php printf("%s Review", get_the_title($id)); ?></a>
            <a class="btn btn--green">
                Visit Site
                <svg width="26" height="26" fill="#6cda36">
                    <use href="#arrow-right"></use>
                </svg>
            </a>
        </div>
    </div>
<?php endforeach; ?>